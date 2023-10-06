@extends('layout.master')

@section('isikonten')
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center pt-2">
                <div class="w-50">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Cast</h3>
                        </div>
                        <form action="/cast" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            placeholder="Masukkan nama">
                                    </div>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" name="umur" class="form-control" id="umur"
                                            placeholder="Masukkan umur">
                                    </div>
                                    @error('umur')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <input type="text" name="bio" class="form-control" id="bio"
                                            placeholder="Masukkan bio">
                                    </div>
                                    @error('bio')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/cast" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
@endsection
