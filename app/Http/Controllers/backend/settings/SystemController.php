<?php

namespace App\Http\Controllers\backend\settings;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SystemController extends Controller
{

    public function index(Request $request)
    {

        $setting = SystemSetting::latest('id')->first();


        return view('backend.layouts.settings.system', compact('setting'));
    }

    //system settings update

    /* public function update(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'system_name' => 'required|string',
            'email' => 'required|string',
            'contact_number' => 'required|string',
            'company_open_hour' => 'required|string',
            'copyright_text' => 'required|string',
            'logo' => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'favicon' => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);

        $setting = SystemSetting::firstOrNew();
        $setting->title = $request->title;
        $setting->system_name = $request->system_name;
        $setting->email = $request->email;
        $setting->contact_number = $request->contact_number;
        $setting->company_open_hour = $request->company_open_hour;
        $setting->copyright_text = $request->copyright_text;
        $setting->address = $request->address;
        $setting->description = $request->description;
        $setting->save();

        if ($request->hasFile('logo')) {
            $logo = Helper::fileUpload($request->file('logo'), 'system/logo', getFileName($request->file('logo')));
            $setting->logo = $logo;
            $setting->save();
        }
        if ($request->hasFile('favicon')) {
            $favicon = Helper::fileUpload($request->file('favicon'), 'system/favicon', getFileName($request->file('favicon')));
            $setting->favicon = $favicon;
            $setting->save();
        }

        flash()->success('system settings updated successfully');
        return redirect()->route('system.index');
    } */

    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string',
            'system_name' => 'required|string',
            'email' => 'required|email',
            'contact_number' => 'required|string',
            'company_open_hour' => 'required|string',
            'copyright_text' => 'required|string',
            'logo' => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'favicon' => 'nullable|mimes:jpeg,jpg,png,ico,svg',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);


        $setting = SystemSetting::firstOrNew();
        $setting->fill($validatedData);
        $setting->save();

        if ($request->hasFile('logo')) {
            $logo = Helper::fileUpload($request->file('logo'), 'system/logo', getFileName($request->file('logo')));
            $setting->logo = $logo;
        }
        if ($request->hasFile('favicon')) {
            $favicon = Helper::fileUpload($request->file('favicon'), 'system/favicon', getFileName($request->file('favicon')));
            $setting->favicon = $favicon;
        }

        $setting->save();

        session()->flash('success', 'System settings updated successfully.');
        return redirect()->route('system.index');
    }


    //mail settings update

    public function mailSettingsUpdate(Request $request)
    {

        // Sanitize input values
        $request->merge([
            'mail_mailer' => preg_replace('/\s+/', '', $request->mail_mailer),
            'mail_host' => preg_replace('/\s+/', '', $request->mail_host),
            'mail_port' => preg_replace('/\s+/', '', $request->mail_port),
            'mail_username' => preg_replace('/\s+/', '', $request->mail_username),
            'mail_password' => preg_replace('/\s+/', '', $request->mail_password),
            'mail_encryption' => preg_replace('/\s+/', '', $request->mail_encryption),
            'mail_from_address' => preg_replace('/\s+/', '', $request->mail_from_address),
        ]);

        $request->validate([
            'mail_mailer' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|string',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'required|string',
        ]);

        $envContent = File::get(base_path('.env'));
        $lineBreak = "\n";
        $envContent = preg_replace([
            '/MAIL_MAILER=(.*)\s/',
            '/MAIL_HOST=(.*)\s/',
            '/MAIL_PORT=(.*)\s/',
            '/MAIL_USERNAME=(.*)\s/',
            '/MAIL_PASSWORD=(.*)\s/',
            '/MAIL_ENCRYPTION=(.*)\s/',
            '/MAIL_FROM_ADDRESS=(.*)\s/',
        ], [
            'MAIL_MAILER=' . $request->mail_mailer . $lineBreak,
            'MAIL_HOST=' . $request->mail_host . $lineBreak,
            'MAIL_PORT=' . $request->mail_port . $lineBreak,
            'MAIL_USERNAME=' . $request->mail_username . $lineBreak,
            'MAIL_PASSWORD=' . $request->mail_password . $lineBreak,
            'MAIL_ENCRYPTION=' . $request->mail_encryption . $lineBreak,
            'MAIL_FROM_ADDRESS=' . '"' . $request->mail_from_address . '"' . $lineBreak,
        ], $envContent);

        if ($envContent !== null) {
            File::put(base_path('.env'), $envContent);
        }

        flash()->success("Mail Setting Update successfully.");
        return redirect()->back();
    }

    //stripe settings update

    public function stripeSettingsUpdate(Request $request)
    {
        // Check if the authenticated user has the 'profile setting' permission

        // Validate the required input for Stripe settings
        $validatedData = $request->validate([
            'stripe_secret_key'    => 'required|string',
            'stripe_public_key' => 'required|string',
            'stripe_webhook_secret' => 'required|string',
        ]);

        try {
            // Fetch the current content of the .env file
            $envFilePath = base_path('.env');
            $envContent = File::get($envFilePath);

            // Define line breaks for consistency (handles different OS line endings)
            $lineBreak = PHP_EOL;

            // Use preg_replace to update the STRIPE_KEY and STRIPE_SECRET in .env content
            $updatedEnvContent = preg_replace([
                '/^STRIPE_SECRET_KEY=(.*)$/m',
                '/^STRIPE_PUBLIC_KEY=(.*)$/m',
                '/^STRIPE_WEBHOOK_SECRET=(.*)$/m',
            ], [
                'STRIPE_SECRET_KEY=' . $validatedData['stripe_secret_key'] . $lineBreak,
                'STRIPE_PUBLIC_KEY=' . $validatedData['stripe_public_key'] . $lineBreak,
                'STRIPE_WEBHOOK_SECRET=' . $validatedData['stripe_webhook_secret'] . $lineBreak,
            ], $envContent);

            // Write updated content back to .env file if changes were made
            if ($updatedEnvContent !== $envContent) {
                File::put($envFilePath, $updatedEnvContent);
            }

            // Redirect back with a success message
            flash()->success("Mail Setting Update successfully.");
            return redirect()->back();
        } catch (\Illuminate\Contracts\Filesystem\FileNotFoundException $e) {
            // Handle file not found error specifically
            flash()->error("Mail Setting Update failed.");
            return redirect()->back();
        } catch (\Exception $e) {
            // Catch any other unexpected exceptions
            flash()->error("Failed to update Stripe settings.");
            return redirect()->back();
        }
    }
}
