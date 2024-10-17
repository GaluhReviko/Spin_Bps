<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan - Sistem Pengaduan Internal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
    @include('admin.sidebar')

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <!-- Header -->
            @include('admin.header')

            <!-- Pengaduan Content -->
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Filter and Search -->
                <div class="mb-6 flex flex-wrap items-center justify-between">
                    <div class="flex-1 min-w-0 space-y-2 sm:space-y-0 sm:flex sm:items-center sm:space-x-4">
                        <select
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Status</option>
                            <option>Open</option>
                            <option>In Progress</option>
                            <option>Closed</option>
                        </select>
                        <select
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Priority</option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
                        <select
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Category</option>
                            <option>Hardware</option>
                            <option>Software</option>
                            <option>Network</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-0 mt-2 sm:mt-0">
                        <div class="relative rounded-md shadow-sm">
                            <input type="text"
                                   class="focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 ml-auto pr-12 text-base border-gray-300 rounded-md"
                                   placeholder="Search">
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400 text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pengaduan Table -->
                <div class="bg-white shadow overflow-x-auto sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ticket No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Subject</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Severity</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Priority</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">#001234</td>
                                <td class="px-6 py-4 whitespace-nowrap">Network Issues</td>
                                <td class="px-6 py-4 whitespace-nowrap">High</td>
                                <td class="px-6 py-4 whitespace-nowrap">Urgent</td>
                                <td class="px-6 py-4 whitespace-nowrap text-green-500 font-bold">Open</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">#001235</td>
                                <td class="px-6 py-4 whitespace-nowrap">Software Bug</td>
                                <td class="px-6 py-4 whitespace-nowrap">Medium</td>
                                <td class="px-6 py-4 whitespace-nowrap">Normal</td>
                                <td class="px-6 py-4 whitespace-nowrap text-red-500 font-bold">Closed</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
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
</body>

</html>
