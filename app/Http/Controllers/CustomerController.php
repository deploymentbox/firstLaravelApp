<?php

namespace App\Http\Controllers;


use DB;
use App\Http\Controllers\Controller;

/**
 *
 */
class CustomerController extends Controller
{

    /**
     *
     */
    public function index()
    {
        $customers = DB::table('Customers')->get();
        return view('welcome', ['customers' => $customers]);
    }
}
/* End of file Nerdcontroller.php */
