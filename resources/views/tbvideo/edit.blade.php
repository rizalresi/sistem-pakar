@extends('layout.main')
@section('title','edit-video')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Ubah Datavideo</h1>

                    <form method="post" action="/tbvideo/{{ $tbvideo->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="kdvideo">Kode video</label>
                            <input type="text" class="form-control @error('kdvideo') is-invalid @enderror" id="" placeholder="masukkan kode video" name="kdvideo" value="{{$tbvideo->kdvideo}}">
                            @error('kdvideo')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nmvideo">Nama video</label>
                            <input type="text" class="form-control @error('nmvideo') is-invalid @enderror" id="" placeholder="masukkan nmvideo" name="nmvideo" value="{{$tbvideo->nmvideo}}">
                            @error('nmvideo')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="" placeholder="masukkan keterangan" name="keterangan" value="{{$tbvideo->keterangan}}">
                            @error('keterangan')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Data video</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection