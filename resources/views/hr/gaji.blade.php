@extends('layouts.hr')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Gaji Karyawan</h5>

            <hr>
            @can('print gaji')
                <a href="{{ route('print gaji') }}" class="btn btn-primary mb-2"><i class="fas fa-print"></i> Print data</a>
            @endcan
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Web Developer</td>
                        <td>Rp. 15.000.000</td>
                        <td>

                            <div class="row">
                                <div class="col">
                                    @can('edit gaji')
                                        <a href="{{ route('hr.edit.gaji') }}" class="btn btn-primary">Edit</a>
                                    @endcan
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
