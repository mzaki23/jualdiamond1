@extends('layouts.default')

@section('content')
    <h1 class="text-white text-center py-5">Jual Diamond Game</h1>
    <div class="card-group">
        <div class="card">
            <img src="./img/logohiggs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Higgs Domino</h5>
                <p class="card-text">
                    <span class="fw-bold">30M</span> Rp.6000.-<span class="fw-bold">60M</span> Rp.11.500.- <br>
                    <span class="fw-bold">200M</span>
                    Rp.33.500.- <span class="fw-bold">400M</span>
                    Rp.66.000.- <br> <span class="fw-bold">2B</span>
                    Rp.275.000.- <span class="fw-bold">4B</span>
                    Rp.550.000.-
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./img/logocod.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Call Of Duty Garena</h5>
                <p class="card-text">tes.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./img/logoff.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Free Fire Garena</h5>
                <p class="card-text">tes.</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center pt-2">
        <span class="text-white mx-2">hubungi {{ $data->nama }}</span>
        <a class="btn btn-primary" href="https://wa.me/{{ $data->notelp }}" role="button">{{ $data->notelp }}</a>
    </div>
@endsection
