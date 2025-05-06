@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Add Pegawai')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
<div class="row">
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">{{ isset($pegawai) ? 'Edit Pegawai' : 'Tambah Pegawai Baru' }}</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form class="form form-horizontal" method="POST" action="{{ isset($pegawai) ? route('pegawai.update', $pegawai->id) : route('pegawai.store') }}">
            @csrf
            @if(isset($pegawai))
              @method('PUT')
            @endif
            
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <label>Nama Depan</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="{{ isset($pegawai) ? $pegawai->nama_depan : old('nama_depan') }}" required>
                  @error('nama_depan')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Nama Belakang</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="{{ isset($pegawai) ? $pegawai->nama_belakang : old('nama_belakang') }}" required>
                  @error('nama_belakang')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Email</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{ isset($pegawai) ? $pegawai->email : old('email') }}" required>
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>No HP</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="{{ isset($pegawai) ? $pegawai->no_hp : old('no_hp') }}" required>
                  @error('no_hp')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Alamat</label>
                </div>
                <div class="col-md-8 form-group">
                  <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" required>{{ isset($pegawai) ? $pegawai->alamat : old('alamat') }}</textarea>
                  @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ (isset($pegawai) && $pegawai->jenis_kelamin == 'Laki-laki') ? 'selected' : (old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '') }}>Laki-laki</option>
                    <option value="Perempuan" {{ (isset($pegawai) && $pegawai->jenis_kelamin == 'Perempuan') ? 'selected' : (old('jenis_kelamin') == 'Perempuan' ? 'selected' : '') }}>Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-sm-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                  <a href="{{ route('pegawai.index') }}" class="btn btn-light-secondary mb-1">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@endsection

