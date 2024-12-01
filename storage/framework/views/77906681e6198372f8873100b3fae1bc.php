
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FAJAR HARAPAN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('node_modules/bootstrap-icons/font/bootstrap-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>">

    </head>
    <body class="flex flex-col items-center justify-center w-full h-screen overflow-hidden bg-blue-100">
            <div class="mb-8">
                <i class="text-5xl text-red-500 bi bi-exclamation-circle-fill"></i>
            </div>
            <h2 class="mb-8 text-5xl text-red-500 font-semiBold">404</h2>
            <p class="mb-6 text-xl font-medium text-slate-500">Page Not Found !</p>
            <a href="<?php echo e(url('/dashboard')); ?>" class="inlinde-block flex items-center justyify-center gap-x-3 font-emdium text-base px-3 py-2.5 bg-blue-500 rounded-md text-white hover:bg-blue-700 hover:shadow-md transition-all duration-300 ease-in-out">
                <i class="bi bi-arrow-left"></i>
                <span>Back To Home</span>
            </a>
    </body>



</html>
<?php /**PATH C:\laragon\www\KP-PSSA-FAJARHARAPAN\resources\views/errors/404.blade.php ENDPATH**/ ?>