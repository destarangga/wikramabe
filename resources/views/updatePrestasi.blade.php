<div class="container">
    <div class="text-center mt-5">
        <h1>Form Edit Prestasi</h1>
    </div>
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <form action="{{ route('update.prestasi', $informasis->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul:</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="{{$informasis->judul}}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control" id="nama"  value="{{$informasis->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <input name="deskripsi" class="form-control" id="deskripsi"  value="{{$informasis->deskripsi}}" required>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan:</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan"  value="{{$informasis->jurusan}}" required>
                        </div>
                        <div class="form-group">
                            <label for="rayon">Rayon:</label>
                            <input type="text" name="rayon" class="form-control" id="rayon"  value="{{$informasis->rayon}}" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto:</label>
                            <input type="file" name="foto" class="form-control" id="foto"  value="{{$informasis->foto}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>