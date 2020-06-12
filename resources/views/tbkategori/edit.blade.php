@extends('layout.main')
@section('title','edit')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Ubah Datakategori</h1>

                    <form method="post" action="/tbkategori/{{ $tbkategori->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="kdkategori">Kode kategori</label>
                            <input type="text" class="form-control @error('kdkategori') is-invalid @enderror" id="" placeholder="masukkan kode kategori" name="kdkategori" value="{{$tbkategori->kdkategori}}">
                            @error('kdkategori')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmkategori">Nama kategori</label>
                            <input type="text" class="form-control @error('nmkategori') is-invalid @enderror" id="" placeholder="masukkan nmkategori" name="nmkategori" value="{{$tbkategori->nmkategori}}">
                            @error('nmkategori')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="" placeholder="masukkan keterangan" name="keterangan" value="{{$tbkategori->keterangan}}">
                            @error('keterangan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Data kategori</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection