<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Anggota Tim - Sistem Pengaduan Internal')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="bg-gray-100">
  <div class="flex h-screen">
  @include('admin.sidebar')

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
      @include('admin.header')

      <!-- Anggota Tim Content -->
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
          <h1 class="text-2xl font-semibold text-gray-900">Anggota Tim</h1>

          <!-- Tombol Tambah Anggota -->
          <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Tambah Anggota</button>

          <!-- Tabel Anggota Tim -->
          <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Golongan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Password</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <!-- Contoh baris data -->
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm font-medium text-gray-900">John Doe</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">Staff IT</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">III/a</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">cipicipi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">capacapa</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                          <a href="#" class="ml-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                          <a href="#" class="ml-2 text-red-600 hover:text-red-900">Hapus</a>
                        </td>
                      </tr>
                      <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Team Member Modal -->
<div id="teamMemberModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!-- Background overlay -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- Modal panel -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Tambah/Edit Anggota</h3>
        <div class="mt-2">
          <form id="teamMemberForm">
            <input type="hidden" id="memberId" name="memberId">
            <div class="mb-4">
              <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
              <input type="text" name="nama" id="nama" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
              <input type="text" name="jabatan" id="jabatan" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="golongan" class="block text-sm font-medium text-gray-700">Golongan</label>
              <input type="text" name="golongan" id="golongan" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
              <input type="text" name="username" id="username" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
              <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
              <input type="password" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
          </form>
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" id="saveButton" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Simpan</button>
        <button type="button" id="cancelButton" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Batal</button>
      </div>
    </div>
  </div>
</div>
  <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>
