<?php

namespace App\Http\Controllers;

use App\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Psy\Readline\Hoa\FileException;

class ProgramController extends Controller
{
    public function index()
    {
        $programs=Program::latest()->paginate((new AppController())->paginate);

        return view('pages.admin.programs.index',compact("programs"));
    }


    public function create()
    {
        return view('pages.admin.programs.create');
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

        $program=Program::create([
            "image"         => $filename,
            'title'         => $request->title,
            "slug"          => $slug,
//            'date'          => $date->getTimestamp(),
            'body'          => Purifier::clean($request->body),
        ]);

        return Redirect::route('programs.show',['id'=>$program->slug])->with('success','program created!');
    }

    public function show($slug)
    {
        $program = Program::where("slug", $slug)->first();
        if (!is_object($program))
            return Redirect::back()->with('error','program not found');
        else {
            return view('pages.admin.programs.show',compact('program'));
        }
    }

    public function edit($slug)
    {
        $program = Program::where("slug", $slug)->first();
        if (!is_object($program))
            return Redirect::back()->with('error','program not found');
        else {
            return view('pages.admin.programs.edit',compact('program'));
        }
    }

    public function update(Request $request,$slug)
    {
        $program = Program::where("slug", $slug)->first();
        if (!is_object($program))
            return Redirect::back()->with('error','program not found');
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

            $program->update([
                'title'         => $request->title,
//                "slug"          => $slug,
//            'date'          => $date->getTimestamp(),
                'body'          => Purifier::clean($request->body),
            ]);

            if(isset($request->image)){
                if(file_exists($program->image)){
                    Storage::disk("public_uploads")->delete($program->image);
                }

                $filename=$slug.".".$request->image->extension();
                try {
                    $request->image->move(public_path('images/programs'),$filename);
                    $program->update([
                        "image" => "images/programs/$filename"
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

            return Redirect::route('programs.show',$slug)->with('success','program updated!');
        }
    }

    public function trash($slug)
    {
        $program = Program::where("slug", $slug)->first();
        if (!is_object($program))
            return Redirect::back()->with('error','program not found');
        else {
            $program->delete();
            return Redirect::route('programs.index')->with('success','program deleted!');
        }
    }
}
