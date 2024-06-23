@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Edit Mahasiswa</h1>
        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
