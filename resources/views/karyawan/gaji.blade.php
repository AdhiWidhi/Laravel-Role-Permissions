@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Data Gaji Karyawan</h5>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Divisi</th>
        <th scope="col">Gaji</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Web Developer</td>
        <td>Rp. 15.000.000</td>

      </tr>

    </tbody>
  </table>
    </div>
</div>
@endsection
