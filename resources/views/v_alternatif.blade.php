@extends('layouts.main')
@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Alternatif</h6>
            <a href="/alternatif/tambah" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Alternatif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasisaw</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                        @foreach ($alternatif as $al)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $al->nama_mahasiswa}}</td>
                                <td>
                                    <span class="d-flex align-items-center justify-content-start">
                                       <a href="/alternatif/ubah/{{$al->id}}" class="btn btn-warning btn-sm mx-1">
                                           <i class="fa-solid fa-pencil"></i>
                                       </a>
                                       <form action="/alternatif/{{ $al->id }}/delete" method="POST" class="mx-1">
                                          @csrf
                                          <button type="submit" class="btn btn-danger btn-sm">
                                             <i class="fa-solid fa-trash"></i>
                                          </button>
                                      </form>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
