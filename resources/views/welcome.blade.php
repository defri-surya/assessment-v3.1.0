<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Online Digital Assessment with DISC, HOLLAND and PAPI KOSTICK method" />
    <meta name="keywords" content="Online Digital Assessment with DISC, HOLLAND and PAPI KOSTICK method" />
    <meta name="author" content="NUMIND" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap') }}/style.css">

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('front') }}/images/odas_icon.ico">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WV7MDSCHCM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WV7MDSCHCM');
    </script>



    <!--My Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

    <!--My Style-->
    <link rel="stylesheet" href="{{ asset('front') }}/css/style.css" />

    <title>Online Digital Assessment</title>
</head>

<body style="background-color: #61c3d0">
    <!--Navigation-->
    {{-- <section class="logo">
      <div class="container">
        <img src="{{ asset('front') }}/images/logo.png" alt="" />
      </div>
    </section> --}}
    <!--Banner-->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 image">
                    <img src="{{ asset('front') }}/images/student2.png" alt="" class="img-fluid" />
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="banner-text text-center">
                        <h1 class="text-white judul-banner">Online Digital<br> Assessment</h1>
                        <p class="sub-judul text-center mt-4">
                            Online Digital Assessment mempermudah <br> dalam mengecek tipe
                            kepribadian anda, <br> dalam menunjang karir dan pendidikan.
                        </p>
                        <p class="sub-judul"></p>
                        {{-- <div class="col-sm-12 col-lg-6 image imagehideweb">
                  <img src="{{ asset('front') }}/images/bannernew2.png" alt="" class="img-fluid" />
              </div> --}}
                        <div class="col-sm-12 col-lg-12 mybutton text-center">
                            <a class="btn btn-primary btn-lg btn-radius mulai-test text-white" href="/login">
                                Start Assessment
                            </a>
                        </div>
                        <div class="row partner justify-content-center">
                            <div class="col-md-4 col-6 col-lg-4">
                                <img width="90" src="{{ asset('front') }}/images/odas.png" alt="">
                            </div>
                            {{-- <div class="col-md-4 col-6 col-lg-4">
                                <img width="150" src="{{ asset('front') }}/images/Bank-BPD-DIY.png" alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
