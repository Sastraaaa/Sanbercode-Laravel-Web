@extends('layout.master')

@section('judul')
    Daftar kategori
@endsection

@section('content')
    <a href="/category/create" class="btn btn-info btn-sm my-2">Tambah</a>
    {{-- bootstrap 4 table --}}
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="/category/{{$category->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/category/{{ $category->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/category/{{ $category->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @endsection
        </tbody>