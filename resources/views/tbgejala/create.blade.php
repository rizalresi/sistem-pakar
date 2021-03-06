@extends('layout.main')
@section('title','create')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Tambah Datagejala</h1>

                    <form method="post" action="{{url('/tbgejala')}}">
                        @csrf
                        <div class="form-group">
                            <label for="kdgejala">Kode gejala</label>
                            <input type="text" class="form-control @error('kdgejala') is-invalid @enderror" id="" placeholder="masukkan kode gejala" name="kdgejala" value="{{ old('kdgejala') }}">
                            @error('kdgejala')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmgejala">Nama gejala</label>
                            <input type="text" class="form-control @error('nmgejala') is-invalid @enderror" id="" placeholder="masukkan nmgejala" name="nmgejala" value="{{ old('nmgejala') }}">
                            @error('nmgejala')
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


                        <button type="submit" class="btn btn-primary">Tambah Data gejala</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection