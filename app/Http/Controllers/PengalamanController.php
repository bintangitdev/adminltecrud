<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;
use Illuminate\Support\Facades\Storage;

class PengalamanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $Experience = Pengalaman::latest()->paginate(10);
        //return response()->json($Experience);
        return (view('experience.index', compact('Experience')));
        // return response()->json([
        //     'body' => view('experience.index', compact('Experience'))->render(),
        //     'Experience' => $Experience,
        // ]);
        //return response(view('experience.index',array('experience'=>$Experience)),200, ['Content-TYpe' => 'application/json']);

        
    }

    /**
* create
*
* @return void
*/
public function create()
{
    return view('experience.create');
}


/**
* store
*
* @param  mixed $request
* @return void
*/
public function store(Request $request)
{
    $this->validate($request, [
        'NamaTempatKerja'     => 'required',
        'LamaKerja'           => 'required',
        'Profesi'             => 'required',
        'Deskripsi'           => 'required'
    ]);
    $array = $request->only([
        'NamaTempatKerja', 'LamaKerja', 'Profesi', 'Deskripsi'
    ]);
    $Experience = Pengalaman::create($array);

    //upload image
    // $image = $request->file('image');
    // $image->storeAs('public/blogs', $image->hashName());

    // $Experience = Pengalaman::create([
    //     // 'image'     => $image->hashName(),
    //     'NamaTempatKerja'     => $request->NamaTempatKerja,
    //     'LamaKerja'           => $request->LamaKerja,
    //     'Profesi'             => $request->Profesi,
    //     'Deskripsi'           => $request->Deskripsi
    // ]);

    if($Experience){
        //redirect dengan pesan sukses
        return redirect()->route('experience.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('experience.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

/**
* edit
*
* @param  mixed $blog
* @return void
*/
public function edit(Pengalaman $Experience)
{
    return view('experience.edit', compact('Experience'));
}

/**
* update
*
* @param  mixed $request
* @param  mixed $blog
* @return void
*/
public function update(Request $request, $id)
{
    $this->validate($request, [
        'NamaTempatKerja'     => 'required',
        'LamaKerja'           => 'required',
        'Profesi'             => 'required',
        'Deskripsi'           => 'required'
    ]);
    $Experience = Pengalaman::find($id);
    $Experience->NamaTempatKerja = $request->NamaTempatKerja;
    $Experience->LamaKerja = $request->LamaKerja;
    $Experience->Profesi = $request->Profesi;
    $Experience->Deskripsi = $request->Deskripsi;
    $Experience->save();

    if($Experience){
        //redirect dengan pesan sukses
        return redirect()->route('experience.index')->with('success','Data Berhasil Diupdate!');
    }else{
        //redirect dengan pesan error
        return redirect()->route('experience.index')->with('error', 'Data Gagal Diupdate!');
    }
}

public function destroy(Pengalaman $Experience)
{
    $Experience->delete();

    return redirect()->route('experience.index')->with('succes','Data Berhasil di Hapus');
}

}
