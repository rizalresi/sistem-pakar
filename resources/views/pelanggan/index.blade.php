@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Daftar Pelanggan Menginap</h1>

                    <a href="{{url('/pelanggan/create')}}" class="btn btn-primary my-3">Tambah data Pelanggan</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Checkin</th>
                            <th scope="col">Checkout</th>
                            <th scope="col">QRcode</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $pelanggan as $pelanggan)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$pelanggan->nama}} </td>
                                <td> {{$pelanggan->alamat}} </td>
                                <td> {{$pelanggan->no_hp}} </td>
                                <td> {{$pelanggan->checkin}} </td>
                                <td> {{$pelanggan->checkout}} </td>
                                <td> {{$pelanggan->qrcode}} </td>
                                <td>
                                    <a href="/pelanggan/{{$pelanggan->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/pelanggan/{{ $pelanggan->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
       
</main>
@endsection