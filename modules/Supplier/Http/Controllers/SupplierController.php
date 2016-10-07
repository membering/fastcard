<?php namespace Modules\Supplier\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SupplierController extends Controller {
	
	public function index()
	{
	    echo '<pre>';
        print_r(\Auth::user());exit;
		return view('supplier::index');
	}
	
}