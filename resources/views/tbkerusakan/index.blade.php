@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel kerusakan</h1>

                    <a href="{{url('/tbkerusakan/create')}}" class="btn btn-primary my-3">Tambah data kerusakan</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode kerusakan</th>
                            <th scope="col">Nama kerusakan</th>
                            <th scope="col">Kode Kategori</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbkerusakan as $tbkerusakan)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbkerusakan->kdkerusakan}} </td>
                                <td> {{$tbkerusakan->nmkerusakan}} </td>
                                <td> {{$tbkerusakan->kdkategori}} </td>
                                <td> {{$tbkerusakan->nmkategori}} </td>
                                <td> {{$tbkerusakan->keterangan}} </td>
                                <td>
                                    <a href="/tbkerusakan/{{$tbkerusakan->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbkerusakan/{{ $tbkerusakan->id }}" method="post" class="d-inline">
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