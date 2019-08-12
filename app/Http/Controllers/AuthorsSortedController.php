<?php

namespace App\Http\Controllers;

use App\Author;

class AuthorsSortedController extends Controller
{

	public function id_sortASC() {
		
		$query = Author::query();

		$query->orderBy('id', 'ASC');

		$items = $query->get();

		return view('authors.index', ['items' => $items]);
	}

	public function id_sortDESC() {
		
		$query = Author::query();

		$query->orderBy('id', 'DESC');

		$items = $query->get();

		return view('authors.index', ['items' => $items]);
	}

	public function name_sortASC() {
		
		$query = Author::query();

		$query->orderBy('name', 'ASC');

		$items = $query->get();

		return view('authors.index', ['items' => $items]);
	}

	public function name_sortDESC() {
		
		$query = Author::query();

		$query->orderBy('name', 'DESC');

		$items = $query->get();

		return view('authors.index', ['items' => $items]);
	}

}
 