@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel kategori</h1>

                    <a href="{{url('/tbkategori/create')}}" class="btn btn-primary my-3">Tambah data kategori</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode kategori</th>
                            <th scope="col">Nama kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbkategori as $tbkategori)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbkategori->kdkategori}} </td>
                                <td> {{$tbkategori->nmkategori}} </td>
                                <td> {{$tbkategori->keterangan}} </td>
                                <td>
                                    <a href="/tbkategori/{{$tbkategori->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbkategori/{{ $tbkategori->id }}" method="post" class="d-inline">
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