<?php
//1. Array & tipe data
//2. pengkondisian
//3. perulangan
//4. function & method
//5. class dan constructor
//6. gui

class koleksi {
    private $judul,
            $penerbit,
            $gambar,
            $genre;

    public function __construct($judul, $gambar, $penerbit, $genre){
        $this->judul = $judul;
        $this->penerbit = $penerbit;                
        $this->gambar = $gambar;           
        $this->genre = $genre;        
        }


    public function getGambar() {
        return $this->gambar;
        }
    public function getJudul() {
        return $this->judul;
        }
    public function getPenerbit() {
        return $this->penerbit;
        }
    public function getGenre() {
        return $this->genre;
        }
    }
//inheritance
class buku extends koleksi {
    private $isbn,
            $penulis;

    public function __construct($judul, $gambar,$penulis,$penerbit , $isbn, $deskripsi, $genre){
        parent::__construct($judul, $gambar, $penerbit, $genre);
        $this->isbn = $isbn;
        $this->penulis = $penulis;
        $this->deskripsi = $deskripsi;
    }
    public function getPenulis() {
        return $this->penulis;
    }
    public function getIsbn (){
        return $this->isbn;
    }
    public function getDeskripsi () {
        return $this->deskripsi;
    }
    public function getInfoKoleksi () {
        $str = "Buku <br>" .
        "Judul : " . "{$this->getJudul()} <br>". 
        "Penulis : " . "{$this->getPenulis()} <br>". 
        "Penerbit : ". "{$this->getPenerbit()} <br>".
        "ISBN : " . "{$this->getIsbn()} <br>" . "<hr>Deskripsi singkat : ". "<br>{$this->getDeskripsi()}<br>" .
        "Genre : " . "{$this->getGenre()} <br>";
        return $str;
    }



}
class komik extends koleksi {
    private $pengarang;

    public function __construct($judul, $gambar,$pengarang, $penerbit , $chapter ,$genre){
        parent::__construct ($judul, $gambar, $penerbit, $genre);
        $this->pengarang = $pengarang;
        $this->chapter = $chapter;
    }
    public function getPengarang () {
        return $this->pengarang;
    }
    public function getChapter () {
        return $this->chapter;
    }
    public function getInfoKoleksi () {
        $str = "Koleksi Komik <br>" . 
        "Judul : " . "{$this->getJudul()} <br>". 
        "Pengarang : " . "{$this->getPengarang()} <br>". 
        "Penerbit : ". "{$this->getPenerbit()} <br>". "<hr>Daftar Chapter : "."<br> {$this->getChapter()} <br>" .
        "Genre : " . "{$this->getGenre()} <br>";
        return $str;
    }

}





$buku1 = new buku ("Atomic Habits", "atomic.png" ,"James Clear", "Gramedia Pustaka Utama", 9786020633176, "Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Ia menyebut semua tadi atomic habits.", "Pengembangan diri");
$buku2 = new buku ("Bicara Itu Ada Seninya","bicara.png" ,"Oh Su Hyang", "Bhuana Ilmu Populer (BIP) Kelompok Gramedia", 9786230404306,"Ketika komunikasi menjadi hal yang penting untuk bersaing, pakar komunikasi Oh Su Hyang mengeluarkan buku yang sangat berarti. Selain berisi tentang pengalaman peningkatan diri, buku ini juga memuat berbagai konten mengenai teknik komunikasi, persuasi, dan negosiasi. <br>Lalu bagaimana cara berbicara yang baik? Apakah berbicara dengan artikulasi yang jelas? Atau berbicara tanpa mengambil tarikan napas? Tidak! Sebuah ucapan yang bisa disebut baik adalah yang bisa menggetarkan hati. Ucapan seorang juara memiliki daya tarik tersendiri. Ucapan pemandu acara memiliki kemampuan menghidupkan suasana dan kekuatan kalimatnya yang terus terang. Anda harus pandai berbicara untuk menunjukkan diri Anda kepada lawan bicara dalam kehidupan sosial. Orang yang berbicara dengan mahir akan menjadi lebih maju daripada yang lainnya. <br>Untuk mencapai tujuan komunikasi, persuasi, dan negosiasi, Anda harus mengetahui metode komunikasi yang efisien. Buku ini dijabarkan agar dapat dimengerti oleh siapa saja. Terdapat banyak episode menarik dari orang-orang terkenal dan juga rahasia inti dari komunikasi. Jika Anda membacanya dengan runut, saya yakin rasa percaya diri Anda untuk berbicara pun akan tumbuh dengan sendirinya." ,"Pengembangan diri");
$buku3 = new buku ("Filosofi Teras","filosofi.png" , "Henry Manampiring", "Penerbit Buku Kompas", 9786024125196, "Lebih dari 2000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. <br>Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini." ,"Pengembangan Diri");
$buku4 = new buku ("Laut Bercerita","laut.png" , "Leila S. Chudori", "Kepustakaan Populer Gramedia", 9786024246945, "Jakarta, Maret 1998 <br>Di sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul, ditendang, digantung, dan disetrum agara bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu. <br>Jakarta, Juni 1998 <br>Keluarga Arya Wibisono, seperti biasa, pada hari Minggu sore memasak bersama, menyediakan makanan kesukaan Biru Laut. Sang ayah akan meletakkan satu piring untuk dirinya, satu piring untuk sang ibu, Biru Laut, dan satu piring untuk si bungsu Asmara Jati. Mereka duduk menanti dan menanti. Tapi Biru Laut tak kunjung muncul. <br>Jakarta, 2000 <br>Asmara Jati, adik Biru Laut, beserta Tim Komisi Orang Hilang yang dipimpin Aswin Pradana mencoba mencari jejak mereka yang hilang serta merekam dan mempelajari testimoni mereka yang kembali. Anjani, kekasih Laut, para orangtua dan istri aktivis yang hilang menuntut kejelasan tentang anggota keluarga mereka. Sementara Biru Laut, dari dasar laut yang sunyi bercerita kepada kita, kepada dunia tentang apa yang terjadi pada dirinya dan kawan-kawannya. <br>Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur." ,"Fiksi sastra & ilmiah");
$buku5 = new buku ("Perpustakaan Tengah Malam","midnight.png" ,"Matt Haig", "Gramedia Pustaka Utama", 9786020649320, "Di antara kehidupan dan kematian terdapat sebuah perpustakaan yang jumlah bukunya tak terhingga. Tiap-tiap buku menyediakan satu kesempatan untuk mencoba kehidupan lain yang bisa dijalani sehingga kau bisa melihat apa yang terjadi kalau kau mengambil keputusan---keputusan berbeda... Akankah kau melakukan apapun secara berbeda jika kau mendapat kesempatan untuk membatalkan penyesalan-penyesalan mu? Benarkah kehidupan lain akan jauh lebih baik? Nora Seed harus membuat keputusan. Ia dihadapkan pada kemungkinan bisa mengubah hidupnya, memiliki karir yang berbeda, tidak putus dari mantan kekasih, mewujudkan mimpinya sebagai glasiolog. Ia menjelajahi Perpustakaan Tengah Malam untuk memutuskan apa sebenarnya yang menjadikan hidup pantas dijalani. Setelah kehidupan yang diisi berbagai penyesalan dan kegagalan, akankah Nora Seed akhirnya mendapatkan kehidupan yang bisa memberinya kebahagiaan sejati?" ,"Romance");
$komik1 = new komik("Naruto: World of Dreams","naruto.png" , "Masashi Kishimoto", "Shueisha ", "Chapter 598: Demolition!! <br>Chapter 599: Uchiha Obito  <br>Chapter 600: Why Not Sooner?  <br>Chapter 601: Obito and Madara  <br>Chapter 602: Alive  <br>Chapter 603: Rehab  <br>Chapter 604: Reunion, and then...  <br>Chapter 605: Hell  <br>Chapter 606: World of Dreams  <br>Chapter 607: It Doesn't Matter to Me "  ,"Aksi, petualangan");


$komik2 = new komik ("One Piece: Nightmare Luffy","onepiece.png" , "Eiichiro Oda","Shueisha", "Chapter 471. My Friend <br>Chapter 472. Down <br>Chapter 473. Royal Shichibukai <br>Chapter 474. Gotta Do It!!!  <br>Chapter 475. The Forest Pirates <br>Chapter 476. Nightmare Luffy <br>Chapter 477. 3/8 <br>Chapter 478. Luffy VS Luffy <br>Chapter 479. Warrior of Hope <br>Chapter 480. Ambush Attack <br>Chapter 481. Shadow's Asgard" ,"Petualangan, fantasi");


$komik3 = new komik ("Jujutsu Kaisen: The Shibuya Insiden: Opening","13.png" , "Gege Akutami", "Shueisha","Chapter 89. The Shibuya Incident (7) <br>Chapter 90. The Shibuya Incident (8) <br>Chapter 91. The Shibuya Incident (9) <br>Chapter 92. The Shibuya Incident (10) <br>Chapter 93. The Shibuya Incident (11) <br>Chapter 94. The Shibuya Incident (12) <br>Chapter 95. The Shibuya Incident (13) <br>Chapter 96. The Shibuya Incident (14) <br>Chapter 97. The Shibuya Incident (15)" ,"Petualangan, fantasi");
$komik4 = new komik ("Bleach: 57: Out of Bloom", "12.png" , "Tite Kubo", "Shueisha", "Chapter 500: Rescuer in the Deep Dark  <br>Chapter 501: Hear. Fear. Here  <br>Chapter 502: Falling Sakura <br>Chapter 503: Wrath as a Lightning <br>Chapter 504: Beyond the Thunder  <br>Chapter 505: The Fire  <br>Chapter 506: The Fire 2  <br>Chapter 507: The Fire 3  <br>Chapter 508: Like a Raging Fire  <br>Chapter 509: Tenchi Kaijin" ,"Fiksi Petualangan, Fiksi Supranatural");
$komik5 = new komik ("Spy × Family: Mission: 38-44","spy.png" , "Tatsuya Endō", "Shueisha", "Missions 38 - 44, and Short Mission 5." ,"Komedi");
$koleksis = array ($buku1, $buku2, $buku3, $buku4, $buku5, $komik1, $komik2, $komik3, $komik4, $komik5);



?>