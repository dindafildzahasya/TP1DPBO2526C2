#include <iostream>
#include <string>

using namespace std;

// ----------------------------------------------------
// CLASS FILM
// Merepresentasikan entitas data film dengan enkapsulasi
// ----------------------------------------------------
class Film {
private:
    // Atribut privat (melindungi data dari akses langsung luar class)[cite: 1]
    string id;
    string judul;
    string genre;
    int durasi;

public:
    // Konstruktor kosong
    Film() {}

    // Konstruktor berparameter untuk inisialisasi awal objek[cite: 1]
    Film(string id, string judul, string genre, int durasi) {
        this->id = id;
        this->judul = judul;
        this->genre = genre;
        this->durasi = durasi;
    }

    // Getter dan Setter untuk mengakses dan mengubah atribut privat[cite: 1]
    string getId() { 
        return id; 
    }
    void setId(string id) { 
        this->id = id; 
    }

    string getJudul() { 
        return judul; 
    }
    void setJudul(string judul) { 
        this->judul = judul; 
    }

    string getGenre() { 
        return genre; 
    }
    void setGenre(string genre) { 
        this->genre = genre; 
    }

    int getDurasi() { 
        return durasi; 
    }
    void setDurasi(int durasi) { 
        this->durasi = durasi; 
    }

    // Method untuk menampilkan informasi lengkap film[cite: 1]
    void tampilkanInfo() {
        cout << "ID: " << id << " | Judul: " << judul << " | Genre: " << genre << " | Durasi: " << durasi << " menit\n";
    }

    // Destruktor[cite: 1]
    ~Film() {}
};
