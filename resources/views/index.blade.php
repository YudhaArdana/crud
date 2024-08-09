{{-- HALAMAN AWAL --}}

@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <div class="col-lg-8">
                <h1>Mahasiswa</h1>
                <a href="{{ url('create')}}" class=" btn btn-primary mt-4">Tambah Mahasiswa</a>
            </div>

            <div class="col-lg-8 mt-4">
                <table class="table table-striped">
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataMahasiswa)
                        <tr>
                            {{-- <td>{{ $dataMahasiswa->id }}</td> --}}
                            <td>{{ $dataMahasiswa->nim }}</td>
                            <td>{{ $dataMahasiswa->nama }}</td>
                            <td>{{ $dataMahasiswa->alamat }}</td>
                            <td>{{ $dataMahasiswa->no_telp }}</td>
                            <td>
                                <a href="{{ url('/show/'.$dataMahasiswa->id)}}" class="btn btn-warning">Edit</a>    
                                <a href="{{ url('/destroy/'.$dataMahasiswa->id)}}" class="btn btn-danger">Delete</a>    
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
