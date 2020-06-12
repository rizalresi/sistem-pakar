@extends('layout.main')
@section('title','tabel video')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto"> 

                    <h1 class="mt-3">Tabel video</h1>

                    <a href="{{url('/tbvideo/create')}}" class="btn btn-primary my-3">Tambah data video</a>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode video</th>
                            <th scope="col">Nama video</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Navigasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tbvideo as $tbvideo)
                            <tr>
                                
                                <th scope="row"> {{ $loop->iteration}} </th>
                                <td> {{$tbvideo->kdvideo}} </td>
                                <td> {{$tbvideo->nmvideo}} </td>
                                <td> {{$tbvideo->keterangan}} </td>
                                <td>
                                    <a href="/tbvideo/{{$tbvideo->id}}/edit" class="btn btn-primary">Edit</a>
                                    <form action="/tbvideo/{{ $tbvideo->id }}" method="post" class="d-inline">
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