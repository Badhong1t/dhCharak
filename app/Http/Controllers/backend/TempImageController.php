<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempImage;

class TempImageController extends Controller
{

    public function create(Request $request)
    {

        if ($request->hasFile('image_url')) {
            $fileName = Helper::fileUpload($request->file('image_url'), 'temp', time().'_'.getFileName($request->file('image_url')));
        }
        return response()->json([
            'status' => true,
            'image_path' => $fileName,
            'message' => 'Image uploded successfully!'
        ]);
    }
}
