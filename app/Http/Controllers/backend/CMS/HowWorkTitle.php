<?php

namespace App\Http\Controllers\backend\CMS;


use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class HowWorkTitle extends Controller
{

    public function index(Request $request){

        $data = CMS::where('page', page::HowItWorks)->where('section_name', section::TitleStaticContent)->first();

        return view('backend.layouts.cms.how_works_title.index', compact('data'));

    }

    public function howWorksTitleUpdate(Request $request){

        $request->validate([

            'title' => 'string|max:255',
            'short_description' => 'required|string|max:255',

        ]);

        CMS::updateOrCreate(['page' => page::HowItWorks, 'section_name' => section::TitleStaticContent], [
            'page' => page::HowItWorks,
            'section_name' => section::TitleStaticContent,
            'title' => $request->title,
            'short_description' => $request->short_description,
        ]);

        flash()->success('How Works updated successfully');
        return redirect()->route('howWorksTitle');

    }

}
