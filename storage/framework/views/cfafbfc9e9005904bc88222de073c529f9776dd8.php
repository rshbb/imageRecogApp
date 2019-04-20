<?php echo $__env->make("include.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>LANDING</title>    
    </head>
    <body>
        <nav class="navbar navbar-horizontal navbar-expand-sm navbar-dark bg-default">
                <div class="container">
                    <a class=" navbar-brand" href="#">Image Recognition App</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                 <?php echo $__env->yieldContent("nav"); ?><?php /**PATH /opt/lampp/htdocs/imageRecogApp/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>