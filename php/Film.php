<?php
// ----------------------------------------------------
// CLASS FILM
// Struktur class PHP lengkap dengan enkapsulasi (private properties)
// dan tambahan atribut path gambar lokal
// ----------------------------------------------------
class Film {
    private string $id;
    private string $judul;
    private string $genre;
    private int $durasi;
    private string $gambar; // Atribut wajib: path file lokal (misal: assets/poster.jpg)

    // Konstruktor kelas Film
    public function __construct(string $id, string $judul, string $genre, int $durasi, string $gambar) {
        $this->id = $id;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->durasi = $durasi;
        $this->gambar = $gambar;
    }

    // Getter dan Setter untuk enkapsulasi data
    public function getId(): string { 
        return $this->id; 
    }
    public function setId(string $id): void { 
        $this->id = $id; 
    }

    public function getJudul(): string { 
        return $this->judul; 
    }
    public function setJudul(string $judul): void { 
        $this->judul = $judul;
    }

    public function getGenre(): string { 
        return $this->genre; 
    }
    public function setGenre(string $genre): void { 
        $this->genre = $genre; 
    }

    public function getDurasi(): int { 
        return $this->durasi; 
    }
    public function setDurasi(int $durasi): void { 
        $this->durasi = $durasi; 
    }

    public function getGambar(): string { 
        return $this->gambar; 
    }
    public function setGambar(string $gambar): void { 
        $this->gambar = $gambar; 
    }
}
