@extends('layouts.app')

@section('title', 'Coba')

@section('content')

{{-- menampilkan detail friends berdasarkan id  --}}
<section id="show" class="about">
    <div class="container">
  
      <div class="section-title">
        <h3 class="mt-5">Detail <span class="text-primary">Friends</span></h3>
        
      </div>
      <div class="row content">
        <div class="d-flex flex-wrap justify-content-start">
            <div class="card m-3  border-primary" style="width: 20rem; border-radius: 20px;">
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-start">
                  <a class="btn btn-outline-primary just" href="/#about" role="button"><i class="bi bi-arrow-left"></i></a>
                </div>
                {{-- menampilkan nama  --}}
                  <h2 class="card-title m-3 text-primary text-center text-uppercase">{{ $friends['nama'] }}</h2>
                  <hr>
                  {{-- menampilkan no_tlp  --}}
                  <p class="card-subtitle m-3"  ><b class="text-primary">No Tlp :</b> {{ $friends['no_tlp'] }}</p>
                {{-- menampilkan alamat  --}}
                  <p class="card-text m-3"><b class="text-primary">Address :</b> {{ $friends['alamat'] }}</p>
                {{-- menampilkan Group  --}}
                  <p class="card-text m-3"><b class="text-primary">Group :</b>  
                    @php
                        if($friends->groups_id == 0){
                          echo 'Tidak dalam group';
                        }else{
                          echo $friends->groups->name;
                        }
                    @endphp
                    
                  </p>
                  {{-- menampilkan history group  --}}
                  <p class="card-text mx-3"><b class="text-primary">history group :</b> 
                    @foreach ($hfriends as $item)
                    @php
                        if($item->groups_id == 0){
                          echo '';
                        }else{
                          echo $item->history_groups->name.'->';
                        }
                    @endphp
                    @endforeach
                  </p>
                  
                  <p class="mx-3">
                    
                  </p>
                  
              </div>
              
          </div>
        </div>
      </div>
  </div>
</section> 

    
    
@endsection


