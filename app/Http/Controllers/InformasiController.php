<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class InformasiController extends Controller
{

     public function index()
    {
        return view('landing.page1');
    }
    
    public function admin()
    {
        return view('admin');
    }
    public function login()
    {
        return view('login');
    }
    public function create()
    {
        return view('create');
    }

   

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin');
        }elseIf(Auth::user()->role == 'petugas'){
            return redirect()->route('data.petugas');
        }
            return redirect()->route('data');
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }
     

    public function Prestasi()
    {
        $informasis = Informasi::all();

        return view('prestasi', compact('informasis'))->with('success', 'Data prestasi berhasil disimpan!');    
    }

    public function prestasiStore(Request $request)
    {

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'jurusan' => 'required',
            'rayon' => 'required',
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        // Jika validasi gagal, kembalikan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Memeriksa apakah file foto diunggah dan menyimpannya
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imgName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
        }

        // Menyimpan data ke dalam database
        Informasi::create([
            'judul' => $request->judul,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jurusan' => $request->jurusan, 
            'rayon' => $request->rayon, 
            'foto' => $imgName ?? null, // Memastikan foto disimpan jika diunggah
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data prestasi berhasil disimpan!');
    }

    public function show(Informasi $informasi)
    {
        // Tampilkan informasi pada halaman view
        return view('show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPrestasi($id)
    {
        

        $informasis = Informasi::where('id', '=', $id)->firstOrFail();
        return view('updatePrestasi', compact('informasis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePrestasi(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jurusan' => 'required',
            'rayon' => 'required',
            'judul' => 'required',
        ]);

        if (is_null($request->file('foto'))){
            $imgName = Informasi::where('id', '=', $id)->value('foto');
        }else {
            if ($request->hasFile('foto')) {
                $image = $request->file('foto');
                $imgName = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('assets/image/');
                $image->move($path, $imgName);
            }
        }
        

        Informasi::where('id', '=', $id)->update([
            'nama'=> $request->nama,
            'judul'=> $request->judul,
            'jurusan'=> $request ->jurusan,
            'rayon'=> $request ->rayon,
            'deskripsi'=> $request ->deskripsi,
            'foto'=> $imgName,
        ]);
        return redirect()->back()->with('succesupdate', 'berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPrestasi($id)
{
    // Retrieve the Informasi instance by its ID
    $informasi = Informasi::findOrFail($id);
    
    // Delete the associated image file from storage
    $imagePath = public_path('assets/image/') . $informasi->foto;
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
    
    // Delete the Informasi instance
    $informasi->delete();
    
    // Redirect back with a success message
    return redirect()->back()->with('successDelete', 'Berhasil menghapus data!');
}

}