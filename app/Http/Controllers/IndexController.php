<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Slider;
<<<<<<< HEAD
use App\Ftco;
=======
>>>>>>> master

class IndexController extends Controller
{
    public function execute() {

      	$menus = Menu::all();
      	$sliders = Slider::all()->toArray();
<<<<<<< HEAD
      	$ftcos = Ftco::all();

		foreach($ftcos as $ftco){
          	$ftco['check'] = Ftco::find($ftco->id)->check;
        }
=======
>>>>>>> master

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
<<<<<<< HEAD
              	'sliders' => $sl,
              	'check' => $ftcos
=======
              	'sliders' => $sl
>>>>>>> master
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    }
}