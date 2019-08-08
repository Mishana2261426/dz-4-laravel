<?php

namespace App\Http\Controllers;

use App\Author;

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

	public function delete() {
		return request()->all();
	}	
	


}
 