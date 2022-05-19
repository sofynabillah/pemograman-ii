@extends('layouts.app')

@section('title', 'Coba')

@section('content')

{{-- tampilan detai groups --}}
<section id="show" class="about">
    <div class="container">
  
      <div class="section-title">
        <h2 class="mt-5">Groups</h2>
        <h3>Detail <span class="text-primary">Groups</span></h3>
      </div>
      <div class="row content">
        <div class="d-flex flex-wrap justify-content-start">
          <div class="card my-4 border-primary border-2" style="width: auto; border-radius: 20px">
            <div class="card-body mb-2">
              {{-- tombol back  --}}
                  <a class="btn btn-outline-primary" href="/groups/#portfolio" role="button"><i class="bi bi-arrow-left"></i></a>
                  {{-- menampilkan nama --}}
                  <h3 class="card-title my-2"> Name : {{ $group['name'] }} </h3>
                  {{-- menampilkan description --}}
                  <h5 class="card-subtitle my-2"> Description : {{ $group['description'] }} </h5>
                  <hr>
                  <div class="">
                    <div class="my-2">
                      @php
                          $id = $group['id'];
                          $count = DB::table('friends')->where('groups_id','=',$id)->count();
                          $all = DB::table('history_friends')->where('groups_id','=',$id)->count();
                          
                      @endphp
                      {{-- menampilkan jumlah data-data member yang ada --}}
                      <div class="">
                          <h5 class="text-start"> Member : @php echo $count; @endphp</h5>
                          <h5 class="text-start">Ever Added : @php echo $all; @endphp</h5>
                          <h5 class="text-start">Leave : @php echo $all - $count; @endphp </h5>
                      </div>
                      <hr>
                    </div>

                    {{-- list member--}}
                        
                        <div>
                          <h5><b>Member List</b><a class="btn btn-outline-primary ms-2" href="/groups/addmember/{{ $group['id'] }}" role="button">Member <i class="bi bi-plus-lg"></i></a></h5>
                          
                          <div style="width: 16rem;height: 200px;" class="overflow-auto mt-2 ">
                            <ul class="list-group ">
                              @foreach ($group->friends as $friend)
                              <li class="list-group-item d-flex justify-content-between align-items-center border-dark" style="border-radius: 10px">
                                {{-- menampilkan nama member  --}}
                                <h5>{{$friend->nama}}</h5>
                                <span class="">
                                  <form action="/groups/deletemember/{{$friend->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-outline-danger d-flex border-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="bi bi-x-lg"></i></button>
                                  </form>
                                </span>
                              </li>
                              @endforeach
                            </ul>
                            
                          </div>        
                        </div>
                        
                      <hr>
                    {{-- end list --}}

                  </div>
                </div>
            </div>
            
          </div>
        </div>
    </div>
</section> 

@endsection


