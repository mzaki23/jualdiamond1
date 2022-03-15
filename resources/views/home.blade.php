@extends('layouts.default')

@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                </tr>
                <h1></h1>

            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-primary">{{ $data->notelp }}</button>
@endsection
