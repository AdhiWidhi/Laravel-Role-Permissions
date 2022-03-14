@extends('layouts.hr')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Absensi</h5>
        <hr>
        @can('print absensi')
            <a href="{{ route('printAbsen') }}" class="btn btn-primary mb-2"><i class="fas fa-print"></i> Print</a>
        @endcan
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Divisi</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Web developer</td>
                <td>Telat</td>
              </tr>

            </tbody>
          </table>
    </div>
</div>

@endsection
