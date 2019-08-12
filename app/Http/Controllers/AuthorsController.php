<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

class AuthorsController extends Controller
{
	public function index() {

		$query = Author::query();

		$items = $query->get();

		return view('authors.index', ['items' => $items]);
	}
	
	public function addPage() {
		return view('authors.add');
	}   

	public function store() {
		$data = request()->all();

		$model = new Author();
		$model->fill($data);
		$model->save();

		return redirect('/authors');
	}

	public function delete(Author $author) {
		$num = $author->id;
		$product = Author::find($num);
		$product->delete();

		$book = DB::table('books')->where('author_id', '=', $num)->delete();

		return redirect('/authors');
	}	

	public function update(Author $author) {
		
		$name_new = request('name');
		$num = $author->id;

		$product = Author::find($num);
		$product->name = $name_new;
		$product->save();

		return redirect('/authors');
	}



}
 