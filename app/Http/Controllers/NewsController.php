<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Psy\Readline\Hoa\FileException;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::latest()->paginate((new AppController())->paginate);

        return view('pages.admin.news.index',compact("news"));
    }


    public function create()
    {
        return view('pages.admin.news.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            "image"     =>  "required",
            "title"     =>  "required",
            "date"      =>  "required",
            "body"      =>  "required",
        ])->validate();


        $date_raw=explode('-',$request->date);
        $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

        $slug = Str::slug($request->title).date("-Y-m-d");
        $filename = null;

        try {
            $filename=$request->file("image")->store('/uploads/news','public_uploads');
        }catch (FileException $exception){
            //catch file exception
        }

        $news=News::create([
            "image"         => $filename,
            'title'         => $request->title,
            "slug"          => $slug,
            'date'          => $date->getTimestamp(),
            'user_id'       => Auth::id(),
            'category_id'   => 1,
            'body'          => Purifier::clean($request->body),
        ]);

        return Redirect::route('news.show',['slug'=>$news->slug])->with('success','News Article created!');
    }

    public function show($slug)
    {
        $news = News::where("slug", $slug)->first();
        if (!is_object($news))
            return Redirect::back()->with('error','News Article not found');
        else {
            return view('pages.admin.news.show',compact('news'));
        }
    }

    public function edit($slug)
    {
        $news = News::where("slug", $slug)->first();
        if (!is_object($news))
            return Redirect::back()->with('error','News Article not found');
        else {
            return view('pages.admin.news.edit',compact('news'));
        }
    }

    public function update(Request $request,$slug)
    {
        $news = News::where("slug", $slug)->first();
        if (!is_object($news))
            return Redirect::back()->with('error','News Article not found');
        else {
            //update

            Validator::make($request->all(),[
                "title"     =>  "required",
                "body"      =>  "required",
            ])->validate();

            $date_raw=explode('-',$request->date);
            $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

            $slug = Str::slug($request->title).date("-Y-m-d");

            $news->update([
                'title'         => $request->title,
//                "slug"          => $slug,
                'date'          => $date->getTimestamp(),
                'body'          => Purifier::clean($request->body),
            ]);

            if(isset($request->image)){
                if(file_exists($news->image)){
                    Storage::disk("public_uploads")->delete($news->image);
                }

                $filename=$slug.".".$request->image->extension();
                try {
                    $request->image->move(public_path('uploads/news'),$filename);
                    $news->update([
                        "image" => "uploads/news/$filename"
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return Redirect::route('news.show',['slug'=>$news->slug])->with('success','News Article updated!');
        }
    }

    public function trash($slug)
    {
        $news = News::where("slug", $slug)->first();
        if (!is_object($news))
            return Redirect::back()->with('error','News Article not found');
        else {
            $news->delete();
            return Redirect::route('news.index')->with('success','News Article deleted!');
        }
    }
}
