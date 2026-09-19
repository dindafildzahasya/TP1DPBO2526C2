#include "Film.cpp" // Menyertakan file class Film

using namespace std;

int main() {
    const int MAX_FILM = 100; // Kapasitas maksimum array
    Film daftarFilm[MAX_FILM]; // Array of objects statis (pengganti vector)
    int jumlahFilm = 0;        // Variabel untuk melacak jumlah data saat ini
    int pilihan;

    // Perulangan untuk menampilkan menu interaktif terminal
    do {
        cout << "\n=== MENU BIOSKOP ===\n";
        cout << "1. Tambah Film\n2. Tampilkan Film\n3. Update Film\n4. Hapus Film\n5. Cari Film\n6. Keluar\n";
        cout << "Pilih: ";
        cin >> pilihan;

        // 1. Fitur Tambah Data
        if (pilihan == 1) {
            if (jumlahFilm < MAX_FILM) {
                string id, judul, genre;
                int durasi;
                cout << "ID: "; cin >> id;
                cout << "Judul: "; cin.ignore(); getline(cin, judul);
                cout << "Genre: "; getline(cin, genre);
                cout << "Durasi (menit): "; cin >> durasi;
                
                // Memasukkan objek baru ke dalam array pada indeks ke-'jumlahFilm'
                daftarFilm[jumlahFilm] = Film(id, judul, genre, durasi);
                jumlahFilm++; // Tambah counter jumlah data
                cout << "Film berhasil ditambahkan!\n";
            } else {
                cout << "Kapasitas penyimpanan film penuh!\n";
            }
        } 
        // 2. Fitur Tampilkan Data
        else if (pilihan == 2) {
            cout << "\n--- DAFTAR FILM ---\n";
            if (jumlahFilm == 0) {
                cout << "Belum ada data film.\n";
            } else {
                for (int i = 0; i < jumlahFilm; i++) {
                    daftarFilm[i].tampilkanInfo();
                }
            }
        } 
        // 3. Fitur Update Data berdasarkan ID unik
        else if (pilihan == 3) {
            string cariId;
            cout << "Masukkan ID film yang akan di-update: "; cin >> cariId;
            bool ketemu = false;
            for (int i = 0; i < jumlahFilm; i++) {
                if (daftarFilm[i].getId() == cariId) {
                    string j, g;
                    int d;
                    cout << "Judul Baru: "; cin.ignore(); getline(cin, j);
                    cout << "Genre Baru: "; getline(cin, g);
                    cout << "Durasi Baru: "; cin >> d;
                    
                    // Mengubah data menggunakan Setter[cite: 1]
                    daftarFilm[i].setJudul(j);
                    daftarFilm[i].setGenre(g);
                    daftarFilm[i].setDurasi(d);
                    cout << "Film berhasil di-update!\n";
                    ketemu = true;
                    break;
                }
            }
            if (!ketemu) cout << "Film tidak ditemukan!\n";
        } 
        // 4. Fitur Hapus Data berdasarkan ID unik
        else if (pilihan == 4) {
            string cariId;
            cout << "Masukkan ID film yang akan dihapus: "; cin >> cariId;
            bool ketemu = false;
            for (int i = 0; i < jumlahFilm; i++) {
                if (daftarFilm[i].getId() == cariId) {
                    // Geser elemen setelah indeks yang dihapus ke kiri
                    for (int j = i; j < jumlahFilm - 1; j++) {
                        daftarFilm[j] = daftarFilm[j + 1];
                    }
                    jumlahFilm--; // Kurangi jumlah data
                    cout << "Film berhasil dihapus!\n";
                    ketemu = true;
                    break;
                }
            }
            if (!ketemu) cout << "Film tidak ditemukan!\n";
        } 
        // 5. Fitur Cari Data spesifik berdasarkan ID unik
        else if (pilihan == 5) {
            string cariId;
            cout << "Masukkan ID film yang dicari: "; cin >> cariId;
            bool ketemu = false;
            for (int i = 0; i < jumlahFilm; i++) {
                if (daftarFilm[i].getId() == cariId) {
                    daftarFilm[i].tampilkanInfo();
                    ketemu = true;
                    break;
                }
            }
            if (!ketemu) cout << "Film tidak ditemukan!\n";
        }
    } while (pilihan != 6);

    return 0;
}
