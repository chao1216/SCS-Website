

        <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= <?php echo e(asset('css/app.css')); ?>>
    <link rel="stylesheet" href= <?php echo e(asset('css/agency.css')); ?>>
    <link rel="stylesheet" href= <?php echo e(asset('css/NavContainerStyle.css')); ?>>
    <script src=<?php echo e(asset('js/activeLinks.js')); ?>></script>
    <script src= <?php echo e(asset('js/app.js')); ?>></script>
</head>
<body>
<div id="navContainer" class="container-fluid">

        <ul class="nav nav-tabs col-lg-12 col-md-12 hidden-sm hidden-xs center-block">
            <li id="home" class="col-lg-6 col-md-6 "><a href= <?php echo e(route('home')); ?>>Home</a></li>
            <li id="news" class="col-lg-2 col-md-2"><a href= <?php echo e(route('news')); ?>>News</a></li>
            <li id="projects" class="col-lg-2 col-md-2"><a href= <?php echo e(route('projects')); ?>>Projects</a></li>
            <li id="about" class="col-lg-2 col-md-2"><a href= <?php echo e(route('about')); ?>>About Us</a></li>
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
            <?php else: ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo e(url('/logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>



</div>
<div class="container-fluid">

    <?php echo $__env->yieldContent('body'); ?>
</div>
</body>

</html>