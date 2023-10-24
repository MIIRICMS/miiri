<?php

namespace App\Http\Controllers;

use App\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Mews\Purifier\Facades\Purifier;
use Psy\Readline\Hoa\FileException;

class ResearchController extends Controller
{
    public function index()
    {
        $researches=Research::orderBy("date","desc")->paginate((new AppController())->paginate);
//        $innovations=Research::where("type",1)->orderBy("date","desc")->paginate((new AppController())->paginate);

        return view('pages.admin.research-and-innovations.index',compact("researches",));
    }


    public function create()
    {
        return view('pages.admin.research-and-innovations.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            "image"         =>  "required",
            "title"         =>  "required",
            "description"   =>  "required",
            "date"          =>  "required",
            "first_name"    =>  "required",
            "last_name"     =>  "required",
            "type"          =>  "required",
        ])->validate();


        $date_raw=explode('-',$request->date);
        $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

        $slug = uniqid().date("-Y-m-d");
        $filename = null;

        try {
            $filename=$request->file("image")->store('/uploads','public_uploads');
        }catch (FileException $exception){
            //catch file exception
        }

        $research=Research::create([
            "image"         => $filename,
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'position'      => $request->position,
            'type'          => $request->type == "research",
            'title'         => $request->title,
            "slug"          => $slug,
            'date'          => $date->getTimestamp(),
            'description'   => Purifier::clean($request->body),
        ]);

        return Redirect::route('research-and-innovations.show',['slug'=>$research->slug])->with('success','research created!');
    }

    public function show($slug)
    {
        $research = Research::where("slug", $slug)->first();
        if (!is_object($research))
            return Redirect::back()->with('error','research not found');
        else {
            return view('pages.admin.research-and-innovations.show',compact('research'));
        }
    }

    public function edit($slug)
    {
        $research = Research::where("slug", $slug)->first();
        if (!is_object($research))
            return Redirect::back()->with('error','research not found');
        else {
            return view('pages.admin.research-and-innovations.edit',compact('research'));
        }
    }

    public function update(Request $request,$slug)
    {
        $research = Research::where("slug", $slug)->first();
        if (!is_object($research))
            return Redirect::back()->with('error','research not found');
        else {
            //update

            Validator::make($request->all(),[
                "title"     =>  "required",
                "body"      =>  "required",
            ])->validate();

            $date_raw=explode('-',$request->date);
            $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

            $slug = uniqid().date("-Y-m-d");

            $research->update([
                'title'         => $request->title,
//                "slug"          => $slug,
                'date'          => $date->getTimestamp(),
                'body'          => Purifier::clean($request->body),
            ]);

            if(isset($request->file)){
                if(file_exists($research->file)){
                    Storage::disk("public_uploads")->delete($research->file);
                }

                $filename=$slug.".".$request->file->extension();
                try {
                    $request->file->move(public_path('uploads/researches'),$filename);
                    $research->update([
                        "image" => "uploads/researches/$filename"
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return Redirect::route('research-and-innovations.show',['slug'=>$research->slug])->with('success','research updated!');
        }
    }

    public function trash($slug)
    {
        $research = Research::where("slug", $slug)->first();
        if (!is_object($research))
            return Redirect::back()->with('error','research not found');
        else {
            $research->delete();
            return Redirect::route('research-and-innovations.index')->with('success','research deleted!');
        }
    }
}
