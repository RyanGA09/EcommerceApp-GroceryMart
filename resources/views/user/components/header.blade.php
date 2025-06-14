<!-- header -->
<header class="py-4 shadow-sm bg-white">
    <div class="container flex items-center justify-between">
        {{-- <a href="index.html">
            <img src="../assets/images/logo.svg" alt="Logo" class="w-32">
        </a> --}}

        <!-- Link to Landing Page -->
        <a href="{{ route('landingpage') }}" class="text-2xl font-bold">
            <span class="text-red-600">Housing</span><span class="text-white">Mart</span>
        </a>

        <!-- Link to Dashboard -->
        @auth
        <a href="{{ route('dashboard') }}" class="text-white hover:text-red-500 transition">
            <span class="text-red-600">Housing</span><span class="text-white">Mart</span>
        </a>
        @endauth

        <div class="w-full max-w-xl relative flex">
            <span class="absolute left-4 top-3 text-lg text-gray-400">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
            <input type="text" name="search" id="search"
                class="w-full border border-primary border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none"
                placeholder="search">
            <button
                class="bg-primary border border-primary text-white px-8 rounded-r-md hover:bg-transparent hover:text-primary transition">Search</button>
        </div>

        @auth
        <div class="flex items-center space-x-4">
            <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-2xl">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="text-xs leading-3">Wishlist</div>
                <div
                    class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                    8</div>
            </a>
            <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-2xl">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
                <div class="text-xs leading-3">Cart</div>
                <div
                    class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                    2</div>
            </a>
            <a href="#" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-2xl">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="text-xs leading-3">Account</div>
            </a>
        </div>
        @endauth
    </div>
</header>
<!-- ./header -->
