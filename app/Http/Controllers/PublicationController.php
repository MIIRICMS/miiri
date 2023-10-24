<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Psy\Readline\Hoa\FileException;

class PublicationController extends Controller
{
    public function index()
    {
        $publications=Publication::latest()->paginate((new AppController())->paginate);

        return view('pages.admin.publications.index',compact("publications"));
    }


    public function create()
    {
        return view('pages.admin.publications.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            "file"     =>  "required",
            "title"     =>  "required",
            "body"      =>  "required",
            "date"      =>  "required",
        ])->validate();


        $date_raw=explode('-',$request->date);
        $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

        $slug = uniqid().date("-Y-m-d");
        $filename = null;

        try {
            $filename=$request->file("file")->store('/uploads','public_uploads');
        }catch (FileException $exception){
            //catch file exception
        }

        $publication=Publication::create([
            "file"         => $filename,
            'title'         => $request->title,
            "slug"          => $slug,
            'date'          => $date->getTimestamp(),
            'body'          => Purifier::clean($request->body),
        ]);

        return Redirect::route('publications.show',['slug'=>$publication->slug])->with('success','Publication created!');
    }

    public function show($slug)
    {
        $publication = Publication::where("slug", $slug)->first();
        if (!is_object($publication))
            return Redirect::back()->with('error','Publication not found');
        else {
            return view('pages.admin.publications.show',compact('publication'));
        }
    }

    public function edit($slug)
    {
        $publication = Publication::where("slug", $slug)->first();
        if (!is_object($publication))
            return Redirect::back()->with('error','Publication not found');
        else {
            return view('pages.admin.publications.edit',compact('publication'));
        }
    }

    public function update(Request $request,$slug)
    {
        $publication = Publication::where("slug", $slug)->first();
        if (!is_object($publication))
            return Redirect::back()->with('error','Publication not found');
        else {
            //update

            Validator::make($request->all(),[
                "title"     =>  "required",
                "body"      =>  "required",
            ])->validate();

            $date_raw=explode('-',$request->date);
            $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

            $slug = uniqid().date("-Y-m-d");

            $publication->update([
                'title'         => $request->title,
//                "slug"          => $slug,
                'date'          => $date->getTimestamp(),
                'body'          => Purifier::clean($request->body),
            ]);

            if(isset($request->file)){
                if(file_exists($publication->file)){
                    Storage::disk("public_uploads")->delete($publication->file);
                }

                $filename=$slug.".".$request->file->extension();
                try {
                    $request->file->move(public_path('uploads/publications'),$filename);
                    $publication->update([
                        "file" => "uploads/publications/$filename"
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return Redirect::route('publications.show',['slug'=>$publication->slug])->with('success','Publication updated!');
        }
    }

    public function trash($slug)
    {
        $publication = Publication::where("slug", $slug)->first();
        if (!is_object($publication))
            return Redirect::back()->with('error','Publication not found');
        else {
            $publication->delete();
            return Redirect::route('publications.index')->with('success','Publication deleted!');
        }
    }
}
