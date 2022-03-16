@extends('layouts.default')

@section('content')
    <div class="bg-white vh-100 text-center align-content-center">
        <h1 class="text-dark">{{ $nama }}</h1>
        <img src="data:image/png;base64,{!! DNS2D::getBarcodePNG("$link", 'QRCODE', '10', '10') !!}" width="300" height="300" alt="">

    </div>
@endsection
