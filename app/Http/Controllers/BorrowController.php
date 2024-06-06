<?php

namespace App\Http\Controllers;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BorrowController extends Controller
{
    public function index()
    {
        $data['borrows']=Borrow::get();
        return view('admin.borrows.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.borrows.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $request->validate([
            'customername' => 'required',
            'bookcode' => 'required',
            'duedate' => 'required',
            'returndate' => 'required',
            'fineamount' => 'required',
            'librarianname' => 'required',
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $fileName);

    $saveData = ['id' => $request->id,
                    'customername' => $request->customername,
                    'bookcode' => $request->bookcode,
                    'duedate' => $request->duedate,
                    'returndate' => $request->returndate,
                    'fineamount' => $request->fineamount,
                    'librarianname' => $request->librarianname,
                    'image' => $fileName
                ];
        Borrow::create($saveData);

        return redirect()->route('admin.borrows')->with('success','Borrow has been created successfully.');
    }
    public function show(string $id)
    {
        $borrow=Borrow::find($id);
        return view('admin.borrows.show',compact('borrow'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Edit service
        $borrow=Borrow::find($id);
        return view('admin.borrows.edite',compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
        $editeData = Borrow::find($id);
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
        $editeDataRecord = ['id' => $request->id,

                    'customername' => $request->customername,
                    'bookcode' => $request->bookcode,
                    'duedate' => $request->duedate,
                    'returndate' => $request->returndate,
                    'fineamount' => $request->fineamount,
                    'librarianname' => $request->librarianname,
                    'image' => $fileName
                ];

        $editeData->update($editeDataRecord);
            if($editeData){
                return redirect()->route('admin.borrows')->with('success','Borrows has been update successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $borrow=Borrow::find($id);
         $borrow->delete();
         return redirect()->route('admin.borrows')->with('success','Borrow has been deleted successfully');
    }
}
