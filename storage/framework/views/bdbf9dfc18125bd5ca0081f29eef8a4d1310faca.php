<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<meta name="csrf-token"
		content="<?php echo e(csrf_token()); ?>">

	<?php if(!empty($title)): ?>
	<title><?php echo e($title); ?> - <?php echo e(config('app.name')); ?></title>
	<?php else: ?>
	<title><?php echo e(config('app.name')); ?></title>
	<?php endif; ?>

	<!-- Favicon -->
	<link rel="shortcut icon"
		href="<?php echo e(url(asset('favicon.png'))); ?>">

	<!-- Fonts -->
	<link rel="preconnect"
		href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
		rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet"
		href="<?php echo e(asset('css/app.css')); ?>">

	<!-- Scripts -->
	<script src="<?php echo e(asset('js/app.js')); ?>"
		defer></script>
</head>

<body class="font-sans antialiased text-gray-800 bg-secondary-50 dark:bg-secondary-900">
	<div class="container h-full max-w-4xl p-4 mx-auto md:p-6">
		<header class="flex flex-col items-center justify-center">
			<img src="<?php echo e(asset('avatar192.png')); ?>"
				class="w-32 h-32 rounded-full shadow-md cursor-not-allowed sm:w-40 sm:h-40 md:w-44 md:h-44"
				alt="avatar">
			<div class="my-2 text-center sm:my-4">
				<h1 class="text-2xl font-medium leading-snug text-blue-500">Tugas Praktikum</h1>
				<a href=""
					target="_blank"
					rel="noopener noreferrer"
					class="text-base text-gray-600 dark:text-gray-400 dark:hover:text-red-400 hover:text-red-500"></a>
				<div class="mt-2 switcher"></div>
			</div>
		</header>
		<main>
			<?php echo e($slot); ?>

		</main>
	</div>

	<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH E:\Xampp\htdocs\laravel-8-crud-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>