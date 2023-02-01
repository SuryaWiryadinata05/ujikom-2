@extends('layouts.admin2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header " style="background-color:  rgb(221, 221, 221)) ;">
                        Data Jurusan
                    </div>
                    <div class="card-body bg-light shadow p-4">
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <input type="text" class="form-control " name="jurusan" value="{{ $jurusan->jurusan }}"
                                readonly>
                        </div>
                        
                        <div class="mb-3">
                            
                                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary" type="submit">Kembali</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection