<?php

namespace App\Myclasses;

use App\Slider;
use App\Ftco;
use App\User;
use App\Menu;
use App\Service;
use App\Classe;
use App\Cart;
use App\Gallery;
use DB;

class IndexShoyElements
{
    public function slide(){
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
          	
      	    return $sl;
    }
    
    public function ftcos(){
        $ftcos = Ftco::all();
	      	foreach($ftcos as $ftco){
          $ftco['check'] = Ftco::find($ftco->id)->check;
        }
        
        return $ftcos;
    }
    
    public function users(){
        $users = User::all();
      	foreach($users as $user){
          	$user['anket'] = User::find($user->id)->ancet;
        }
        
        return $users;
    }
    
    public function menu(){
        $menus = Menu::all();
        return $menus;
    }
    
    public function services(){
        $services = Service::all();
        return $services;
    }
    
    public function classes(){
        $classes = Classe::all();
        return $classes;
    }
    
    public function carts(){
        $carts = Cart::all();
        return $carts;
    }
    
    public function gallery(){
    		$gallerys = Gallery::all();
    		return $gallerys;
    }
    
    public function blogs(){
		    $blogs = DB::table('blogs')->orderBy('data', 'desc')->get()->where('id', '<', '4');
        	foreach($blogs as $blog){
          	$data = explode("-", $blog->data);
          	$blog->data = $data;
        }
        return $blogs;
    }
    
    public function paginator(){
        $blogs = DB::table('blogs')->orderBy('data', 'desc')->paginate(6);
        foreach($blogs as $blog){
          	$data = explode("-", $blog->data);
          	$blog->data = $data;
        }
        return $blogs;
    }
}