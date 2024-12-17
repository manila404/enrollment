<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-light-gray">
    <div class="flex">
        <!-- Navbar -->
        <div
            class="w-[8rem] bg-primary text-white min-h-screen flex flex-col items-center justify-between py-6 rounded-xl">
            <!-- Upper Part of Navbar -->
            <div class="flex flex-col items-center">
                <!-- Logo -->
                <div class="mb-12">
                    <img src="{{ asset('assets/cvsu.svg') }}" alt="Bacoor Logo" class="h-logo w-logo ml-4 mr-4">
                    <p class="text-md mt-2 text-center font-semibold font-poppins">Bacoor</p>
                </div>

                <!-- Navbar Links with Icons -->
                <ul class="space-y-8">

                    <a href="{{ route(name: 'admin.dashboard') }}">
                        <li class="flex flex-col items-center group mb-8">
                            <img src="{{ asset('assets/dashboard.svg') }}" alt="Bacoor Logo"
                                class="h-icon w-icon ml-4 mr-4 group-hover:scale-110 transition-transform duration-200 ease-in-out">
                            <span
                                class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out">Dashboard</span>
                        </li>
                    </a>

                    <a href="{{ route('admin.users') }}">
                        <li class="flex flex-col items-center group mb-8">
                            <img src="{{ asset('assets/users.svg') }}" alt="Bacoor Logo"
                                class="h-icon w-icon ml-4 mr-4 group-hover:scale-110 transition-transform duration-200 ease-in-out">
                            <span
                                class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out">Users</span>
                        </li>
                    </a>
                </ul>
            </div>

            <!-- Bottom Part of Navbar -->
            <div class="flex flex-col items-center">
    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
        <button type="submit" class="flex items-center space-x-2 group">
            <img src="{{ asset('assets/signout.svg') }}" alt="Signout Icon"
                class="h-icon w-icon group-hover:scale-110 transition-transform duration-200 ease-in-out">
            <span class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out">
                Logout
            </span>
        </button>
    </form>
</div>


        </div>

        <!-- Header and Main Content Area -->
        <div class="flex-1 bg-light-gray">

            <!-- Header Part -->
            <header class="bg-light-gray shadow-big p-4">
                <h1 class="text-2xl font-bold">Hello  <span id="username">{{ Auth::user()->name }}</span> </h1>
            </header>

            <!-- Area Where Main Content will be Called -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
