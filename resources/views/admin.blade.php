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
                <li><a href="/prestasi" class=" text-white hover:text-gray-300">Prestasi</a></li>
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
                <h2 class="text-2xl font-semibold">Dashboard</h2>
            </header>

            <!-- Content Body -->
            <div class="bg-white p-6 shadow-md rounded-md">
                <!-- CRUD Operations Section -->
                <!-- Add your CRUD operation forms, tables, or components here -->
            </div>
        </main>
    </div>
</body>

</html>