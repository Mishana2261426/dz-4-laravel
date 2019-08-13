<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;

class BooksController extends Controller
{

	public function index() {
		$books = Book::all();
		$authors = Author::all();

		$books = Book::paginate(10);

		return view('books.index', [
			'books' => $books,
			'authors' => $authors,
		]);
	}

	public function addPage() {
		
		$authors = Author::all();

		return view('books.add', [
			'authors' => $authors,
		]);
	}   

	public function store() {
		$data = request()->all();

		$model = new Book();
		$model->fill($data);
		$model->save();

		return redirect('/books');
	}

	public function delete(Book $book) {
		$num = $book->id;
		$product = Book::find($num);
		$product->delete();

		return redirect('/books');
	}

	public function update(Book $book) {
		$name_new = request('name');
		$publish_year_new = request('publish_year');
		$author_id_new = request('author_id');
		$num = $book->id;

		$book = Book::find($num);
		$book->name = $name_new;
		$book->publish_year = $publish_year_new;
		$book->author_id = $author_id_new;
		$book->save();

		return redirect('/books');
	}

	public function search() {
		$data = request('author_select');

		

		$books = Book::where('author_id', '=', $data)->get();

		return view('books.search', [
			'books' => $books,
		]);
	}


}