@props(['messages'])

@if ($messages)
<<<<<<< HEAD
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
=======
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
