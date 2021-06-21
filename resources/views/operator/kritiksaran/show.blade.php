@extends('layouts.operator')

@section('title', 'Detail Kritik dan Saran')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DETAIL KRITIK DAN SARAN</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3">
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $kritiksaran->nama }}" disabled>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="no_hp" class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" id="no_hp" value="{{ $kritiksaran->no_hp }}" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <input type="text" class="form-control" id="pesan" value="{{ $kritiksaran->pesan }}" disabled>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" class="btn btn-info"><a href="/operator/kritiksaran" class="text-white"><span class="fas fa-times-circle"></span> KEMBALI</a></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection