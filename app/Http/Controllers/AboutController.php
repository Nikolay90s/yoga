<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;

class AboutController extends Controller
{
    protected $indexShoyElements;
    
    public function __construct(IndexShoyElements $indexShoyElements) {
        $this->indexShoyElements = $indexShoyElements;
    }
    
    public function execute(){
        
        $menus = $this->indexShoyElements->menu();
        $users = $this->indexShoyElements->users();
        $gallerys = $this->indexShoyElements->gallery();
       // dd($users);
        if(view()->exists('site.about')){
            $data = [
                'title' => 'About',
                'menus' => $menus,
                'users' => $users,
                'gallerys' => $gallerys
            ];
            return view('site.about', $data);
        } else {
            abort(404);
        }
    }
}
