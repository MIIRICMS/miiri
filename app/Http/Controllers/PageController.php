<?php

namespace App\Http\Controllers;

use App\Album;
use App\News;
use App\Page;
use App\Program;
use Aws\StorageGateway\Exception\StorageGatewayException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Psy\Readline\Hoa\FileException;

class PageController extends Controller
{
    public function home()
    {
        $programs = Program::latest()->get();
        $albums = Album::all();
        $news = News::orderBy("date","desc")->get();
        $page = Page::where('name','home')->first();
        $contents = json_decode($page->contents);

        return view('pages.guest.home', compact('contents','page', 'programs','news','albums'));
    }
    public function show($name)
    {
        $page = Page::where('name',$name)->first();
        if(is_object($page)) {
            $contents = json_decode($page->contents);
            return view('pages.admin.pages', compact('contents','page'));
        }else{
            return Redirect::back();
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'page' => 'required'
        ]);

        $page =Page::where('name', $request->page)->first();
        if(is_object($page)){

            $page->update([
               "contents"=>json_encode([
                   'title1'        => $request->title1,
                   'description1'  => $request->description1,
                   'title2'        => $request->title2,
                   'description2'  => $request->description2,
               ])
            ]);

            if(isset($request->image_1)){
                if(file_exists($page->image_1)){
                    Storage::disk("public_uploads")->delete($page->image_1);
                }

                try {
                    $path=$request->file("image_1")->store('/uploads','public_uploads');
                    $page->update([
                        "image_1" => $path
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            if(isset($request->image_2)){
                if(file_exists($page->image_2)){
                    Storage::disk("public_uploads")->delete($page->image_2);
                }

                try {
                    $path=$request->file("image_2")->store('/uploads','public_uploads');
                    $page->update([
                        "image_2" => $path
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            if(isset($request->image_3)){
                if(file_exists($page->image_3)){
                    Storage::disk("public_uploads")->delete($page->image_3);
                }

                try {
                    $path=$request->file("image_3")->store('/uploads','public_uploads');
                    $page->update([
                        "image_3" => $path
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return view('pages.admin.dashboard');
//            Redirect::route('dashboard')->with("success","Page updated successfully");

        }else{
            Redirect::back()->with("error","Page not found");
        }
    }

    public function upload(Request $request)
    {
        $contents = Storage::disk('s3')->get('uploads/Capture.JPG');
        $path=$request->file("image")->store('/uploads','public_uploads');
        dd($contents, $path);
        try{

//            $path = Storage::disk('s3')->put('path/to/file.ext', $request->image);
        }catch (StorageGatewayException $exception){
            dd($exception);
        }

        $path=$request->file("image")->store('/pages');
        dd($path);
    }

    /* ADMIN EDIT ROUTES */
    public function editHome()
    {
        $page = Page::where('name','home')->first();
        if(is_object($page)) {
            $contents = json_decode($page->contents);
            return view('pages.admin.pages.home', compact('contents','page'));
        }else{
            return Redirect::back();
        }
    }
    public function editAboutUs()
    {
        $page = Page::where('name','about-us')->first();
        if(is_object($page)) {
            $contents = json_decode($page->contents);
            return view('pages.admin.pages.about-us', compact('contents','page'));
        }else{
            return Redirect::back();
        }
    }
}
