<?php

namespace App\Http\Controllers;

use App\Book;

class BooksSortedController extends Controller
{

	public function id_sortASC() {
		
		$query = Book::query();

		$query->orderBy('id', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function id_sortDESC() {
		
		$query = Book::query();

		$query->orderBy('id', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function name_sortASC() {
		
		$query = Book::query();

		$query->orderBy('name', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function name_sortDESC() {
		
		$query = Book::query();

		$query->orderBy('name', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function publish_year_sortASC() {
		
		$query = Book::query();

		$query->orderBy('publish_year', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function publish_year_sortDESC() {
		
		$query = Book::query();

		$query->orderBy('publish_year', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function author_sortASC() {
		
		$query = Book::query();

		$query->orderBy('author_id', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

	public function author_sortDESC() {
		
		$query = Book::query();

		$query->orderBy('author_id', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books]);
	}

}
 