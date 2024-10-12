@extends('layout.master')

@section('judul')
    Detail kategori
@endsection

@section('content')
    <a href="/category" class="btn btn-info btn-sm my2">Kembali</a>
    <h1>{{$category->name}}</h1>
    <p>{{$category->description}}</p>
@endsection