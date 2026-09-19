# ----------------------------------------------------
# CLASS FILM
# Definisi kelas objek film dengan atribut privat (_)
# ----------------------------------------------------
class Film:
    def __init__(self, id_film: str, judul: str, genre: str, durasi: int):
        # Menggunakan underscore (_) untuk menandakan atribut privat (konvensi enkapsulasi python)
        self._id = str(id_film)
        self._judul = str(judul)
        self._genre = str(genre)
        self._durasi = int(durasi)

    # Getter dan Setter untuk atribut privat
    def getId(self) -> str:
        return self._id
    def setId(self, id_film: str) -> None:
        self._id = str(id_film)

    def getJudul(self) -> str:
        return self._judul
    def setJudul(self, judul: str) -> None:
        self._judul = str(judul)

    def getGenre(self) -> str:
        return self._genre
    def setGenre(self, genre: str) -> None:
        self._genre = str(genre)

    def getDurasi(self) -> int:
        return self._durasi
    def setDurasi(self, durasi: int) -> None:
        self._durasi = int(durasi)

    # Method perilaku untuk menampilkan informasi film
    def tampilkan_info(self):
        print(f"ID: {self._id} | Judul: {self._judul} | Genre: {self._genre} | Durasi: {self._durasi} menit")
