<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/') }}front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CKEditor -->
        <script src="{{ asset('/') }}front/ckeditor/ckeditor.js"></script>
        <script src="{{ asset('/') }}front/ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="{{ asset('/') }}front/ckeditor/css/samples.css">
        <link rel="stylesheet" href="{{ asset('/') }}front/ckeditor/toolbarconfigurator/lib/codemirror/neo.css">

        <!-- Custom styles for this template -->
        <link href="{{ asset('/') }}front/css/shop-homepage.css" rel="stylesheet">
        <link href="{{ asset('/') }}front/css/style.css" rel="stylesheet">

    </head>

    <body>

        @include('front.includes.menu')

        @yield('body')

        @include('front.includes.footer')

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('/') }}front/vendor/jquery/jquery.min.js"></script>
        <script src="{{ asset('/') }}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- CKEditor -->
        <script>
            initSample();
        </script>

        <script>
            $('.delete-gallery').click(function () {
                event.preventDefault();

                var galleryId = $(this).attr('id');
                var check = confirm('Are You Sure To Delete This?');
                if (check) {
                    document.getElementById('deleteGallery'+galleryId).submit();
                }
            });
        </script>

        <script>
            $('.delete-portfolio').click(function () {
                event.preventDefault();

                var portfolioId = $(this).attr('id');
                var check = confirm('Are You Sure To Delete This?');
                if (check) {
                    document.getElementById('deletePortfolio'+portfolioId).submit();
                }
            })
        </script>

    </body>

</html>
