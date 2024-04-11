<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-md">
        <form action="{{ route('users.store') }}" method="POST" class="mt-4 bg-gray-100 p-6 rounded-lg">
            @csrf

            <div class="mb-4">
                <x-input-label for="name" :value="'Name'" />
                <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="'Email'" />
                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <div class="mb-4">
                <x-input-label for="password" :value="'Password'" />
                <input type="password" id="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>

            <x-primary-button>
                {{ __('Create User') }}
            </x-primary-button>
        </form>
    </div>
</div>