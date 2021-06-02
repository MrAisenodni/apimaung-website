@extends('layouts.user')

@section('title', 'Pengaduan')

@section('content') 
  <!-- Content -->
  <div id="content"> 
    
    <!-- Infinity Solution -->
    <section class="white-bg solution padding-top-75 padding-bottom-75">
      <div class="container dark-bg padding-25"> 
        <h4 class="text-white text-center">FORMULIR PENGADUAN</h4>
        <form method="POST">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <!-- /.box-title -->
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="judul">Judul Pengaduan</label>
                                    <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Pengaduan" name="judul">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="tgl_jadi">Tanggal Kejadian</label>
                                    <input type="date" class="form-control" id="tgl_jadi" placeholder="Pilih/Masukkan Tanggal Kejadian" name="tgl_jadi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="pesan">Pesan Pengaduan</label>
                                    <textarea class="form-control" name="pesan" id="pesan" cols="60" rows="8" placeholder="Masukkan Pesan Pengaduan"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi Kejadian</label>
                                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi Kejadian" name="lokasi">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="instansi">Instansi Tujuan</label>
                                    <input type="text" class="form-control" id="instansi" placeholder="Masukkan Instansi Tujuan" name="instansi">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <label for="kategori">Kategori Pengaduan Anda</label>
                                    <select class="form-control" name="kategori" id="kategori">
                                        <option value="">-- Pilih Kategori Pengaduan --</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-orange">KIRIM</button>
                    </div>
                </div>
            </div>
    </form>
    </section>
    
  </div>
  <!-- End Content --> 
@endsection