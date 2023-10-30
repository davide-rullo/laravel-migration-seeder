<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome', ['trains' => Train::all(), 'heading' => 'Our Trains']);
    }
}
