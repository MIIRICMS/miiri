<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('name','home')->first();
        $contents = json_decode($page->contents);
        return view('pages.guest.home', compact('contents'));
    }
    public function homeEdit()
    {
        $page = Page::where('name','home')->first();
        $contents = json_decode($page->contents);
        return view('pages.admin.home', compact('contents'));
    }

    public function updateContent(Request $request)
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

            return view('pages.admin.dashboard');
//            Redirect::route('dashboard')->with("success","Page updated successfully");

        }else{
            Redirect::back()->with("error","Page not found");
        }
    }
}
