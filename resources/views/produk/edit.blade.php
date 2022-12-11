@extends('layouts.app')
@section('title','Edit Produk SR STORE')
@section('content')
<h1 class="mb-3">PROSES EDIT PRODUK</h1>
<form action="{{ route('produks.updateproduct',$produk->id) }}" method="POST">
  @method('put')
    @csrf
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="merk_id" value="{{ $produk->merk_id }}" hidden>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_produk" value="{{ $produk->kode_produk }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $produk->nama }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">IDR</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga" value="{{ $produk->harga }}">
    </div>
    <button type="submit" class="btn btn-info">INPUT PRODUK BARU</button>
  </form>
@endsection
