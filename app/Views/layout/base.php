<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"
        integrity="sha512-xrbX64SIXOxo5cMQEDUQ3UyKsCreOEq1Im90z3B7KPoxLJ2ol/tCT0aBhuIzASfmBVdODioUdUPbt5EDEXmD9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/css/toastr.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <title>UAM Riasec - Admin</title>
    <style>
        .img-profile {
            height: 2rem;
            width: 2rem;
            object-fit: cover;
        }
    </style>
    <?= $this->renderSection('cssbawah') ?>
    <!-- @yield('') -->
</head>

<body>
    <?= $this->renderSection('bodi') ?>
    <!-- @yield('bodi') -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.full.min.js"
        integrity="sha512-ZUpSbMNnQu70H7BfByG1XUA1o9mxzacOBl657kmlgK0Yg0Qo+Ymx/WMANRdrom015jZa/DKby6IRRPBVU+Aqlg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $.fn.toggleshowmanu = function(e) {
                let obj = $(this).parents("ul.nav:first").find("li.nav-item > a.nav-link");
                e = (obj.hasClass("active") && obj.hasClass("show")) ? "hide" : "show";
                switch (e) {
                    case "show":
                        $.each(obj, function(k, v) {
                            if ($($(v).attr("href")) !== undefined) {
                                $($(v).attr("href")).removeClass("active");
                                $($(v).attr("href")).removeClass("show");
                            }
                        });

                        if ($($(this).attr("href")) !== undefined) {
                            $($(this).attr("href")).addClass("active");
                            $($(this).attr("href")).addClass("show");
                        }
                        break;
                    case "hide":
                        if ($($(this).attr("href")) !== undefined) {
                            $($(this).attr("href")).addClass("active");
                            $($(this).attr("href")).addClass("show");
                            // alert($(this).attr("href"));
                        }
                        break;
                }
            }
        });
    </script>
    {{-- </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-loading-overlay/2.1.7/loadingoverlay.min.js" integrity="sha512-hktawXAt9BdIaDoaO9DlLp6LYhbHMi5A36LcXQeHgVKUH6kJMOQsAtIw2kmQ9RERDpnSTlafajo6USh9JUXckw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('assets/js/toastr.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
    <!-- @yield('jsbawah') -->
    <?= $this->renderSection('jsbawah') ?>
</body>

</html>