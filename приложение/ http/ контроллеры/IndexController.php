<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Slider;
use App\Ftco;

class IndexController extends Controller
{
    public function execute() {

      	$menus = Menu::all();
      	$sliders = Slider::all()->toArray();
      	$ftcos = Ftco::all();

		foreach($ftcos as $ftco){
          	$ftco['check'] = Ftco::find($ftco->id)->check;
        }

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
              	'sliders' => $sl,
              	'check' => $ftcos
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    }
}
