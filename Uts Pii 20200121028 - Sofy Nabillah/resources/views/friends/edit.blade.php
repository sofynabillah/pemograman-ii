@extends('layouts.app')

@section('title', 'Friends')

@section('content')

{{-- tampilan edit  --}}
<section id="edit" class="about">
  <div class="container">

    <div class="section-title">
      <h3 class="mt-5">Edit <span class="text-primary">Friends</span></h3>
    </div>
    <div class="row content">
      <div class="d-flex flex-wrap justify-content-start">
          <div class="card m-3 border-2 border-primary" style="width: 20rem; border-radius: 20px;">
            <div class="card-body">
              {{-- mengambil data friends berdasarkan id --}}
              <form action="/friends/{{ $friends['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group m-3">
                  <label for="exampleInputEmail1">Nama</label>
                  {{-- form untuk edit nama  --}}
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $friends['nama'] }}">
                  @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group m-3">
                  <label for="exampleInputPassword1">No Telpon</label>
                  {{-- form untuk edit no_tlp  --}}
                  <input type="number" class="form-control" name="no_tlp" id="exampleInputPassword1" value={{ old('no_tlp')? old('no_tlp') : $friends['no_tlp'] }}>
                  @error('no_tlp')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group m-3">
                  <label for="alamat">Alamat</label>
                  {{-- form untuk edit alamat  --}}
                  <input type="text" class="form-control" name="alamat" id="alamat" value={{ old('alamat')? old('alamat') : $friends['alamat'] }}>
                  @error('alamat')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="btn-group mt-3 d-flex flex-wrap justify-content-end" >
                  {{-- tombol  --}}
                  <button type="submit" class="btn btn-success me-1"style="border-radius: 10px;">Update</button>
                  <a class="btn btn-outline-danger ms-1" href="/#about" role="button" style="border-radius: 10px;">Cancel</a>
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>
  </div>
</section> 

    
@endsection