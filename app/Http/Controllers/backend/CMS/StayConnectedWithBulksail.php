<?php

namespace App\Http\Controllers\backend\CMS;


use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class StayConnectedWithBulksail extends Controller
{

    public function index(Request $request){

        $data = CMS::where('page', page::Homepage)->where('section_name', section::TitleStaticContent)->first();

        return view('backend.layouts.cms.stay_connected_bulksail.index', compact('data'));

    }

    public function stayConnectedUpdate(Request $request){

        $request->validate([

            'title' => 'string|max:255',
            'short_description' => 'required|string|max:255',

        ]);

        CMS::updateOrCreate(['page' => page::Homepage, 'section_name' => section::TitleStaticContent], [
            'page' => page::Homepage,
            'section_name' => section::TitleStaticContent,
            'title' => $request->title,
            'short_description' => $request->short_description,
        ]);

        flash()->success('Stay Connected with Bulksail updated successfully');
        return redirect()->route('stayConnectedWithBulksail');

    }

}
