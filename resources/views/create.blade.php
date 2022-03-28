@extends('layouts.default')
 
@section('content')
    <section>
        <div class="container mt-5" >
            <h1>Tambah Sepatu</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Sepatu </label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">harga jual </label>
                            <input type="text" name="harga_jual" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">harga beli </label>
                            <textarea class="form-control" name="harga_beli"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-warning">Tambah Sepatu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection