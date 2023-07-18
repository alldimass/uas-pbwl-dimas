@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Laundry</h3>
        <form action="{{ url('/produk/' . $row->produk_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>NAMA PRODUK</label>
                <input type="text" class="form-control" name="produk_name" value="{{ $row->produk_name }}"></>
            </div>
            <div class="mb-3">
                <label>JENIS PRODUK</label>
                <input type="text" class="form-control" name="produk_jenis" value="{{ $row->produk_jenis }}"></>
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga" value="{{ $row->produk_harga }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection