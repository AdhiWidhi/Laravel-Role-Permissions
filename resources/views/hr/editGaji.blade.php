@extends('layouts.hr')
@section('content')

@can('edit gaji')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Gaji</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('hr.dashboard') }}" class="btn btn-warning mt-2">Back</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endcan

@endsection
