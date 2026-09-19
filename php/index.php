<?php
// 1. WAJIB: Panggil file class Film TERLEBIH DAHULU sebelum session dimulai 
// untuk mencegah error incomplete object pada session.
require_once __DIR__ . "/Film.php";

// 2. Memulai session PHP
session_start();

// Inisialisasi array session penyimpanan objek jika belum ada
if (!isset($_SESSION['daftar_film'])) {
    $_SESSION['daftar_film'] = [];
}

// ----------------------------------------------------
// FITUR 1: TAMBAH DATA (CREATE)
// ----------------------------------------------------
if (isset($_POST['tambah'])) {
    $filmBaru = new Film($_POST['id'], $_POST['judul'], $_POST['genre'], $_POST['durasi'], $_POST['gambar']);
    $_SESSION['daftar_film'][] = $filmBaru;
    header("Location: index.php");
    exit;
}

// ----------------------------------------------------
// FITUR 3 & 4: UPDATE DATA (PROSES PENYIMPANAN UBAH)
// ----------------------------------------------------
if (isset($_POST['update'])) {
    $idUpdate = $_POST['id'];
    foreach ($_SESSION['daftar_film'] as $film) {
        if ($film->getId() == $idUpdate) {
            // Mengubah data menggunakan Setter
            $film->setJudul($_POST['judul']);
            $film->setGenre($_POST['genre']);
            $film->setDurasi($_POST['durasi']);
            $film->setGambar($_POST['gambar']);
            break;
        }
    }
    header("Location: index.php");
    exit;
}

// ----------------------------------------------------
// FITUR 5: HAPUS DATA (DELETE)
// ----------------------------------------------------
if (isset($_GET['hapus'])) {
    $idHapus = $_GET['hapus'];
    foreach ($_SESSION['daftar_film'] as $key => $film) {
        if ($film->getId() == $idHapus) {
            unset($_SESSION['daftar_film'][$key]);
            break;
        }
    }
    $_SESSION['daftar_film'] = array_values($_SESSION['daftar_film']); // Merapikan indeks array
    header("Location: index.php");
    exit;
}

// Ambil keyword pencarian ID jika ada
$cariId = isset($_GET['cari']) ? $_GET['cari'] : '';

// Ambil data film yang mau di-edit jika tombol Edit diklik
$editFilm = null;
if (isset($_GET['edit'])) {
    $idEdit = $_GET['edit'];
    foreach ($_SESSION['daftar_film'] as $film) {
        if ($film->getId() == $idEdit) {
            $editFilm = $film;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengelolaan Data Bioskop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        img { width: 60px; height: 80px; object-fit: cover; }
        .form-group { margin-bottom: 10px; }
        .btn-cancel { background-color: #ccc; padding: 4px 10px; text-decoration: none; color: black; }
    </style>
</head>
<body>

    <h2>Manajemen Data Bioskop</h2>

    <!-- FORM TAMBAH / UPDATE DATA -->
    <form method="POST" action="">
        <h3><?= $editFilm ? "Edit Film (ID: " . $editFilm->getId() . ")" : "Tambah Film Baru" ?></h3>
        
        <!-- ID Film: Jika mode edit, ID dibuat readonly agar tidak bisa diubah kuncinya -->
        <div class="form-group">
            <label>ID Film: </label>
            <input type="text" name="id" value="<?= $editFilm ? htmlspecialchars($editFilm->getId()) : '' ?>" <?= $editFilm ? 'readonly' : 'required' ?>>
        </div>
        <div class="form-group">
            <label>Judul: </label>
            <input type="text" name="judul" value="<?= $editFilm ? htmlspecialchars($editFilm->getJudul()) : '' ?>" required>
        </div>
        <div class="form-group">
            <label>Genre: </label>
            <input type="text" name="genre" value="<?= $editFilm ? htmlspecialchars($editFilm->getGenre()) : '' ?>" required>
        </div>
        <div class="form-group">
            <label>Durasi (menit): </label>
            <input type="number" name="durasi" value="<?= $editFilm ? htmlspecialchars($editFilm->getDurasi()) : '' ?>" required>
        </div>
        <div class="form-group">
            <label>Path Gambar: </label>
            <input type="text" name="gambar" value="<?= $editFilm ? htmlspecialchars($editFilm->getGambar()) : '' ?>" required>
        </div>

        <?php if ($editFilm): ?>
            <button type="submit" name="update">Simpan Perubahan</button>
            <a href="index.php" class="btn-cancel">Batal</a>
        <?php else: ?>
            <button type="submit" name="tambah">Simpan Film</button>
        <?php endif; ?>
    </form>

    <hr>

    <!-- FORM CARI DATA (SEARCH) -->
    <form method="GET" action="">
        <h3>Cari Film Berdasarkan ID</h3>
        <input type="text" name="cari" value="<?= htmlspecialchars($cariId) ?>">
        <button type="submit">Cari</button>
        <a href="index.php"><button type="button">Reset</button></a>
    </form>

    <!-- TABEL TAMPILKAN DATA (READ) -->
    <h3>Daftar Film Bioskop</h3>
    <table>
        <tr>
            <th>Gambar</th>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $adaData = false;
        foreach ($_SESSION['daftar_film'] as $film) {
            // Logika pencarian spesifik berdasarkan ID
            if ($cariId != '' && $film->getId() != $cariId) {
                continue;
            }
            $adaData = true;
        ?>
        <tr>
            <td><img src="<?= htmlspecialchars($film->getGambar()) ?>" alt="Poster"></td>
            <td><?= htmlspecialchars($film->getId()) ?></td>
            <td><?= htmlspecialchars($film->getJudul()) ?></td>
            <td><?= htmlspecialchars($film->getGenre()) ?></td>
            <td><?= htmlspecialchars($film->getDurasi()) ?> menit</td>
            <td>
                <!-- Tombol Edit / Update -->
                <a href="index.php?edit=<?= $film->getId() ?>">Edit</a> | 
                <!-- Tombol Hapus / Delete -->
                <a href="index.php?hapus=<?= $film->getId() ?>" onclick="return confirm('Yakin ingin menghapus film ini?')">Hapus</a>
            </td>
        </tr>
        <?php } 
        if (!$adaData) {
            echo "<tr><td colspan='6'>Tidak ada data film ditemukan.</td></tr>";
        }
        ?>
    </table>

</body>
</html>
