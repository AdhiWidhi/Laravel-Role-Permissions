@extends('layouts.hr')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Karyawan
            </h5>

            <hr>

            <table class="table table-bordered">
                <a href="{{ route('hr.karyawan.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Add data</a>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Divisi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Anggota</td>
                        <td>Web Developer</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
