<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Slider;

class IndexController extends Controller
{
    public function execute() {

      	$menus = Menu::all();
      	$sliders = Slider::all()->toArray();

      	$sl = array();
      	foreach($sliders as $slider){
          	$text = explode(".", $slider['Vtext']);
          	$textAll = array();
          	foreach($text as $tex){
              	if($tex == " "){
                  	unset($tex);
                } else {
                  	array_push($textAll, $tex);
                }
            }

          	$slider["Vtext"] = $textAll;
          	array_push($sl, $slider);
        }

      	if(view()->exists('site.index')) {

          	$data = [
            	'title' => 'Yogalax',
              	'menus' => $menus,
              	'sliders' => $sl
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    }
}