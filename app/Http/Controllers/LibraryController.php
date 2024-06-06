<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
{
    public function index()
    {
        $data['librarys']=Library::get();
        return view('admin.librarians.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.librarians.create');
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
            'code' => 'required',
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $fileName);

    $saveData = ['name' => $request->name,
                    'sex' => $request->sex,
                    'dob' => $request->dob,
                    'pob' => $request->pob,
                    'phone' => $request->phone,
                    'code' => $request->code,
                    'image' => $fileName
                ];
        Library::create($saveData);


        return redirect()->route('admin.librarians')->with('success','Library has been created successfully.');
    }
    public function show(string $id)
    {
        $library=Library::find($id);
        return view('admin.librarians.show',compact('library'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Edit service
        $library=Library::find($id);
        return view('admin.librarians.edite',compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
        $editeData = Library::find($id);
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
                                'code' => $request->code,
                                'image' => $fileName
                            ];

        $editeData->update($editeDataRecord);
            if($editeData){
                return redirect()->route('admin.librarians')->with('success','Library has been update successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $library=Library::find($id);
         $library->delete();
         return redirect()->route('admin.librarians')->with('success','libeary has been deleted successfully');
    }

}
