<?php

namespace App\Http\Controllers\backend\settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Helper;

class ProfileController extends Controller
{

    public function index(Request $request) {

        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();

        return view('backend.layouts.settings.profile', compact('user'));

    }

    public function update(Request $request) {

        $request->validate([
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'phone' => ['required','string','max:20'],
            'email' => ['required','email','max:255','unique:users,email,'.Auth::user()->id],
            'address' => ['required','string','max:255'],

        ]);

        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->save();
        flash()->success('profile updated successfully');
        return redirect()->route('profile.index');

    }

    public function updatePassword(Request $request) {

        $request->validate([

            'old_password' => ['required'],
            'password' => ['required','string','min:8',],
            'password_confirmation' => ['required','same:password'],

        ]);

        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        flash()->success('password updated successfully');
        return redirect()->route('profile.index');

    }

    public function UpdateProfilePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        try {
            $user      = Auth::user();
            $image     = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            //? Check if there's an existing profile picture
            if ($user->avatar && file_exists(public_path($user->avatar))) {
                Helper::fileDelete(public_path($user->avatar));
            }

            //* Use the Helper class to handle the file upload
            $imagePath = Helper::fileUpload($image, 'profile', $imageName);

            if ($imagePath === null) {
                throw new Exception('Failed to upload image.');
            }

            //! Update user's avatar with the new image path
            $user->avatar = $imagePath;
            $user->save();

            return response()->json([
                'success'   => true,
                'image_url' => asset($imagePath),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

}
