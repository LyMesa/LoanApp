<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['customers']=Customer::get();
        return view('admin.customers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $request->validate([
            'name' => 'required',
            'sex' => 'required',
            'dob' => 'required',
            'pob' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $fileName);

    $saveData = ['name' => $request->name,
                    'sex' => $request->sex,
                    'dob' => $request->dob,
                    'pob' => $request->pob,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'image' => $fileName
                ];
        Customer::create($saveData);
        return redirect()->route('admin.customers')->with('success','Customer has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer=Customer::find($id);
        return view('admin.customers.show',compact('customer'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer=Customer::find($id);
        return view('admin.customers.edite',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
    $editeData = Customer::find($id);
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $fileName = time() . '.' . $file->getClientOriginalExtension();
      $file->storeAs('public/uploads', $fileName);
      if ($editeData->image) {
        Storage::delete('public/uploads/' . $editeData->image);
      }
    } else {
      $fileName = $request->old_image;
    }

    $editeDataRecord = ['name' => $request->name,
                            'sex' => $request->sex,
                            'dob' => $request->dob,
                            'pob' => $request->pob,
                            'phone' => $request->phone,
                            'address' => $request->address,
                            'image' => $fileName
                            ];

    $editeData->update($editeDataRecord);
        if($editeData){
            return redirect()->route('admin.customers')->with('success','Customer has been update successfully');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //delete service
         $customer=Customer::find($id);
         $customer->delete();
         return redirect()->route('admin.customers')->with('success','Customer has been deleted successfully');
    }

}
