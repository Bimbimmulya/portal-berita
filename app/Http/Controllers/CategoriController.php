<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categori;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categori = Categori::latest()->get();

        return view('admin.categoriindex', compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createcategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:5',
            // 'slug' => 'required',
        ]);
        Categori::create($request->all());

        return redirect()->route('admin.categoriindex');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categori = Categori::find($id);

        return view('admin.editcategori', compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categori = Categori::find($id);
        $categori->update($request->all());

        return redirect()->route('admin.categoriindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categori = Categori::find($id);
        if (!$categori) {
            return redirect()->back();
        }
        $categori->delete();

        return redirect()->route('admin.categoriindex');
    }
}
