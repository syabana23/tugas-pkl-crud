@extends('layouts.default')
 
@section('content')
    <section>
        <div class="container mt-5" >
            <h1>Edit data sepatu</h1>
            <div class="row">
                <div class="com-lg-8">
                    <form action="{{ url('/update/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Sepatu</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">harga jual</label>
                            <input type="text" name="harga_jual" class="form-control" value="{{ $data->harga_jual }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">harga beli</label>
                            <textarea class="form-control" name="harga_beli">{{ $data->harga_beli }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Sepatu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection