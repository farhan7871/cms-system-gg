@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery Dashboard</h1>
      <a href="{{route('gallery-dashboard.create')}}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-100"></i>Tambah Gallery 
    </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr> 
                            <td></td>
                            <td></td>
                            <td>
                            <img src="" alt="" style="width:150px" class="img-thumbnail" />
                            </td>
                            <td>
                                <a href="" class="btn btn-info"> 
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                
                                <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>                     
                        </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


  </div>
  <!-- /.container-fluid -->
@endsection