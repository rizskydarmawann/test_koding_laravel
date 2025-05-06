@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Add Admin')
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
        <h4 class="card-title">{{ isset($admin) ? 'Edit Admin' : 'Tambah Admin Baru' }}</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <form class="form form-horizontal" method="POST" action="{{ isset($admin) ? route('admin.update', $admin->id) : route('admin.store') }}">
            @csrf
            @if(isset($admin))
              @method('PUT')
            @endif
            
            <div class="form-body">
              <div class="row">
                <div class="col-md-4">
                  <label>Nama Depan</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="{{ isset($admin) ? $admin->nama_depan : old('nama_depan') }}" required>
                  @error('nama_depan')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Nama Belakang</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="{{ isset($admin) ? $admin->nama_belakang : old('nama_belakang') }}" required>
                  @error('nama_belakang')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Email</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{ isset($admin) ? $admin->email : old('email') }}" required>
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Tanggal Lahir</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="date" class="form-control" name="tanggal_lahir" value="{{ isset($admin) ? $admin->tanggal_lahir : old('tanggal_lahir') }}" required>
                  @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Jenis Kelamin</label>
                </div>
                <div class="col-md-8 form-group">
                  <select class="form-control" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ (isset($admin) && $admin->jenis_kelamin == 'Laki-laki') ? 'selected' : (old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '') }}>Laki-laki</option>
                    <option value="Perempuan" {{ (isset($admin) && $admin->jenis_kelamin == 'Perempuan') ? 'selected' : (old('jenis_kelamin') == 'Perempuan' ? 'selected' : '') }}>Perempuan</option>
                  </select>
                  @error('jenis_kelamin')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Password</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" {{ isset($admin) ? '' : 'required' }}>
                  @if(isset($admin))
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password</small>
                  @endif
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                
                <div class="col-md-4">
                  <label>Konfirmasi Password</label>
                </div>
                <div class="col-md-8 form-group">
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" {{ isset($admin) ? '' : 'required' }}>
                </div>
                
                <div class="col-sm-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                  <a href="{{ route('admin.index') }}" class="btn btn-light-secondary mb-1">Batal</a>
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

