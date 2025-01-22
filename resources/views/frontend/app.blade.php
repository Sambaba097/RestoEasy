<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

{{-- nav bar --}}

  <header>

     <nav class="bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-xl font-bold text-gray-900 dark:text-white">RestoEasy</a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:-my-px sm:ml-6 sm:flex space-x-8">
                <a href="#menu" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white transition">Menu</a>
                <a href="#contact" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white transition">Contact</a>
                <a href="#reserver" class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white transition">Réserver</a>
            </div>

            <!-- Login Button -->
            <div class="flex items-center">
                <a href="#connexion" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Connexion
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button id="mobile-menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Ouvrir le menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="sm:hidden hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#menu" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Menu</a>
            <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Contact</a>
            <a href="#reserver" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Réserver</a>
        </div>
    </div>
  </nav>

  <script>
    // Script pour basculer le menu mobile
    document.getElementById('mobile-menu-toggle').addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
  </script>

  </header>
  <main>
    @yield('content');
  </main>
 


</body>
</html>