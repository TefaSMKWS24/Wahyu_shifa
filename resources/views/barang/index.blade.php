@extends('layout.layout')

@section('header')

<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>

@endsection

@section('content')

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $brg)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_barang }}</td>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td>
                <a href="/barang/{{ $item->kode_barang }}/edit" class="btn btn-primary">Edit</a>
                <a href="/barang/delete/{{ $item->kode_barang }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
