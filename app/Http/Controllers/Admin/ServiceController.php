<?php

namespace App\Http\Controllers\admin;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['services']=Service::get();
        return view('admin.services.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'status' => 'required',
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $fileName);

    $saveData = ['name' => $request->name,
                    'description' => $request->description,
                    'status'=>$request->status=='on'?1:0,
                    'image' => $fileName
                ];
        Service::create($saveData);


        return redirect()->route('admin.services')->with('success','Service has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service=Service::find($id);
        return view('admin.services.show',compact('service'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Edit service
        $service=Service::find($id);
        return view('admin.services.edite',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileName = '';
    $editeData = Service::find($id);
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
                            'description' => $request->description,
                            'status'=>$request->status=='on'?1:0,
                            'image' => $fileName
                            ];

    $editeData->update($editeDataRecord);
        if($editeData){
            return redirect()->route('admin.services')->with('success','Service has been update successfully');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //delete service
         $service=Service::find($id);
         $service->delete();
         return redirect()->route('admin.services')->with('success','Service has been deleted successfully');
    }
}
