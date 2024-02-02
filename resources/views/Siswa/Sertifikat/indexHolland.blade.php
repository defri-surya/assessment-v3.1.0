<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMIND &mdash; E-Sertifikat &mdash; HOLLAND</title>

    <link rel="stylesheet" href="{{ asset('bootstrap') }}/style.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
        }

        img {
            width: 100%;
            height: 91vh;
        }

        .image-container {
            position: relative;
            text-align: center;
        }

        .overlay-text {
            position: absolute;
            top: 47%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #3a3a3a;
            font-size: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .overlay-text-date {
            position: absolute;
            top: 65.3%;
            left: 49%;
            transform: translate(-50%, -50%);
            color: #3a3a3a;
            font-size: 14px;
            font-weight: bold;
        }

        @media print {
            @page {
                size: landscape;
            }

            .overlay-text-date {
                position: absolute;
                top: 65.3%;
                left: 49%;
                transform: translate(-50%, -50%);
                color: #3a3a3a;
                font-size: 14px;
                font-weight: bold;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('assets') }}/sertifikat/image/sertifikat-holland.png" alt="">
            <p class="overlay-text">{{ $user->nama }}</p>
            <p class="overlay-text-date">
                <i>{{ Carbon\Carbon::parse($hollandResult->created_at)->translatedFormat('d F Y') }}</i>
            </p>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <button id="print" class="print btn btn-primary mt-4">Download</button>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $("#print").click(function() {
            document.getElementsByClassName('print')[0].style.visibility = 'hidden';
            window.print();
        });
    });
</script>

</html>
