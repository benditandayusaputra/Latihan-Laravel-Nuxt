<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EmployeeResource(Employee::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip'               => 'required|unique:employees',
            'nama'              => 'required',
            'tempat_lahir'      => 'required',
            'alamat'            => 'required',
            'tanggal_lahir'     => 'required',
            'jenis_kelamin'     => 'required',
            'golongan'          => 'required',
            'eselon'            => 'required',
            'jabatan'           => 'required',
            'tempat_kerja'      => 'required',
            'agama'             => 'required'
        ], [
            'nip.required'              => 'NIP harus diisi!',
            'nip.unique'                => 'NIP sudah ada',
            'nama.required'             => 'Nama harus diisi!',
            'tempat_lahir.required'     => 'Tempat Lahir harus diisi!',
            'alamat.required'           => 'Alamat harus diisi!',
            'tanggal_lahir.required'    => 'Tanggal Lahir harus diisi!',
            'jenis_kelamin.required'    => 'Jenis Kelamin harus diisi!',
            'golongan.required'         => 'Golongan harus diisi!',
            'eselon.required'           => 'Eselon harus diisi!',
            'jabatan.required'          => 'Jabatan harus diisi!',
            'tempat_kerja.required'     => 'Tempat Kerja harus diisi!',
            'agama.required'            => 'Agama harus diisi!'
        ]);

        $employee = Employee::create($request->all());

        return new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nip'               => 'required',
            'nama'              => 'required',
            'tempat_lahir'      => 'required',
            'alamat'            => 'required',
            'tanggal_lahir'     => 'required',
            'jenis_kelamin'     => 'required',
            'golongan'          => 'required',
            'eselon'            => 'required',
            'jabatan'           => 'required',
            'tempat_kerja'      => 'required',
            'agama'             => 'required'
        ], [
            'nip.required'              => 'NIP harus diisi!',
            'nip.unique'                => 'NIP sudah ada',
            'nama.required'             => 'Nama harus diisi!',
            'tempat_lahir.required'     => 'Tempat Lahir harus diisi!',
            'alamat.required'           => 'Alamat harus diisi!',
            'tanggal_lahir.required'    => 'Tanggal Lahir harus diisi!',
            'jenis_kelamin.required'    => 'Jenis Kelamin harus diisi!',
            'golongan.required'         => 'Golongan harus diisi!',
            'eselon.required'           => 'Eselon harus diisi!',
            'jabatan.required'          => 'Jabatan harus diisi!',
            'tempat_kerja.required'     => 'Tempat Kerja harus diisi!',
            'agama.required'            => 'Agama harus diisi!'
        ]);

        $employee->update($request->all());

        return new EmployeeResource($employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return new EmployeeResource($employee);
    }

    public function export_excel()
    {
        return Excel::download(new EmployeeExport, 'pegawai.xlsx');
    }
}
