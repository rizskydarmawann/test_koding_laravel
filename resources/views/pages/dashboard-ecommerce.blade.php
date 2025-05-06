@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','list Admin')
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
        <div class="card marketing-campaigns">
          <div class="card-header d-flex justify-content-between align-items-center pb-1">
            <h4 class="card-title">List Admin</h4>
           
            <button class="btn btn-sm btn-primary glow mt-md-2 mb-1">ADD</button>
          </div>
          <div class="card-content">
            <div class="card-body pb-0">
              <div class="row">
              
                <div class=" col-12 text-md-right">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- table start -->
            <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
              <thead>
                <tr>
                  <th>Campaign</th>
                  <th>Growth</th>
                  <th>Charges</th>
                  <th>Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1 line-ellipsis">
                    <img class="rounded-circle mr-1" src="{{asset('images/icon/fs.png')}}" alt="card" height="24"
                      width="24">Fastrack Watches
                  </td>
                  <td class="py-1">
                    <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>30%</span>
                  </td>
                  <td class="py-1">$5,536</td>
                  <td class="text-success py-1">Active</td>
                  <td class="text-center py-1">
                    <div class="dropdown">
                      <span
                        class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1 line-ellipsis">
                    <img class="rounded-circle mr-1" src="{{asset('images/icon/puma.png')}}" alt="card" height="24"
                      width="24">Puma Shoes
                  </td>
                  <td class="py-1">
                    <i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>15.5%</span>
                  </td>
                  <td class="py-1">$1,569</td>
                  <td class="text-success py-1">Active</td>
                  <td class="text-center py-1">
                    <div class="dropdown">
                      <span
                        class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1 line-ellipsis">
                    <img class="rounded-circle mr-1" src="{{asset('images/icon/nike.png')}}" alt="card" height="24"
                      width="24">Nike Air Jordan
                  </td>
                  <td class="py-1">
                    <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>70.30%</span>
                  </td>
                  <td class="py-1">$23,859</td>
                  <td class="text-danger py-1">Closed</td>
                  <td class="text-center py-1">
                    <div class="dropdown">
                      <span
                        class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1 line-ellipsis">
                    <img class="rounded-circle mr-1" src="{{asset('images/icon/one-plus.png')}}" alt="card"
                      height="24" width="24">Oneplus 7 pro
                  </td>
                  <td class="py-1">
                    <i class="bx bx-trending-up text-success align-middle mr-50"></i><span>10.4%</span>
                  </td>
                  <td class="py-1">$9,523</td>
                  <td class="text-success py-1">Active</td>
                  <td class="text-center py-1">
                    <div class="dropdown">
                      <span
                        class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1 line-ellipsis">
                    <img class="rounded-circle mr-1" src="{{asset('images/icon/google.png')}}" alt="card"
                      height="24" width="24">Google Pixel 4 xl
                  </td>
                  <td class="py-1"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-62.38%</span>
                  </td>
                  <td class="py-1">12,897</td>
                  <td class="text-danger py-1">Closed</td>
                  <td class="text-center py-1">
                    <div class="dropup">
                      <span
                        class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                      </span>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
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

