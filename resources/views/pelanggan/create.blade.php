@extends('layout.main')
@section('title','create')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <h1 class="mt-3">Form Tambah Pelanggan</h1>

                    <form method="post" action="{{url('/pelanggan')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama pelanggan</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="" placeholder="masukkan nama pelanggan" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat pelanggan</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="" placeholder="masukkan alamat" name="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="" placeholder="masukkan no_hp" name="no_hp" value="{{ old('no_hp') }}">
                            @error('no_hp')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Periode Menginap</label>

                            <div class="input-group">
                               <input type="text" id="startdate" class="form-control datetimepicker-input @error('checkin') is-invalid @enderror" placeholder="masukkan tanggal checkin" name="checkin" value="{{ old('checkin') }}" data-toggle="datetimepicker" data-target="#startdate" autocomplete="off" />
                               @error('checkin')
                                <div class="invalid-feedback"> {{ $message }} </div>
                               @enderror
                            <div class="input-group-append">
                            <span class="input-group-text">s/d</span>
                            </div>
                               <input type="text" id="enddate" class="form-control datetimepicker-input @error('checkout') is-invalid @enderror" placeholder="masukkan tanggal checkout" name="checkout" value="{{ old('checkout') }}" data-toggle="datetimepicker" data-target="#enddate" autocomplete="off" />
                               @error('checkout')
                                <div class="invalid-feedback"> {{ $message }} </div>
                               @enderror
                           </div>
                        </div>
   


                        <!-- <div class="form-group">
                            <label for="checkin">Checkin</label>
                            <input type="text" class="form-control @error('checkin') is-invalid @enderror" id="" placeholder="masukkan checkin" name="checkin" value="{{ old('checkin') }}">
                            @error('checkin')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="checkout">Checkout</label>
                            <input type="text" class="form-control @error('checkout') is-invalid @enderror" id="" placeholder="masukkan checkout" name="checkout" value="{{ old('checkout') }}">
                            @error('checkout')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div> -->

                        <div class="form-group">
                            <label for="qrcode">QRcode</label>
                            <input type="text" class="form-control @error('qrcode') is-invalid @enderror" id="" placeholder="masukkan qrcode" name="qrcode" value="{{ old('qrcode') }}">
                            @error('qrcode')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        


                        <button type="submit" class="btn btn-primary">Tambah Data pelanggan</button>

                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
       
</main>
@endsection