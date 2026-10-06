<!DOCTYPE html>
<html>
<head>
    <title>Lapor Banjir</title>
</head>
<body>
    <h1>Form Laporan Banjir</h1>
    <form action="/laporbanjir/simpan" method="POST">
        @csrf
        <div>
            <label>Nama Pelapor</label>
            <input type="text" name="nama_pelapor" required>
        </div>
        <br>
        <div>
            <label>Lokasi</label>
            <input type="text" name="lokasi" required>
        </div>
        <br>
        <div>
            <label>Tinggi Genangan (cm)</label>
            <input type="number" name="tinggi_genangan" required>
        </div>
        <br>
        <div>
            <label>Tanggal Kejadian</label>
            <input type="date" name="tanggal_kejadian" required>
        </div>
        <br>
        <button type="submit">Kirim Laporan</button>
    </form>
</body>
</html>