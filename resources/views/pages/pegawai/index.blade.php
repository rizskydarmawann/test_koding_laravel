@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','list Pegawai')
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
      <!-- Greetings Content Starts -->
  
      <div class=" col-12 dashboard-marketing-campaign">
      @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
        <div class="card marketing-campaigns">
          <div class="card-header d-flex justify-content-between align-items-center pb-1">
            <h4 class="card-title">List Pegawai</h4>
           
            <a href="{{ route('pegawai.create') }}" class="btn btn-sm btn-primary glow mt-md-2 mb-1">ADD</a>
          </div>
          <div class="card-content">
            <div class="card-body pb-0">
              <div class="row">
              
                <div class=" col-12 text-md-right">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsives">
            <!-- table start -->
            <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
              <thead>
                <tr>
                <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
              @forelse($pegawais as $pegawai)
                  <tr>
                      <td class="py-1 d-flex align-items-center">
                          {{ $pegawai->nama_depan }} {{ $pegawai->nama_belakang }}
                      </td>
                      <td class="py-1">{{ $pegawai->email }}</td>
                      <td class="text-success py-1">{{ $pegawai->jenis_kelamin }}</td>
                      <td class="text-center py-1">
                          <div class="dropdown">
                              <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="{{ route('pegawai.edit', $pegawai->id) }}">
                                      <i class="bx bx-edit-alt mr-1"></i> Edit
                                  </a>
                                  <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display: inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                          <i class="bx bx-trash mr-1"></i> Hapus
                                      </button>
                                  </form>
                              </div>
                          </div>
                      </td>
                  </tr>
                @empty
                  <tr>
                      <td colspan="5" class="text-center text-muted py-4">Tidak ada data pegawai.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
            <!-- table ends -->
          </div>
        </div>
      </div>
      <!-- Marketing Campaigns Starts -->
    
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

