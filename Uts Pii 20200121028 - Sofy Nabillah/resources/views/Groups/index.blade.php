@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<!-- ======= About Section ======= -->
<section id="portfolio" class="about py-5 mb-5">
  <div class="container">

    <div class="section-title d-flex flex-wrap justify-content-center">
      <div class="">
        <h2 class=" m-auto  py-2 text-primery"><span class="text-primary">Groups</span></h2>
      </div>
    </div>
    <div class="mb-5 d-flex flex-wrap justify-content-center">
      @php
          $count = DB::table('groups')->count();
          $price = DB::table('history_groups')->max('id');
      @endphp
      {{-- menampilkan jumlah data-data groups  --}}
      <div class="text-muted"><h5><i> Friends : </i>@php echo $count @endphp, <i> Pernah Dibuat : </i>@php echo $price @endphp, <i> Terhapus : </i>@php echo $price - $count @endphp</h5></div>
    </div>

  <div class="row content">
    <a class="btn btn-primary m-4 col-lg-2 text-center " href="#" role="button" data-bs-toggle="modal" data-bs-target="#createModal">New Group</a>  
      <div class="d-flex flex-wrap justify-content-start  ">

        {{-- menampilkan semua data groups  --}}
        @foreach ($groups as $group)

        <div class="card m-3 border-primary border-2" style="width: 18rem; border-radius: 20px;">
          <div class="card-body">
            <div class="d-flex flex-wrap justify-content-between">
              <div>
                <a class="text-decoration-none" href="/groups/{{ $group['id'] }}">
                  <div style="width: 12rem;">
                    {{-- menampilkan nama groups --}}
                    <h3 class="card-title">{{ $group['name'] }}</h3>
                    {{-- menampilkan  description --}}
                    <h5 class="card-subtitle mb-4 text-muted">{{ $group['description'] }}</h5>
                  </div>
                </a>
                <a class="btn btn-outline-success d-flex justify-content-center " href="/groups/{{ $group['id'] }}/edit" title="Edit" role="button">Edit</a>

              </div>
              <div >
                <form action="/groups/{{$group['id']}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger d-flex border-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="bi bi-x-lg"></i></button>
                </form>
              </div>
            </div>

            {{-- list member groups--}}
            <hr>
            <h5><b>Member List</b><a class="btn btn-outline-primary mb-2 ms-2" href="/groups/addmember/{{ $group['id'] }}" role="button">Member <i class="bi bi-plus-lg"></i></a></h5>
            
            <div>
              <ul class="list-group ">
                @foreach ($group->friends as $friend)
                <li class="list-group-item border-dark d-flex justify-content-between align-items-center" style="border-radius: 10px;">
                  {{-- menampilkan nama memeber dari groups --}}
                  <h5>{{$friend->nama}}</h5>
                  <span class="">
                    <form action="/groups/deletemember/{{$friend->id}}" method="POST">
                      @csrf
                      @method('PUT')
                      <button type="submit" class="btn btn-outline-danger border-0 d-flex " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="bi bi-x-lg"></i></button>
                    </form>
                  </span>
                </li>
                @endforeach
              </ul>
              
            </div>      
            {{-- end list --}}

            

          </div>
        </div>

        @endforeach
        {{-- {{ $groups->links() }} --}}
      </div>
      {{-- create MODAL// tamppilan membuat groups --}}
      <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Group</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="/groups/#portfolio" method="POST">
                @csrf
                <div class="form-group">
                  {{-- input nama --}}
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required value="{{ old('nama') }}">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- input Description --}}
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <input type="text" class="form-control" name="description" id="exampleInputPassword1" required value="{{ old('description') }}">
                  @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="modal-footer mt-3">
                  {{-- button submit --}}
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close" role="button">Cancel</a>
                </div>
              </form>

            </div>
            
          </div>
        </div>
      </div>
    {{-- endModal --}}
    </div>
  </div>
  </div>
</section><!-- End About Section -->

@endsection