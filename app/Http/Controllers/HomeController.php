<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return view('homepage')->with('page', 'back-to-school');
	}

	public function getVideo()
	{
		return view('video')->with('page', 'pixma-e-cool');
	}
}