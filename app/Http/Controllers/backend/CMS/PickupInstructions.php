<?php

namespace App\Http\Controllers\backend\CMS;

use App\Helpers\Helper;
use App\Enums\page;
use App\Enums\section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class PickupInstructions extends Controller
{

    public function index() {

        $data = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsSectionStatic)
            ->first();

        $image1 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage1)
            ->first();

        $image2 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage2)
            ->first();

        $image3 = CMS::where('page', page::Pickup)
            ->where('section_name', section::PickupInstructionsImage3)
            ->first();

        $viewData = [
            'data' => $data,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
        ];

        return view('backend.layouts.cms.pickup_instructions.index', $viewData);

    }

    public function pickupInstructionsUpdate(Request $request) {

        $request->validate([

            'title' => 'string|max:255',
            'description' => 'required|string',

        ]);


        CMS::updateOrCreate(['page' => page::Pickup, 'section_name' => section::PickupInstructionsSectionStatic], [
            'page' => page::Pickup,
            'section_name' => section::PickupInstructionsSectionStatic,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        flash()->success('Pickup Instructions updated successfully');
        return redirect()->route('pickupInstructions');


    }

    public function updateImages(Request $request) {


        $request->validate([
            'image1' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'image2' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'image3' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Create an associative array for image fields and their section names
        $imageSections = [
            'image1' => section::PickupInstructionsImage1,
            'image2' => section::PickupInstructionsImage2,
            'image3' => section::PickupInstructionsImage3,
        ];

        foreach ($imageSections as $key => $sectionName) {
            if ($request->hasFile($key)) {
                $image = $request->file($key);
                $fileName = getFileName($image); // Generate a unique name for the file

                CMS::updateOrCreate(
                    ['page' => page::Pickup, 'section_name' => $sectionName], // Use the unique section name here
                    [
                        'page' => page::Pickup,
                        'section_name' => $sectionName,
                        'image' => Helper::fileUpload($image, 'cms/how-delivery-works', $fileName),
                    ]
                );
            }
        }

        flash()->success('Images updated successfully');
        return redirect()->route('pickupInstructions');

    }

}
