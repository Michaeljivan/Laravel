<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function deposit_balance(Request $req){
        $id = $req->input('id');
        $amount = $req->input('amount');

        $data = array('id'=>$id, 'amount'=>$id);

        DB::table('balance')->insert($data);
    }
}
