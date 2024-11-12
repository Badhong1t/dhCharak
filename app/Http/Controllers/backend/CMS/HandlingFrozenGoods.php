<?php

namespace App\Http\Controllers\backend\CMS;

use App\Enums\handlingFrozenGoods as EnumsHandlingFrozenGoods;
use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use app\Helpers\Helper;

class HandlingFrozenGoods extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = CMS::where('page', page::HandlingFrozenGoods)
            ->where('section_name', section::HandlingFrozenGoodsDynamic)->get();

            return DataTables::of($data)
                ->addIndexColumn()
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
                                <a href="' . route('handlingFrozenGoods.edit', $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bx bx-pencil"></i>
                                </a>
                                <a href="#" onclick="deleteRecord(event,' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bx bx-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);

        }

        $data = CMS::where('page', page::HandlingFrozenGoods)
            ->where('section_name', section::HandlingFrozenGoodsStatic)->first();

        return view('backend.layouts.cms.handling_frozen_goods.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.layouts.cms.handling_frozen_goods.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'sub_title' => 'string|max:255',
            'short_description' => 'string|max:600',

        ]);

        $data = new CMS();

        if ($data) {

            $data->page = page::HandlingFrozenGoods;
            $data->section_name = section::HandlingFrozenGoodsDynamic;
            $data->sub_title = $request->sub_title;
            $data->short_description = $request->short_description;
            $data->status = 'active';

            /* if ($request->hasFile('image')) {
                $file = Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image')));
                $data->image = $file;
            } */

            $data->save();

            flash()->success('Handling Frozen Goods updated successfully');
            return redirect()->route('handlingFrozenGoods.index');

        }
        flash()->error('Something went wrong. Please try again.');
        return redirect()->route('handlingFrozenGoods.index');

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

        $cms = CMS::find($id);
        return view('backend.layouts.cms.handling_frozen_goods.edit', compact('cms'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([

            'sub_title' => 'string|max:255',
            'short_description' => 'string|max:600',

        ]);

        $data = CMS::find($id);

        if ($data) {

            $data->page = page::HandlingFrozenGoods;
            $data->section_name = section::HandlingFrozenGoodsDynamic;
            $data->sub_title = $request->sub_title;
            $data->short_description = $request->short_description;
            $data->status = 'active';

            /* if ($request->hasFile('image')) {
                $file = Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image')));
                $data->image = $file;
            } */

            $data->save();

            flash()->success('Handling Frozen Goods updated successfully');
            return redirect()->route('handlingFrozenGoods.index');

        }
        flash()->error('Something went wrong. Please try again.');
        return redirect()->route('handlingFrozenGoods.index');

    }

    public function handlingFrozenGoodsUpdate(Request $request){

        $request->validate([

            'title' => 'string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:3072',
            'description' => 'required|string',

        ]);



        CMS::updateOrCreate(['page' => page::HandlingFrozenGoods], [

            'page' => page::HandlingFrozenGoods,
            'section_name' => section::HandlingFrozenGoodsStatic,
            'title' => $request->title,
            'description' => $request->description,
            'image' => Helper::fileUpload($request->file('image'), 'cms/handling-frozen-goods', getFileName($request->file('image'))),

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

        flash()->success('Handling Frozen Goods updated successfully');
        return redirect()->route('handlingFrozenGoods.index');

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

    public function status(Request $request, $id)
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
