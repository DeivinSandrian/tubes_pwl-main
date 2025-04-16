@props(['value'])

<<<<<<< HEAD
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
=======
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
    {{ $value ?? $slot }}
</label>
