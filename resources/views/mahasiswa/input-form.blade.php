<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="card col-md-6">
                <div class="card-header">
                    <h2 class="text-center">Form Input Mahasiswa</h2>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/simpan-mahasiswa') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">NPM:</label>
                            <input type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" required>
                            @error('npm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin:</label>
                            <select class="form-select @error('jk') is-invalid @enderror" name="jk" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opsional, untuk fitur interaktif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>