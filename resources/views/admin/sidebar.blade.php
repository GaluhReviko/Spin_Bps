<!-- Sidebar -->
<aside class="w-64 h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-white shadow-lg">
            <div class="p-6">
                <h2 class="text-3xl font-bold mb-6 tracking-wide">Admin Panel</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center py-3 px-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18m-9 5h9" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('anggota-tim') }}"
                   class="flex items-center py-3 px-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 3v4h14V3m0 0v18H5V3m14 14H5" />
                    </svg>
                    Anggota Tim
                </a>
                <a href="{{ route('ketua-tim') }}"
                   class="flex items-center py-3 px-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 20h4v-2h-4m0-4h4v-2h-4m0-4h4V8h-4m6 8h4v-2h-4m0-4h4V8h-4m-6 8h-4v-2h4m0-4h-4V8h4M4 4h16v2H4V4z" />
                    </svg>
                    Ketua Tim
                </a>
                <a href="{{ route('pengaduan') }}"
                   class="flex items-center py-3 px-4 text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-11.64V17c0 3.11-2.4 5.64-5.5 5.64S7 20.11 7 17V5.36" />
                    </svg>
                    Pengaduan
                </a>
            </nav>
        </aside>