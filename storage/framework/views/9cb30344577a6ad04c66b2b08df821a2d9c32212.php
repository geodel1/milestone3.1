<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <title><?php echo e(config('app.name', 'SIMS-Wits')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'SIMS-Wits')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="row">
            <div>
                
            </div>
           
        </div>
        <div class="row">
            <div class="sidebar col-md-3">
                <ul>
                  <li>
                    <a href='<?php echo e(url("sidebarmenu/dashboard")); ?>'>
                      <i class="glyphicon glyphicon-home"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href='<?php echo e(url("sidebarmenu/users")); ?>'>
                      <i class="glyphicon glyphicon-user"></i>
                      <span>Manage Users</span>
                    </a>
                    
                  </li>
                  <li>
                    <a href='<?php echo e(url("sidebarmenu/sidebarcategories")); ?>' >
                      <i class="glyphicon glyphicon-indent-left"></i>
                      <span>Categories</span>
                    </a>
                  </li>
                  <li>
                    <a href='<?php echo e(url("sidebarmenu/sidebaritems")); ?>' class="submenu-toggle">
                      <i class="glyphicon glyphicon-th-large"></i>
                      <span>Items</span>
                    </a>
                  </li>
                  <li>
                    <a href='<?php echo e(url("sidebarmenu/sidebarsuppliers")); ?>' >
                      <i class="glyphicon glyphicon-picture"></i>
                      <span>Suppliers</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="submenu-toggle">
                      <i class="glyphicon glyphicon-th-list"></i>
                       <span>Sales</span>
                    </a>
                      
                  </li>
                  <li>
                    <a href="#" class="submenu-toggle">
                      <i class="glyphicon glyphicon-signal"></i>
                       <span>Sales Report</span>
                      </a>
                      
                  </li>
                </ul>
            </div>

             
            <div class= "col-md-9">
                <?php echo $__env->yieldContent('content'); ?>
            </div>   
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
