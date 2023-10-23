<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Psy\Readline\Hoa\FileException;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::latest()->paginate((new AppController())->paginate);

        return view('pages.admin.projects.index',compact("projects"));
    }


    public function create()
    {
        return view('pages.admin.projects.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            "image"     =>  "required",
            "title"     =>  "required",
            "body"      =>  "required",
        ])->validate();


//        $date_raw=explode('-',$request->date);
//        $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

        $slug = Str::slug($request->title).date("-Y-m-d");
        $filename = null;

        try {
            $filename=$request->file("image")->store('/uploads','public_uploads');
        }catch (FileException $exception){
            //catch file exception
        }

        $project=Project::create([
            "image"         => $filename,
            'title'         => $request->title,
            "slug"          => $slug,
//            'date'          => $date->getTimestamp(),
            'body'          => Purifier::clean($request->body),
        ]);

        return Redirect::route('projects.show',['slug'=>$project->slug])->with('success','Project created!');
    }

    public function show($slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (!is_object($project))
            return Redirect::back()->with('error','Project not found');
        else {
            return view('pages.admin.projects.show',compact('project'));
        }
    }

    public function edit($slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (!is_object($project))
            return Redirect::back()->with('error','Project not found');
        else {
            return view('pages.admin.projects.edit',compact('project'));
        }
    }

    public function update(Request $request,$slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (!is_object($project))
            return Redirect::back()->with('error','Project not found');
        else {
            //update

            Validator::make($request->all(),[
                "title"     =>  "required",
                "body"      =>  "required",
            ])->validate();
//
//            $date_raw=explode('-',$request->date);
//            $date=Carbon::create($date_raw[0],$date_raw[1],$date_raw[2],0,0,0);

            $slug = Str::slug($request->title).date("-Y-m-d");

            $project->update([
                'title'         => $request->title,
//                "slug"          => $slug,
//            'date'          => $date->getTimestamp(),
                'body'          => Purifier::clean($request->body),
            ]);

            if(isset($request->image)){
                if(file_exists($project->image)){
                    Storage::disk("public_uploads")->delete($project->image);
                }

                $filename=$slug.".".$request->image->extension();
                try {
                    $request->image->move(public_path('images/projects'),$filename);
                    $project->update([
                        "image" => "images/projects/$filename"
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return Redirect::route('projects.show',['slug'=>$project->slug])->with('success','Project updated!');
        }
    }

    public function trash($slug)
    {
        $project = Project::where("slug", $slug)->first();
        if (!is_object($project))
            return Redirect::back()->with('error','Project not found');
        else {
            $project->delete();
            return Redirect::route('projects.index')->with('success','Project deleted!');
        }
    }
}
