@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                        
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <h5 class="card-title text-center">Selamat Datang di DIMAS LAUNDRY</h5>
                        <p class="card-text text-center">Bersih, Cepat, Rapi, dan Wangi!</p>
                        <a href="{{ url('/pelanggan') }}"
                            class="btn btn-warning my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
