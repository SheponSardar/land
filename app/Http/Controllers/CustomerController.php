<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addcustomer(){
        // $customers=Customer::all();
        return view('backend.layouts.customers.addcustomer');
    }
    public function store(Request $request){
        //dd($request);



        Customer::create([
            // name for db field || name for form fields
            'username'=>$request->username,
             'name'=>$request->name,
             'email'=> $request->email,
             'address'=>$request->address,
             'telephone'=>$request->telephone,
             'type'=>$request->designation,
            'password'=>bcrypt($request->password)


        ]);
        return redirect()->route('customer.manage');
    }
    public function customer_manage(){
        $customers=User::where('type','client')->get();
        //dd($customers);
        return view('backend.layouts.customers.managecustomer',compact('customers'));
    }
    public function customeredit($id)

    {

        $customers=Customer::find($id);
         //dd($customers->all());

        return view('backend.layouts.customers.editcustomer',compact('customers'));

    }
    public function customerdelete($id)
    {

        $customer=Customer::find($id);
        // dd($customer);
        if ($customer){
            $customer->delete();
            return redirect()->back()->with('message','Customer is Deleted');

        }
        return redirect()->back()->with('message','Customer is not Deleted');
    }
    public function customerupdate (Request $request, $id)
    {
        // dd($request->all());

        $customers=Customer::find($id);


        $customers->update([
            'name'=>$request->name,
            'email'=> $request->email,
            'address'=>$request->address,
            'telephone'=>$request->telephone


        ]);

        return redirect()->route('customer.manage')->with('message','Customer Information is Updated');

    }
}
