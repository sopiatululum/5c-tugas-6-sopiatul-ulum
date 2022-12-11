@extends('layouts.app')
@section('title','Input Produk SR STORE')
@section('content')
<h1 class="mb-3">Barang Baru</h1>
<form action="{{ route('merks.storeproduct') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Merk</label>
      <select class="form-select" aria-label="Default select example" name="merk_id">
          @foreach ($merk as $item)
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_produk">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">IDR</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
    </div>
    <button type="submit" class="btn btn-info">INPUT PRODUK BARU</button>
  </form>
@endsection
