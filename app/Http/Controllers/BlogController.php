<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BlogController extends Controller
{

    public function index()
    {
        // return view('blog.list', [
        //     'user' => User::all()
        // ]);
        \Log::info('A user has arrived at the welcome page.'); return view('welcome');
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://mpt.i906.my/mpt.json?code=kdh-4&filter=2');
        $response = $request->getBody()->getContents();
        $cake = json_decode($response, true);
        dd($cake);
    }

    public function callapi()
    {
        // $client = new \GuzzleHttp\Client();
        // $request = $client->get('http://mpt.i906.my/mpt.json?code=kdh-4&filter=2');
        // $response = $request->getBody()->getContents();
        // $cake = json_decode($response, true);
        // dd($cake);
    }



    //
}
