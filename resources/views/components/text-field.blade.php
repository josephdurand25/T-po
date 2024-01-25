@props(['disabled' => false])

<input type="text" {{ $attributes->merge([
    'class' => 'w-full bg-white/90 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }} 
    />
