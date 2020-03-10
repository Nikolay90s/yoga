<?php

namespace App\Myclasses;

use App\Comments;
use App\Blog;
use Validator;

class Comment
{
	public function countComments($id){
		$al = Comments::get()->where('blog_id', $id);
      	$am = $al->count();
		if ($am != NULL){
			return $am;
		} else {
			return $am = 0;
		}
	}

  	public function saveComments($request){
      	$comment = $request->except('_token');
      	$validator = Validator::make($comment, [
        	'name' => 'required|max:255',
          	'email' => 'email|required',
        ]);

      	if($validator->fails()){
          	return redirect()->route('more', ['id'=> $comment['blog']])->withErrors($validator)->withInput();
        }

      	$comm = new Comments();
      	$comm->fill($comment);
      	if($comm->save()){
          	return redirect()->route('more', ['id' => $comment['blog_id']]);
        }
    }

  	public function shoyC($id){
      	$a = Blog::find($id)->comments;
      	return $a;
    }
}