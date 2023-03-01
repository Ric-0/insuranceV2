<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Site d'assurance pour les auto-écoles, demandez votre devis GRATUITETEMENT et RAPIDEMENT">
    <title>Assurance Conduite</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.2/bootstrap-float-label.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/index_mobile.css')}}"
        media="screen and (max-width: 800px)" />
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:serif="http://www.serif.com/" width="250px" height="100%" viewBox="0 0 6168 1500" version="1.1"
                xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                <g transform="matrix(1.81289,0,0,1.81289,-683.796,-609.667)">
                    <g transform="matrix(1,0,0,1,73.2533,60.3143)">
                        <path
                            d="M747.057,310C528.775,513.593 373.225,775.938 310,1069.37L310,389.2C310,345.489 345.488,310 389.2,310L747.057,310Z"
                            style="fill:white;" />
                    </g>
                    <g transform="matrix(1,0,0,1,73.2533,60.3143)">
                        <path
                            d="M1064.69,1069.37C855.131,1069.37 685,899.24 685,689.686C685,480.131 855.131,310 1064.69,310L1064.69,1069.37Z"
                            style="fill:white;" />
                    </g>
                    <g>
                        <g transform="matrix(1.10018,0.190021,-0.155918,0.902738,126.506,-219.905)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:35.5px;" />
                        </g>
                        <g transform="matrix(1.1151,0.0553753,-0.0454374,0.914977,-9.08981,33.1416)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:41.41px;" />
                        </g>
                        <g transform="matrix(0.94054,0.339682,-0.294936,0.816643,409.297,-369.783)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:32.26px;" />
                        </g>
                        <g transform="matrix(0.839622,0.543171,-0.452252,0.699081,698.118,-487.853)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:26.27px;" />
                        </g>
                        <g transform="matrix(0.737167,0.67571,-0.386838,0.422021,754.108,-354.26)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:22.25px;" />
                        </g>
                        <g transform="matrix(0.593648,0.804725,-0.349686,0.257964,868.619,-325.675)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:15.67px;" />
                        </g>
                        <g transform="matrix(0.430754,0.902469,-0.28092,0.134085,955.681,-295.992)">
                            <path d="M601.782,1129.69L598.439,1061"
                                style="fill:none;stroke:white;stroke-width:8.16px;" />
                        </g>
                    </g>
                </g>
                <g transform="matrix(1.2488,0,0,1.2488,1277.92,4.76627)">
                    <text x="145px" y="511.296px"
                        style="font-family:'Montserrat-Medium', 'Montserrat';font-weight:500;font-size:588px;fill:white;">ASSURANCE</text>
                    <text x="145px" y="1111.3px"
                        style="font-family:'Montserrat-Medium', 'Montserrat';font-weight:500;font-size:588px;fill:white;">C
                        <tspan x="561.304px " y="1111.3px ">O</tspan>NDUITE
                    </text>
                </g>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL"
            aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarsExample07XL">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/#formules">Les formules<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#tarifs">Nos tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#engagement">Notre engagement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#qui-sommes-nous">Qui sommes-nous ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="contact">
        <div class="align-center">
            <p class="big-title">Contactez nous</p>
            <div class="justify-content-center" id="container-modal">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <form method="POST" action="{{url('/contact')}}">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-group has-float-label">
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        aria-describedby="firstname" required>
                                    <span style="background-color:white;font-size: 15px">Prénom *</span>
                                </label>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-group has-float-label">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        aria-describedby="lastname" required>
                                    <span style="background-color:white;font-size: 15px">Nom *</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-group has-float-label">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                                required>
                            <span style="background-color:white;font-size: 15px">Email *</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-group has-float-label">
                            <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone"
                                required>
                            <span style="background-color:white;font-size: 15px">Numéro de téléphone *</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-group has-float-label">
                            <input id="captcha" type="text" class="form-control" placeholder="" name="captcha">
                            <span>Entrer le captcha *</span>
                        </label>
                    </div>
                    @if(\Illuminate\Support\Facades\Session::get('success'))
                    <div class="container" style="margin-top: 3%">
                        <div class="alert">
                            <div class="alert alert-success" role="alert" style="text-align: center">
                                {{\Illuminate\Support\Facades\Session::get('success')}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::get('error'))
                    <div class="container" style="margin-top: 3%">
                        <div class="alert">
                            <div class="alert alert-danger" role="alert" style="text-align: center">
                                {{\Illuminate\Support\Facades\Session::get('error')}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="container" style="margin-top: 3%">
                        <div class="alert">
                            <div class="alert alert-danger" role="alert" style="text-align: center">
                                @foreach ($errors->all() as $error)
                                @if(stristr($error,'captcha'))
                                Le Captcha renseigné n'est pas correct, veuillez réessayer.
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <small id="help" class="form-text text-muted">Les champs suivis d’une * sont obligatoires.</small>
                    <div class="row" style="">
                        <div class="col">
                            <button id="send-form" type="submit" class="btn btn-outline ">
                                <b>Valider</b>
                            </button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>

    <footer class="py-2">
        <div class="row">
            <div class="col-12 col-md">
                <a class="text-muted" href="#" style="color: black">

                </a>
                <p class="text-2020">&copy; 2020</p>
            </div>
            <div class="nav-footer">
                <a href="#formules">Les formules</a>
                <a href="#tarifs">Nos tarifs</a>
                <a href="#engagement">Notre engagement</a>
                <a href="#qui-sommes-nous">Qui sommes-nous ?</a>
            </div>
        </div>
    </footer>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>