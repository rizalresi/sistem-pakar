@extends('layout.main')
@section('title','edit')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Ubah Data Pelanggan Menginap</h1>

                    <form method="post" action="/pelanggan/{{ $pelanggan->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Ubah Nama Pelanggan</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="" placeholder="masukkan kode diagnosa" name="nama" value="{{$pelanggan->nama}}">
                            @error('nama')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_hp">Ubah Nomor Handphone</label>
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="" placeholder="masukkan no_hp" name="no_hp" value="{{$pelanggan->no_hp}}">
                            @error('no_hp')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Ubah Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="" placeholder="masukkan alamat" name="alamat" value="{{$pelanggan->alamat}}">
                            @error('alamat')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <!-- <div class="form-group">
                          <label>Ubah Tanggal Checkin</label>
                           <input type="text" id="datepicker" class="form-control datetimepicker-input @error('checkin') is-invalid @enderror" name="checkin" value="{{$pelanggan->checkin}}" data-toggle="datetimepicker" data-target="#datepicker" autocomplete="on" />
                        </div> -->
                        
                        <div class="form-group">
                            <label for="checkin">Ubah Tanggal Checkin</label>
                            <input type="text" class="form-control @error('checkin') is-invalid @enderror" id="" placeholder="masukkan checkin" name="checkin" value="{{$pelanggan->checkin}}">
                            @error('checkin')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="checkout">Ubah Tanggal Checkout</label>
                            <input type="text" class="form-control @error('checkout') is-invalid @enderror" id="" placeholder="masukkan checkout" name="checkout" value="{{$pelanggan->checkout}}">
                            @error('checkout')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="qrcode">Ubah QRcode</label>
                            <input type="text" class="form-control @error('qrcode') is-invalid @enderror" id="" placeholder="masukkan qrcode" name="qrcode" value="{{$pelanggan->qrcode}}">
                            @error('qrcode')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah Data Pelanggan</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection