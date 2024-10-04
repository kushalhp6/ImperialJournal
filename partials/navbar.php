<!-- Navbar -->
<nav class="bg-gray-900 text-white border-b border-[#333]">
    <div class="container mx-auto px-4 py-2 flex items-center justify-between">
        <!-- Logo -->
        <a href="/index.php" class="text-2xl font-bold text-[#61afef] hover:text-[#c678dd] transition-colors duration-300">Imperial Journal</a>

        <!-- Hamburger Icon for Mobile -->
        <div class="lg:hidden flex items-center">
            <button id="hamburger-icon" class="text-white focus:outline-none hover:text-[#61afef] transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <div id="nav-links" class="hidden lg:flex flex-grow items-center justify-end space-x-4 ml-auto">
            <a href="/index.php" class="hover:bg-gray-800 px-4 py-2 rounded transition-colors duration-300">Home</a>
            <a href="/about.php" class="hover:bg-gray-800 px-4 py-2 rounded transition-colors duration-300">About</a>
            <a href="/blogs.php" class="hover:bg-gray-800 px-4 py-2 rounded transition-colors duration-300">Blogs</a>
            <a href="/tutorials.php" class="hover:bg-gray-800 px-4 py-2 rounded transition-colors duration-300">Tutorials</a>
            <a href="/contact.php" class="hover:bg-gray-800 px-4 py-2 rounded transition-colors duration-300">Contact</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden bg-[#1e1e1e] text-white border-t border-[#333] hidden">
        <div class="px-4 py-2">
            <a href="/index.php" class="block py-2 px-4 hover:bg-gray-800 transition-colors duration-300">Home</a>
            <a href="/about.php" class="block py-2 px-4 hover:bg-gray-800 transition-colors duration-300">About</a>
            <a href="/blogs.php" class="block py-2 px-4 hover:bg-gray-800 transition-colors duration-300">Blogs</a>
            <a href="/tutorials.php" class="block py-2 px-4 hover:bg-gray-800 transition-colors duration-300">Tutorials</a>
            <a href="/contact.php" class="block py-2 px-4 hover:bg-gray-800 transition-colors duration-300">Conatact</a>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('hamburger-icon').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>

    

   <!-- Secondary Navbar for Tutorials -->
<nav class="bg-gray-700 p-2 shadow-md">
    <div class="container mx-auto">
        <div class="flex space-x-4 overflow-x-auto">
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">C++</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">Python</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">Java</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">JavaScript</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">HTML & CSS</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">React</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">Angular</a>
            <a href="#" class="text-white hover:text-[#61afef] hover:bg-gray-600 transition-colors duration-300 rounded px-3 py-2 whitespace-nowrap">SQL</a>
        </div>
    </div>
</nav>

    