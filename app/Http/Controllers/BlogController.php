<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;

class BlogController extends Controller
{
    protected $indexShoyElements;
    
    public function __construct(IndexShoyElements $indexShoyElements) {
        $this->indexShoyElements = $indexShoyElements;
    }

        public function execute(Request $request){
        if(view()->exists('site.blog')){
            
            $menus = $this->indexShoyElements->menu();
            $blogs = $this->indexShoyElements->paginator();
            
            $data = [
                'title' => 'Blog',
                'menus' => $menus,
                'blogs' => $blogs
            ];
            return view('site.blog', $data);
        } else {
            abort(404);
        }
    }
}
