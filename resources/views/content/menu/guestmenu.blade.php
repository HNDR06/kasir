@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Add - Apps')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss', 'resources/assets/vendor/libs/select2/select2.scss'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/app-ecommerce-product-add.js'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/select2/select2.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/app-ecommerce-product-list.js'])
@endsection

@section('content')
    <div class="app-ecommerce">
        <div class="row">

            <!-- First column-->
            <div class="col-12 col-lg-8">
                <!-- Product Information -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-tile mb-0"><i class="menu-icon tf-icons ti ti-category"></i> Daftar Menu</h5>
                        <br>
                        <div class="row">
                            <select id="ProductCategory" class="form-select text-capitalize" style="width: 30%;margin-right: 40%;">
                                <option value=''>Category</option>
                            </select>
                            <input type="search" style="width: 30%;" placeholder="Seach Menu" class="form-control" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.37TWIN3RDF5Ui4NF9zDOXwHaHa?rs=1&pid=ImgDetMain"
                                        class="card-img-top" height="200" alt="gambar">
                                    <div class="card-body">
                                        <h5 class="card-title">Nasi Goreng</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary"><i
                                                class="menu-icon tf-icons ti ti-shopping-cart-plus"></i> Order</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.37TWIN3RDF5Ui4NF9zDOXwHaHa?rs=1&pid=ImgDetMain"
                                        class="card-img-top" height="200" alt="gambar">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary"><i
                                                class="menu-icon tf-icons ti ti-shopping-cart-plus"></i> Order</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- /Product Information -->
            </div>
            <!-- /Second column -->

            <!-- Second column -->
            <div class="col-12 col-lg-4">
                <!-- Pricing Card -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="menu-icon tf-icons ti ti-shopping-cart"></i>Keranjang</h5>
                    </div>
                    <div class="card-body">
                        <!-- Base Price -->

                    </div>
                </div>
                <!-- /Pricing Card -->
            </div>
            <!-- /Second column -->
        </div>
        <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
          <ul class="pagination mb-0 pagination-rounded">
            <li class="page-item first">
              <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-left ti-md scaleX-n1-rtl"></i></a>
            </li>
            <li class="page-item prev">
              <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-md scaleX-n1-rtl"></i></a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">2</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0);">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">5</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0);">6</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-md scaleX-n1-rtl"></i></a>
            </li>
            <li class="page-item last">
              <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevrons-right ti-md scaleX-n1-rtl"></i></a>
            </li>
          </ul>
        </nav>
    </div>

@endsection
