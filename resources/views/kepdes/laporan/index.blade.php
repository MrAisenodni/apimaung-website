@extends('layouts.kepdes')

@section('title', 'Laporan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">LAPORAN</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form class="row g-3" method="POST" action="/kepdes/laporan/show">
                                    @method('GET')
                                    @csrf
                                    <div class="col-md-6 form-group">
                                        <label for="dari_tanggal" class="form-label">Dari Tanggal</label>
                                        <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" value="{{ old('dari_tanggal') }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="ke_tanggal" class="form-label">Ke Tanggal</label>
                                        <input type="date" class="form-control" id="ke_tanggal" name="ke_tanggal" value="{{ old('ke_tanggal') }}">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label for="jenis" class="form-label">Jenis Laporan</label>
                                        <select name="jenis" id="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                            @if (old('jenis') == 'pengaduan')
                                                <option value="pengaduan">Pengaduan</option>
                                            @elseif (old('jenis') == 'surat')
                                                <option value="surat">Surat</option>
                                            @elseif (old('jenis') == 'kritiksaran')
                                                <option value="kritiksaran">Kritik dan Saran</option>
                                            @elseif (old('jenis') == 'penduduk')
                                                <option value="penduduk">Penduduk</option>
                                            @endif
                                            <option value="">--- Pilih Laporan ---</option>
                                            <option value="pengaduan">Pengaduan</option>
                                            <option value="surat">Surat</option>
                                            <option value="kritiksaran">Kritik dan Saran</option>
                                            <option value="penduduk">Penduduk</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3 text-left">
                                        <button type="submit" class="btn btn-success"><span class="fas fa-check"></span> TAMPILKAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection