@extends('layout.main')
@section('title','create')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Tambah Datadiagnosa</h1>

                    <form method="post" action="{{url('/tbdiagnosa')}}">
                        @csrf
                        <div class="form-group">
                            <label for="kddiagnosa">Kode diagnosa</label>
                            <input type="text" class="form-control @error('kddiagnosa') is-invalid @enderror" id="" placeholder="masukkan kode diagnosa" name="kddiagnosa" value="{{ old('kddiagnosa') }}">
                            @error('kddiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmdiagnosa">Nama diagnosa</label>
                            <input type="text" class="form-control @error('nmdiagnosa') is-invalid @enderror" id="" placeholder="masukkan nmdiagnosa" name="nmdiagnosa" value="{{ old('nmdiagnosa') }}">
                            @error('nmdiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kdgejala">Kode Gejala</label>
                            <input type="text" class="form-control @error('kdgejala') is-invalid @enderror" id="" placeholder="masukkan kdgejala" name="kdgejala" value="{{ old('kdgejala') }}">
                            @error('kdgejala')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmgejala">Nama Gejala</label>
                            <input type="text" class="form-control @error('nmgejala') is-invalid @enderror" id="" placeholder="masukkan nmgejala" name="nmgejala" value="{{ old('nmgejala') }}">
                            @error('nmgejala')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kdkerusakan">Kode Kerusakan</label>
                            <input type="text" class="form-control @error('kdkerusakan') is-invalid @enderror" id="" placeholder="masukkan kdkerusakan" name="kdkerusakan" value="{{ old('kdkerusakan') }}">
                            @error('kdkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkerusakan">Nama kerusakan</label>
                            <input type="text" class="form-control @error('nmkerusakan') is-invalid @enderror" id="" placeholder="masukkan nmkerusakan" name="nmkerusakan" value="{{ old('nmkerusakan') }}">
                            @error('nmkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        


                        <button type="submit" class="btn btn-primary">Tambah Data diagnosa</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection