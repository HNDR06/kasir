@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product List - Apps')

@section('vendor-style')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss', 'resources/assets/vendor/libs/select2/select2.scss'])
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/select2/select2.js'])
@endsection

@section('page-script')
    @vite(['resources/assets/js/app-ecommerce-product-list.js'])
@endsection
@section('content')
    <!-- Product List Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Daftar Menu</h5>
            <div class="d-flex justify-content-between align-items-center row pt-4 gap-6 gap-md-0">
                @include('content.authentications.notiferror')
                <div class="col-md-4 product_status"></div>
                <div class="col-md-4 product_category"></div>
                <div class="col-md-4 product_stock"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-products table">
                <thead class="border-top">
                    <tr>
                        <th><b>No</b></th>
                        <th><b>menu</b></th>
                        <th><b>category</b></th>
                        <th><b>price</b></th>
                        <th><b>Deskripsi</b></th>
                        <th><b>gambar</b></th>
                        <th><b>action</b></th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $item->namamenu }}</th>
                        <th>{{ $item->kategori }}</th>
                        <th>{{ $item->harga }}</th>
                        <th>{{ $item->deskripsi }}</th>
                        <th><img src="{{ url('assets/img/menu') }}/{{ $item->gambarmenu }}" class="card-img-top"
                                style="height: 80px; width: 70px" alt="gambar"></th>
                        <th><button class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i
                                    class="ti ti-edit ti-md"></i></button>
                            <button
                                class="btn btn-danger btn-icon btn-text-secondary rounded-pill waves-effect waves-light"><i
                                    class="ti ti-trash-x"></i></button>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
            <form class="add-new-user pt-0" action="{{ route('addmenu') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="form-label" for="add-user-fullname">Nama Menu</label>
                    <input type="text" class="form-control" id="add-user-fullname" placeholder="Nasi Goreng"
                        name="namamenu" aria-label="John Doe" />
                </div>
                <div class="mb-6">
                    <label class="form-label" for="add-user-email">Kategori</label>
                    <select id="kategori" class="select2 form-select" name="kategori">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Camilan">Camilan</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label class="form-label" for="add-user-company">Harga</label>
                    <input type="text" id="add-user-company" class="form-control" placeholder="10000" aria-label="jdoe1"
                        name="harga" />
                </div>
                <div class="mb-6">
                    <label class="form-label" for="add-user-fullname">Deskripsi</label>
                    <input type="text" class="form-control" id="add-user-fullname" placeholder="Nasi Yang Digoreng"
                        name="deskripsi" aria-label="John Doe" />
                </div>
                <div class="mb-6">
                    <label class="form-label" for="gambarmenu">Upload Gambar</label>
                    <input type="file" onchange="preview()"
                        class="form-control @error('gambarmenu') is-invalid @enderror" id="gambarmenu" name="gambarmenu">
                    <br>
                    <img id="frame" src="" width="80px" height="90px" />
                    @error('gambarmenu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" id="submit" class="btn btn-primary me-3 data-submit">Submit</button>
                <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection
