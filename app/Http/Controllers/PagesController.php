<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Contact()
    {
        return view('pages.contact_us');
    }
}
