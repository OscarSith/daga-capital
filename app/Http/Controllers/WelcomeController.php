<?php namespace App\Http\Controllers;

use App\Blog;
use Mail;
use Request;

class WelcomeController extends Controller {
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$section = 'home';
		$posts = Blog::all(['id', 'title', 'post', 'picture', 'updated_at', 'thumb_picture']);
		return view('welcome', compact('section', 'posts'));
	}

	public function blog($title, $id)
	{
		$section = 'blog';
		$blog = Blog::find($id);
		return view('blog', compact('section', 'blog'));
	}

	public function send()
	{
		$params = Request::all();
		$v = \Validator::make(
			$params,
			['nombre' => 'required',
			'correo' => 'required|email',
			'asunto' => 'required',
			'mensaje' => 'required']
		);

		if ($v->fails()) {
			return response()->json($v->messages(), 500);
		}

		Mail::send('emails.contact', $params, function($message) use ($params)
		{
			$message->from($params['correo'], $params['nombre']);
			$message->cc($params['correo'], $params['nombre']);
			$message->to(env('MAIL_ADDRESS'), env('MAIL_NAME'))->subject($params['asunto']);
		});

		return response()->json(['load' => true, 'success_message' => 'Muchas gracias por entrar en contacto con nosotros, nos comunicaremos a la brevedad posible']);
	}
}
