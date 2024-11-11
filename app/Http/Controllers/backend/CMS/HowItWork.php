<?php

namespace App\Http\Controllers\backend\CMS;

use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\Helper;

class HowItWork extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->ajax()){

            $data = CMS::where('page', page::HowItWorks)->where('section_name', section::HowItWorksSectionDynamic)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('icon', function ($data) {
                    $url = asset($data->image);
                    return '<img src="' . $url . '" alt="icon" class="rounded border" style="padding: 10px; width: 50px ; height: 50px;">';
                })
                ->addColumn('status', function ($data) {
                    $status = '<div class="form-check form-switch">';
                    $status .= '<input onclick="changeStatus(event,' . $data->id . ')" type="checkbox" class="form-check-input" style="border-radius: 25rem;"' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= ' checked';
                    }
                    $status .= '>';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('howItWorks.edit', $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bx bx-pencil"></i>
                                </a>
                                <a href="#" onclick="deleteRecord(event,' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bx bx-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['icon','status', 'action'])
                ->make(true);

        }

        $data = CMS::where('page', page::HowItWorks)->where('section_name', section::HowItWorksSectionStatic)->first();

        return view('backend.layouts.cms.how_it_works.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.layouts.cms.how_it_works.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',

        ]);

        $data = new CMS();

        if ($data) {

            $data->page = page::HowItWorks;
            $data->section_name = section::HowItWorksSectionDynamic;
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->description = $request->description;
            $data->image = Helper::fileUpload($request->file('image'), 'cms/how-it-works', getFileName($request->file('image')));
            $data->status = 'active';

            /* if ($request->hasFile('image')) {
                $file = Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image')));
                $data->image = $file;
            } */

            $data->save();

            flash()->success('How It works updated successfully');
            return redirect()->route('howItWorks.index');

        }
        flash()->error('Something went wrong. Please try again.');
        return redirect()->route('howItWorks.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = CMS::find($id);
        return view('backend.layouts.cms.how_it_works.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',

        ]);

        $data = CMS::find($id);

        if ($data) {

            $data->page = page::HowItWorks;
            $data->section_name = section::HowItWorksSectionDynamic;
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->description = $request->description;
            $data->image = Helper::fileUpload($request->file('image'), 'cms/how-it-works', getFileName($request->file('image')));
            $data->status = 'active';

            $data->save();

            flash()->success('How It works updated successfully');
            return redirect()->route('howItWorks.index');

        }
        flash()->error('Something went wrong. Please try again.');
        return redirect()->route('howItWorks.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CMS::find($id);
        if (!$data) {
            flash()->error(__('CMS not found.'));
            return redirect()->back();
        }
        try  {
            $data->delete();
            return response()->json([
                'success' => true,
                'message' => __('CMS deleted successfully.')
            ]);
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function howItWorksUpdate(Request $request){

        $request->validate([

            'title' => 'string|max:255',
            'short_description' => 'required|string|max:255',

        ]);



        CMS::updateOrCreate(['page' => page::HowItWorks], [

            'page' => page::HowItWorks,
            'section_name' => section::HowItWorksSectionStatic,
            'title' => $request->title,
            'short_description' => $request->short_description,
            // 'image' => Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image'))),

        ]);

        /* $data = CMS::find($id);

        if ($data) {

            $data->title = $request->title;
            $data->description = $request->description;

            if ($request->hasFile('image')) {
                $file = Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image')));
                $data->image = $file;
            }

            $data->save(); */

        flash()->success('How It works updated successfully');
        return redirect()->route('howItWorks.index');

    }

    public function status($id)
    {
        // Find the blog by ID or return 404 if not found
        $data = CMS::find($id);
        if (empty($data)) {
            return response()->json([
                "success" => false,
                "message" => "Item not found."
            ], 404);
        }

        if ($data->status == 'active') {
            $data->status = 'inactive';
        } else {
            $data->status = 'active';
        }

        $data->save();
        return response()->json([
            'success' => true,
            'message' => 'Item status changed successfully.'
        ]);
    }

}
