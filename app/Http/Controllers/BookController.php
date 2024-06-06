<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $data['books']=Book::get();
        return view('admin.books.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $request->validate([
            'bookcode' => 'required',
            'catlogcode' => 'required',
            'catlogname' => 'required',
            'publisher' => 'required',
            'description' => 'required',
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/uploads', $fileName);
    $saveData = ['id' => $request->id,
                    'bookcode' => $request->bookcode,
                    'catlogname' => $request->catlogname,
                    'catlogcode' => $request->catlogcode,
                    'publisher' => $request->publisher,
                    'description' => $request->description,
                    'image' => $fileName
                ];
        Book::create($saveData);
        return redirect()->route('admin.books')->with('success','Book has been created successfully.');
    }
    public function show(string $id)
    {
        $book=Book::find($id);
        return view('admin.books.show',compact('book'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Edit service
        $book=Book::find($id);
        return view('admin.books.edite',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $fileName = '';
        $editeData = Book::find($id);
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

                            'bookcode' => $request->bookcode,
                            'catlogname' => $request->catlogname,
                            'catlogcode' => $request->catlogcode,
                            'publisher' => $request->publisher,
                            'description' => $request->description,
                            'image' => $fileName
                        ];

        $editeData->update($editeDataRecord);
            if($editeData){
                return redirect()->route('admin.books')->with('success','Book has been update successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $book=Book::find($id);
         $book->delete();
         return redirect()->route('admin.books')->with('success','Book has been deleted successfully');
    }
}
