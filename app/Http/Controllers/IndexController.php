<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class IndexController extends Controller
{
    public function execute() {

      	$menus = Menu::all();

      	if(view()->exists('site.index')) {
          	$data = [
            	'title' => 'Yogalax',
              	'menus' => $menus
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    }
}