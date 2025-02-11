<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GalleryAlbum;
use App\Models\Message;
use App\Models\SettingWebsite;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Facades\Agent;
use Stevebauman\Location\Facades\Location;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $tr = new GoogleTranslate();
        $tr->setSource('id');
        $tr->setTarget('en');
        $setting_web = SettingWebsite::first();

        $short_about = '';
        if (app()->getLocale() == 'id') {
            $short_about = Str::limit($setting_web->about ?? "", 200);
        } else {
            $short_about = Str::limit($tr->translate($setting_web->about ?? ""), 200);
        }


        $data = [
            'title' => 'Home Page',
            'description' => 'This is a home page',
            'short_about' => $short_about,
            'setting_web' => $setting_web,
            'team' => User::all(),
            'testimonial' => Testimonial::all(),
            'gallery' => GalleryAlbum::all(),
        ];

        return view('front.home', $data);
    }

    public function vistWebsite()
    {
        try {
            $currentUserInfo = Location::get(request()->ip());
            $visitor = new Visitor();
            $visitor->ip = request()->ip();
            if ($currentUserInfo) {
                $visitor->country = $currentUserInfo->countryName;
                $visitor->city = $currentUserInfo->cityName;
                $visitor->region = $currentUserInfo->regionName;
                $visitor->postal_code = $currentUserInfo->postalCode;
                $visitor->latitude = $currentUserInfo->latitude;
                $visitor->longitude = $currentUserInfo->longitude;
                $visitor->timezone = $currentUserInfo->timezone;
            }
            $visitor->user_agent = Agent::getUserAgent();
            $visitor->platform = Agent::platform();
            $visitor->browser = Agent::browser();
            $visitor->device = Agent::device();
            $visitor->save();

            return response()->json(['status' => 'success', 'message' => 'Visitor has been saved'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => $th->getMessage()], 500);
        }
    }

    public function about()
    {
        $tr = new GoogleTranslate();
        $tr->setSource('id');
        $tr->setTarget('en');
        $setting_web = SettingWebsite::first();
        $about = '';
        if (app()->getLocale() == 'id') {
            $about = $setting_web->about;
        } else {

            $about = $tr->translate($setting_web->about);
        }

        $data = [
            'title' => 'About Page',
            'description' => 'This is an about page',
            'setting_web' => $setting_web,
            'about' => $about,
            'team' => User::all(),

        ];
        return view('front.about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Page',
            'description' => 'This is a contact page',
            'setting_web' => SettingWebsite::first()
        ];
        return view('front.contact', $data);
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        try {
            $message = new Message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->phone = $request->phone;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->save();

            return response()->json(['status' => 'success', 'message' => 'Message has been sent'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}
