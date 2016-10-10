<?php namespace Modules\Supplier\Http\Controllers;

use Libraries\Util;
use Pingpong\Modules\Routing\Controller;

class SupplierController extends Controller {
	
	public function index()
	{
	    $data = [
	        'email' => 'help0@gmail.com',
            'pwd'   => '123456'
        ];
	    $reponse = Util::sendPost('auth/login', $data);
        print_r($reponse);
		return view('supplier::index');
	}
	
}