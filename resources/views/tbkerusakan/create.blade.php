@extends('layout.main')
@section('title','create')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Tambah Datakerusakan</h1>

                    <form method="post" action="{{url('/tbkerusakan')}}">
                        @csrf
                        <div class="form-group">
                            <label for="kdkerusakan">Kode kerusakan</label>
                            <input type="text" class="form-control @error('kdkerusakan') is-invalid @enderror" id="" placeholder="masukkan kode kerusakan" name="kdkerusakan" value="{{ old('kdkerusakan') }}">
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

                        <div class="form-group">
                            <label for="kdkategori">Kode kategori</label>
                            <input type="text" class="form-control @error('kdkategori') is-invalid @enderror" id="" placeholder="masukkan kdkategori" name="kdkategori" value="{{ old('kdkategori') }}">
                            @error('kdkategori')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkategori">Nama Kategori</label>
                            <input type="text" class="form-control @error('nmkategori') is-invalid @enderror" id="" placeholder="masukkan nmkategori" name="nmkategori" value="{{ old('nmkategori') }}">
                            @error('nmkategori')
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


                        <button type="submit" class="btn btn-primary">Tambah Data kerusakan</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection