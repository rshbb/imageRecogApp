<?php echo $__env->make("include.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <div class="card text-center">
                        <img src="https://i.pinimg.com/originals/65/cb/86/65cb86f992b46bfa32d985e2f25d2a07.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                    <div class="card text-center">
                            <img src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="" class="card-img-top">
                            <div class="card-body">
                            <div class="card-text"> BADGES HERE</div>
                            </div>
                    </div>
                </div>
            </div>

            <?php echo $__env->make("include.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html<?php /**PATH /opt/lampp/htdocs/imageRecogApp/resources/views/landing.blade.php ENDPATH**/ ?>