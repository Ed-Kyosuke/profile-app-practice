<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = [
        'name' => '髙松京介',
        'age' => 26,
        'hobbies' => ['プログラミング', '読書', 'ソフトテニス']
    ];

    return view('profile', $data);
    }
}
