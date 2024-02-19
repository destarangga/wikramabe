<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Prestasi</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5">
            <h1>Form Prestasi</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan:</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan" required>
                            </div>
                            <div class="form-group">
                                <label for="rayon">Rayon:</label>
                                <input type="text" name="rayon" class="form-control" id="rayon" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto:</label>
                                <input type="file" name="foto" class="form-control" id="foto" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel untuk menampilkan data prestasi -->
        <div class="text-center mt-5">
            <h1>Prestasi</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Rayon</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop untuk menampilkan data prestasi -->
                                @foreach($informasis as $informasi)
                                <tr>
                                    <td>{{ $informasi->nama }}</td>
                                    <td>{{ $informasi->jurusan }}</td>
                                    <td>{{ $informasi->rayon }}</td>
                                    <td>{{ $informasi->judul }}</td>
                                    <td>{{ $informasi->deskripsi }}</td>
                                    <td><img src="{{ asset('assets/image/' . $informasi->foto) }}" alt="{{ $informasi->judul }}" style="max-width: 100px;"></td>
                                    <td>
                                            <button><a href="{{ route('edit.prestasi', $informasi->id) }}">Edit</a></button>
                                            <form action="{{ route('destroy.prestasi', $informasi->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">DELETE</button>
                                            </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
