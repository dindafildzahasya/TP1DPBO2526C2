# TP1DPBO2526C2

1. Desain Program
   - Program ini dirancang menggunakan paradigma Object-Oriented Programming (OOP) sederhana dengan menerapkan satu entitas class utama yang relevan dengan tema bioskop, yaitu class Film.
   - Sesuai dengan materi yang diajarkan, desain program ini menerapkan prinsip Enkapsulasi dengan ketentuan sebagai berikut:Atribut Privat: Setiap atribut pada class Film (seperti id, judul, genre, durasi, dan gambar pada PHP) dideklarasikan dengan hak akses private (atau menggunakan konvensi _ pada Python) agar data internal terlindungi dari perubahan langsung di luar class.
   - Getter dan Setter: Untuk mengakses atau memodifikasi nilai dari atribut privat tersebut dari luar class, disediakan method perantara berupa Getter (get...()) dan Setter (set...()).
   - Konstruktor: Digunakan untuk melakukan instantiation (penciptaan objek baru) sekaligus menginisialisasi nilai atribut objek secara otomatis saat pertama kali dibuat.
   
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
  
     <img width="818" height="267" alt="Cari Film" src="https://github.com/user-attachments/assets/e86c26d4-6f6f-4507-b77a-9804dbb5df11" />
     <img width="882" height="148" alt="Daftar Film Setelah Ditambah" src="https://github.com/user-attachments/assets/405342c7-9d34-4972-ace0-cbff64cc3421" />
     <img width="887" height="111" alt="Daftar Film" src="https://github.com/user-attachments/assets/cff5d448-71c1-490f-bebe-17632899bcf5" />
     <img width="567" height="275" alt="Hapus Film" src="https://github.com/user-attachments/assets/e9fe4564-bc1b-4cbe-8e5b-e06483cee297" />
     <img width="572" height="342" alt="Update Film" src="https://github.com/user-attachments/assets/64bc0894-c941-4b9f-bf9f-ea0ad53b35ad" />
     <img width="352" height="347" alt="Tambah Film" src="https://github.com/user-attachments/assets/08af12f3-4a95-494a-b4aa-7a8037815aef" />

- python

   <img width="741" height="245" alt="Cari Film" src="https://github.com/user-attachments/assets/753607bd-ecee-4d4a-80a5-8cba54c67e04" />
   <img width="845" height="110" alt="Daftar Film" src="https://github.com/user-attachments/assets/fe882186-3530-4208-8628-e8ed2aae5ca7" />
   <img width="502" height="240" alt="Hapus Film" src="https://github.com/user-attachments/assets/f45fe313-2033-4f9d-8b52-a1a6d003c956" />
   <img width="330" height="312" alt="Tambah Film" src="https://github.com/user-attachments/assets/4a157f82-4945-4099-a072-43b04571b323" />
   <img width="835" height="340" alt="Tampil Film" src="https://github.com/user-attachments/assets/b281ea36-5e5b-4c16-aef3-1a1d4951891f" />
   <img width="555" height="316" alt="Update Film" src="https://github.com/user-attachments/assets/e81454aa-f9d6-42f2-b584-617e958f6241" />

- java

   <img width="777" height="240" alt="Cari Film" src="https://github.com/user-attachments/assets/38977446-50e5-41bb-9d5e-1c15f3506b46" />
   <img width="933" height="106" alt="Daftar Film" src="https://github.com/user-attachments/assets/65ca5db7-1dbb-449b-97a5-82c4f86f9412" />
   <img width="501" height="242" alt="Hapus Film" src="https://github.com/user-attachments/assets/d5832275-d311-4176-91ed-290014b50a95" />
   <img width="338" height="305" alt="Tambah Film" src="https://github.com/user-attachments/assets/2ee16ed6-6a7a-4e15-8d0a-6295ab18b91b" />
   <img width="938" height="337" alt="Tampilkan Film" src="https://github.com/user-attachments/assets/3cca333d-ffd0-4f0d-bd04-6d6d5e896dc6" />
   <img width="530" height="320" alt="Update Film" src="https://github.com/user-attachments/assets/97ca9ea5-6f98-4719-a9aa-fd715be273c9" />

- php

   <img width="1913" height="300" alt="Cari Film" src="https://github.com/user-attachments/assets/7b9b575a-6691-4184-b768-3bdb42c36bb7" />
   <img width="1903" height="347" alt="Daftar Film" src="https://github.com/user-attachments/assets/cf390b00-8625-46e1-b901-ba083260f012" />
   <img width="408" height="311" alt="Tambah Film" src="https://github.com/user-attachments/assets/90127c08-9c17-4455-af00-ab6f2c2e9f60" />
   <img width="401" height="285" alt="Update Film" src="https://github.com/user-attachments/assets/0c5f6ac8-b829-41b6-a547-70ce4860fa4b" />
