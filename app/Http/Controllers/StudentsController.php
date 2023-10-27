<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = New Students;
        $students = $siswa::all();
        return view('students.data', compact('students'));
    }

    public function add(){
        $judul = "Tambah Siswa";
        return view('students.formadd', compact('judul'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $thmasuk = substr(date('Y'),2,4);
    $angka = rand(0,9999);
    $nis = $thmasuk . "" . $angka;
    $fullname = $request->input('fullname');
    $gender = $request->input('gender');
    $address = $request->input('address');
    $emailaddress = $request->input('email');
    $phone = $request->input('phone');
    $data = new Students;
    $data->nis = $nis;
    $data->fullname = $fullname;
    $data->address = $address;
    $data->gender = $gender;
    $data->phone = $phone;
    $data->emailaddress = $emailaddress;
    $data->save();

    return redirect('students')->with('msg', 'Add New data Successfully');
}


    /**
     * Display the specified resource.
     */
    public function edit($nis)
{
    $siswa = Students::where('nis', $nis)->first();
    if($siswa){
        return view('students.formedit')->with([
            'txtnis' => $siswa->nis,
            'txtfullname' => $siswa->fullname,
            'txtaddress' => $siswa->address,
            'txtemail' => $siswa->emailaddress,
            'txtphone' => $siswa->phone,
            'txtgender' => $siswa->gender
        ]);
    }else{
        echo "Tidak ditemukan";
    }
}





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nis)
{
    // Ambil data siswa berdasarkan kolom "nis"
    $student = Students::where('nis', $nis);

    if (!$student) {
        // Lakukan penanganan jika siswa tidak ditemukan
        return redirect('students')->with('msg', 'Data siswa tidak ditemukan.');
    }else{

    // Update data siswa
    $student->fullname = $request->input('fullname');
    $student->gender = $request->input('gender');
    $student->address = $request->input('address');
    $student->emailaddress = $request->input('email');
    $student->phone = $request->input('phone');
    $student->update();

    return redirect('students')->with('msg', 'Data dengan nama siswa ' . $student->fullname . ' berhasil diupdate');
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students,$idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();
        return redirect('students')->with('msg', 'Data dengan nama students'.$data->fullname.'berhasil di-hapus');
    }
}
