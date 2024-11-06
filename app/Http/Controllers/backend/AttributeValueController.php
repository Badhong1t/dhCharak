<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'value' => 'required|max:255|string',
        ]);
        // Create attribute value
        try {
            AttributeValue::create([
                'value' => $request->value,
                'attribute_id' => $request->attribute_id, // Assuming attribute_id is passed in request
                'type' => $request->type
            ]);
            flash()->success(__('Attribute value created successfully.'));
            return redirect()->back();

        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }
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
        $data = AttributeValue::find($id);
        if (!$data) {
            flash()->error(__('Attribute value not found.'));
            return redirect()->back();
        }
        return view('backend.layouts.attribute_value.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'value' => 'required|max:255|string',
        ]);
        try{
            $data = AttributeValue::find($id);
            if (!$data) {
                flash()->error(__('Attribute value not found.'));
                return redirect()->back();
            }

            $data->value = $request->value;
            $data->attribute_id = $request->attribute_id;
            $data->save();
            flash()->success(__('Attribute value updated successfully.'));
            return redirect()->route('attributes.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AttributeValue::find($id);
        if (!$data) {
            flash()->error(__('Attribute value not found.'));
            return redirect()->back();
        }
       try  {
            $data->delete();
            return response()->json([
                'success' => true,
                'data' => $data,
                'message' => __('Attribute value deleted successfully.')
            ]);
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->back();
        }

    }

    public function getattributeValues($id){
        $attributeValues = AttributeValue::where('attribute_id', $id)->get();
        return response()->json($attributeValues);
    }
}
