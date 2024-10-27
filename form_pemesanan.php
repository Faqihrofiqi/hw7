<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding-bottom: 20px;
            padding-top: 20px;
            max-width: 500px;
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 10px;
        }
        


    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Pesan Tiket</h2>
        <form action="proses_pemesanan.php" method="POST">
            <div class="mb-3">
                <label for="nama_movie" class="form-label">Judul Film</label>
                <select class="form-select" id="nama_movie" name="nama_movie" required>
                    <option value="" disabled selected>Pilih Judul Film</option>
                    <option value="Movie 1">Movie 1</option>
                    <option value="Movie 2">Movie 2</option>
                    <option value="Movie 3">Movie 3</option>
                    <option value="Movie 4">Movie 4</option>
                    <option value="Movie 5">Movie 5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_tiket_dewasa" class="form-label">Jumlah Tiket Dewasa</label>
                <input type="number" class="form-control" id="jumlah_tiket_dewasa" name="jumlah_tiket_dewasa" required min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="jumlah_tiket_anak" class="form-label">Jumlah Tiket Anak-anak</label>
                <input type="number" class="form-control" id="jumlah_tiket_anak" name="jumlah_tiket_anak" required min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
            </div>
            <button type="submit" class="btn btn-primary">Pesan Tiket</button>
        </form>

    </div>
</body>
</html>