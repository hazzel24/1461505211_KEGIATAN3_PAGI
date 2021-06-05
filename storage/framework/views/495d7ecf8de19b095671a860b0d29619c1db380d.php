<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('title'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

	
	<div
		class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 dark:border-secondary-700 dark:bg-secondary-800 bg-secondary-200">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-200"><?php echo e($title); ?></h3>
				<p class="mt-px text-sm leading-5 text-gray-600 dark:text-gray-400 sm:mt-1"><?php echo e(__('articles.create_description')); ?></p>
			</div>
			<div class="flex items-end justify-center">
				<div
					class="flex items-center px-3 py-1 mt-1 text-xs text-gray-600 border rounded-full dark:text-gray-400 border-secondary-300 dark:border-secondary-700 dark:bg-secondary-700 bg-secondary-300 sm:py-0 sm:mt-0 sm:border-none sm:bg-transparent sm:dark:bg-transparent sm:px-0">
					<span>Home</span>
					<svg class="w-3 h-3"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
							clip-rule="evenodd" />
					</svg>
					<a href="<?php echo e(route('articles.index')); ?>"
						class="hover:text-gray-700">Articles</a>
					<svg class="w-3 h-3"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
							clip-rule="evenodd" />
					</svg>
					<a href="<?php echo e(route('articles.create')); ?>"
						class="text-primary-500 hover:text-primary-600">Create</a>
				</div>
			</div>
		</div>
	</div>

	
	<?php if(session('success')): ?>
	<div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
		<?php echo session('success'); ?>

	</div>
	<?php endif; ?>

	
	<form action="<?php echo e(route('articles.store')); ?>"
		method="post">
		<?php echo csrf_field(); ?>
		<?php echo $__env->make('articles.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</form>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH E:\Xampp\htdocs\laravel-8-crud-main\resources\views/articles/create.blade.php ENDPATH**/ ?>