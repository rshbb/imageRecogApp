@include("include.header")
    <title>LANDING</title>    
    <style>
        .card{
            border:2px solid black;
            width: 200px;
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-horizontal navbar-expand-sm navbar-dark bg-default">
                <div class="container">
                    <a class=" navbar-brand" href="#">Image Recognition App</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <ul class="navbar-nav ml-sm-auto">
                            <!-- Settings button -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="nav-link-inner--text d-sm-none">Settings</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                    <a class="dropdown-item" href="/upload">UPLOAD</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <!-- Cards which stores previous images -->
            <div class="container">
                <div class = "row">
                    @isset($images)
                        @foreach($images as $image)
                            <div class="card text-center">
                                <img src="{{$dir.$image->filePath.'.'.$image->extension}}" alt="IMAGE" class="card-img-top">
                                <div class="card-body">
                                        @foreach(explode(",",$image->result) as $str)
                                            <div class="col">
                                                <i class="badge badge-info">{{$str}}</i>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>

            @include("include.footer")
    </body>
</html