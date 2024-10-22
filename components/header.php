<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Ensures smooth animation for the mobile menu */
    .menu {
      transition: max-height 0.3s ease-in-out;
      overflow: hidden;
    }
    /* Default max height for the collapsed menu */
    .menu-closed {
      max-height: 0;
    }
    /* Expanded mobile menu */
    .menu-open {
      max-height: 500px; /* You can adjust this value based on the content */
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="bg-white fixed w-full z-50 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">

        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="#" class="text-2xl font-bold text-gray-800">MyLogo</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 mx-auto">
          <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
          <a href="#" class="text-gray-700 hover:text-blue-500">About</a>
          <a href="#" class="text-gray-700 hover:text-blue-500">Services</a>
          <a href="#" class="text-gray-700 hover:text-blue-500">Blog</a>
          <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
        </div>
        <div class="hidden md:flex space-x-8 ">
          
          <a href="#" class="text-gray-700 hover:text-blue-500 -rotate-45"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
              <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
            </svg>
</a>
        </div>

        <!-- Hamburger Icon -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="menu menu-closed md:hidden bg-white">
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Home</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">About</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Services</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Blog</a>
      <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Contact</a>
      <a href="#" class="block text-center px-4 py-2 text-gray-700 hover:bg-gray-200 "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 -rotate-45">
          <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
        </svg>
</a>
    </div>
  </nav>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', function() {
      // Toggle between adding and removing classes for opening/closing the menu
      mobileMenu.classList.toggle('menu-open');
      mobileMenu.classList.toggle('menu-closed');
    });
  </script>

</body>
</html>
