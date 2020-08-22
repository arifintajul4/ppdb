@extends('layouts.admin')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Peserta Didik</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="">Peserta Didik</a></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="h3 mb-0">Kelola Peserta Didik</h5>
            </div>
            <div class="card-body" style="min-height: 65vh;">
              <a href="{{route('peserta.create')}}" class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
              @if(Session::has('message'))
              <div class="alert alert-success">
                  <strong>{{ \Illuminate\Support\Facades\Session::get('message') }}</strong>
              </div>
              @endif
              <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="no">#</th>
                        <th scope="col" class="sort" data-sort="nama">Nama Siswa</th>
                        <th scope="col" class="sort" data-sort="jk">Jenis Kelamin</th>
                        <th scope="col" class="sort" data-sort="tgl_lahir">Tanggal Lahir</th>
                        <th scope="col" class="sort" data-sort="alamat">Alamat</th>
                        <th scope="col" class="sort" data-sort="jarak">Jarak</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($peserta as $item)
                    <tr>
                        <td>{{$loop->iteration }}</td>
                        <td>{{$item->nama_siswa}}</td>
                        <td>{{$item->jensi_kelamin}}</td>
                        <td>{{$item->tgl_lahir}}</td>
                        <td>{{$item->alamat_siswa}}</td>
                        <td>{{$item->jarak}}</td>
                        <td class="text-center">
                            <a href="{{route('peserta.show', $item)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{route('peserta.edit', $item)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="{{route('pserta.destroy', $item->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('apakah anda yakin?')" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                  @if (count($peserta)<=0)
                    <tr>
                      <td colspan="7" class="text-center">Data Tidak Ditemukan!</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
