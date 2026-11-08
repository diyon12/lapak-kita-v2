# LapakKita: Aplikasi Web Marketplace Sederhana

Aplikasi marketplace tempat **penjual** menawarkan produk dan **pembeli** memesan produk secara online.
Dibangun dengan **PHP Native**, **MySQLi** (prepared statement), dan **Bootstrap 5**.

- Demo online: `https://NAMA-SUBDOMAIN.infinityfreeapp.com` *(ganti dengan URL Anda)*
- Repository: `https://github.com/USERNAME/marketplace` *(ganti dengan URL Anda)*

## Fitur

| Fitur | File |
| --- | --- |
| Daftar produk + pencarian + filter kategori | `index.php` |
| Detail produk | `produk.php` |
| Kelola produk / CRUD (khusus penjual) | `penjual_produk.php` (Read), `produk_form.php` (Create & Update), `produk_hapus.php` (Delete) |
| Keranjang belanja (tambah, ubah jumlah, hapus) | `keranjang.php`, `keranjang_aksi.php` |
| Checkout dan simpan transaksi pesanan (otomatis dipecah satu pesanan per toko) | `checkout.php` |
| Riwayat dan detail pesanan pembeli | `pesanan.php`, `pesanan_detail.php` |
| Pesanan masuk + ubah status pesanan (khusus penjual) | `penjual_pesanan.php`, `pesanan_status.php` |
| Registrasi, login, logout | `register.php`, `login.php`, `logout.php` |

Keamanan yang diterapkan: prepared statement di semua query, `password_hash()` untuk password,
token CSRF di semua form POST, `htmlspecialchars()` untuk semua output, validasi tipe file gambar,
dan transaksi database (`begin_transaction` / `commit` / `rollback`) saat checkout.

## Akun demo

| Peran | Email | Password |
| --- | --- | --- |
| Pembeli | `pembeli@demo.com` | `pembeli123` |
| Penjual (Toko Sinar Jaya) | `penjual@demo.com` | `penjual123` |
| Penjual (Dapur Bu Sari) | `penjual2@demo.com` | `penjual123` |

git remote add origin https://github.com/USERNAME/marketplace.git
git push -u origin main
```

`config.php` dan isi folder `uploads/` sudah tercantum di `.gitignore`, sehingga password database
tidak ikut terunggah. Jangan pernah menulis password hosting langsung di file lain yang di-commit.
