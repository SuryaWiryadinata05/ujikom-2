@extends('layouts.admin2')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        .col-md-7 {

            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>

    <body>


        <div class="container mt-4" >
            <div class="row justify-content-center">
                <div class="col-md-7">
                    @include('sweetalert::alert')

                    <div class="card">
                        <div class="card-header " style="background-color:  rgb(221, 221, 221))">
                            Edit Data Jurusan
                        </div>
                        <div class="card-body bg-light shadow p-4">
                            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label class="form-label">Jurusan</label>
                                    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror"
                                        name="jurusan" value="{{ $jurusan->jurusan }}">
                                    @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-1 mt-3">
                                   
                                        <button class="btn btn-secondary" type="submit">Simpan</button>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
