<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        return view("welcome");
    }
    public function programme() {
        return view("programme.programme");
    }

    public function live() {
        return view("live.live");
    }
    public function rediffusion() {
        return view("rediffusion.rediffusion");
    }

    public function photos(){
        return view("photos.photos");
    }
}
