{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat, {{Auth::user()->name}}! Kamu berhasil login
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.admin2')

@section('content')
<style>
    
    .container{
        border-radius:200px;
        width:900px;
        margin-left:25%;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y mt-5 ">
<div class="col-lg-5 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="">Selamat Datang 🎉</h5>
            
            <p class="mb-4">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h4>{{Auth::user()->name}}! Kamu berhasil login, {{$siswa}}</h4> 
            </p>

            
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="pokok/assets/img/illustrations/man-with-laptop-light.png"
              height="140"
              alt="View Badge User"
              data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png"
            />
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
         
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-6 col-md-7 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
             
              
            </div>
            <div class="avatar flex-shrink-0 mb-2">
              <img
                src="{{asset('apaan/images/wallet-info.png')}}"
               
                class="rounded"
              />
            </div>
           
            <span class="fw-semibold d-block">Jumlah Siswa</span>
            <h3 class="card-title">{{$siswa}}</h3>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-7 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
             
              
            </div>
            <div class="avatar flex-shrink-0 mb-2">
              <img
                src="{{asset('apaan/images/wallet-info.png')}}"
               
                class="rounded"
              />
            </div>
           
            <span class="fw-semibold d-block">Jumlah Jurusan</span>
            <h3 class="card-title">{{$jurusan}}</h3>
            
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-7 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
             
              
            </div>
            <div class="avatar flex-shrink-0 mb-2">
              <img
                src="{{asset('apaan/images/wallet-info.png')}}"
               
                class="rounded"
              />
            </div>
           
            <span class="fw-semibold d-block">Jumlah Kelas</span>
            <h3 class="card-title">{{$kelas}}</h3>
            
          </div>
        </div>
      </div>

      
     
    </div>
  </div>

</div>
</div>

  

  



@endsection