<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    
    public function chooseCategory (Request $request)
    {
        // dd($request);
        if($request->category === 'order'){
            return redirect('category/order/create');
        }else{
            return redirect()->route('home.index');
        }
    }
}
