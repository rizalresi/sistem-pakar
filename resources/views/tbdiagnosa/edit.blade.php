@extends('layout.main')
@section('title','edit')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Ubah Datadiagnosa</h1>

                    <form method="post" action="/tbdiagnosa/{{ $tbdiagnosa->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="kddiagnosa">Kode diagnosa</label>
                            <input type="text" class="form-control @error('kddiagnosa') is-invalid @enderror" id="" placeholder="masukkan kode diagnosa" name="kddiagnosa" value="{{$tbdiagnosa->kddiagnosa}}">
                            @error('kddiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmdiagnosa">Nama diagnosa</label>
                            <input type="text" class="form-control @error('nmdiagnosa') is-invalid @enderror" id="" placeholder="masukkan nmdiagnosa" name="nmdiagnosa" value="{{$tbdiagnosa->nmdiagnosa}}">
                            @error('nmdiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kdgejala">Kode Gejala</label>
                            <input type="text" class="form-control @error('kdgejala') is-invalid @enderror" id="" placeholder="masukkan kdgejala" name="kdgejala" value="{{$tbdiagnosa->kdgejala}}">
                            @error('kdgejala')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmgejala">Nama Gejala</label>
                            <input type="text" class="form-control @error('nmgejala') is-invalid @enderror" id="" placeholder="masukkan nmgejala" name="nmgejala" value="{{$tbdiagnosa->nmgejala}}">
                            @error('nmgejala')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kdkerusakan">Kode Kerusakan</label>
                            <input type="text" class="form-control @error('kdkerusakan') is-invalid @enderror" id="" placeholder="masukkan kdkerusakan" name="kdkerusakan" value="{{$tbdiagnosa->kdkerusakan}}">
                            @error('kdkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkerusakan">Nama kerusakan</label>
                            <input type="text" class="form-control @error('nmkerusakan') is-invalid @enderror" id="" placeholder="masukkan nmkerusakan" name="nmkerusakan" value="{{$tbdiagnosa->nmkerusakan}}">
                            @error('nmkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Data diagnosa</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection