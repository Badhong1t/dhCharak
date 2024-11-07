<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Product::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('thumbnail', function ($data) {
                    return '<img src="' . asset($data->thumbnail) . '" width="100" height="100">';
                })
                ->addColumn('category', function ($data) {
                    return $data->category->name;
                })
                ->addColumn('subcategory', function ($data) {
                    return $data->subcategory->name;
                })
                ->editColumn('stock', function ($data) {
                    if($data->quantity > 0){
                        return '<span class="badge bg-success">Stock</span>';
                    }else{
                        return '<span class="badge bg-danger">Stock Out</span>';
                    }
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
                ->rawColumns(['status','category','thumbnail','subcategory','stock','action'])
                ->make(true);
        }
        return view('backend.layouts.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $attributes =Attribute::all();
        return view('backend.layouts.product.create', compact('categories', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'slug' => 'required|max:255|string',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'customer_price' => 'required|numeric',
            'business_price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'thumbnail' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required|string',
            'short_description' => 'nullable|max:500|string',
            'size' => 'nullable|array',
            'size.*' => 'exists:sizes,value',
            'colors' => 'nullable|array',
            'colors.*' => 'exists:colors,value',
        ]);
        try {
            if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
                $thumbnail_path = Helper::fileUpload($request->file('thumbnail'), 'products/thumbnail', getFileName($request->file('thumbnail')));
            } else {
                $thumbnail_path = 'backend/images/placeholder/image_placeholder.png';
            }

            $product = Product::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'sku' => $request->sku,
                'barcode' => $request->barcode,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'customer_price' => $request->customer_price,
                'business_price' => $request->business_price,
                'quantity' => $request->quantity,
                'thumbnail' => $thumbnail_path,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'additional_information' => $request->additional_information,
                'size' => $request->size,
                'colors' => $request->colors
            ]);
            if ($request->hasFile('gallery_images')) {
                foreach ($request->file('gallery_images') as $image) {
                    try {
                        $imagePath = Helper::fileUpload($image, 'products/images', getFileName($image));
                        ProductImage::create([
                            'product_id' => $product->id,
                            'image_url' => $imagePath
                        ]);
                    } catch (\Exception $e) {
                        // Handle any exceptions (e.g., log error, show error message)
                        return redirect()->back()->with('error', 'Failed to upload image.');
                    }
                }
            }
            flash()->success(__('Product created successfully.'));
            return redirect()->route('products.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getSubcategory($id)
    {
        $data = SubCategory::where('category_id', $id)->get();
        return response()->json($data);

    }
}
