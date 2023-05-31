<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = \App\Models\orders::all();
        // $this->authorize('viewAny', $orders);
        // $this->authorize('view', $orders);
        return view('category.order.index', ['orders'=>$orders ]);
    }

    public function create()
    {
        
        return view('category.order.create');
    }
    
    // store order data

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','min:2','max:100'],
            'quantity' => ['required','min:1','max:100'],
            'describe_order' => ['required','min:2','max:255']
        ]);
        
        $order = new \App\Models\orders;
        $order->user_id = auth()->user()->id;
        $order->name = $request->name;
        $order->quantity = $request->quantity;
        $order->describe_order = $request->describe_order;
        $order->save();
        
        return redirect()->route('order.index');
    }
    
    // edit order data

    public function edit($id)
    {
        $order = \App\Models\orders::findorFail($id);
        
        return view('category.order.edit', ['order'=>$order]);
    }

    //update order record

    public function update(Request $request, $id)
    {
        $order = \App\Models\orders::findorFail($id);
        $request->validate([
            'name' => ['required','min:2','max:100'],
            'quantity' => ['required','min:1','max:100'],
            'describe_order' => ['required','min:2','max:255']
        ]);
        
        $order->user_id = auth()->user()->id;
        $order->name = $request->name;
        $order->quantity = $request->quantity;
        $order->describe_order = $request->describe_order;
        
        $order->update();
        
        return redirect()->route('order.index')->with('updateMsg', 'Record successfully Updated');
    }

    //delete order data

    public function destroy($id)
    {
        $order = \App\Models\orders::findorFail($id);
        $order->delete();
        return redirect()->route('order.index')->with('delMsg', 'order record deleted!');
    }
}
