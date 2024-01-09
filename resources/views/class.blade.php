@extends('layout.mainlayout')

@section('title', 'Classroom')

@section('content')
    <div class="p-4">
        <h2>DAFTAR KELAS</h2>
        <table class='table'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            @foreach ($classList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->namakelas }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
