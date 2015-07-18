<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Auth;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookType;
use App\Http\Requests\StoreCategoryPostRequest;
use App\Http\Requests\StoreBookPostRequest;
use App\Http\Requests\StoreBookTypePostRequest;

class AdminController extends Controller {

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
		$this->middleware('auth');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('admin/dashboard');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Redirect::to('admin/dashboard');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		return view('admin.partials.dashboard');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function addCategory($category_id = null)
	{
		if ($category_id) {
			return view('admin.partials.add_category', ['category' => Category::findOrFail($category_id)]);
		} else {
			return view('admin.partials.add_category');
		}
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function createCategory(StoreCategoryPostRequest $request)
	{

		if ($category_id = Input::get('category_id')) {
			$category = Category::find($category_id);
			$category->category_name = Input::get('category_name');
			$category->description = Input::get('description');
			$category->save();

			$success = 'Category updated successfully';
		} else {
			Category::create(Input::get());

			$success = 'Category created successfully';
		}

		return redirect('admin/category/dashboard')->with('success', $success);;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function deleteCategory($category_id = null)
	{
		if ($category_id) {
			Category::find($category_id)->delete();
		}

		return redirect('admin/category/dashboard');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function listCategory()
	{
		return view('admin.partials.list_category', ['categories' => Category::get()]);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function addBookType($book_type_id = null)
	{
		if ($book_type_id) {
			return view('admin.partials.add_book_type', ['book_type' => BookType::findOrFail($book_type_id)]);
		} else {
			return view('admin.partials.add_book_type');
		}
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function createBookType(StoreBookTypePostRequest $request)
	{

		if ($book_type_id = Input::get('book_type_id')) {
			$book_type = BookType::find($book_type_id);
			$book_type->book_type = Input::get('book_type');
			$book_type->description = Input::get('description');
			$book_type->save();

			$success = 'Book Type updated successfully';
		} else {
			BookType::create(Input::get());

			$success = 'Book Type created successfully';
		}

		return redirect('admin/book_type/dashboard')->with('success', $success);;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function deleteBookType($book_type_id = null)
	{
		if ($book_type_id) {
			BookType::find($book_type_id)->delete();
		}

		return redirect('admin/book_type/dashboard');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function listBookType()
	{
		return view('admin.partials.list_book_type', ['book_types' => BookType::get()]);
	}


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function addBook($book_id = null)
	{

		$book_types = BookType::lists('book_type', 'book_type_id');
		$categories = Category::lists('category_name', 'category_id');

		if ($book_id) {
			return view('admin.partials.add_book', ['book' => Book::findOrFail($book_id), 'categories' => $categories, 'book_types' => $book_types]);
		} else {
			return view('admin.partials.add_book', ['categories' => $categories, 'book_types' => $book_types]);
		}
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function createBook(StoreBookPostRequest $request)
	{

		if (Input::hasFile('download_link')) {

			// upload path
			$destinationPath = 'uploads/';

			$download_link = Input::file('download_link');
			// renameing image
			$fileName = rand(11111,99999).'-'.$download_link->getClientOriginalName();
			
			$download_link->move($destinationPath, $fileName);
		}

		if ($book_id = Input::get('book_id')) {
			$book = Book::find($book_id);
			$book->book_name = Input::get('book_name');
			$book->book_slug = str_slug(Input::get('book_name'), '-');
			$book->author = Input::get('author');
			$book->publication = Input::get('publication');
			$book->description = Input::get('description');
			$book->rate = Input::get('rate');
			$book->discount = Input::get('discount');
			$book->discount_qty = Input::get('discount_qty');
			$book->book_type_id = Input::get('book_type_id');
			$book->category_id = Input::get('category_id');

			if (Input::hasFile('download_link')) {
				$book->download_link = $destinationPath.$fileName;
			}
			$book->show_home_page = Input::get('show_home_page');
			$book->save();

			$success = 'Book updated successfully';
		} else {

			$book = Input::get();
			$book['book_slug'] = str_slug(Input::get('book_name'));
			$book['download_link'] = $destinationPath.$fileName;

			Book::create($book);

			$success = 'Book created successfully';
		}

		return redirect('admin/book/dashboard')->with('success', $success);;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function deleteBook($book_id = null)
	{
		if ($book_id) {
			Book::find($book_id)->delete();
		}

		return redirect('admin/book/dashboard');
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function listBook()
	{
		return view('admin.partials.list_book', ['books' => Book::get()]);
	}

}
