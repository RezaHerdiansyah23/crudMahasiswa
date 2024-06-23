@extends('layouts.app')

@section('title', 'Show Mahasiswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Detail Mahasiswa</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $mahasiswa->kelas }}</td>
            </tr>
        </table>
        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
