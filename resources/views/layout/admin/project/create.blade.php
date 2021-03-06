@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Gallery Dashboard</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach  
        </ul>
        </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
        <!-- {{route('gallery-dashboard.store')}} -->
        <form action="" method="post" enctype="multipart/form-data">
                @csrf   
                <div class="form-group">
                    <label>Teks Dashboard Galeri</label>
                    <input type="text" class="form-control" name="description" placeholder="Deskripsi" value="{{old('description')}}">
                </select>
            </div>

         
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" placeholder="Image" >
        </div>
            <button type="submit" class="btn btn-primary btn-block">
                Simpan</button>
        </form>
        </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection