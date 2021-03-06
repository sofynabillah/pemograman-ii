@extends('layouts.dashboard')

@section('title', 'Friends')

@section('content')
    <form action="/friends" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp"
                value="{{ old('nama') }}">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label">No Telpon</label>
            <input type="number" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') }}">
            @error('no_tlp')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="exampleInputPassword1"
                value="{{ old('alamat') }}">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection