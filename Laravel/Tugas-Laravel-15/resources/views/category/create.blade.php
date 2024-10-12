@extends('layout.master')

@section('judul')
    Tambah kategori
@endsection

@section('content')
<form action="/category" method="POST">
  {{-- validation error --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- input form --}}
  @csrf
    <div class="form-group">
      <label>Category Name</label>
      <input type="text" class="form-control"  name="name">
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection