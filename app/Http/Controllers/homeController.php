<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Home;
class homeController extends Controller
{
    public function index(){
        return view('index',['title'=>'Beranda',
        'homes'=>Home::all()]);
=======
use App\Models\home;

class homeController extends Controller
{
    public function index(){
        $home = home::all();
        return view('index')
        ->with('title', 'Beranda')
        ->with('home', $home);
>>>>>>> 3b49a10eb426e205a0cdfef99d157dd235e9c616
    }
}
