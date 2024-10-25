<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Bioskop Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #1c1c1c;
            color: #ffffff;
            padding-top: 0;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            max-width: 800px;
            background: #2c2c2c;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 0, 0, 0.2);
            margin-top: 30px;
            margin-bottom: 30px;
            flex: 1;
        }
        .movie-selection {
            margin-bottom: 20px;
        }
        .navbar {
            width: 100%;
            background-color: #b30000;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .nav-link:hover {
            color: #ffcccc !important;
        }
        .btn-primary {
            background-color: #b30000;
            border-color: #b30000;
        }
        .btn-primary:hover {
            background-color: #ff1a1a;
            border-color: #ff1a1a;
        }
        footer {
            width: 100%;
            background-color: #b30000;
            position: static;
            bottom: 0;
            margin-top: auto;
        }
        @media (max-width: 768px) {
            .container {
                margin-top: 15px;
                margin-bottom: 15px;
                padding: 20px;
            }
            .navbar-brand, .nav-link {
                font-size: 14px;
            }
        }
        .price-board {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            box-shadow: 0px 0px 15px rgba(255, 0, 0, 0.2);
            color: #1c1c1c;
        }
        .price-board h5 {
            text-align: center;
            margin-bottom: 20px;
            color: #b30000;
        }
        .price-board ul {
            list-style: none;
            padding-left: 0;
        }
        .price-board ul li strong {
            color: #b30000;
        }

        .ticket-options {
    display: flex;
    justify-content: space-between;
}

.ticket-column {
    width: 48%;
}

.ticket-column h6 {
    color: #b30000;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Bioskop Online</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center mb-4">Pemesanan Tiket Bioskop Online</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="movie-selection">
                    <h5>Pilih Film</h5>
                    <select class="form-control mb-4" id="film" name="film" required>
                        <option value="">Pilih Film</option>
                        <option value="film1">Film 1</option>
                        <option value="film2">Film 2</option>
                        <option value="film3">Film 3</option>
                    </select>
                </div>
                <form id="ticketForm">
                    <div class="form-group">
                        <label for="jenisTiket">Jenis Tiket</label>
                        <select class="form-control" id="jenisTiket" name="jenisTiket" required>
                            <option value="">Pilih Jenis Tiket</option>
                            <option value="anak">Anak-anak</option>
                            <option value="dewasa">Dewasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelasTiket">Kelas Tiket</label>
                        <select class="form-control" id="kelasTiket" name="kelasTiket" required>
                            <option value="">Pilih Kelas Tiket</option>
                            <option value="normal">Normal</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahTiket">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="jumlahTiket" name="jumlahTiket" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="makananMinuman">Paket Makanan dan Minuman</label>
                        <select class="form-control" id="makananMinuman" name="makananMinuman" required>
                            <option value="">Pilih Paket</option>
                            <option value="tidak">Tidak Ada - Rp0</option>
                            <option value="popcorn_minuman">Popcorn + Minuman - Rp30.000</option>
                            <option value="snack_combo">Snack Combo - Rp50.000</option>
                            <option value="full_combo">Full Combo (Popcorn, Minuman, Snack) - Rp75.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hariPemesanan">Hari Pemesanan</label>
                        <select class="form-control" id="hariPemesanan" name="hariPemesanan" required>
                            <option value="">Pilih Hari Pemesanan</option>
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="voucher">Kode Voucher (Opsional)</label>
                        <input type="text" class="form-control" id="voucher" name="voucher">
                    </div>
                    <button type="button" class="btn btn-primary btn-block" onclick="hitungHargaTiket()">Hitung Total Harga</button>
                </form>
                <div class="mt-4" id="hasil"></div>
            </div>
            <div class="col-md-6">
                <div class="price-board">
                    <h5>Daftar Harga Tiket dan Layanan</h5>
                    <ul>
                        <li><strong>Jenis Tiket:</strong></li>
                        <ul>
                            <li>Anak-anak - Normal: Rp30.000</li>
                            <li>Anak-anak - Silver: Rp45.000</li>
                            <li>Anak-anak - Gold: Rp60.000</li>
                            <li>Anak-anak - Premium: Rp90.000</li>
                            <li>Dewasa - Normal: Rp50.000</li>
                            <li>Dewasa - Silver: Rp75.000</li>
                            <li>Dewasa - Gold: Rp100.000</li>
                            <li>Dewasa - Premium: Rp150.000</li>
                        </ul>
                        <li><strong>Paket Makanan dan Minuman:</strong></li>
                        <ul>
                            <li>Tidak Ada: Rp0</li>
                            <li>Popcorn + Minuman: Rp30.000</li>
                            <li>Snack Combo: Rp50.000</li>
                            <li>Full Combo (Popcorn, Minuman, Snack): Rp75.000</li>
                        </ul>
                        <li><strong>Tambahan Biaya Akhir Pekan:</strong> Rp10.000 per tiket</li>
                        <li><strong>Diskon:</strong></li>
                        <ul>
                            <li>Kode Voucher DISKON10: Diskon 10%</li>
                            <li>Kode Voucher DISKON20: Diskon 20%</li>
                            <li>Diskon otomatis 10% jika total harga melebihi Rp150.000</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Bioskop Online. All Rights Reserved.</p>
    </footer>

    <script>
        function hitungHargaTiket() {
            const jenisTiket = document.getElementById("jenisTiket").value;
            const kelasTiket = document.getElementById("kelasTiket").value;
            const jumlahTiket = parseInt(document.getElementById("jumlahTiket").value);
            const hariPemesanan = document.getElementById("hariPemesanan").value.toLowerCase();
            const makananMinuman = document.getElementById("makananMinuman").value;
            const voucher = document.getElementById("voucher").value;

            if (!jenisTiket || !kelasTiket || !jumlahTiket || !hariPemesanan || !makananMinuman) {
                alert("Harap isi semua field yang tersedia.");
                return;
            }

            let hargaTiket = 0;
            let tambahanAkhirPekan = 10000;
            let hargaMakananMinuman = 0;

            // Harga berdasarkan jenis dan kelas tiket
            if (jenisTiket === "anak") {
                if (kelasTiket === "normal") {
                    hargaTiket = 30000;
                } else if (kelasTiket === "silver") {
                    hargaTiket = 45000;
                } else if (kelasTiket === "gold") {
                    hargaTiket = 60000;
                } else if (kelasTiket === "premium") {
                    hargaTiket = 90000;
                }
            } else if (jenisTiket === "dewasa") {
                if (kelasTiket === "normal") {
                    hargaTiket = 50000;
                } else if (kelasTiket === "silver") {
                    hargaTiket = 75000;
                } else if (kelasTiket === "gold") {
                    hargaTiket = 100000;
                } else if (kelasTiket === "premium") {
                    hargaTiket = 150000;
                }
            }

            // Harga makanan dan minuman
            if (makananMinuman === "popcorn_minuman") {
                hargaMakananMinuman = 30000;
            } else if (makananMinuman === "snack_combo") {
                hargaMakananMinuman = 50000;
            } else if (makananMinuman === "full_combo") {
                hargaMakananMinuman = 75000;
            }

            let totalHarga = (hargaTiket * jumlahTiket) + hargaMakananMinuman;
            let hargaNormal = totalHarga;

            // Tambahan biaya akhir pekan
            if (hariPemesanan === "sabtu" || hariPemesanan === "minggu") {
                totalHarga += tambahanAkhirPekan * jumlahTiket;
                hargaNormal += tambahanAkhirPekan * jumlahTiket;
            }

            // Penerapan kode voucher
            let diskon = 0;
            if (voucher === "DISKON10") {
                diskon = 0.10 * totalHarga;
                totalHarga -= diskon;
            } else if (voucher === "DISKON20") {
                diskon = 0.20 * totalHarga;
                totalHarga -= diskon;
            }

            // Diskon jika total harga melebihi Rp150.000
            if (totalHarga > 150000) {
                const diskonTambahan = 0.10 * totalHarga;
                totalHarga -= diskonTambahan;
                diskon += diskonTambahan;
            }

            document.getElementById("hasil").innerHTML = `<div class="alert alert-info">Harga Normal: Rp${hargaNormal.toLocaleString('id-ID')} | Setelah Diskon: Rp${totalHarga.toLocaleString('id-ID')}</div>`;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>