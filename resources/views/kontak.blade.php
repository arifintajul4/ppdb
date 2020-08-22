@extends('layouts.app')

@section('content')
     <section class="py-5 bg-default">
       <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4 class="display-4 text-white">Kontak Kami</h4>
            <form action="" method="POST">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="mail" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="pesan">Isi Pesan</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </form>
          </div>
          <div class="col-md-6">
            <h4 class="display-4 text-white">Alamat</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.309804781338!2d116.7467332!3d-1.2769627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1cb2014a195701b!2sSMPN%2010%20PPU!5e0!3m2!1sen!2sfr!4v1597556015320!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
       </div>
     </section>
@endsection
