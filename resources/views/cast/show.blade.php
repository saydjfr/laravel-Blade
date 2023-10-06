@extends('layout.master')

@section('isikonten')
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center pt-2">
                <div class="w-50">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail</h3>
                        </div>
                        <form>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            placeholder="Masukkan nama" value="{{ $show->nama }}" disabled>
                                    </div>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" name="umur" class="form-control" id="umur"
                                            placeholder="Masukkan umur" value="{{ $show->umur }}" disabled>
                                    </div>
                                    @error('umur')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <input type="text" name="bio" class="form-control" id="bio"
                                            placeholder="Masukkan bio" value="{{ $show->bio }}" disabled>
                                    </div>
                                    @error('bio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <a href="/cast" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
