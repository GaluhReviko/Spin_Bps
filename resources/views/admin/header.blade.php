<!-- Header -->
<header class="bg-white shadow-lg p-4 flex items-center justify-between">
        <div class="text-2xl font-bold tracking-wide text-blue-800">
          <i class="fas fa-chart-line mr-2"></i> Dashboard Overview
        </div>

        <!-- Admin User Dropdown -->
        <div class="relative group">
          <button id="adminUserButton"
            class="flex items-center space-x-2 text-gray-800 hover:text-blue-600 focus:outline-none transition-colors duration-200">
            <img src="https://via.placeholder.com/40" alt="Admin Avatar"
              class="w-10 h-10 rounded-full border-2 border-blue-500">
            <span class="font-medium">Admin User</span>
            <i class="fas fa-chevron-down"></i>
          </button>

          <!-- Dropdown Menu -->
          <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-10 hidden">
            <a href="#" id="logoutBtn" class="block px-4 py-2 text-gray-800 hover:bg-blue-100 transition-colors">
              <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
          </div>
        </div>

        <!-- Logout Confirmation Modal -->
        <div id="logoutModal" class="modal-backdrop hidden">
          <div class="modal-content bg-white p-8 rounded-lg shadow-2xl max-w-md">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-2xl font-bold text-gray-800">Confirm Logout</h2>
              <button id="closeLogoutModal" class="text-gray-600 hover:text-gray-800 transition-colors">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <p class="mb-6 text-gray-600">Are you sure you want to log out? Your session will be ended.</p>
            <div class="flex justify-end">
              <button id="confirmLogout"
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg mr-4 focus:outline-none focus:shadow-outline transition-colors duration-300">
                Logout
              </button>
              <button id="cancelLogout"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transition-colors duration-300">
                Cancel
              </button>
            </div>
          </div>
        </div>
      </header>

<script>
    // Toggle dropdown on click
    const adminUserButton = document.querySelector('.relative button');
    const dropdownMenu = document.querySelector('.relative div');

    adminUserButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', (e) => {
      if (!adminUserButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });
</script>