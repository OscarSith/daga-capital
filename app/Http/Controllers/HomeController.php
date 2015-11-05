<?php namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\EditBlogRequest;

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Blog::all(['id', 'title', 'post', 'picture', 'created_at']);
		return view('admin', compact('posts'));
	}

	public function edit(EditBlogRequest $request, $id)
	{
		$blog = Blog::find($id);

		$params = $request->all();

		if ($request->hasFile('picture')) {
			$params['picture'] = $request->file('picture')->getClientOriginalName();
			\File::delete('images/blog/' . $params['old_picture_name']);
			$request->file('picture')->move('images/blog', $params['picture']);
		}

		$blog->fill($params);
		$blog->save();


		return redirect()->back()->with('success_message', 'Datos actualizados');
	}
}
