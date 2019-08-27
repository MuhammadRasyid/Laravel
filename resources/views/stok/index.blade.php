@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Tambah data
            </button>
            <table class="table border" id="myTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama barang</th>
                    <th scope="col">Jumlah Stok</th>
                    <th scope="col">Kondisi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($stoks as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{$item->nama_barang}}</td>
                            <td>{{$item->jumlah_barang}}</td>
                            <td>{{$item->kondisi_barang}}</td>
                            <td>
                                <form action="" method>
                                    @csrf
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('stok.form')

@endsection
