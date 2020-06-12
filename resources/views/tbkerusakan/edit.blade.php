@extends('layout.main')
@section('title','edit')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Ubah Datakerusakan</h1>

                    <form method="post" action="/tbkerusakan/{{ $tbkerusakan->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="kdkerusakan">Kode kerusakan</label>
                            <input type="text" class="form-control @error('kdkerusakan') is-invalid @enderror" id="" placeholder="masukkan kode kerusakan" name="kdkerusakan" value="{{$tbkerusakan->kdkerusakan}}">
                            @error('kdkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkerusakan">Nama kerusakan</label>
                            <input type="text" class="form-control @error('nmkerusakan') is-invalid @enderror" id="" placeholder="masukkan nmkerusakan" name="nmkerusakan" value="{{$tbkerusakan->nmkerusakan}}">
                            @error('nmkerusakan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kdkategori">Kode kategori</label>
                            <input type="text" class="form-control @error('kdkategori') is-invalid @enderror" id="" placeholder="masukkan kdkategori" name="kdkategori" value="{{$tbkerusakan->kdkategori}}">
                            @error('kdkategori')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkategori">Nama kategori</label>
                            <input type="text" class="form-control @error('nmkategori') is-invalid @enderror" id="" placeholder="masukkan nmkategori" name="nmkategori" value="{{$tbkerusakan->nmkategori}}">
                            @error('nmkategori')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="" placeholder="masukkan keterangan" name="keterangan" value="{{$tbkerusakan->keterangan}}">
                            @error('keterangan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Data kerusakan</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection