<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://kit.fontawesome.com/dc214203cc.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/blog/custom.css">
</head>
<body>

    
  <div class="nav">
     <div class="container blog">
        <div class="row">
            <div class="col-4">
                <div class="logo"><img src="/blog/logo-img/logo.jpg"></div>
            </div>
            <div class="col-4">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                              <ul class="navbar-nav">
                                <li class="nav-item active">
                                  <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/blogs">BLOG</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/contact">CONTACT</a>
                                </li>
                              </ul>
                        </div>
                    </nav>           
            </div>
         <div class="col-4">
            <div id="app">
                <nav class="navbar navbar-expand-md">           
                    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('LOGIN')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('REGISTER')); ?></a>
                                </li>
                                
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>                  
                </div>
            </div>
                </nav>
            </div>
        </div>
    </div>               
 </div>
        <main class="info pb-5">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
 </div>
 <div class="bg-footer">
  <div class="container">
    <div class="row pt-5">
      <div class="col text-center">
        <div class="footer-logo"><img src="/blog/logo-img/footer-logo.jpg" alt=""></div>
      </div>
    </div>
   <div class="row mb-0">
   <div class="col-12 text-center">
      <nav class="navbar navbar-expand-lg d-flex">
          <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav pb-2 justify-content-center">
              <li class="nav-item active">
                <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="/blogs">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>           
   </div>
   </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\_blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>