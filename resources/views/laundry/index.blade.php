@extends('layouts.app')

@section('content')

    <h2>Data Laundry
        <a class="btn btn-primary btn-sm float-end" href="{{ url('laundry/create') }}">Tambah Data Produk</a>
    </h2>
    <table class="table table-bordered table-hover">
        @if ($rows->isEmpty())
            <h4 class="mt-5 text-center">Tidak Ada Data.<br> Harap Masukkan Data terlebih dahulu</h4>
        @else
            <tr class="table-warning">
                <th id="" class="text-center">ID</th>
                <th id="" class="text-center">NAMA PRODUK</th>
                <th id="" class="text-center">JENIS PRODUK</th>
                <th id="" class="text-center">HARGA</th>
                <th id="" class="text-center">EDIT</th>
                <th id="" class="text-center">DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr class="table-light">
                    <td class="text-center">{{ $row->produk_id }}</td>
                    <td class="text-center">{{ $row->produk_name }}</td>
                    <td class="text-center">{{ $row->produk_jenis }}</td>
                    <td class="text-center">{{ $row->produk_harga }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ url('laundry/' . $row->produk_id . '/edit') }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form class=" btn-sm float-none" action="{{ url('laundry/' . $row->produk_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger justify-content-center">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    @extends('layouts.footer')
@endsection
