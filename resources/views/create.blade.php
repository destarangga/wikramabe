<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-500 p-6">
            <!-- Sidebar Content -->
            <h1 class="text-white text-2xl font-bold mb-4">Tambah data</h1>
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
                <h2 class="text-2xl font-semibold">Silahkan Tambah prestasi data</h2>
            </header>
            <!-- Content Body -->
            <div class="bg-white p-6 shadow-md rounded-md flex">
                <div class="card form-card">
                    <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-card">
                            <label for="">Judul :</label>
                            <input type="text" name="judul" id="">
                        </div>
                        <div class="input-card">
                            <label for="">Nama Lengkap :</label>
                            <input type="text" name="nama" id="">
                        </div>
                        <div class="input-card">
                            <label for="">Jurusan :</label>
                            <input type="text" name="jurusan" id="">
                        </div>
                        <div class="input-card">
                            <label for="">Rayon :</label>
                            <input type="text " name="rayon">
                        </div>
                        <div class="input-card">
                            <label for="">Deskripsi :</label>
                            <textarea rows="2" name="deskripsi"></textarea>
                        </div>
                        <div class="input-card">
                            <label for="">Upload Gambar Terkait :</label>
                            <input type="file" name="foto">
                            <button type="submit" value="Kirim data siswa" class=" btn btn-success">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <li style="font-weight: bold text-sm">{{ $error }}</li>
                    @endforeach
                    </ul>
                    @endif
                    @if (Session::get('success'))
                    <h2>{{ Session::get('success') }}</h2>
                    @endif
                </div>
            </div>
        </main>
    </div>
</body>

</html>