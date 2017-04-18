<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Session;
use App\Comment;
use Auth;

class ArticlesController extends Controller
{	
	function showArticles(){
    // $articles =['first article','second article', 'third article','fourth article','fifth article'];
		//if(Auth::user()->role=='admin')
		//to authenticate user role
	$articles = Article::all();	

    return view('article/display', compact('articles'));
	}

	function showArticle($id){
    // $articles =['first article','second article', 'third article','fourth article','fifth article'];
	$article = Article::find($id);
	
    return view('article/display_one_item', compact('article'));
	}

	function createArticle(){
	return view('article/create');

	}

	function saveArticle(Request $request){
		
		
		echo ($request->title." ".$request->content);
		$new_article = new Article();
		$new_article->title = $request->title;
		$new_article->content = $request->content;
		$new_article->save();
		Session::flash('message', 'Article Successfully Created');
	
		return redirect('articles');
	}

	function deleteArticle($id){
		$article_to_be_deleted = Article::find($id);
		$article_to_be_deleted->delete();

		$articles = Article::all();
		Session::flash('message', 'Article Successfully Deleted');
		return view('article/display', compact('articles'));

	}

	function editformArticle($id){
		$atbe = Article::find($id);
		Session::flash('message', 'Edit Article');

		return view('article/edit', compact('atbe'));
	}



	function editArticle($id, Request $request){
		$atbe = Article::find($id);
		$atbe->title = $request->title;
		$atbe->content =$request->content;
		$atbe->save();

		Session::flash('message', 'Article Successfully Edited');
		return redirect('articles');

	}

	function addComment($id, Request $request ){
		$comment = new Comment();
		
		$comment->content = $request->content;
		$comment->user_id = Auth::user()->id;
		$comment->article_id = $id;
		$comment->save();
		return redirect("articles/$id");


	}

}
