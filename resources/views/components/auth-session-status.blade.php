@props(['status'])

@if ($status)
<<<<<<< HEAD
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
=======
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400']) }}>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
        {{ $status }}
    </div>
@endif
