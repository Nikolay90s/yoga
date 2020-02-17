<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function execute() {
      	if(view()->exists('site.index')) {
          	$data = [
            	'title' => 'Yogalax'
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    }
}