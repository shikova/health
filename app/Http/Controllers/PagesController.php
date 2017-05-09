<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Contact()
    {
        Mapper::map(30.3604339,-9.5356339,['zoom' => 14, 'markers' => ['title' => 'Sté FIRST ONE MEDIA, Inezgane 80000, Morocco', 'animation' => 'DROP']]);

        return view('pages.contact_us');
    }
    public function Packages()
    {
        return view('pages.packages');
    }
    public function index()
    {
        return view('pages.index');
    }
    public function profile()
    {
        return view('profile.profile');
    }

}
