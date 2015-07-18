<?php namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::where('show_home_page', '=', 1)->orderBy('created_at', 'DESC')->take(4)->get();

		return view('home', ['books' => $books]);
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('contact');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('about');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function books()
	{
		$books = Book::orderBy('created_at', 'DESC')->get();
		return view('books', ['books' => $books]);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function book($book_id)
	{
		return view('book', ['book' => Book::where('book_slug', '=', $book_id)->whereNull('deleted_at')->first()]);
	}

}
