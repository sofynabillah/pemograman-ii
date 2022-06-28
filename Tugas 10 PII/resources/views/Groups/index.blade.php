@extends('layouts.app')

@section('title', 'Friends')

@section('content')

<a href="/groups/create" class="btn btn-primary mb-2" >Tambah Groups</a>
@foreach ($groups as $group)
<div class="card mb-2" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a>
      <p class="card-text">{{ $group['description'] }}.</p>
      <hr>
        <a href="/groups/addmember/{{ $group['id'] }}" class="btn btn-primary mb-2" >Tambah Anggota</a>
        <ul class="list-group"> 
          @foreach ($group->friends as $friend)
            
              <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $friend->nama }}
                <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POST">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-sm btn-danger">x</button>
                </form>
              </li>
          
          
          @endforeach
        </ul>
      <hr>
      <div class="class row">
        <div class="class col-6">
          <a href="/groups/{{ $group['id'] }}/edit" class="btn btn-sm btn-warning" type="submit">Edit Group</a>
        </div>

        <div class="class col-6">
          <form action="/groups/{{ $group['id'] }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">Delete Group</button>
          </form>
        </div>
      </div>
  
  </div>
</div>
 
@endforeach
<div>
  {{ $groups->links() }}
</div>
@endsection