@extends('layouts.default')

@section('content')
    <div class="justify-items-center">
        <div>
            <h1 class="text-white">{{ $nama }}</h1>{!! DNS2D::getBarcodeHTML("$link", 'QRCODE') !!}
        </div>
    </div>
@endsection
