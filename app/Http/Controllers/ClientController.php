<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        // echo "hello";
        $data = Client::all();
        // dd($data);
        return view('clients',['data'=>$data]);
    }


}
