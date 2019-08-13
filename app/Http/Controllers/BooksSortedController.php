<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

class BooksSortedController extends Controller
{

	public function id_sortASC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('id', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function id_sortDESC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('id', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function name_sortASC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('name', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function name_sortDESC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('name', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function publish_year_sortASC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('publish_year', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function publish_year_sortDESC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('publish_year', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function author_sortASC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('author_id', 'ASC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

	public function author_sortDESC() {
		$authors = Author::all();
		
		$query = Book::query();

		$query->orderBy('author_id', 'DESC');

		$books = $query->get();

		return view('books.index', ['books' => $books, 'authors' => $authors]);
	}

}
 