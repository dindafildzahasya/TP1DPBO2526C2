// ----------------------------------------------------
// CLASS FILM
// Blueprint objek data film dengan atribut private (Enkapsulasi)
// ----------------------------------------------------
public class Film {
    // Atribut privat (menyembunyikan informasi internal)
    private String id;
    private String judul;
    private String genre;
    private int durasi;

    // Konstruktor kosong
    public Film() {}

    // Konstruktor berparameter untuk instansiasi objek dengan nilai awal
    public Film(String id, String judul, String genre, int durasi) {
        this.id = id;
        this.judul = judul;
        this.genre = genre;
        this.durasi = durasi;
    }

    // Getter dan Setter untuk akses atribut private
    public String getId() { 
        return id; 
    }
    public void setId(String id) { 
        this.id = id; 
    }

    public String getJudul() { 
        return judul; 
    }
    public void setJudul(String judul) { 
        this.judul = judul; 
    }

    public String getGenre() { 
        return genre; 
    }
    public void setGenre(String genre) { 
        this.genre = genre; 
    }

    public int getDurasi() { 
        return durasi; 
    }
    public void setDurasi(int durasi) { 
        this.durasi = durasi; 
    }

    // Method perilaku untuk menampilkan informasi objek
    public void tampilkanInfo() {
        System.out.println("ID: " + id + " | Judul: " + judul + " | Genre: " + genre + " | Durasi: " + durasi + " menit");
    }
}
