@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron text-center mt-4">
    <h1 class="display-4">Selamat Datang di Aplikasi Kami!</h1>
    <p class="lead">Platform ini membantu Anda dalam mengelola kebutuhan dengan mudah dan efisien.</p>
    <hr class="my-4">
    <p>Mulai eksplorasi fitur-fitur menarik yang telah kami sediakan untuk Anda.</p>
  </div>
  <div class="row mt-5">
    <!-- Informasi Terbaru -->
    <div class="col-md-6">
      <h2>Informasi Terbaru</h2>
      <ul class="list-group">
        <li class="list-group-item">Update Versi 2.0 - Penambahan Fitur X</li>
        <li class="list-group-item">Pelatihan Online Mingguan</li>
        <li class="list-group-item">Tips & Trik Penggunaan Aplikasi</li>
      </ul>
    </div>
    <!-- Konten Populer -->
    <div class="col-md-6">
      <h2>Konten Populer</h2>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Panduan Penggunaan Aplikasi</h5>
          <p class="card-text">Baca panduan lengkap untuk memaksimalkan penggunaan aplikasi.</p>
          <a href="#" class="btn btn-secondary">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Testimoni Pengguna</h5>
          <p class="card-text">Lihat apa kata pengguna lain tentang aplikasi ini.</p>
          <a href="#" class="btn btn-secondary">Lihat Testimoni</a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <h2>Mengapa Memilih Kami?</h2>
    <p>Dengan teknologi terkini dan tim profesional, kami siap membantu Anda mencapai tujuan dengan lebih efisien.</p>
  </div>
</div>
@endsection
