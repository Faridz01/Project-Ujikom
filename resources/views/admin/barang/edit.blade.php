@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- @include('layouts/_flash') --}}
                <div class="card">
                    <div class="card-header">
                        nambah Data Barang
                    </div>
                    <div class="card-body">
                        <form action="{{ route('barang.update',$barangs->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control  @error('nama_barang') is-invalid @enderror" value="{{$barangs->nama_barang}}" name="nama_barang">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Merk</label>
                                <input type="text" class="form-control  @error('merk') is-invalid @enderror" value="{{$barangs->merk}}" name="merk">
                                @error('merk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok Barang</label>
                                <input type="text" class="form-control  @error('stok_barang') is-invalid @enderror" value="{{$barangs->stok_barang}}" name="stok_barang">
                                @error('stok_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Barang</label>
                                <input type="number" class="form-control  @error('harga_barang') is-invalid @enderror" value="{{$barangs->harga_barang}}" name="harga_barang">
                                @error('harga_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
