<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-500 p-6">
            <!-- Sidebar Content -->
            <h1 class="text-white text-2xl font-bold mb-4">Admin Dashboard</h1>
            <ul class="space-y-2">
                <li><a href="/prestasi" class="text-white hover:text-gray-300">Prestasi</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Kegiatan Harian</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Kegiatan Mingguan</a></li>
                <li><a href="/create" class="text-white hover:text-gray-300">Form Tambah data</a></li>

                <!-- Add more sidebar links as needed -->
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            <!-- Content Header -->
            <header class="bg-white shadow-md p-4 mb-4">
                <h2 class="text-2xl font-semibold">Prestasi Siswa</h2>
            </header>

            <!-- Content Body -->
            <div class="bg-white p-6 shadow-md rounded-md">
                <div class="px-3 py-4 flex justify-center">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left p-3 px-5">No</th>
                                <th class="text-left p-3 px-5">Judul</th>
                                <th class="text-left p-3 px-5">Nama</th>
                                <th class="text-left p-3 px-5">Jurusan</th>
                                <th class="text-left p-3 px-5">Rayon</th>
                                <th class="text-left p-3 px-5">Deskripsi</th>
                                <th class="text-left p-3 px-5">Dokumentasi</th>
                                <th class="text-left p-3 px-5">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($informasis as $informasi)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $no++ }}</td>
                                <td class="py-2 px-4 border-b">{{ $informasi->judul }}</td>
                                <td class="py-2 px-4 border-b">{{ $informasi->nama }}</td>
                                <td class="py-2 px-4 border-b">{{ $informasi->jurusan }}</td>
                                <td class="py-2 px-4 border-b">{{ $informasi->rayon }}</td>
                                <td class="py-2 px-4 border-b">{{ $informasi->deskripsi }}</td>
                                <td class="py-2 px-4 border-b"><img
                                        src="{{ asset('assets/image/' . $informasi->foto) }}"
                                        alt="{{ $informasi->judul }}" style="max-width: 100px;"></td>
                                <td class="py-2 px-4 border-b flex">
                                    <button class="bg-blue-500 text-white px-3 py-1 rounded-md"><a
                                            href="{{ route('edit.prestasi', $informasi->id) }}">Edit</a></button>
                                    <form action="{{ route('destroy.prestasi', $informasi->id) }}"
                                        class="bg-red-500 text-white px-3 py-1 rounded-md ml-2" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
    </main>
    </div>
</body>

</html>