<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $title ?? '' }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/assets/js/config.js') }}"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('sweetalert::alert')

          <!-- Menu -->

          @include('layout.inc.sidebar')
          <!-- / Menu -->

          <!-- Layout container -->
          <div class="layout-page">
            <!-- Navbar -->

            @include('layout.inc.navbar')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
              <h1>@yield('judul')</h1>
              <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
              </div>
              <!-- / Content -->
              <div class="content-backdrop fade"></div>
              <!-- Footer -->
              <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                  </div>
                  <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                    <a
                      href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                      target="_blank"
                      class="footer-link me-4"
                      >Support</a
                    >
                  </div>
                </div>
              </footer>
              <!-- / Footer -->
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

    <script>
        $('#id_paket').change(function() {
            let id_paket = $(this).val();

            $.ajax({
                url: '/get-paket/' + id_paket,
                type: 'GET',
                dataType: 'json',
                success: function(resp) {
                    $('#price').val(resp.price)
                }
            })

        });
        // let button = document.querySelector('.add-row');
        $('.add-row').click(function(e) {
            e.preventDefault();
            let nama_paket = $('#id_paket').find('option:selected').text(),
               id_paket = $('#id_paket').val(),
                harga = $('#price').val();
                qty = $('.qty').val();
                subtotal = parseInt(harga) * parseInt(qty);
                console.log(subtotal);


            if(id_paket == ""){
                alert("Paket harus dipilih!");
                return false;
            }

            if(qty == ""){
                alert("mohon isi qty");
                return false;
            }
            let newRow = "";
            newRow += "<tr>";
            newRow += "<td>" + nama_paket + "<input type='hidden' name='id_paket[]' class='id_paket form-control' value='" + id_paket + "'></td>";
            newRow += "<td>" + harga +"<input type='hidden' name='price_service[]' value='" + harga + "'></td>";
            newRow += "<td>" + qty + "<input type='hidden' name='qty[]' id='qty' value='" + qty + "'></td>";
            newRow += "<td>" + subtotal + "<input type='hidden' class='subtotal' name='subtotal[]' value='" + subtotal + "'></td>";
            newRow += "</tr>";

            let tbody = $('.tbody-parent');
            tbody.append(newRow);
            $('#id_paket').val("");
            $('.qty').val("");

            let total =0;
            $('.subtotal').each(function(){
                let totalHarga=parseFloat($(this).val()) || 0;
                total += totalHarga;
            });

            $('.total-harga').val(total);
        });
    </script>
  </body>
</html>

