<x-app-layout>
    <x-slot name="header">
<<<<<<< HEAD
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
=======
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

<<<<<<< HEAD
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
