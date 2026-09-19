# Mengimpor class Film dari file Film.py
from Film import Film

# ----------------------------------------------------
# PROGRAM UTAMA (MAIN)
# Mengelola interaksi menu terminal dan list of objects
# ----------------------------------------------------
def main():
    daftar_film = []
    
    while True:
        print("\n=== MENU BIOSKOP ===")
        print("1. Tambah Film\n2. Tampilkan Film\n3. Update Film\n4. Hapus Film\n5. Cari Film\n6. Keluar")
        pilihan = input("Pilih: ")

        # 1. Tambah Data
        if pilihan == '1':
            id_film = input("ID: ")
            judul = input("Judul: ")
            genre = input("Genre: ")
            durasi = int(input("Durasi (menit): "))
            
            # Instansiasi objek baru dan simpan ke list
            daftar_film.append(Film(id_film, judul, genre, durasi))
            print("Film berhasil ditambahkan!")
            
        # 2. Tampilkan Data
        elif pilihan == '2':
            print("\n--- DAFTAR FILM ---")
            if not daftar_film:
                print("Belum ada data film.")
            else:
                for film in daftar_film:
                    film.tampilkan_info()
                    
        # 3. Update Data berdasarkan ID unik
        elif pilihan == '3':
            cari_id = input("Masukkan ID film yang akan di-update: ")
            ketemu = False
            for film in daftar_film:
                if film.getId() == cari_id:
                    film.setJudul(input("Judul Baru: "))
                    film.setGenre(input("Genre Baru: "))
                    film.setDurasi(int(input("Durasi Baru: ")))
                    print("Film berhasil di-update!")
                    ketemu = True
                    break
            if not ketemu:
                print("Film tidak ditemukan!")
                
        # 4. Hapus Data berdasarkan ID unik
        elif pilihan == '4':
            cari_id = input("Masukkan ID film yang akan dihapus: ")
            ketemu = False
            for film in daftar_film:
                if film.getId() == cari_id:
                    daftar_film.remove(film)
                    print("Film berhasil dihapus!")
                    ketemu = True
                    break
            if not ketemu:
                print("Film tidak ditemukan!")
                
        # 5. Cari Data spesifik berdasarkan ID unik
        elif pilihan == '5':
            cari_id = input("Masukkan ID film yang dicari: ")
            ketemu = False
            for film in daftar_film:
                if film.getId() == cari_id:
                    film.tampilkan_info()
                    ketemu = True
                    break
            if not ketemu:
                print("Film tidak ditemukan!")
                
        elif pilihan == '6':
            break

if __name__ == "__main__":
    main()
