@extends('layout.main')
@section('title','home')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel diagnosa</h1>

                    <a href="{{url('/tbdiagnosa/create')}}" class="btn btn-primary my-3">Tambah data diagnosa</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode diagnosa</th>
                            <th scope="col">Nama diagnosa</th>
                            <th scope="col">Kode Gejala</th>
                            <th scope="col">Nama Gejala</th>
                            <th scope="col">Kode Kerusakan</th>
                            <th scope="col">Nama kerusakan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbdiagnosa as $tbdiagnosa)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbdiagnosa->kddiagnosa}} </td>
                                <td> {{$tbdiagnosa->nmdiagnosa}} </td>
                                <td> {{$tbdiagnosa->kdgejala}} </td>
                                <td> {{$tbdiagnosa->nmgejala}} </td>
                                <td> {{$tbdiagnosa->kdkerusakan}} </td>
                                <td> {{$tbdiagnosa->nmkerusakan}} </td>
                                <td>
                                    <a href="/tbdiagnosa/{{$tbdiagnosa->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbdiagnosa/{{ $tbdiagnosa->id }}" method="post" class="d-inline">
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