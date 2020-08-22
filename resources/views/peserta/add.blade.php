@extends('layouts.admin')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">TambahPeserta Didik</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('peserta')}}">Peserta Didik</a></li>
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
              <h5 class="h3 mb-0">Tambah Peserta Didik</h5>
            </div>
            <div class="card-body" style="min-height: 65vh;">
              @if(Session::has('message'))
              <div class="alert alert-success">
                  <strong>{{ \Illuminate\Support\Facades\Session::get('message') }}</strong>
              </div>
              @endif
              <form action="{{route('peserta.store')}}" method="POST">
                @csrf
                <h3>Data Siswa</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nama_siswa">Nama Siswa</label>
                      <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="tempat_lair">Tempat Lahir</label>
                      <input type="text" name="tempat_lair" id="tempat_lair" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="jenis_prestasi">Jenis Prestasi</label>
                      <input type="text" name="jenis_prestasi" id="jenis_prestasi" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="number" min="0" name="umur" id="umur" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="agama_siswa">Agama</label>
                      <select name="agama_siswa" id="agama_siswa" class="form-control" required>
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Kristen Katolik</option>
                        <option value="Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="nomor_ijazah">Nomor Ijazah</label>
                      <input type="number" min="0" name="nomor_ijazah" id="nomor_ijazah" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Siswa</label>
                      <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                  </div>
                </div>
                <hr>
                <h3>Data Nilai</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nilai_indo">Nilai Bahasa Indonesia</label>
                      <input type="number" min="0" name="nilai_indo" id="nilai_indo" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="nilai_mtk">Nilai Matematika</label>
                      <input type="number" min="0" name="nilai_mtk" id="nilai_mtk" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="nilai_inggris">Nilai Bahasa Inggris</label>
                      <input type="number" min="0" name="nilai_inggris" id="nilai_inggris" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nilai_ipa">Nilai IPA</label>
                      <input type="number" min="0" name="nilai_ipa" id="nilai_ipa" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="nilai_prestasi">Nilai Prestasi</label>
                      <input type="number" min="0" name="nilai_prestasi" id="nilai_prestasi" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="nilai_total">Nilai Total</label>
                      <input type="number" min="0" name="nilai_total" id="nilai_total" class="form-control" required>
                    </div>
                  </div>
                </div>
                <hr>

              </form>
            </div>
          </div>
        </div>
      </div>
@endsection
