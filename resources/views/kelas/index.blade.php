@extends('layouts.admin')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Kelas</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="">Kelas</a></li>
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
              <h5 class="h3 mb-0">Kelola Kelas</h5>
            </div>
            <div class="card-body" style="min-height: 65vh;">
              <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Tambah Kelas</button>
              @if(Session::has('message'))
              <div class="alert alert-success">
                  <strong>{{ \Illuminate\Support\Facades\Session::get('message') }}</strong>
              </div>
              @endif
              <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="no">#</th>
                        <th scope="col" class="sort" data-sort="nama">Nama Kelas</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                <tbody>
                  @foreach ($kelas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$item->kelas}}</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning edit" data-toggle="modal" data-target="#modal-default" data-id="{{$item->id}}"><i class="fas fa-edit"></i></button>
                            <form action="{{route('kelas.destroy', $item->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('apakah anda yakin?')" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                  @if (count($kelas)<=0)
                    <tr>
                      <td colspan="4" class="text-center">Data Tidak Ditemukan!</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Tambah Data Kelas</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form id="form" action="" method="POST">
            <div class="modal-body">
              @method('POST')
              @csrf
                <div class="form-group">
                  <label for="kelas">Nama Kelas</label>
                  <input type="text" name="kelas" id="kelas" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <script>
        $(document).ready(function () {
          $('#tambah').on('clck', function () {
            $('.modal-title').html('Tambah Data Kelas');
            $('#form').attr('action', 'kelas');
            $('input[name=_method').val('POST');
            $('#kelas').val('');
          })

          $(document).on('click', '.edit', function () {
            var id = $(this).data('id');
            $('.modal-title').html('Edit Data Kelas');
            $('#form').attr('action', "kelas/"+id);
            $('input[name=_method').val('PUT');
            $.ajax({
              type: "POST",
              data: {"_token": "{{ csrf_token() }}"},
              url: 'kelas/getdata/'+id,
              dataType: 'JSON',
              success: function (response) {
                $('#kelas').val(response.kelas);
              }
            });
          })
        })
      </script>
@endsection
