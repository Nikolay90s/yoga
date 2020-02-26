<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;

class ClassesController extends Controller
{
	
	protected $indexShoyElements;
	
	public function __construct(IndexShoyElements $indexShoyElements){
		$this->indexShoyElements = $indexShoyElements;
	}
	
    public function execute(){
    	
    	$menus = $this->indexShoyElements->menu();
    	$classes = $this->indexShoyElements->classes();
    	$gallerys = $this->indexShoyElements->gallery();
    	
    		if(view()->exists('site.classes')){
    				$data = [
    						'title' => 'Classes',
    						'menus' => $menus,
    						'classes' => $classes,
    						'gallerys' => $gallerys
    					];
    				return view('site.classes', $data);
    		}
    }
}
