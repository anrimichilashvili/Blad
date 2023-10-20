<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            [
                "name" => "დავლაება - Blade",
                "image" => "https://www.shutterstock.com/image-illustration/3d-red-number-300-isolated-260nw-1116771998.jpg",
                "status" => 0
            ],
            [
                "name" => "დავლაება - Blade",
                "image" => "https://www.shutterstock.com/image-illustration/3d-red-number-300-isolated-260nw-1116771998.jpg",
                "status" => 1
            ],
        ];
        return view('home', compact('data'));
    }

    public function subscribe(Request $request)
    {
        // Handle subscription logic here
        // $request->input('email') contains the subscribed email address

        // Redirect back with a success message
        return back()->with('success', 'Subscribed successfully!');
    }
}
