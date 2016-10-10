<?php namespace Modules\Supplier\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class UserController extends Controller {
	
	public function index()
	{
		return view('supplier::index');
	}
	
}