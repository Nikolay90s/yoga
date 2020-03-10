<?php

namespace App\Myclasses;

use DB;

class MoreBlogs
{
	public function moreBlog($id){
		$blog = DB::table('blogs')->get()->where('id', $id)->first();
		return($blog);
	}
}