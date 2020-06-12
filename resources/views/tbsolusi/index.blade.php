@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel solusi</h1>

                    <a href="{{url('/tbsolusi/create')}}" class="btn btn-primary my-3">Tambah data solusi</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode solusi</th>
                            <th scope="col">solusi</th>
                            <th scope="col">Kode Diagnosa</th>
                            <th scope="col">Nama Diagnosa</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbsolusi as $tbsolusi)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbsolusi->kdsolusi}} </td>
                                <td> {{$tbsolusi->solusi}} </td>
                                <td> {{$tbsolusi->kddiagnosa}} </td>
                                <td> {{$tbsolusi->nmdiagnosa}} </td>
                                <td> {{$tbsolusi->keterangan}} </td>
                                <td>
                                    <a href="/tbsolusi/{{$tbsolusi->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbsolusi/{{ $tbsolusi->id }}" method="post" class="d-inline">
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