<?php

namespace App\Http\Controllers\backend\settings;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\Helper;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SocialLink::latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('icon', function ($data) {
                    $url = asset($data->icon);
                    return '<img src="' . $url . '" alt="icon" class="rounded border" style="padding: 10px;">';
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
                    return '<div class="action-wrapper">
                    <button class="action-btn outline-action-btn" title="Edit" type="button" onclick="window.location.href=\'' . route('socialLinks.edit', $data->id) . '\'">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                 <path d="M9.94922 1.66675H8.28255C4.11589 1.66675 2.44922 3.33341 2.44922 7.50008V12.5001C2.44922 16.6667 4.11589 18.3334 8.28255 18.3334H13.2826C17.4492 18.3334 19.1159 16.6667 19.1159 12.5001V10.8334" stroke="#030C09" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.1507 2.51663L7.58408 9.0833C7.33408 9.3333 7.08408 9.82497 7.03408 10.1833L6.67575 12.6916C6.54241 13.6 7.18408 14.2333 8.09241 14.1083L10.6007 13.75C10.9507 13.7 11.4424 13.45 11.7007 13.2L18.2674 6.6333C19.4007 5.49997 19.9341 4.1833 18.2674 2.51663C16.6007 0.849966 15.2841 1.3833 14.1507 2.51663Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M13.209 3.45825C13.7673 5.44992 15.3257 7.00825 17.3257 7.57492" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                 </svg> </button>
                    <button class="action-btn outline-action-btn" type="button" onclick="deleteRecord(event,' . $data->id . ')">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                <path d="M18.2832 4.98332C15.5082 4.70832 12.7165 4.56665 9.9332 4.56665C8.2832 4.56665 6.6332 4.64998 4.9832 4.81665L3.2832 4.98332" stroke="#030C09" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7.86719 4.14175L8.05052 3.05008C8.18385 2.25841 8.28385 1.66675 9.69219 1.66675H11.8755C13.2839 1.66675 13.3922 2.29175 13.5172 3.05841L13.7005 4.14175" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16.4909 7.6167L15.9492 16.0084C15.8576 17.3167 15.7826 18.3334 13.4576 18.3334H8.10755C5.78255 18.3334 5.70755 17.3167 5.61589 16.0084L5.07422 7.6167" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.39062 13.75H12.1656" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M8.69922 10.4167H12.8659" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></button>
                </div>';
                })
                ->rawColumns(['icon', 'status', 'action'])
                ->make(true);
        }

        return view('backend.layouts.settings.social_link.index');
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

        //social link store
        $request->validate([

            'social_name' => 'required|max:255|string',
            'icon' => 'required|mimes:svg|max:2048',
            'link' => 'required|max:255|string',

        ]);


        try {

            if ($request->hasFile('icon')) {
                $icon = Helper::fileUpload($request->file('icon'), 'social', getFileName($request->file('icon')));
            }

            $socialLink = new SocialLink();
            $socialLink->social_name = $request->social_name;
            $socialLink->icon = $icon;
            $socialLink->link = $request->link;
            $socialLink->status = 'active';
            $socialLink->save();
            flash()->success('social link created successfully');
            return redirect()->route('socialLinks.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage());
            return redirect()->route('socialLinks.index');
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


        $socialLink = SocialLink::findOrFail($id);
        return view('backend.layouts.settings.social_link.edit', compact('socialLink'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $socialLink = SocialLink::findOrFail($id);
        $request->validate([

            'social_name' => 'required|max:255|string',
            'icon' => 'mimes:svg|max:2048',
            'link' => 'required|max:255|string',

        ]);

        if ($request->hasFile('icon')) {
            $icon = Helper::fileUpload($request->file('icon'), 'social', getFileName($request->file('icon')));
            $socialLink->icon = $icon;
        }
        $socialLink->social_name = $request->social_name;
        $socialLink->link = $request->link;
        $socialLink->status = 'active';
        $socialLink->save();
        flash()->success('social link updated successfully');
        return redirect()->route('socialLinks.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $socialLink = SocialLink::findOrFail($id);
        $socialLink->delete();

        return response()->json([

            'success' => true,
            'message' => 'Social Link deleted successfully',

        ]);

    }

    public function changeStatus($id)
    {
        $page = SocialLink::find($id);

        if (empty($page)) {
            return response()->json([
                "success" => false,
                "message" => "Item not found."
            ], 404);
        }

        if ($page->status == "active") {
            $page->status = "inactive";
        } else {
            $page->status = "active";
        }
        $page->save();
        return response()->json([
            'success' => true,
            'message' => 'Item status changed successfully.'
        ]);
    }

}
