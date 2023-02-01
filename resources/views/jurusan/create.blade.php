@extends('layouts.admin')

@section('content')
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-header ">
                    Tambah Data Jurusan
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                @include('sweetalert::alert')

                                <div class="card">

                                    <div class="card-body bg-light shadow p-4">
                                        <form action="{{ route('jurusan.store') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Jurusan</label>
                                                <input type="text"
                                                    class="form-control  @error('jurusan') is-invalid @enderror"
                                                    name="jurusan">
                                                @error('jurusan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-info" type="submit">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
@endsection
