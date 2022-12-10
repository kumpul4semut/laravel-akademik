<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>

<head>

<body class="min-vh-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card w-50">
            <div class="card-header d-flex justify-content-between align-items-center">
                Pendaftaran Mahasiswa
                <a href="/list" class="btn btn-primary btn-sm">Daftar Calon Mahasiswa</a>
            </div>
            <div class="card-body">
                <form action="/" method="POST">
                    @method('post')
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="ex: 4121xxxx">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="ex: Jane Doe"
                            value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="ex: janedoe@mail.com"
                            value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check-radio">
                                <input type="radio" name="jenis_kelamin" class="form-input-radio" id="laki-laki"
                                    value="laki-laki">
                                <label for="laki-laki">Laki-Laki</label>
                            </div>
                            <div class="form-check-radio ms-4">
                                <input type="radio" name="jenis_kelamin" class="form-input-radio" id="perempuan"
                                    value="perempuan">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="0" style="display: none">Pilih Jurusan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat Anda" required>{{ old('alamat') }}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
