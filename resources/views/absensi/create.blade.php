<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Absensi</h1>
        <div align="right"><a href="{{ url('./absensi')}}" class="btn btn-primary" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/absensi">
            @csrf
            <div class="mb-3">
                <label for="id_pegawai" class="form-label">ID Pegawai</label>
                <select class ="form-control" id="id_pegawai" name="id_pegawai" >
                   @foreach ($pegawai as $item)
                    <option value="{{ $item->id_pegawai }}">{{$item ->id_pegawai}}-{{$item ->nama}}</option>
                   @endforeach
                 </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk</label>
                <input type="time" id="jam_masuk" name="jam_masuk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jam_pulang" class="form-label">Jam Pulang</label>
                <input type="time" id="jam_pulang" name="jam_pulang" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Kehadiran</label>
                <select id="status" name="status" class="form-select" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
