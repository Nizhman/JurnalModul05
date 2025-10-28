<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Tamu</title>
</head>
<body>
    <h2>Input Data Tamu</h2>

    <form action="/simpantamu" method="post">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nomor_kamar">Nomor Kamar:</label><br>
        <input type="text" id="nomor_kamar" name="nomor_kamar" required><br><br>

        <label for="tanggal_checkin">Tanggal Check-in:</label><br>
        <input type="date" id="tanggal_checkin" name="tanggal_checkin" required><br><br>

        <label for="tanggal_checkout">Tanggal Check-out:</label><br>
        <input type="date" id="tanggal_checkout" name="tanggal_checkout" required><br><br>

        <label for="status_pembayaran">Status Pembayaran:</label><br>
        <input type="text" id="status_pembayaran" name="status_pembayaran" required><br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>