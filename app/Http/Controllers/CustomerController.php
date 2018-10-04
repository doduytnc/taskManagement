<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateCustomer;
use App\Model\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $customers = CustomerModel::all(); //hàm all() trong laravel sẽ sellect tất cả các record trong bảng

        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateCustomer $request)
    {
        $customer = new CustomerModel;
        $customer->name = $request->input('name');     //name màu tím là tên field, gán thuộc tính name
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->save();                                      //Hàm save() trong laravel sẽ tự động insert các thông tin vào trong DB
        return redirect()->route('index_customer'); //return->Trả về redirect->chuyển hướng -> route
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $customer = CustomerModel::find($id); //Tìm record có id bằng $id
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validateCustomer $request, $id)
    {
        $customer = CustomerModel::find($id);
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->save();
        return redirect()->route('index_customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = CustomerModel::find($id);
        $customer->delete();
        return redirect()->route('index_customer');
    }
}
