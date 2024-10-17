<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard Admin - Sistem Pengaduan Internal')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
</head>

<body class="bg-gray-100">
  <div class="flex h-screen">
  @include('admin.sidebar')

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
      <!-- Header -->
    @include('admin.header')


      <!-- Dashboard Content -->
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Summary Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 animate-fadeIn">
          <!-- Card untuk Jumlah Anggota Tim -->
          <div
            class="bg-white overflow-hidden shadow rounded-lg transform hover:scale-105 transition-transform duration-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="flex items-center">
                <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                  <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                  <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                      Jumlah Anggota Tim
                    </dt>
                    <dd class="text-3xl font-semibold text-gray-900">
                      42
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          <!-- Card untuk Jumlah Ketua Tim -->
          <div
            class="bg-white overflow-hidden shadow rounded-lg transform hover:scale-105 transition-transform duration-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="flex items-center">
                <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                  <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                  <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                      Jumlah Ketua Tim
                    </dt>
                    <dd class="text-3xl font-semibold text-gray-900">
                      7
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          <!-- Card untuk Total Pengaduan -->
          <div
            class="bg-white overflow-hidden shadow rounded-lg transform hover:scale-105 transition-transform duration-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="flex items-center">
                <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                  <i class="fas fa-exclamation-circle text-white text-2xl"></i>
                </div>
                <div class="ml-5 w-0 flex-1">
                  <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">
                      Total Pengaduan Bulan Ini
                    </dt>
                    <dd class="text-3xl font-semibold text-gray-900">
                      18
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Chart -->
        <div class="mt-8 animate-fadeIn">
          <div class="bg-white shadow rounded-lg p-4">
            <h2 class="text-xl font-semibold mb-4 text-blue-800"><i class="fas fa-chart-bar mr-2"></i>Grafik Pengaduan
              12 Bulan Terakhir</h2>
            <div style="height: 400px; width: 100%;">
              <canvas id="complaintChart"></canvas>
            </div>
          </div>
        </div>

        <!-- Tabel Pengaduan Terbaru -->
        <div class="mt-8 animate-fadeIn">
          <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">
              <h2 class="text-lg leading-6 font-medium text-blue-800"><i class="fas fa-list-alt mr-2"></i>Pengaduan
                Terbaru</h2>
            </div>
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ticket No
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Severity
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created
                      On</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <!-- Contoh baris data -->
                  <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">JATIM-00071</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Charger laptop rusak</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        <i class="fas fa-exclamation-triangle mr-1"></i> High
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        <i class="fas fa-check-circle mr-1"></i> Open
                      </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">7 days ago</td>
                  </tr>
                  <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script src="{{ asset('assets/js/index.js') }}"></script>
  <script src="{{ asset('assets/js/chart.js') }}"></script>
</body>
</html>
