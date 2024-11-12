<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {



        if ($request->ajax()) {
            $data = Attribute::with('values')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('values', function ($data) {
                    if ($data->values->isEmpty()) {
                        return 'No Value';
                    } else {
                        $valueBadges = '';
                        foreach ($data->values as $value) {
                            $valueBadges .= '<span class="badge badge-inline badge-md bg-primary">' . htmlspecialchars($value->value) . '</span> ';
                        }
                        return trim($valueBadges); // Trim any extra whitespace
                    }
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="' . route('attributes.show', $data->id) . '" type="button" class="btn btn-info text-white" title="Settings">
                                  <i class="bx bx-cog"></i>
                                </a>
                                <a href="' . route('attributes.edit', $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                                  <i class="bx bx-pencil"></i>
                                </a>
                                <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                                  <i class="bx bx-trash"></i>
                                </a>
                            </div>';
                })
                ->rawColumns(['values', 'action'])
                ->make(true);
        }


        return view('backend.layouts.attribute.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string|unique:attributes',
        ]);
        try {
            $attribute = new Attribute();
            $attribute->name = $request->name;
            $attribute->save();
            flash()->success('attribute created successfully');
            return redirect()->route('attributes.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->route('attributes.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $attribute = Attribute::find($id);
        if ($request->ajax()) {
            $data = AttributeValue::where('attribute_id', $attribute->id);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="'.route('attribute_values.edit', $data->id).'" type="button" class="btn btn-primary text-white" title="Edit">
                        <i class="bx bx-pencil"></i>
                        </a>
                        <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                        <i class="bx bx-trash"></i>
                        </a>
                        </div>';
                })
                ->rawColumns(['values','action'])
                ->make(true);
        }
        return view('backend.layouts.attribute.show', compact('attribute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attribute = Attribute::find($id);
        if (!$attribute) {
            flash()->error(__('Attribute not found.'));
            return redirect()->back();
        }
        return view('backend.layouts.attribute.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|max:255|string',
        ]);
        try {
            $attribute = Attribute::find($id);
            $attribute->name = $request->name;
            $attribute->save();
            flash()->success('attribute updated successfully');
            return redirect()->route('attributes.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->route('attributes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $attribute = Attribute::find($id);
        if (!$attribute) {
            flash()->error(__('Attribute not found.'));
            return redirect()->back();
        }
        try {
            $attribute->delete();
            return response()->json([
                'success' => true,
                'data' => $attribute,
                'message' => __('Attribute deleted successfully.')
            ]);
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
