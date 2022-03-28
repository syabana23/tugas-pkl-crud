@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Sepatu</h1>
                <a href="{{ url('create') }}" class="btn btn-warning">+Tambah Sepatu</a>
            </div>

          
            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Sepatu</th>
                        <th>Harga jual</th>
                        <th>Harga beli</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataSepatu)
                    <tr>
                        <td>{{ $dataSepatu->id }}</td>
                        <td>{{ $dataSepatu->nama }}</td>
                        <td>{{ $dataSepatu->harga_jual }}</td>
                        <td>{{ $dataSepatu->harga_beli }}</td>
                        <td>
                            <a href="{{ url('/show/'.$dataSepatu->id) }}" class="btn btn-dark">Edit</a>
                            <a href="{{ url('/destroy/'.$dataSepatu->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
    
@endsection