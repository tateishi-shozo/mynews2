<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all();
    
        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
    }
    
    return view('admin.profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}