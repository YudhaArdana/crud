{{-- HALAMAN EDIT DATA --}}

@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <p class="h1">Edit Data</p>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{$data->nim}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat" required cols="30" rows="10">
                                {{$data->alamat}}
                            </textarea>
                        </div>

                        <div class="form-group mb-5">
                            <label for="nama">No Telp</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{$data->no_telp}}" required>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class=" btn btn-success">Simpan</button>
                            <a href="{{ url('/')}} " class="btn btn-light">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
