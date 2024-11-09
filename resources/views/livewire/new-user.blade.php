<div class="flex p-10 items-center flex-col">
    <h1 class="text-3xl mb-2">USER</h1>
    <div class="flex p-10 items-center flex-col bg-gray-50 rounded-lg shadow-lg max-w-md mx-auto">
        <h1 class="text-3xl mb-6 font-semibold text-gray-800">User Registration</h1>

        <!-- Alert Message -->
        @if (session()->has('message'))
            <div class="alert alert-success bg-green-500 text-white mb-4">
                {{ session('message') }}
            </div>
        @endif

        <!-- Registration Form -->
        <form wire:submit.prevent="submit">
            <!-- Name Input -->
            <div class="mb-4 w-full">
                <input wire:model="name" placeholder="Enter your Name" type="text" id="name-input"
                       class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('name') 
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Email Input -->
            <div class="mb-4 w-full">
                <input wire:model="email" placeholder="Enter your Email" type="email" id="email-input"
                       class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('email') 
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-4 w-full">
                <input wire:model="password" placeholder="Enter your Password" type="password" id="password-input"
                       class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('password') 
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span> 
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="w-full">
                <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- Registered Users Table -->
    <div class="mt-8 p-10">
        <h2 class="text-2xl font-semibold mb-4">Registered Users</h2>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-left text-gray-900">Name</th>
                    <th class="py-2 px-4 text-left text-gray-900">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-t border-gray-200">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-t border-gray-200">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
