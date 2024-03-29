@extends('home')
@section('content')

<style type="text/css">
    body {
        margin-top: 20px;
        background: #f5f5f5;
    }

    .card {
        border: none;
        -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .05);
        margin-bottom: 30px;
    }

    .w-60 {
        width: 60px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0 0 10px;
        font-weight: 600;
    }

    .social-links li a {
        -webkit-border-radius: 50%;
        background-color: rgba(89, 206, 181, .85);
        border-radius: 50%;
        color: #fff;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        text-align: center;
        width: 30px;
        font-size: 12px;
    }

    a {
        color: #707070;
    }
</style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt class="img-fluid rounded-circle w-60"></a>
                        </div>
                        <div class="col-15 card-title align-self-center mb-0">
                            <h5>Emma A. Main</h5>
                            <p class="m-0">Graphics Designer</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></i>Gaji : Rp 3.000.000 <a href="#"><span class="__cf_email__" data-cfemail="b3e3d2c6dff4dccad6c7c7d6f3d4ded2dadf9dd0dcde"></span></a></li>
                        <li class="list-group-item"></i>Pendidikan : S1 Sistem Informasi</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt class="img-fluid rounded-circle w-60"></a>
                        </div>
                        <div class="col-15 card-title align-self-center mb-0">
                            <h5>Paul L. Goyett</h5>
                            <p class="m-0">CEO</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></i>Gaji : Rp 7.000.000<a href="#"><span class="__cf_email__" data-cfemail="baeadbcfd6fdd5c3dfcecedffaddd7dbd3d694d9d5d7"></span></a></li>
                        <li class="list-group-item"></i>Pendidikan : S1 Management</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt class="img-fluid rounded-circle w-60"></a>
                        </div>
                        <div class="col-15 card-title align-self-center mb-0">
                            <h5>Jonathan Smith</h5>
                            <p class="m-0">Project Manager</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></i>Gaji : Rp 5.000.000<a href="#"><span class="__cf_email__" data-cfemail="c090a1b5ac87afb9a5b4b4a580a7ada1a9aceea3afad"></span></a></li>
                        <li class="list-group-item"></i>Pendidikan : S1 Management</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body row">
                        <div class="col-6">
                            <a href><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt class="img-fluid rounded-circle w-60"></a>
                        </div>
                        <div class="col-15 card-title align-self-center mb-0">
                            <h5>Lily J. Ford</h5>
                            <p class="m-0">Web Admin</p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></i>Gaji : Rp2.000.000 <a href="#"><span class="__cf_gaji__" data-cfemail="da8abbafb69db5a3bfaeaebf9abdb7bbb3b6f4b9b5b7"></span></a></li>
                        <li class="list-group-item"></i>Pendidikan : S1 Teknik Informatika</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                            <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </div>
                        <ul class="social-links list-inline mb-0">
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection