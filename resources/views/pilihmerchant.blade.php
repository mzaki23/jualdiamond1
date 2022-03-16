@extends('layouts.default')

@section('content')
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            Link Merchant
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach ($data as $item)
                <li><a class="dropdown-item" href="{{ $item->notelp }}">{{ $item->nama }}</a></li>
            @endforeach
        </ul>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nama Merchant</th>
                <th scope="col">No Telp</th>
                <th scope="col">Qr</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $id)
                <tr>
                    <td>{{ $id->nama }}</td>
                    <td>{{ $id->notelp }}</td>
                    <td><a class="btn btn-primary" href="qrcode/{{ $id->id }}" role="button">Qrcode</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
