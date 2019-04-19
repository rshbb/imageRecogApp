@include("include.header")
    <title>LANDING</title>    
    </head>
    <body>
        <nav class="navbar navbar-horizontal navbar-expand-sm navbar-dark bg-default">
                <div class="container">
                    <a class=" navbar-brand" href="#">LOGIN</a>
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
                                    <a class="dropdown-item" href="./signup">SIGNUP</a>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
        </nav>
        <div class = "row">
            <div class="col"></div>
            <div id = "form" class="col">
                <form method="post" action="/auth">
                    <div class="form-group">
                        <label for="name">USERNAME</label>
                        <input type="name" class="form-control" id="name" name = "name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">PASSWORD</label>
                        <input type="password" class="form-control" id="pwd" name = "password">
                    </div>    
                    <button type="submit" class="btn btn-default" name = "login">LOGIN</button>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="col"></div>
        </div>
        @include("include.footer")
    </body>
</html