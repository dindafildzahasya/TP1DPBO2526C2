import java.util.ArrayList;
import java.util.Scanner;

// ----------------------------------------------------
// CLASS UTAMA MAIN BIOSKOP
// Menjalankan program utama dan logika menu CRUD
// ----------------------------------------------------
public class Main {
    public static void main(String[] args) {
        // ArrayList untuk menyimpan sekumpulan objek Film (List of Objects)
        ArrayList<Film> daftarFilm = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);
        int pilihan;

        do {
            System.out.println("\n=== MENU BIOSKOP ===");
            System.out.println("1. Tambah Film\n2. Tampilkan Film\n3. Update Film\n4. Hapus Film\n5. Cari Film\n6. Keluar");
            System.out.print("Pilih: ");
            pilihan = scanner.nextInt();
            scanner.nextLine(); // Membersihkan buffer newline

            switch (pilihan) {
                case 1: // Tambah Data
                    System.out.print("ID: "); 
                    String id = scanner.nextLine();
                    System.out.print("Judul: "); 
                    String judul = scanner.nextLine();
                    System.out.print("Genre: "); 
                    String genre = scanner.nextLine();
                    System.out.print("Durasi (menit): "); 
                    int durasi = scanner.nextInt();
                    
                    // Menambahkan objek baru ke ArrayList
                    daftarFilm.add(new Film(id, judul, genre, durasi));
                    System.out.println("Film berhasil ditambahkan!");
                    break;

                case 2: // Tampilkan Data
                    System.out.println("\n--- DAFTAR FILM ---");
                    if (daftarFilm.isEmpty()) {
                        System.out.println("Belum ada data film.");
                    } else {
                        for (Film f : daftarFilm) {
                            f.tampilkanInfo();
                        }
                    }
                    break;

                case 3: // Update Data berdasarkan ID unik
                    System.out.print("Masukkan ID film yang akan di-update: "); 
                    String updateId = scanner.nextLine();
                    boolean updated = false;
                    for (Film f : daftarFilm) {
                        if (f.getId().equals(updateId)) {
                            System.out.print("Judul Baru: "); 
                            f.setJudul(scanner.nextLine());
                            System.out.print("Genre Baru: "); 
                            f.setGenre(scanner.nextLine());
                            System.out.print("Durasi Baru: "); 
                            f.setDurasi(scanner.nextInt());
                            System.out.println("Film berhasil di-update!");
                            updated = true;
                            break;
                        }
                    }
                    if (!updated) System.out.println("Film tidak ditemukan!");
                    break;

                case 4: // Hapus Data berdasarkan ID unik
                    System.out.print("Masukkan ID film yang akan dihapus: "); 
                    String deleteId = scanner.nextLine();
                    boolean deleted = false;
                    for (int i = 0; i < daftarFilm.size(); i++) {
                        if (daftarFilm.get(i).getId().equals(deleteId)) {
                            daftarFilm.remove(i);
                            System.out.println("Film berhasil dihapus!");
                            deleted = true;
                            break;
                        }
                    }
                    if (!deleted) System.out.println("Film tidak ditemukan!");
                    break;

                case 5: // Cari Data spesifik berdasarkan ID unik
                    System.out.print("Masukkan ID film yang dicari: "); 
                    String searchId = scanner.nextLine();
                    boolean found = false;
                    for (Film f : daftarFilm) {
                        if (f.getId().equals(searchId)) {
                            f.tampilkanInfo();
                            found = true;
                            break;
                        }
                    }
                    if (!found) System.out.println("Film tidak ditemukan!");
                    break;
            }
        } while (pilihan != 6);
        
        scanner.close();
    }
}
