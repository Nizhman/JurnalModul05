<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
</head>
<body>
    <h2>Daftar Tamu</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama Tamu</th>
            <th>Nomor Kamar</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>Status Pembayaran</th>
        </tr>

        @foreach ($tamu as $tm)
        <tr>
            <td>{{ $tm->nama }}</td>
            <td>{{ $tm->nomor_kamar }}</td>
            <td>{{ $tm->tanggal_checkin }}</td>
            <td>{{ $tm->tanggal_checkout }}</td>
            <td>{{ $tm->status_pembayaran }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>