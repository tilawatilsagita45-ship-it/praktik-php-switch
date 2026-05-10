<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tanggal Otomatis Indonesia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f0f8ff;
        }
        .kotak {
            font-size: 24px;
            color: #2c3e50;
            padding: 20px;
            background-color: white;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="kotak">
        <?php
        date_default_timezone_set('Asia/Jakarta');

        // Daftar nama hari dalam Bahasa Indonesia
        $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

        // Daftar nama bulan dalam Bahasa Indonesia
        $nama_bulan = array(
            1 => "Januari",
            2 => "Februari",
            3 => "Maret",
            4 => "April",
            5 => "Mei",
            6 => "Juni",
            7 => "Juli",
            8 => "Agustus",
            9 => "September",
            10 => "Oktober",
            11 => "November",
            12 => "Desember"
        );

        // Ambil data waktu saat ini
        $hari = $nama_hari[date('w')];
        $tanggal = date('d');
        $bulan = $nama_bulan[date('n')];
        $tahun = date('Y');

        // Tampilkan hasil lengkap
        echo "Hari ini: $hari, $tanggal $bulan $tahun";
        ?>
    </div>
</body>
</html>