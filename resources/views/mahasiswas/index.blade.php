@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Mahasiswas</h1>
        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mb-3">Create New Mahasiswa</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->kelas }}</td>
                        <td>
                            <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
