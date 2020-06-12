@extends('layout.main')
@section('title','create')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Tambah Datasolusi</h1>

                    <form method="post" action="{{url('/tbsolusi')}}">
                        @csrf
                        <div class="form-group">
                            <label for="kdsolusi">Kode solusi</label>
                            <input type="text" class="form-control @error('kdsolusi') is-invalid @enderror" id="" placeholder="masukkan kode solusi" name="kdsolusi" value="{{ old('kdsolusi') }}">
                            @error('kdsolusi')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="solusi">Solusi</label>
                            <input type="text" class="form-control @error('solusi') is-invalid @enderror" id="" placeholder="masukkan solusi" name="solusi" value="{{ old('solusi') }}">
                            @error('solusi')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kddiagnosa">Kode Diagnosa</label>
                            <input type="text" class="form-control @error('kddiagnosa') is-invalid @enderror" id="" placeholder="masukkan kddiagnosa" name="kddiagnosa" value="{{ old('kddiagnosa') }}">
                            @error('kddiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmdiagnosa">Nama Diagnosa</label>
                            <input type="text" class="form-control @error('nmdiagnosa') is-invalid @enderror" id="" placeholder="masukkan nmdiagnosa" name="nmdiagnosa" value="{{ old('nmdiagnosa') }}">
                            @error('nmdiagnosa')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="" placeholder="masukkan keterangan" name="keterangan" value="{{ old('keterangan') }}">
                            @error('keterangan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Tambah Data solusi</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection