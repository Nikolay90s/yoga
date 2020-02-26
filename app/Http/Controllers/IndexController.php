<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;

class IndexController extends Controller
{
    protected $indexShoyElements;
    
    public function __construct(IndexShoyElements $indexShoyElements){
      
        $this->indexShoyElements = $indexShoyElements;
    }
  
    public function execute() {

				$gallerys = $this->indexShoyElements->gallery();
        $blogs = $this->indexShoyElements->blogs();
        $carts = $this->indexShoyElements->carts();
        $classes = $this->indexShoyElements->classes();
        $services = $this->indexShoyElements->services();
        $menus = $this->indexShoyElements->menu();
        $users = $this->indexShoyElements->users();
        $ftcos = $this->indexShoyElements->ftcos();
        $sliders = $this->indexShoyElements->slide();

      	if(view()->exists('site.index')) {

          	$data = [
            	'title' => 'Yogalax',
              	'menus' => $menus,
              	'sliders' => $sliders,
              	'check' => $ftcos,
              	'services' => $services,
              	'classes' => $classes,
              	'carts' => $carts,
              	'users' => $users,
              	'blogs' => $blogs,
              	'gallerys' => $gallerys
            ];
          	return view('site.index', $data);
        } else {
          	abort(404);
        }
    } 
}