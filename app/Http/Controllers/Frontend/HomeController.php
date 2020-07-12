<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use View;


class HomeController extends Controller
{

	public function index()
	{
		return View::make('frontend.index');
	}

	
}
