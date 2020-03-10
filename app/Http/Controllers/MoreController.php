<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;
use App\Myclasses\MoreBlogs;
use App\Myclasses\Comment;

class MoreController extends Controller
{

	protected $indexShoyElements;
	protected $moreBlogs;
	protected $comment;

	public function __construct(Comment $comment, MoreBlogs $moreBlogs, IndexShoyElements $indexShoyElements){
		$this->indexShoyElements = $indexShoyElements;
		$this->moreBlogs = $moreBlogs;
		$this->comment = $comment;
	}

    public function execute($id, Request $request){

      	if(request()->isMethod('post')){
          $this->comment->saveComments($request);

        }

    	if(view()->exists('site.more')){

    		$menus = $this->indexShoyElements->menu();
    		$blog = $this->moreBlogs->moreBlog($id);
    		$al = $this->comment->countComments($id);
          	$shoyComments = $this->comment->shoyC($id);

    		$data = [
    			'title' => 'More',
    			'menus' => $menus,
    			'blog' => $blog,
    			'al' => $al,
              	'comments' => $shoyComments
    			];

    		return view('site.more', $data);
    	}
    }
}