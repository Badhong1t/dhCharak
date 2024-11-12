<?php

namespace App\Http\Controllers\backend\CMS;

use App\Helpers\Helper;
use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class HowDeliveryWorks extends Controller
{

    public function index(Request $request)
    {
        // Retrieve general data for the section
        $data = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksSectionStatic)
            ->first();

        $image1 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage1)
            ->first();

        $image2 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage2)
            ->first();

        $image3 = CMS::where('page', page::Delivery)
            ->where('section_name', section::HowDeliveryWorksImage3)
            ->first();

        $viewData = [
            'data' => $data,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ];

        return view('backend.layouts.cms.how_delivery_works.index', $viewData);
    }




    public function howDeliveryWorksUpdate(Request $request)
    {

        $request->validate([

            'title' => 'string|max:255',
            'description' => 'required|string',

        ]);


        CMS::updateOrCreate(['page' => page::Delivery, 'section_name' => section::HowDeliveryWorksSectionStatic], [
            'page' => page::Delivery,
            'section_name' => section::HowDeliveryWorksSectionStatic,
            'title' => $request->title,
            'description' => $request->description,
        ]);


        flash()->success('How Delivery Works updated successfully');
        return redirect()->route('howDeliveryWorks');
    }

    public function updateImages(Request $request)
    {
        $request->validate([
            'image1' => 'required|image|mimes:png,jpg,jpeg|max:3072',
            'image2' => 'required|image|mimes:png,jpg,jpeg|max:3072',
            'image3' => 'required|image|mimes:png,jpg,jpeg|max:3072',
        ]);

        // Create an associative array for image fields and their section names
        $imageSections = [
            'image1' => section::HowDeliveryWorksImage1,
            'image2' => section::HowDeliveryWorksImage2,
            'image3' => section::HowDeliveryWorksImage3,
        ];

        foreach ($imageSections as $key => $sectionName) {
            if ($request->hasFile($key)) {
                $image = $request->file($key);
                $fileName = getFileName($image); // Generate a unique name for the file

                CMS::updateOrCreate(
                    ['page' => page::Delivery, 'section_name' => $sectionName], // Use the unique section name here
                    [
                        'page' => page::Delivery,
                        'section_name' => $sectionName,
                        'image' => Helper::fileUpload($image, 'cms/how-delivery-works', $fileName),
                    ]
                );
            }
        }

        flash()->success('How Delivery Works images updated successfully');
        return redirect()->route('howDeliveryWorks');
    }

}
