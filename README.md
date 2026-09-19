# TP1DPBO2526C2

1. Desain Program
   Program ini dirancang menggunakan paradigma Object-Oriented Programming (OOP) sederhana dengan menerapkan satu entitas class utama yang relevan dengan tema bioskop, yaitu class Film.
   Sesuai dengan materi yang diajarkan, desain program ini menerapkan prinsip Enkapsulasi dengan ketentuan sebagai berikut:Atribut Privat: Setiap atribut pada class Film (seperti id, judul, genre, durasi, dan gambar pada PHP) dideklarasikan dengan hak akses private (atau menggunakan konvensi _ pada Python) agar data internal terlindungi dari perubahan langsung di luar class.
   Getter dan Setter: Untuk mengakses atau memodifikasi nilai dari atribut privat tersebut dari luar class, disediakan method perantara berupa Getter (get...()) dan Setter (set...()).
   Konstruktor: Digunakan untuk melakukan instantiation (penciptaan objek baru) sekaligus menginisialisasi nilai atribut objek secara otomatis saat pertama kali dibuat.
   
2. Flow Kode
   - Tambah Data (Create):
     1. Pengguna memasukkan data masukan (ID, Judul, Genre, Durasi, serta path/file gambar lokal pada PHP).
     2. Program melakukan instantiation objek Film baru menggunakan konstruktor berparameter.
     3. Objek baru tersebut dimasukkan (push/add) ke dalam struktur penyimpanan sekumpulan objek (menggunakan array statis/vector di C++, ArrayList di Java, list di Python, atau $_SESSION['daftar_film'] di PHP).

  - Tampilkan Data (Read):
    1. Program melakukan perulangan (looping) membaca seluruh elemen objek yang tersimpan di dalam struktur penyimpanan.
    2. Memanggil method tampilkan informasi (tampilkanInfo() atau merender datanya ke dalam bentuk tabel HTML pada PHP).

  - Cari Data (Search):
    1. Pengguna memasukkan identifier unik berupa ID film yang ingin dicari.
    2. Program melakukan perulangan untuk mencocokkan ID masukkan dengan getId() dari setiap objek.
    3. Jika cocok, detail objek film tersebut ditampilkan ke layar/tabel; jika tidak ditemukan, program memunculkan pesan peringatan.

  - Update Data (Update):
    1. Pengguna memasukkan ID film yang ingin diubah datanya.
    2. Program mencari objek berdasarkan ID tersebut.
    3. Jika ditemukan, pengguna memasukkan data baru, lalu program memperbarui nilai atribut objek menggunakan method Setter (setJudul(), setGenre(), dll).

  - Hapus Data (Delete):
    1. Pengguna memasukkan ID film yang ingin dihapus.
    2. Program mencari indeks objek yang memiliki ID yang sesuai.
    3. Objek dihapus dari penyimpanan (menggunakan fungsi hapus elemen array/list atau unset() pada session PHP), dan indeks disusun ulang agar tetap rapi.
   
3. Dokumentasi
   - cpp
