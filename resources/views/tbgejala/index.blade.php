@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel gejala</h1>

                    <a href="{{url('/tbgejala/create')}}" class="btn btn-primary my-3">Tambah data gejala</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode gejala</th>
                            <th scope="col">Nama gejala</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbgejala as $tbgejala)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbgejala->kdgejala}} </td>
                                <td> {{$tbgejala->nmgejala}} </td>
                                <td> {{$tbgejala->keterangan}} </td>
                                <td>
                                    <a href="/tbgejala/{{$tbgejala->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbgejala/{{ $tbgejala->id }}" method="post" class="d-inline">
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