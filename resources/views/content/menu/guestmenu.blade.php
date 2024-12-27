<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                            @foreach ($data as $item)
                                <div class="col-sm-3" style="margin-top: 10px">
                                    <div class="card h-100">
                                        <img src="{{ url('assets/img/menu') }}/{{ $item->gambarmenu }}" class="card-img-top"
                                            height="200" alt="gambar">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $item->namamenu }}
                                            </h4>
                                            <h7 class="card-title"><strong>Rp {{ $item->harga }}</strong></h7>
                                            <p class="card-text">{{ $item->deskripsi }}</p>
                                            <button id="add-to-cart" class="add-to-cart btn btn-primary"
                                                data-id="{{ $item->id }}" data-name="{{ $item->namamenu }}"
                                                data-price="{{ $item->harga }}"><i
                                                    class="menu-icon tf-icons ti ti-shopping-cart-plus"></i> Order</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                                    <div id="list-table-div">
                                        <div class="fixed-table-header">
                                            <table class="table">
                                                <tr>
                                                    <th>Menu</th>
                                                    <th style="width: 15%;text-align:center;">Harga</th>
                                                    <th style="width: 15%;text-align:center;">Qty</th>
                                                    <th style="width: 20%;text-align:center;">Subtotal</th>
                                                    <th style="width: 20px;" class=""><i class="ti ti-trash"></i>
                                                    </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="cart-container">
                                        <p>Keranjang kosong.</p>
                                    </div>

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
<script>
    // $(document).ready(function() {
    //     // Tambahkan produk ke keranjang
    //     $('.add-to-cart').click(function() {
    //         console.log('Hello');
    //         const productId = $(this).data('id');
    //         const productName = $(this).data('name');
    //         const productPrice = $(this).data('price');

    //         $.post('/guestmenu/add', {
    //                 _token: '{{ csrf_token() }}',
    //                 id: productId,
    //                 name: productName,
    //                 price: productPrice
    //             },
    //             function(response) {
    //                 updateCart(response.cart);
    //             });
    //     });

    //     $(document).on('click', '.remove-from-cart', function() {
    //         const productId = $(this).data('id');

    //         $.post('/guestmenu/remove', {
    //             _token: '{{ csrf_token() }}',
    //             id: productId
    //         }, function(response) {
    //             updateCart(response.cart);
    //         });
    //     });

    //     // Hapus produk dari keranjang

    //     // Perbarui tampilan keranjang
    //     function updateCart(cart) {
    //         if (Object.keys(cart).length > 0) {
    //             let cartHtml = '';
    //             $.each(cart, function(id, item) {
    //                 cartHtml += `
    //                   <tr>
    //                       <td style="width: 26%;text-align:left;">${item.name}</td>
    //                       <td style="width: 20%;text-align:left;">Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</td>
    //                       <td style="width: 20%;text-align:left;">${item.quantity}</td>
    //                       <td style="width: 70px;text-align:left;">Rp ${new Intl.NumberFormat('id-ID').format(item.price * item.quantity)}</td>
    //                       <td style="width: 9%"><button class="remove-from-cart btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light" data-id="${id}"><i class="ti ti-square-letter-x"></i></button></td>
    //                   </tr>
    //               `;
    //             });
    //             cartHtml += '</tbody></table>';
    //             $('#cart-container').html(cartHtml);
    //         } else {
    //             $('#cart-container').html('<p>Keranjang kosong.</p>');
    //         }
    //     }
    // });

    $(document).ready(function() {
        // Tambahkan produk ke keranjang
        $('.add-to-cart').click(function() {
            const productId = $(this).data('id');
            const productName = $(this).data('name');
            const productPrice = $(this).data('price');

            $.post('/guestmenu/add', {
                _token: '{{ csrf_token() }}',
                id: productId,
                name: productName,
                price: productPrice
            }, function(response) {
                updateCart(response.cart);
            });
        });

        // Hapus produk dari keranjang
        $(document).on('click', '.remove-from-cart', function() {
            const productId = $(this).data('id');

            $.post('/guestmenu/remove', {
                _token: '{{ csrf_token() }}',
                id: productId
            }, function(response) {
                updateCart(response.cart);
            });
        });

        // Perbarui tampilan keranjang
        function updateCart(cart) {
            if (Object.keys(cart).length > 0) {
                let cartHtml =
                    '';
                $.each(cart, function(id, item) {
                    cartHtml += `
                            <tr>
                                <td style="width: 26%;text-align:left;">${item.name}</td>
                                <td style="width: 20%;text-align:left;">Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</td>
                                <td style="width: 20%;text-align:left;">${item.quantity}</td>
                                <td style="width: 70px;text-align:left;">Rp ${new Intl.NumberFormat('id-ID').format(item.price * item.quantity)}</td>
                                <td style="width: 9%"><button class="remove-from-cart btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect waves-light" data-id="${id}"><i class="ti ti-square-letter-x"></i></button></td>
                            </tr>
                        `;
                });
                cartHtml += '</tbody></table>';
                $('#cart-container').html(cartHtml);
            } else {
                $('#cart-container').html('<p>Keranjang kosong.</p>');
            }
        }
    });
</script>
