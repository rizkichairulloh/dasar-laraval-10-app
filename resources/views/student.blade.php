@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    <div class="p-4">
        <h2>DAFTAR MURID</h2>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jk }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
