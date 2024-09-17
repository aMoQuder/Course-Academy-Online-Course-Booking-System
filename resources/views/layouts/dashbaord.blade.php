<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<html lang="en">

<head>
    <title>Kain academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href={{ asset('asset/images/11.2.jpg') }} type="">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href={{ asset('asset/pages/waves/css/waves.min.css') }} type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href={{ asset('asset/css/bootstrap/css/bootstrap.min.css') }}>
    <!-- waves.css -->
    <link rel="stylesheet" href={{ asset('asset/pages/waves/css/waves.min.css') }} type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href={{ asset('asset/icon/themify-icons/themify-icons.css') }}>
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href={{ asset('asset/css/font-awesome-n.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('asset/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href={{ asset('asset/css/jquery.mCustomScrollbar.css') }}>
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href={{ asset('asset/css/style.css') }}>

</head>


<body>
    <div id="app">
        <main>
            
            @yield('content')

        </main>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src={{ asset('asset/js/jquery/jquery.min.js') }}></script>
    <script type="text/javascript" src={{ asset('asset/js/jquery-ui/jquery-ui.min.js') }}></script>
    <script type="text/javascript" src={{ asset('asset/js/popper.js/popper.min.js') }}></script>
    <script type="text/javascript" src={{ asset('asset/js/bootstrap/js/bootstrap.min.js') }}></script>
    <!-- waves js -->
    <script src={{ asset('asset/pages/waves/js/waves.min.js') }}></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src={{ asset('asset/js/jquery-slimscroll/jquery.slimscroll.js') }}></script>

    <!-- slimscroll js -->
    <script src={{ asset('asset/js/jquery.mCustomScrollbar.concat.min.js') }}></script>

    <!-- menu js -->
    <script src={{ asset('asset/js/pcoded.min.js') }}></script>
    <script src={{ asset('asset/js/vertical/vertical-layout.min.js') }}></script>

    <script type="text/javascript" src={{ asset('asset/js/script.js ') }}></script>

    <!-- font ossam js  -->

    <!-- jquery of js -->
    <script>
        $(document).ready(function() {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                    $('#preview').show();
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        function previewFile() {
            var fileInput = document.getElementById('updateImage');
            var preview = document.getElementById('image_preview');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(fileInput.files[0]);
            }
        }

        function previewVideo(event) {
            var video = document.getElementById('videoPreview');
            var source = document.getElementById('videoSource');

            source.src = URL.createObjectURL(event.target.files[0]);
            source.type = event.target.files[0].type;

            video.load();
            video.play();
        }

        function previewVideo1(event) {
            var video = document.getElementById('videoPreview');
            var source = document.getElementById('videoSource');

            // عرض الفيديو الجديد
            source.src = URL.createObjectURL(event.target.files[0]);
            source.type = event.target.files[0].type;

            video.load();
            video.play();
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editButtons = document.querySelectorAll('.edit-btn');

            editButtons.forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();

                    // إغلاق جميع النماذج المفتوحة
                    var openForms = document.querySelectorAll('.panel-collapse.in');
                    openForms.forEach(function(form) {
                        form.classList.remove('in');
                    });

                    // فتح النموذج للصف الحالي
                    var target = btn.getAttribute('href');

                    var targetElement = document.querySelector(target);
                    if (targetElement) {
                        targetElement.classList.add('in');
                    }
                });
            });
        });
    </script>
</body>

</html>
