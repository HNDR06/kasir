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
                            <select id="ProductCategory" class="form-select text-capitalize"
                                style="width: 30%;margin-right: 40%;">
                                <option value=''>Category</option>
                            </select>
                            <input type="search" style="width: 30%;" placeholder="Seach Menu" class="form-control" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-3">
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

                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
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

                            <div class="col-sm-3">
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

                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Text Align Left</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
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
                <div style="margin-bottom: 30px">
                    <!-- Outline rounded Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-rounded pagination-outline-primary">
                            <li class="page-item first">
                                <a class="page-link" href="javascript:void(0);"><i
                                        class="ti ti-chevrons-left ti-sm"></i></a>
                            </li>
                            <li class="page-item prev">
                                <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-sm"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">..</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="javascript:void(0);"><i
                                        class="ti ti-chevron-right ti-sm"></i></a>
                            </li>
                            <li class="page-item last">
                                <a class="page-link" href="javascript:void(0);"><i
                                        class="ti ti-chevrons-right ti-sm"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!--/ Outline rounded Pagination -->

                </div>
                <!-- /Product Information -->
            </div>

            <!-- /Second column -->

            <!-- Second column -->
            <div class="col-12 col-lg-4">
                <!-- Pricing Card -->
                <div class="card mb-6">
                    <div class="card-header">
                        <h5 class="card-title mb-0"><i class="menu-icon tf-icons ti ti-shopping-cart"></i>Summary Order
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Base Price -->
                        <div class="row mb-6 g-6">
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">Invoice No</label>
                                <input type="text" class="form-control" id="ecommerce-settings-details-name"
                                    placeholder="John Doe" name="settingsDet" aria-label="settings Details">
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">Customer Name</label>
                                <input type="text" class="form-control" id="ecommerce-settings-details-name"
                                    placeholder="John Doe" name="settingsDet" aria-label="settings Details">
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">No Table</label>
                                <input type="text" class="form-control" id="ecommerce-settings-details-name"
                                    placeholder="John Doe" name="settingsDet" aria-label="settings Details">
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">Type Order</label>
                                <select id="ProductCategory" class="form-select text-capitalize">
                                    <option value='Haha'>Dine In</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">Payment</label>
                                <select id="ProductCategory" class="form-select text-capitalize">
                                    <option value='Haha'>QRIS</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1"
                                    for="ecommerce-settings-details-name">Kode Voucher</label>
                                <input type="text" class="form-control" id="ecommerce-settings-details-name"
                                    placeholder="John Doe" name="settingsDet" aria-label="settings Details">
                            </div>
                            <div class="col-12 col-md-12"><label class="form-label mb-1">
                                    <h5><i class="fas fa-shopping-cart"></i> List Keranjang</h5>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">No</th>
                                                <th style="width: 40%">Nama Menu</th>
                                                <th style="width: 20%">Qty</th>
                                                <th>Harga</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td style="width: 30%">Nasi Goreng</td>
                                                <td>
                                                    <input type="number" value="1" min="1"
                                                        class="form-control" style="width: 85%">
                                                </td>
                                                <td style="width: 30%">Rp0,-</td>
                                                <td><button class="btn-sm btn-danger">X</button></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td style="width: 30%">Nasi Goreng</td>
                                                <td>
                                                    <input type="number" value="1" min="1"
                                                        class="form-control" style="width: 85%">
                                                </td>
                                                <td style="width: 30%">Rp0,-</td>
                                                <td><button class="btn-sm btn-danger">X</button></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <input type="text" class="form-control" placeholder="Keterangan Pesanan :"
                                        style="margin-top: 10px"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Pricing Card -->
        </div>
        <!-- /Second column -->
    </div>
    </div>

@endsection
