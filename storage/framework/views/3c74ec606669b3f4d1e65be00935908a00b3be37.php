<div
	class="p-4 overflow-hidden border rounded-lg shadow-md sm:p-6 border-secondary-300 dark:border-secondary-700 bg-secondary-200 dark:bg-secondary-800">
	<div class="grid grid-cols-6 gap-4">

		
		<div class="col-span-6">
			<label for="category_id"
				class="block text-sm font-bold tracking-wide text-gray-700 uppercase dark:text-gray-300"><?php echo e(__('articles.category_id')); ?></label>
			<input type="text"
				class="block w-full mt-1 text-sm text-gray-800 transition rounded-lg shadow-sm dark:text-gray-200 border-secondary-300 dark:border-secondary-700 bg-secondary-50 dark:bg-secondary-900 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
				name="category_id"
				id="category_id"
				autofocus
				value="<?php echo e(old('category_id') ?? $article->category_id); ?>">
			<?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="mt-1 text-xs font-medium text-red-500 dark:text-red-400"><?php echo e($message); ?></p>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>

		
		<div class="col-span-6">
			<label for="title"
				class="block text-sm font-bold tracking-wide text-gray-700 uppercase dark:text-gray-300"><?php echo e(__('articles.title')); ?></label>
			<input type="text"
				class="block w-full mt-1 text-sm text-gray-800 transition rounded-lg shadow-sm dark:text-gray-200 border-secondary-300 dark:border-secondary-700 bg-secondary-50 dark:bg-secondary-900 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
				name="title"
				id="title"
				autofocus
				value="<?php echo e(old('title') ?? $article->title); ?>">
			<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="mt-1 text-xs font-medium text-red-500 dark:text-red-400"><?php echo e($message); ?></p>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>

		
		<div class="col-span-6">
			<label for="content"
				class="block text-sm font-bold tracking-wide text-gray-700 uppercase dark:text-gray-300"><?php echo e(__('articles.content')); ?></label>
			<textarea
				class="block w-full mt-1 text-sm text-gray-800 transition rounded-lg shadow-sm dark:text-gray-200 border-secondary-300 dark:border-secondary-700 bg-secondary-50 dark:bg-secondary-900 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
				name="content"
				id="content"
				rows="10"><?php echo e(old('content') ?? $article->body); ?></textarea>
			<?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="mt-1 text-xs font-medium text-red-500 dark:text-red-400"><?php echo e($message); ?></p>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>

	</div>

	
	<div class="mt-4 -mx-6 -mb-6 bg-secondary-300 dark:bg-secondary-700">
		<div class="px-6 py-4 space-x-1 text-right">
			<a href="<?php echo e(route('articles.index')); ?>"
				class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-gray-600 uppercase transition bg-white border border-transparent rounded shadow select-none focus:border-gray-400 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-gray-400 focus:ring-opacity-30 disabled:opacity-50">
				Cancel
			</a>
			<button
				class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wider text-white uppercase transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
				<?php echo e($submit); ?>

			</button>
		</div>
	</div>

</div>
<?php /**PATH E:\Xampp\htdocs\laravel-8-crud-main\resources\views/articles/form.blade.php ENDPATH**/ ?>