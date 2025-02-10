<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\SettingWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'description' => 'This is a home page'
        ];
        return view('front.home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Page',
            'description' => 'This is an about page',
            'setting_web' => SettingWebsite::first()

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
