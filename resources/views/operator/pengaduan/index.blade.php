@extends('layouts.operator')

@section('title', 'Pengaduan')

@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">MANAJEMEN PENGADUAN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pengaduan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pengaduan
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Muhammad Fiqri Alfayed</td>
                                                <td>fiqrialfayed@gmail.com</td>
                                                <td class="text-center"><p class="btn btn-warning">PENDING</p></td>
                                                <td width="16%">
                                                    <a href="pengaduan/create" class="btn btn-success">
                                                        <i class="fas fa-location-arrow"></i>
                                                    </a>
                                                    <a href="pengaduan/1/edit" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="pengaduan/1" class="btn btn-info">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Afi Maung</td>
                                                <td>afimaung@gmail.com</td>
                                                <td class="text-center"><p class="btn btn-success">COMPLETED</p></td>
                                                <td width="16%">
                                                    <a href="pengaduan/create" class="btn btn-success">
                                                        <i class="fas fa-location-arrow"></i>
                                                    </a>
                                                    <a href="pengaduan/1/edit" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="pengaduan/1" class="btn btn-info">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection