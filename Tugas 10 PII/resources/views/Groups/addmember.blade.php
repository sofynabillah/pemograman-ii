@extends('layouts.app')

@section('title', 'Create Groups')

@section('content')

<form action="/groups/addmember/{{ $group->id }}" method="POST" style="width: 20rem">
  @csrf
  @method('put')
  <div class="form-group">
    <label>Nama Anggota : </label>
      <select class="form-select" aria-label="Default select example" name="friend_id">
        <option selected>Pilih Anggota Groups</option>
        @foreach ($friend as $f)
        <option value="{{ $f->id }}">{{ $f->nama }}</option>
        @endforeach
      </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Tambah ke Group</button>
</form>


@endsection