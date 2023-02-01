@extends('layouts.admin2')

@section('content')
<style>
    
    .container{
        border-radius:200px;
        width:900px;
        margin-left:25%;
    }
</style>
<div class="container">
  <div class="col-lg-8 mb-4 order-0">
    
  <div class="col-md-12">
    @include('layouts/_flash')
    <div class="card elevation-5 shadow p-2 " style="background-color:rgb(221, 221, 221)) ;">
        
        <div class="card-header pb-3 " style="background-color: rgb(143, 188, 240)">
            Absensi 
        </div>
        
        <div class="card-body bg-light " >
            <div class="table-responsive">
              <table class="table align-middle" id="dataTable">
                  <form action="{{route('absenkeluar')}}" method="post">
                      @csrf
                      
                      <style>
                        h1,h2,p,a{
                          font-family: sans-serif;
                          font-weight: normal;
                        }
                       
                        .jam-digital-malasngoding {
                          overflow: hidden;
                          width: 339px;
                          margin: 20px auto;
                          
                          border-radius:50px;
                        }
                        .kotak{
                          float: left;
                          width: 113px;
                          height: 100px;
                          background-color: rgb(221, 221, 221));
                          
                        }
                        .jam-digital-malasngoding p {
                          color: rgb(16, 15, 15);
                          font-size: 36px;
                          text-align: center;
                          margin-top: 30px;
                        }
                       
                       
                      </style>
                       
                      
                       
                      <div class="jam-digital-malasngoding">
                        <div class="kotak">
                          <p id="jam"></p>
                        </div>
                        <div class="kotak">
                          <p id="menit"></p>
                        </div>
                        <div class="kotak">
                          <p id="detik"></p>
                        </div>
                      </div>
                       
                       
                      <script>
                        window.setTimeout("waktu()", 1000);
                       
                        function waktu() {
                          var waktu = new Date();
                          setTimeout("waktu()", 1000);
                          document.getElementById("jam").innerHTML = waktu.getHours();
                          document.getElementById("menit").innerHTML = waktu.getMinutes();
                          document.getElementById("detik").innerHTML = waktu.getSeconds();
                        }
                      </script>
                      <tr>
                        <td>
                          <center>
                          <button type="submit" class="btn btn-primary">Absen Keluar</button>
                          <style type="text/css">
                          </center></td>
                      </tr>
                    </form>
                  </table>
            </div>
        </div>
    </div>
  </div>
</div>
  @endsection