<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Silahkan Edit Prestasi</title>
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
                <h2 class="text-2xl font-semibold">Silahkan Edit Prestasi</h2>
            </header>

            <!-- Content Body -->
            <div class="bg-white p-6 shadow-md rounded-md">
                <div class="container">
                    <div class="card form-card">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <li style="font-weight: bold">{{ $error }}</li>
                        @endforeach
                        </ul>
                        @endif

                        @if (Session::get('sucessAdd'))
                        <h2>{{ Session::get('sucessAdd') }}</h2>
                        @endif
                        <form action="{{ route('update.prestasi', $informasis->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input-card">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    value="{{$informasis->judul}}" required>
                            </div>
                            <div class="input-card">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    value="{{$informasis->nama}}" required>
                            </div>
                            <div class="input-card">
                                <label for="deskripsi">Deskripsi:</label>
                                <input type="text " name="deskripsi" class="form-control" id="deskripsi"
                                    value="{{$informasis->deskripsi}}" required>

                            </div>
                            <div class="input-card">
                                <label for="jurusan">Jurusan:</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan"
                                    value="{{$informasis->jurusan}}" required>
                            </div>
                            <div class="input-card">
                                <label for="rayon">Rayon:</label>
                                <input type="text" name="rayon" class="form-control" id="rayon"
                                    value="{{$informasis->rayon}}" required>
                            </div>
                            <div class="input-card">
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" class="form-control" id="foto"
                                    value="{{$informasis->foto}}">
                                <button type="submit" value="Kirim data siswa" class=" btn btn-success">Kirim</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>