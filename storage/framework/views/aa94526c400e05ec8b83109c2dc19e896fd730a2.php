<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('title'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

	
	<div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 dark:border-secondary-700 bg-secondary-200 dark:bg-secondary-800">
		<div class="flex flex-col justify-between sm:flex-row">
			<div class="text-center sm:text-left flex-start">
				<h3 class="text-lg font-semibold leading-6 text-gray-800 dark:text-gray-200">Data <?php echo e($title); ?></h3>
				<p class="mt-px text-sm leading-5 text-gray-600 dark:text-gray-400 sm:mt-1">The following data of <?php echo e(Str::lower(__($title))); ?>.</p>
			</div>
			<div class="flex items-center justify-center mt-2 space-x-2 sm:mt-0">
				<a href="<?php echo e(route('articles.create')); ?>"
					class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded-full shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
					<svg class="w-5 h-5 -mx-2"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
						fill="currentColor">
						<path fill-rule="evenodd"
							d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
							clip-rule="evenodd" />
					</svg>
				</a>
				<form action="<?php echo e(url()->current()); ?>"
					method="get">
					<div class="relative mx-auto">
						<input type="search"
							name="keyword"
							value="<?php echo e(request('keyword')); ?>"
							placeholder="Search ....."
							class="block w-full pl-4 pr-10 text-sm leading-5 text-gray-800 transition rounded-full shadow-sm dark:text-gray-200 border-secondary-300 dark:border-secondary-700 bg-secondary-50 dark:bg-secondary-800 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
						<button type="submit"
							class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
							<svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25"
								xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 20 20"
								fill="currentColor">
								<path fill-rule="evenodd"
									d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
									clip-rule="evenodd" />
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<?php if(session('success')): ?>
	<div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
		<?php echo session('success'); ?>

	</div>
	<?php endif; ?>

	
	<div class="overflow-hidden border rounded-lg border-secondary-300 dark:border-secondary-700">
		<div class="overflow-x-auto">
			<table class="min-w-full">
				<thead
					class="text-sm text-gray-800 border-b select-none dark:text-gray-200 border-secondary-300 dark:border-secondary-700 bg-secondary-200 dark:bg-secondary-800">
					<tr>
						<th class="px-6 py-3 font-bold text-center uppercase">No</th>
						<th class="px-6 py-3 font-bold text-left uppercase">Title</th>
						<th class="px-6 py-3 font-bold text-left uppercase">Content</th>
						<th class="px-6 py-3 font-bold text-right uppercase"></th>
					</tr>
				</thead>
				<tbody class="text-sm text-gray-700 bg-white divide-y dark:text-gray-300 dark:bg-secondary-900 divide-secondary-300 dark:divide-secondary-700">
					<?php if($articles->count() > 0): ?>
					<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td class="px-6 py-3 leading-6 text-center whitespace-nowrap"><?php echo e(++$i); ?></td>
						<td class="w-10 px-6 py-3 leading-6 sm:w-auto"><?php echo e($article->title); ?></td>
						<td class="px-6 py-3 leading-6"><?php echo e(Str::limit($article->body, 60)); ?></td>
						<td class="px-6 text-right select-none whitespace-nowrap">
							<a href="<?php echo e(route('articles.show', $article)); ?>"
								class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-lightBlue-500 focus:border-lightBlue-600 hover:bg-lightBlue-600 focus:outline-none focus:ring focus:ring-lightBlue-500 focus:ring-opacity-30 disabled:opacity-50">
								<svg class="w-4 h-4 -mx-2"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor">
									<path fill-rule="evenodd"
										d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
										clip-rule="evenodd" />
								</svg>
							</a>
							<a href="<?php echo e(route('articles.edit', $article)); ?>"
								class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50">
								<svg class="w-4 h-4 -mx-2"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 20 20"
									fill="currentColor">
									<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
								</svg>
							</a>
							<div endpoint="<?php echo e(route('articles.destroy', $article)); ?>"
								class="inline delete"></div>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
					<tr class="select-none">
						<td class="px-6 py-3 leading-4 text-center whitespace-nowrap">-</td>
						<td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
						<td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
						<td class="px-6 text-right whitespace-nowrap">-</td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<div class="text-gray-600 dark:text-gray-400 bg-secondary-50 dark:bg-secondary-900">
			<?php echo e($articles->links()); ?>

		</div>
	</div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH E:\Xampp\htdocs\laravel-8-crud-main\resources\views/articles/index.blade.php ENDPATH**/ ?>