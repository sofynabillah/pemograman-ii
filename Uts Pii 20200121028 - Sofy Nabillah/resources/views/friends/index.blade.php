@extends('layouts.app')

@section('title', 'Friends')

@section('content')

<!-- Start tampilan -->
  <section class="py-5 mb-5">
    <div class="container">
      <div class="section-title d-flex flex-wrap justify-content-center">  
        <div class="" >
          <h2 class=" m-auto py-2 text-primary">Friends</h2>
        </div>
      </div>
      <div class="mb-5 d-flex flex-wrap justify-content-center">

        @php
          $count = DB::table('friends')->count();
          $price = DB::table('history_friends')->max('id');
        @endphp
        {{-- menampilkan jumlah data-data yang ada --}}
        <div class="text-muted"><h5><i> Friends : </i>@php echo $count @endphp, <i> Pernah Dibuat : </i>@php echo $price @endphp, <i> Terhapus : </i>@php echo $price - $count @endphp</h5></div>
       
      </div>
    
      
        <div class="row content">
          <a class="btn btn-primary m-4 col-lg-2 text-center " href="#" role="button" data-bs-toggle="modal" data-bs-target="#createModal">New Friend</a>
            <div class="d-flex flex-wrap justify-content-start">
              {{-- menampilkan data tabel friends --}}
              @foreach ($friends as $friend)
              <div>
                <div class="card mx-3 mt-3 border-primary border-bottom-0 border-2 " style="width: 15rem;border-radius: 10px 10px 0 0;">
                  <div class="d-flex flex-wrap justify-content-end">
                    <form action="/friends/{{$friend['id']}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger border-0 m-1 d-flex " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="bi bi-x-lg"></i></button>
                    </form>
                  </div>
                  <div class="d-flex flex-wrap justify-content-center mt-1" style="width: 15rem;">

                    <a class="text-decoration-none text-primary" href="/friends/{{ $friend['id'] }}" title="Klik Untuk Melihat">
                      <div style="width: 15rem;" class="d-flex justify-content-center">
                        {{-- menampilkan nama --}}
                        <h5 class="card-title text-uppercase">{{ $friend['nama'] }}</h5>  
                      </div>

                      <div style="width: 15rem;" class="d-flex justify-content-center mb-4">
                        {{-- menampilkan group --}}
                        <p class="card-text "><b>Group :</b>  
                          @php
                            if($friend->groups_id == 0){
                              echo 'Tidak dalam group';
                            }else{
                              echo $friend->groups->name;
                            }
                          @endphp
                        </p>
                      </div>
                    </a>

                  </div>
                </div>
                <div class="mx-3">
                  <a class="btn btn-outline-success d-flex justify-content-center border-2" style="width: 15rem; border-radius: 0 0 10px 10px; " title="Edit" href="/friends/{{ $friend['id'] }}/edit" role="button" >Edit</a>
                </div>

              </div>

              @endforeach

            </div>

            {{-- create MODAL// tampilan membuat friends--}}
              <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Friend</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="/friends/#about" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          {{-- input nama friend --}}
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" required value="{{ old('nama') }}">
                          @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="form-label">No Telpon</label>
                          {{-- input no tlp  --}}
                          <input type="number" class="form-control" name="no_tlp" id="exampleInputPassword1" required value="{{ old('no_tlp') }}">
                          @error('no_tlp')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="form-label">Alamat</label>
                          {{-- input alamat  --}}
                          <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" required value="{{ old('alamat') }}">
                          @error('alamat')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        
                        <div class="modal-footer">
                          {{-- tombol  --}}
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <a class="btn btn-outline-danger" role="button" data-bs-dismiss="modal">Cancel</a>
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
    </div>
  </section>      
      <!-- End Recent Work -->      
@endsection