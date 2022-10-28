<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller {
    public function home() {
        $post = DB::table('post')->find(1);
        return view('welcome', ['post' => $post]);
    }
}