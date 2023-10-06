@extends('layout.master')
@section('isikonten')
<div class="mx-4">
    <div class="body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <div class="py-2">
        <a href="/cast/create" class="btn btn-success">Add new +</a>
    </div>
    <div>
        <table id="table" class="table table-bordered ">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cast as $index =>$value)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->umur }} tahun</td>
                        <td>{{ $value->bio }}</td>
                        <td>
                            <a href="/cast/{{ $value->id }}" class="btn btn-primary">Detail</a> |
                            <a href="/cast/delete/{{ $value->id }}" class="btn btn-danger"
                                onclick="confirm('Yakin ingin menghapus?')">Delete</a> |
                            <a href="/cast/update/{{ $value->id }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan='5' align="center">
                            No Data
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
@endsection
