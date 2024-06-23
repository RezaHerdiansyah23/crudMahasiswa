@extends('layouts.app')

@section('title', 'Create Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Create Mahasiswa</h1>
        <form action="{{ route('mahasiswas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
