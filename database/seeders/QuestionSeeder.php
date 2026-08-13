<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run(): void
{
        // Hapus permanen data lama agar tidak terkena SoftDeletes.
        // Jawaban harus dihapus lebih dulu karena memiliki question_id.
        DB::table('answers')->delete();
        DB::table('questions')->delete();

        // Reset AUTO_INCREMENT supaya ID question kembali 1-450.
        DB::statement('ALTER TABLE answers AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE questions AUTO_INCREMENT = 1');

    $subjects = Subject::all()->keyBy('name');

    // lanjutkan isi soal...


        /*
        |--------------------------------------------------------------------------
        | 150 SOAL BAHASA INDONESIA
        |--------------------------------------------------------------------------
        */
        $bahasaIndonesia = [
            [
                'question' => 'Sinonim kata "abadi" adalah ...',
                'options' => [
                    'A' => 'sementara',
                    'B' => 'kekal',
                    'C' => 'singkat',
                    'D' => 'rapuh',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "cermat" adalah ...',
                'options' => [
                    'A' => 'lalai',
                    'B' => 'teliti',
                    'C' => 'kasar',
                    'D' => 'lambat',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "gembira" adalah ...',
                'options' => [
                    'A' => 'sedih',
                    'B' => 'senang',
                    'C' => 'marah',
                    'D' => 'takut',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "hemat" adalah ...',
                'options' => [
                    'A' => 'boros',
                    'B' => 'mahal',
                    'C' => 'irit',
                    'D' => 'mewah',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Sinonim kata "indah" adalah ...',
                'options' => [
                    'A' => 'buruk',
                    'B' => 'elok',
                    'C' => 'sempit',
                    'D' => 'gelap',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "jujur" adalah ...',
                'options' => [
                    'A' => 'curang',
                    'B' => 'terus terang',
                    'C' => 'malas',
                    'D' => 'angkuh',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "kuno" adalah ...',
                'options' => [
                    'A' => 'baru',
                    'B' => 'modern',
                    'C' => 'lama',
                    'D' => 'muda',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Sinonim kata "luas" adalah ...',
                'options' => [
                    'A' => 'sempit',
                    'B' => 'lebar',
                    'C' => 'tinggi',
                    'D' => 'tipis',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "pandai" adalah ...',
                'options' => [
                    'A' => 'bodoh',
                    'B' => 'cerdas',
                    'C' => 'lemah',
                    'D' => 'nakal',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "rajin" adalah ...',
                'options' => [
                    'A' => 'malas',
                    'B' => 'tekun',
                    'C' => 'lamban',
                    'D' => 'ceroboh',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "sulit" adalah ...',
                'options' => [
                    'A' => 'mudah',
                    'B' => 'ringan',
                    'C' => 'sukar',
                    'D' => 'dekat',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Sinonim kata "tulus" adalah ...',
                'options' => [
                    'A' => 'palsu',
                    'B' => 'ikhlas',
                    'C' => 'kasar',
                    'D' => 'ragu',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "utama" adalah ...',
                'options' => [
                    'A' => 'tambahan',
                    'B' => 'pokok',
                    'C' => 'akhir',
                    'D' => 'kecil',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "wafat" adalah ...',
                'options' => [
                    'A' => 'lahir',
                    'B' => 'meninggal',
                    'C' => 'tidur',
                    'D' => 'berangkat',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "yakin" adalah ...',
                'options' => [
                    'A' => 'ragu',
                    'B' => 'percaya',
                    'C' => 'takut',
                    'D' => 'bingung',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "aman" adalah ...',
                'options' => [
                    'A' => 'kacau',
                    'B' => 'tenteram',
                    'C' => 'ramai',
                    'D' => 'sempit',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "cerdas" adalah ...',
                'options' => [
                    'A' => 'malas',
                    'B' => 'pandai',
                    'C' => 'lambat',
                    'D' => 'lemah',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "damai" adalah ...',
                'options' => [
                    'A' => 'rusuh',
                    'B' => 'tenteram',
                    'C' => 'tegang',
                    'D' => 'keras',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "gigih" adalah ...',
                'options' => [
                    'A' => 'mudah menyerah',
                    'B' => 'ulet',
                    'C' => 'pasif',
                    'D' => 'ragu',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "makmur" adalah ...',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'sejahtera',
                    'C' => 'sunyi',
                    'D' => 'sempit',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "mutakhir" adalah ...',
                'options' => [
                    'A' => 'lama',
                    'B' => 'terbaru',
                    'C' => 'kuno',
                    'D' => 'awal',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "resmi" adalah ...',
                'options' => [
                    'A' => 'palsu',
                    'B' => 'sah',
                    'C' => 'asing',
                    'D' => 'liar',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "usang" adalah ...',
                'options' => [
                    'A' => 'baru',
                    'B' => 'lama',
                    'C' => 'bersih',
                    'D' => 'mahal',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "valid" adalah ...',
                'options' => [
                    'A' => 'keliru',
                    'B' => 'sahih',
                    'C' => 'kabur',
                    'D' => 'asing',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Sinonim kata "konkret" adalah ...',
                'options' => [
                    'A' => 'abstrak',
                    'B' => 'nyata',
                    'C' => 'semu',
                    'D' => 'kosong',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "tinggi" adalah ...',
                'options' => [
                    'A' => 'besar',
                    'B' => 'rendah',
                    'C' => 'panjang',
                    'D' => 'luas',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "cepat" adalah ...',
                'options' => [
                    'A' => 'lambat',
                    'B' => 'kuat',
                    'C' => 'dekat',
                    'D' => 'padat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "kaya" adalah ...',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'hemat',
                    'C' => 'murah',
                    'D' => 'sempit',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "maju" adalah ...',
                'options' => [
                    'A' => 'tinggi',
                    'B' => 'mundur',
                    'C' => 'cepat',
                    'D' => 'luas',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "terang" adalah ...',
                'options' => [
                    'A' => 'putih',
                    'B' => 'gelap',
                    'C' => 'bersih',
                    'D' => 'panas',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "ramai" adalah ...',
                'options' => [
                    'A' => 'sepi',
                    'B' => 'sunyi sekali',
                    'C' => 'padat',
                    'D' => 'riuh',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "keras" adalah ...',
                'options' => [
                    'A' => 'tajam',
                    'B' => 'lunak',
                    'C' => 'padat',
                    'D' => 'kasar',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "naik" adalah ...',
                'options' => [
                    'A' => 'jatuh',
                    'B' => 'turun',
                    'C' => 'masuk',
                    'D' => 'pergi',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "datang" adalah ...',
                'options' => [
                    'A' => 'pulang',
                    'B' => 'pergi',
                    'C' => 'masuk',
                    'D' => 'tiba',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "optimis" adalah ...',
                'options' => [
                    'A' => 'pesimis',
                    'B' => 'aktif',
                    'C' => 'tegas',
                    'D' => 'yakin',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "stabil" adalah ...',
                'options' => [
                    'A' => 'kuat',
                    'B' => 'labil',
                    'C' => 'tetap',
                    'D' => 'seimbang',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "mayoritas" adalah ...',
                'options' => [
                    'A' => 'umum',
                    'B' => 'minoritas',
                    'C' => 'utama',
                    'D' => 'banyak',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "aktif" adalah ...',
                'options' => [
                    'A' => 'pasif',
                    'B' => 'diam',
                    'C' => 'sibuk',
                    'D' => 'giat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "modern" adalah ...',
                'options' => [
                    'A' => 'baru',
                    'B' => 'tradisional',
                    'C' => 'maju',
                    'D' => 'canggih',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Antonim kata "objektif" adalah ...',
                'options' => [
                    'A' => 'subjektif',
                    'B' => 'netral',
                    'C' => 'logis',
                    'D' => 'aktual',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "produktif" adalah ...',
                'options' => [
                    'A' => 'konsumtif',
                    'B' => 'aktif',
                    'C' => 'kreatif',
                    'D' => 'efektif',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "transparan" adalah ...',
                'options' => [
                    'A' => 'tertutup',
                    'B' => 'jernih',
                    'C' => 'terbuka',
                    'D' => 'jelas',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "ekspor" adalah ...',
                'options' => [
                    'A' => 'impor',
                    'B' => 'produksi',
                    'C' => 'distribusi',
                    'D' => 'konsumsi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "internal" adalah ...',
                'options' => [
                    'A' => 'eksternal',
                    'B' => 'pusat',
                    'C' => 'lokal',
                    'D' => 'utama',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "maksimum" adalah ...',
                'options' => [
                    'A' => 'minimum',
                    'B' => 'besar',
                    'C' => 'penuh',
                    'D' => 'optimal',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "permanen" adalah ...',
                'options' => [
                    'A' => 'sementara',
                    'B' => 'tetap',
                    'C' => 'lama',
                    'D' => 'kukuh',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "positif" adalah ...',
                'options' => [
                    'A' => 'negatif',
                    'B' => 'baik',
                    'C' => 'aktif',
                    'D' => 'maju',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "prolog" adalah ...',
                'options' => [
                    'A' => 'epilog',
                    'B' => 'dialog',
                    'C' => 'monolog',
                    'D' => 'narasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "universal" adalah ...',
                'options' => [
                    'A' => 'khusus',
                    'B' => 'umum',
                    'C' => 'global',
                    'D' => 'luas',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Antonim kata "vertikal" adalah ...',
                'options' => [
                    'A' => 'horizontal',
                    'B' => 'miring',
                    'C' => 'tegak',
                    'D' => 'lurus',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Penulisan kata baku yang tepat adalah ...',
                'options' => [
                    'A' => 'aktivitas',
                    'B' => 'aktifitas',
                    'C' => 'aktipitas',
                    'D' => 'aktivitaz',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Penulisan kata baku yang tepat adalah ...',
                'options' => [
                    'A' => 'resiko',
                    'B' => 'risiko',
                    'C' => 'riziko',
                    'D' => 'resikho',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Penulisan kata baku yang tepat adalah ...',
                'options' => [
                    'A' => 'ijin',
                    'B' => 'izin',
                    'C' => 'idzin',
                    'D' => 'ijinlah',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Penulisan kata baku yang tepat adalah ...',
                'options' => [
                    'A' => 'praktik',
                    'B' => 'praktek',
                    'C' => 'praktiek',
                    'D' => 'praktekkan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Penulisan kata baku yang tepat adalah ...',
                'options' => [
                    'A' => 'apotek',
                    'B' => 'apotik',
                    'C' => 'apoték',
                    'D' => 'apotekk',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat efektif terdapat pada pilihan ...',
                'options' => [
                    'A' => 'Para siswa-siswa belajar di kelas.',
                    'B' => 'Siswa belajar di kelas.',
                    'C' => 'Siswa-siswa para belajar.',
                    'D' => 'Para siswa belajar-belajar di kelas.',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Kalimat efektif terdapat pada pilihan ...',
                'options' => [
                    'A' => 'Dia naik ke atas panggung.',
                    'B' => 'Dia naik panggung.',
                    'C' => 'Dia ke atas naik panggung.',
                    'D' => 'Naik dia ke atas panggung.',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Kalimat efektif terdapat pada pilihan ...',
                'options' => [
                    'A' => 'Karena hujan sehingga jalan licin.',
                    'B' => 'Hujan menyebabkan jalan licin.',
                    'C' => 'Disebabkan karena hujan jalan licin.',
                    'D' => 'Karena hujan maka sehingga jalan licin.',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Tanda baca yang tepat untuk mengakhiri kalimat tanya adalah ...',
                'options' => [
                    'A' => 'titik',
                    'B' => 'koma',
                    'C' => 'tanda tanya',
                    'D' => 'titik dua',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Tanda baca yang digunakan untuk memisahkan unsur perincian adalah ...',
                'options' => [
                    'A' => 'koma',
                    'B' => 'tanda tanya',
                    'C' => 'tanda seru',
                    'D' => 'garis miring',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata "berlari" termasuk jenis kata ...',
                'options' => [
                    'A' => 'kata benda',
                    'B' => 'kata kerja',
                    'C' => 'kata sifat',
                    'D' => 'kata bilangan',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Kata "cantik" termasuk jenis kata ...',
                'options' => [
                    'A' => 'kata sifat',
                    'B' => 'kata kerja',
                    'C' => 'kata benda',
                    'D' => 'kata depan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata "meja" termasuk jenis kata ...',
                'options' => [
                    'A' => 'kata benda',
                    'B' => 'kata kerja',
                    'C' => 'kata sifat',
                    'D' => 'kata hubung',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata "dan" termasuk ...',
                'options' => [
                    'A' => 'kata hubung',
                    'B' => 'kata kerja',
                    'C' => 'kata benda',
                    'D' => 'kata bilangan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata depan yang tepat pada kalimat "Buku itu diletakkan ... meja" adalah ...',
                'options' => [
                    'A' => 'di',
                    'B' => 'ke',
                    'C' => 'dari',
                    'D' => 'dan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Awalan pada kata "membaca" adalah ...',
                'options' => [
                    'A' => 'meN-',
                    'B' => 'ber-',
                    'C' => 'ter-',
                    'D' => 'pe-',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Akhiran pada kata "makanan" adalah ...',
                'options' => [
                    'A' => '-kan',
                    'B' => '-an',
                    'C' => '-i',
                    'D' => '-nya',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Kata dasar dari "bermain" adalah ...',
                'options' => [
                    'A' => 'main',
                    'B' => 'bermain',
                    'C' => 'mainan',
                    'D' => 'pemain',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata dasar dari "pelajaran" adalah ...',
                'options' => [
                    'A' => 'ajar',
                    'B' => 'pelajar',
                    'C' => 'ajaran',
                    'D' => 'belajar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat perintah biasanya diakhiri dengan ...',
                'options' => [
                    'A' => 'tanda seru',
                    'B' => 'tanda tanya',
                    'C' => 'koma',
                    'D' => 'titik dua',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat "Tolong tutup pintu itu!" termasuk kalimat ...',
                'options' => [
                    'A' => 'perintah',
                    'B' => 'tanya',
                    'C' => 'berita',
                    'D' => 'majemuk',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat "Kapan kamu berangkat?" termasuk kalimat ...',
                'options' => [
                    'A' => 'tanya',
                    'B' => 'perintah',
                    'C' => 'seru',
                    'D' => 'berita',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat yang menyatakan informasi disebut kalimat ...',
                'options' => [
                    'A' => 'berita',
                    'B' => 'tanya',
                    'C' => 'perintah',
                    'D' => 'seru',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ide utama dalam sebuah paragraf disebut ...',
                'options' => [
                    'A' => 'gagasan pokok',
                    'B' => 'kata ulang',
                    'C' => 'imbuhan',
                    'D' => 'konjungsi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kalimat yang menjelaskan gagasan pokok disebut ...',
                'options' => [
                    'A' => 'kalimat penjelas',
                    'B' => 'judul',
                    'C' => 'kata depan',
                    'D' => 'kalimat tanya',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Paragraf yang gagasan utamanya terletak di awal disebut paragraf ...',
                'options' => [
                    'A' => 'deduktif',
                    'B' => 'induktif',
                    'C' => 'campuran',
                    'D' => 'naratif',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Paragraf yang gagasan utamanya terletak di akhir disebut paragraf ...',
                'options' => [
                    'A' => 'induktif',
                    'B' => 'deduktif',
                    'C' => 'deskriptif',
                    'D' => 'persuasif',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Teks yang berisi langkah-langkah melakukan sesuatu disebut teks ...',
                'options' => [
                    'A' => 'prosedur',
                    'B' => 'narasi',
                    'C' => 'deskripsi',
                    'D' => 'puisi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Teks yang menggambarkan objek secara rinci disebut teks ...',
                'options' => [
                    'A' => 'deskripsi',
                    'B' => 'prosedur',
                    'C' => 'eksposisi',
                    'D' => 'anekdot',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Teks yang menceritakan rangkaian peristiwa disebut teks ...',
                'options' => [
                    'A' => 'narasi',
                    'B' => 'prosedur',
                    'C' => 'laporan',
                    'D' => 'iklan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Teks yang bertujuan meyakinkan pembaca disebut teks ...',
                'options' => [
                    'A' => 'persuasi',
                    'B' => 'deskripsi',
                    'C' => 'narasi',
                    'D' => 'laporan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata tanya untuk menanyakan alasan adalah ...',
                'options' => [
                    'A' => 'mengapa',
                    'B' => 'siapa',
                    'C' => 'kapan',
                    'D' => 'di mana',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata tanya untuk menanyakan waktu adalah ...',
                'options' => [
                    'A' => 'kapan',
                    'B' => 'siapa',
                    'C' => 'berapa',
                    'D' => 'bagaimana',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata tanya untuk menanyakan orang adalah ...',
                'options' => [
                    'A' => 'siapa',
                    'B' => 'kapan',
                    'C' => 'mengapa',
                    'D' => 'bagaimana',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata tanya untuk menanyakan tempat adalah ...',
                'options' => [
                    'A' => 'di mana',
                    'B' => 'kapan',
                    'C' => 'siapa',
                    'D' => 'berapa',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Singkatan dari "dan sebagainya" adalah ...',
                'options' => [
                    'A' => 'dsb.',
                    'B' => 'dkk.',
                    'C' => 'dst.',
                    'D' => 'dll.',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Singkatan dari "dan lain-lain" adalah ...',
                'options' => [
                    'A' => 'dll.',
                    'B' => 'dsb.',
                    'C' => 'dst.',
                    'D' => 'dkk.',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata "rumah-rumah" merupakan bentuk ...',
                'options' => [
                    'A' => 'kata ulang',
                    'B' => 'kata majemuk',
                    'C' => 'kata dasar',
                    'D' => 'kata depan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kata majemuk terdapat pada pilihan ...',
                'options' => [
                    'A' => 'rumah sakit',
                    'B' => 'berlari',
                    'C' => 'makanan',
                    'D' => 'cantik',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Majas yang membandingkan secara langsung tanpa kata pembanding disebut ...',
                'options' => [
                    'A' => 'metafora',
                    'B' => 'personifikasi',
                    'C' => 'hiperbola',
                    'D' => 'ironi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Majas yang memberi sifat manusia pada benda mati disebut ...',
                'options' => [
                    'A' => 'personifikasi',
                    'B' => 'metafora',
                    'C' => 'litotes',
                    'D' => 'repetisi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Majas yang melebih-lebihkan sesuatu disebut ...',
                'options' => [
                    'A' => 'hiperbola',
                    'B' => 'metafora',
                    'C' => 'ironi',
                    'D' => 'simile',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pantun terdiri atas ... baris dalam satu bait.',
                'options' => [
                    'A' => 'empat',
                    'B' => 'dua',
                    'C' => 'tiga',
                    'D' => 'lima',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dua baris pertama dalam pantun disebut ...',
                'options' => [
                    'A' => 'sampiran',
                    'B' => 'isi',
                    'C' => 'amanat',
                    'D' => 'tema',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dua baris terakhir dalam pantun disebut ...',
                'options' => [
                    'A' => 'isi',
                    'B' => 'sampiran',
                    'C' => 'rima',
                    'D' => 'judul',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pesan yang ingin disampaikan pengarang disebut ...',
                'options' => [
                    'A' => 'amanat',
                    'B' => 'tokoh',
                    'C' => 'latar',
                    'D' => 'alur',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pelaku dalam sebuah cerita disebut ...',
                'options' => [
                    'A' => 'tokoh',
                    'B' => 'tema',
                    'C' => 'alur',
                    'D' => 'latar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tempat dan waktu terjadinya cerita disebut ...',
                'options' => [
                    'A' => 'latar',
                    'B' => 'alur',
                    'C' => 'tema',
                    'D' => 'amanat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Urutan peristiwa dalam cerita disebut ...',
                'options' => [
                    'A' => 'alur',
                    'B' => 'latar',
                    'C' => 'tema',
                    'D' => 'tokoh',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pokok persoalan yang mendasari cerita disebut ...',
                'options' => [
                    'A' => 'tema',
                    'B' => 'amanat',
                    'C' => 'latar',
                    'D' => 'dialog',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "menulis" yang tepat adalah ...',
                'options' => [
                    'A' => 'membuat tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "menulis" yang tepat adalah ...',
                'options' => [
                    'A' => 'membuat tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "menulis" yang tepat adalah ...',
                'options' => [
                    'A' => 'membuat tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "menulis" yang tepat adalah ...',
                'options' => [
                    'A' => 'membuat tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "menulis" yang tepat adalah ...',
                'options' => [
                    'A' => 'membuat tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "membaca" yang tepat adalah ...',
                'options' => [
                    'A' => 'melihat dan memahami tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "membaca" yang tepat adalah ...',
                'options' => [
                    'A' => 'melihat dan memahami tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "membaca" yang tepat adalah ...',
                'options' => [
                    'A' => 'melihat dan memahami tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "membaca" yang tepat adalah ...',
                'options' => [
                    'A' => 'melihat dan memahami tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "membaca" yang tepat adalah ...',
                'options' => [
                    'A' => 'melihat dan memahami tulisan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "menyimak" yang tepat adalah ...',
                'options' => [
                    'A' => 'mendengarkan dengan saksama',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "menyimak" yang tepat adalah ...',
                'options' => [
                    'A' => 'mendengarkan dengan saksama',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "menyimak" yang tepat adalah ...',
                'options' => [
                    'A' => 'mendengarkan dengan saksama',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "menyimak" yang tepat adalah ...',
                'options' => [
                    'A' => 'mendengarkan dengan saksama',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "menyimak" yang tepat adalah ...',
                'options' => [
                    'A' => 'mendengarkan dengan saksama',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "berdiskusi" yang tepat adalah ...',
                'options' => [
                    'A' => 'bertukar pikiran',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "berdiskusi" yang tepat adalah ...',
                'options' => [
                    'A' => 'bertukar pikiran',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "berdiskusi" yang tepat adalah ...',
                'options' => [
                    'A' => 'bertukar pikiran',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "berdiskusi" yang tepat adalah ...',
                'options' => [
                    'A' => 'bertukar pikiran',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "berdiskusi" yang tepat adalah ...',
                'options' => [
                    'A' => 'bertukar pikiran',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "merangkum" yang tepat adalah ...',
                'options' => [
                    'A' => 'meringkas isi',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "merangkum" yang tepat adalah ...',
                'options' => [
                    'A' => 'meringkas isi',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "merangkum" yang tepat adalah ...',
                'options' => [
                    'A' => 'meringkas isi',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "merangkum" yang tepat adalah ...',
                'options' => [
                    'A' => 'meringkas isi',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "merangkum" yang tepat adalah ...',
                'options' => [
                    'A' => 'meringkas isi',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "mengkritik" yang tepat adalah ...',
                'options' => [
                    'A' => 'memberi tanggapan disertai penilaian',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "mengkritik" yang tepat adalah ...',
                'options' => [
                    'A' => 'memberi tanggapan disertai penilaian',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "mengkritik" yang tepat adalah ...',
                'options' => [
                    'A' => 'memberi tanggapan disertai penilaian',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "mengkritik" yang tepat adalah ...',
                'options' => [
                    'A' => 'memberi tanggapan disertai penilaian',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "mengkritik" yang tepat adalah ...',
                'options' => [
                    'A' => 'memberi tanggapan disertai penilaian',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "menjelaskan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menerangkan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "menjelaskan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menerangkan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "menjelaskan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menerangkan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "menjelaskan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menerangkan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "menjelaskan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menerangkan',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "mengamati" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperhatikan dengan teliti',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "mengamati" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperhatikan dengan teliti',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "mengamati" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperhatikan dengan teliti',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "mengamati" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperhatikan dengan teliti',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "mengamati" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperhatikan dengan teliti',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "menyunting" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperbaiki naskah',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "menyunting" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperbaiki naskah',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "menyunting" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperbaiki naskah',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "menyunting" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperbaiki naskah',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "menyunting" yang tepat adalah ...',
                'options' => [
                    'A' => 'memperbaiki naskah',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan teks laporan, makna kegiatan "menyimpulkan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menentukan inti akhir',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan cerita pendek, makna kegiatan "menyimpulkan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menentukan inti akhir',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan artikel, makna kegiatan "menyimpulkan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menentukan inti akhir',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan berita, makna kegiatan "menyimpulkan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menentukan inti akhir',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Dalam kegiatan pidato, makna kegiatan "menyimpulkan" yang tepat adalah ...',
                'options' => [
                    'A' => 'menentukan inti akhir',
                    'B' => 'menghafal tanpa memahami',
                    'C' => 'menghapus seluruh isi',
                    'D' => 'mengubah semua menjadi gambar',
                ],
                'correct' => 'A',
            ],

        ];

        /*
        |--------------------------------------------------------------------------
        | 150 SOAL MATEMATIKA
        |--------------------------------------------------------------------------
        */
        $matematika = [
            [
                'question' => 'Hasil dari 12 + 5 adalah ...',
                'options' => [
                    'A' => '14',
                    'B' => '19',
                    'C' => '22',
                    'D' => '17',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 13 + 6 adalah ...',
                'options' => [
                    'A' => '24',
                    'B' => '16',
                    'C' => '19',
                    'D' => '21',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 14 + 7 adalah ...',
                'options' => [
                    'A' => '23',
                    'B' => '26',
                    'C' => '18',
                    'D' => '21',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 15 + 8 adalah ...',
                'options' => [
                    'A' => '25',
                    'B' => '20',
                    'C' => '23',
                    'D' => '28',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 16 + 9 adalah ...',
                'options' => [
                    'A' => '27',
                    'B' => '22',
                    'C' => '30',
                    'D' => '25',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 17 + 10 adalah ...',
                'options' => [
                    'A' => '29',
                    'B' => '32',
                    'C' => '24',
                    'D' => '27',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 18 + 11 adalah ...',
                'options' => [
                    'A' => '26',
                    'B' => '31',
                    'C' => '29',
                    'D' => '34',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 19 + 12 adalah ...',
                'options' => [
                    'A' => '33',
                    'B' => '36',
                    'C' => '31',
                    'D' => '28',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 20 + 13 adalah ...',
                'options' => [
                    'A' => '33',
                    'B' => '30',
                    'C' => '35',
                    'D' => '38',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 21 + 14 adalah ...',
                'options' => [
                    'A' => '32',
                    'B' => '40',
                    'C' => '35',
                    'D' => '37',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 22 + 15 adalah ...',
                'options' => [
                    'A' => '34',
                    'B' => '39',
                    'C' => '42',
                    'D' => '37',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 23 + 16 adalah ...',
                'options' => [
                    'A' => '44',
                    'B' => '36',
                    'C' => '41',
                    'D' => '39',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 24 + 17 adalah ...',
                'options' => [
                    'A' => '46',
                    'B' => '43',
                    'C' => '41',
                    'D' => '38',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 25 + 18 adalah ...',
                'options' => [
                    'A' => '40',
                    'B' => '48',
                    'C' => '45',
                    'D' => '43',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 26 + 19 adalah ...',
                'options' => [
                    'A' => '45',
                    'B' => '47',
                    'C' => '50',
                    'D' => '42',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 30 - 12 adalah ...',
                'options' => [
                    'A' => '22',
                    'B' => '18',
                    'C' => '16',
                    'D' => '19',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 31 - 13 adalah ...',
                'options' => [
                    'A' => '19',
                    'B' => '22',
                    'C' => '16',
                    'D' => '18',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 32 - 14 adalah ...',
                'options' => [
                    'A' => '19',
                    'B' => '22',
                    'C' => '18',
                    'D' => '16',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 33 - 15 adalah ...',
                'options' => [
                    'A' => '22',
                    'B' => '16',
                    'C' => '19',
                    'D' => '18',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 34 - 16 adalah ...',
                'options' => [
                    'A' => '18',
                    'B' => '19',
                    'C' => '16',
                    'D' => '22',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 35 - 17 adalah ...',
                'options' => [
                    'A' => '18',
                    'B' => '16',
                    'C' => '22',
                    'D' => '19',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 36 - 18 adalah ...',
                'options' => [
                    'A' => '18',
                    'B' => '22',
                    'C' => '16',
                    'D' => '19',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 37 - 19 adalah ...',
                'options' => [
                    'A' => '19',
                    'B' => '22',
                    'C' => '16',
                    'D' => '18',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 38 - 20 adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '22',
                    'C' => '18',
                    'D' => '19',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 39 - 21 adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '18',
                    'C' => '19',
                    'D' => '22',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 40 - 22 adalah ...',
                'options' => [
                    'A' => '19',
                    'B' => '22',
                    'C' => '18',
                    'D' => '16',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 41 - 23 adalah ...',
                'options' => [
                    'A' => '22',
                    'B' => '16',
                    'C' => '19',
                    'D' => '18',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 42 - 24 adalah ...',
                'options' => [
                    'A' => '19',
                    'B' => '22',
                    'C' => '18',
                    'D' => '16',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 43 - 25 adalah ...',
                'options' => [
                    'A' => '22',
                    'B' => '19',
                    'C' => '18',
                    'D' => '16',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 44 - 26 adalah ...',
                'options' => [
                    'A' => '18',
                    'B' => '19',
                    'C' => '16',
                    'D' => '22',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 3 × 5 adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '15',
                    'C' => '17',
                    'D' => '20',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 4 × 6 adalah ...',
                'options' => [
                    'A' => '24',
                    'B' => '26',
                    'C' => '18',
                    'D' => '30',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 5 × 7 adalah ...',
                'options' => [
                    'A' => '35',
                    'B' => '42',
                    'C' => '28',
                    'D' => '37',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 6 × 8 adalah ...',
                'options' => [
                    'A' => '56',
                    'B' => '50',
                    'C' => '48',
                    'D' => '40',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 7 × 2 adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '12',
                    'C' => '14',
                    'D' => '16',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 8 × 3 adalah ...',
                'options' => [
                    'A' => '27',
                    'B' => '21',
                    'C' => '26',
                    'D' => '24',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 9 × 4 adalah ...',
                'options' => [
                    'A' => '40',
                    'B' => '36',
                    'C' => '32',
                    'D' => '38',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 10 × 5 adalah ...',
                'options' => [
                    'A' => '50',
                    'B' => '45',
                    'C' => '55',
                    'D' => '52',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 11 × 6 adalah ...',
                'options' => [
                    'A' => '72',
                    'B' => '66',
                    'C' => '68',
                    'D' => '60',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 12 × 7 adalah ...',
                'options' => [
                    'A' => '86',
                    'B' => '91',
                    'C' => '77',
                    'D' => '84',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 13 × 8 adalah ...',
                'options' => [
                    'A' => '106',
                    'B' => '112',
                    'C' => '104',
                    'D' => '96',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 14 × 2 adalah ...',
                'options' => [
                    'A' => '26',
                    'B' => '30',
                    'C' => '28',
                    'D' => '30',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 15 × 3 adalah ...',
                'options' => [
                    'A' => '47',
                    'B' => '48',
                    'C' => '42',
                    'D' => '45',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 16 × 4 adalah ...',
                'options' => [
                    'A' => '66',
                    'B' => '64',
                    'C' => '60',
                    'D' => '68',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 17 × 5 adalah ...',
                'options' => [
                    'A' => '90',
                    'B' => '85',
                    'C' => '87',
                    'D' => '80',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 10 ÷ 2 adalah ...',
                'options' => [
                    'A' => '4',
                    'B' => '5',
                    'C' => '7',
                    'D' => '6',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 18 ÷ 3 adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '7',
                    'C' => '5',
                    'D' => '6',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 28 ÷ 4 adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '6',
                    'C' => '7',
                    'D' => '9',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Hasil dari 40 ÷ 5 adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '8',
                    'C' => '9',
                    'D' => '7',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 18 ÷ 6 adalah ...',
                'options' => [
                    'A' => '4',
                    'B' => '2',
                    'C' => '5',
                    'D' => '3',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 28 ÷ 7 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '5',
                    'C' => '3',
                    'D' => '4',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 40 ÷ 8 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '7',
                    'C' => '4',
                    'D' => '5',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 54 ÷ 9 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '8',
                    'C' => '5',
                    'D' => '7',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 70 ÷ 10 adalah ...',
                'options' => [
                    'A' => '7',
                    'B' => '6',
                    'C' => '9',
                    'D' => '8',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 88 ÷ 11 adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '8',
                    'C' => '7',
                    'D' => '9',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Hasil dari 36 ÷ 12 adalah ...',
                'options' => [
                    'A' => '3',
                    'B' => '5',
                    'C' => '4',
                    'D' => '2',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 52 ÷ 13 adalah ...',
                'options' => [
                    'A' => '4',
                    'B' => '5',
                    'C' => '3',
                    'D' => '6',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hasil dari 70 ÷ 14 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '4',
                    'C' => '7',
                    'D' => '5',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 90 ÷ 15 adalah ...',
                'options' => [
                    'A' => '5',
                    'B' => '8',
                    'C' => '7',
                    'D' => '6',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Hasil dari 112 ÷ 16 adalah ...',
                'options' => [
                    'A' => '9',
                    'B' => '7',
                    'C' => '6',
                    'D' => '8',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Nilai dari 2² adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '4',
                    'C' => '3',
                    'D' => '4',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Nilai dari 3² adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '6',
                    'C' => '9',
                    'D' => '12',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Nilai dari 4² adalah ...',
                'options' => [
                    'A' => '20',
                    'B' => '15',
                    'C' => '16',
                    'D' => '8',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Nilai dari 5² adalah ...',
                'options' => [
                    'A' => '25',
                    'B' => '30',
                    'C' => '24',
                    'D' => '10',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Nilai dari 6² adalah ...',
                'options' => [
                    'A' => '35',
                    'B' => '36',
                    'C' => '12',
                    'D' => '42',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Nilai dari 7² adalah ...',
                'options' => [
                    'A' => '14',
                    'B' => '56',
                    'C' => '49',
                    'D' => '48',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Nilai dari 8² adalah ...',
                'options' => [
                    'A' => '72',
                    'B' => '16',
                    'C' => '64',
                    'D' => '63',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Nilai dari 9² adalah ...',
                'options' => [
                    'A' => '80',
                    'B' => '90',
                    'C' => '18',
                    'D' => '81',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Nilai dari 10² adalah ...',
                'options' => [
                    'A' => '100',
                    'B' => '99',
                    'C' => '110',
                    'D' => '20',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Nilai dari 11² adalah ...',
                'options' => [
                    'A' => '132',
                    'B' => '121',
                    'C' => '22',
                    'D' => '120',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Akar kuadrat dari 16 adalah ...',
                'options' => [
                    'A' => '3',
                    'B' => '5',
                    'C' => '6',
                    'D' => '4',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Akar kuadrat dari 25 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '7',
                    'C' => '5',
                    'D' => '4',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Akar kuadrat dari 36 adalah ...',
                'options' => [
                    'A' => '5',
                    'B' => '8',
                    'C' => '6',
                    'D' => '7',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Akar kuadrat dari 49 adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '7',
                    'C' => '9',
                    'D' => '8',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Akar kuadrat dari 64 adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '8',
                    'C' => '9',
                    'D' => '7',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Akar kuadrat dari 81 adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '11',
                    'C' => '10',
                    'D' => '9',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Akar kuadrat dari 100 adalah ...',
                'options' => [
                    'A' => '11',
                    'B' => '12',
                    'C' => '9',
                    'D' => '10',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Akar kuadrat dari 121 adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '10',
                    'C' => '13',
                    'D' => '11',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Akar kuadrat dari 144 adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '11',
                    'C' => '13',
                    'D' => '14',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Akar kuadrat dari 169 adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '13',
                    'C' => '15',
                    'D' => '14',
                ],
                'correct' => 'B',
            ],

            [
                'question' => '10% dari 200 adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '20',
                    'C' => '40',
                    'D' => '30',
                ],
                'correct' => 'B',
            ],

            [
                'question' => '20% dari 200 adalah ...',
                'options' => [
                    'A' => '40',
                    'B' => '30',
                    'C' => '50',
                    'D' => '60',
                ],
                'correct' => 'A',
            ],

            [
                'question' => '25% dari 200 adalah ...',
                'options' => [
                    'A' => '50',
                    'B' => '70',
                    'C' => '60',
                    'D' => '40',
                ],
                'correct' => 'A',
            ],

            [
                'question' => '30% dari 200 adalah ...',
                'options' => [
                    'A' => '50',
                    'B' => '80',
                    'C' => '60',
                    'D' => '70',
                ],
                'correct' => 'C',
            ],

            [
                'question' => '40% dari 200 adalah ...',
                'options' => [
                    'A' => '100',
                    'B' => '70',
                    'C' => '80',
                    'D' => '90',
                ],
                'correct' => 'C',
            ],

            [
                'question' => '50% dari 200 adalah ...',
                'options' => [
                    'A' => '110',
                    'B' => '120',
                    'C' => '100',
                    'D' => '90',
                ],
                'correct' => 'C',
            ],

            [
                'question' => '60% dari 200 adalah ...',
                'options' => [
                    'A' => '130',
                    'B' => '120',
                    'C' => '110',
                    'D' => '140',
                ],
                'correct' => 'B',
            ],

            [
                'question' => '70% dari 200 adalah ...',
                'options' => [
                    'A' => '150',
                    'B' => '160',
                    'C' => '130',
                    'D' => '140',
                ],
                'correct' => 'D',
            ],

            [
                'question' => '75% dari 200 adalah ...',
                'options' => [
                    'A' => '170',
                    'B' => '140',
                    'C' => '150',
                    'D' => '160',
                ],
                'correct' => 'C',
            ],

            [
                'question' => '80% dari 200 adalah ...',
                'options' => [
                    'A' => '150',
                    'B' => '160',
                    'C' => '180',
                    'D' => '170',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi dengan sisi 3 cm adalah ...',
                'options' => [
                    'A' => '12 cm²',
                    'B' => '9 cm²',
                    'C' => '6 cm²',
                    'D' => '12 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi dengan sisi 4 cm adalah ...',
                'options' => [
                    'A' => '20 cm²',
                    'B' => '8 cm²',
                    'C' => '16 cm²',
                    'D' => '16 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas persegi dengan sisi 5 cm adalah ...',
                'options' => [
                    'A' => '30 cm²',
                    'B' => '20 cm²',
                    'C' => '25 cm²',
                    'D' => '10 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas persegi dengan sisi 6 cm adalah ...',
                'options' => [
                    'A' => '36 cm²',
                    'B' => '12 cm²',
                    'C' => '42 cm²',
                    'D' => '24 cm²',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Luas persegi dengan sisi 7 cm adalah ...',
                'options' => [
                    'A' => '49 cm²',
                    'B' => '56 cm²',
                    'C' => '14 cm²',
                    'D' => '28 cm²',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Luas persegi dengan sisi 8 cm adalah ...',
                'options' => [
                    'A' => '16 cm²',
                    'B' => '64 cm²',
                    'C' => '32 cm²',
                    'D' => '72 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi dengan sisi 9 cm adalah ...',
                'options' => [
                    'A' => '18 cm²',
                    'B' => '90 cm²',
                    'C' => '36 cm²',
                    'D' => '81 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas persegi dengan sisi 10 cm adalah ...',
                'options' => [
                    'A' => '40 cm²',
                    'B' => '110 cm²',
                    'C' => '20 cm²',
                    'D' => '100 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas persegi dengan sisi 11 cm adalah ...',
                'options' => [
                    'A' => '132 cm²',
                    'B' => '44 cm²',
                    'C' => '121 cm²',
                    'D' => '22 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas persegi dengan sisi 12 cm adalah ...',
                'options' => [
                    'A' => '24 cm²',
                    'B' => '48 cm²',
                    'C' => '156 cm²',
                    'D' => '144 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 8 cm dan lebar 3 cm adalah ...',
                'options' => [
                    'A' => '21 cm²',
                    'B' => '22 cm²',
                    'C' => '24 cm²',
                    'D' => '32 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 9 cm dan lebar 4 cm adalah ...',
                'options' => [
                    'A' => '26 cm²',
                    'B' => '36 cm²',
                    'C' => '32 cm²',
                    'D' => '45 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 10 cm dan lebar 5 cm adalah ...',
                'options' => [
                    'A' => '30 cm²',
                    'B' => '50 cm²',
                    'C' => '45 cm²',
                    'D' => '60 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 11 cm dan lebar 6 cm adalah ...',
                'options' => [
                    'A' => '77 cm²',
                    'B' => '66 cm²',
                    'C' => '60 cm²',
                    'D' => '34 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 12 cm dan lebar 7 cm adalah ...',
                'options' => [
                    'A' => '38 cm²',
                    'B' => '77 cm²',
                    'C' => '96 cm²',
                    'D' => '84 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 13 cm dan lebar 8 cm adalah ...',
                'options' => [
                    'A' => '96 cm²',
                    'B' => '104 cm²',
                    'C' => '42 cm²',
                    'D' => '117 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 14 cm dan lebar 9 cm adalah ...',
                'options' => [
                    'A' => '117 cm²',
                    'B' => '46 cm²',
                    'C' => '126 cm²',
                    'D' => '140 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 15 cm dan lebar 10 cm adalah ...',
                'options' => [
                    'A' => '165 cm²',
                    'B' => '150 cm²',
                    'C' => '50 cm²',
                    'D' => '140 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 16 cm dan lebar 11 cm adalah ...',
                'options' => [
                    'A' => '165 cm²',
                    'B' => '54 cm²',
                    'C' => '192 cm²',
                    'D' => '176 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas persegi panjang dengan panjang 17 cm dan lebar 12 cm adalah ...',
                'options' => [
                    'A' => '58 cm²',
                    'B' => '192 cm²',
                    'C' => '204 cm²',
                    'D' => '221 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas segitiga dengan alas 6 cm dan tinggi 4 cm adalah ...',
                'options' => [
                    'A' => '16 cm²',
                    'B' => '24 cm²',
                    'C' => '12 cm²',
                    'D' => '18 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas segitiga dengan alas 8 cm dan tinggi 5 cm adalah ...',
                'options' => [
                    'A' => '20 cm²',
                    'B' => '25 cm²',
                    'C' => '28 cm²',
                    'D' => '40 cm²',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Luas segitiga dengan alas 10 cm dan tinggi 6 cm adalah ...',
                'options' => [
                    'A' => '60 cm²',
                    'B' => '30 cm²',
                    'C' => '40 cm²',
                    'D' => '36 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas segitiga dengan alas 12 cm dan tinggi 7 cm adalah ...',
                'options' => [
                    'A' => '84 cm²',
                    'B' => '54 cm²',
                    'C' => '49 cm²',
                    'D' => '42 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas segitiga dengan alas 14 cm dan tinggi 8 cm adalah ...',
                'options' => [
                    'A' => '70 cm²',
                    'B' => '64 cm²',
                    'C' => '112 cm²',
                    'D' => '56 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas segitiga dengan alas 16 cm dan tinggi 9 cm adalah ...',
                'options' => [
                    'A' => '144 cm²',
                    'B' => '88 cm²',
                    'C' => '72 cm²',
                    'D' => '81 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas segitiga dengan alas 18 cm dan tinggi 10 cm adalah ...',
                'options' => [
                    'A' => '100 cm²',
                    'B' => '90 cm²',
                    'C' => '180 cm²',
                    'D' => '108 cm²',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Luas segitiga dengan alas 20 cm dan tinggi 11 cm adalah ...',
                'options' => [
                    'A' => '220 cm²',
                    'B' => '121 cm²',
                    'C' => '110 cm²',
                    'D' => '130 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Luas segitiga dengan alas 22 cm dan tinggi 12 cm adalah ...',
                'options' => [
                    'A' => '144 cm²',
                    'B' => '154 cm²',
                    'C' => '264 cm²',
                    'D' => '132 cm²',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Luas segitiga dengan alas 24 cm dan tinggi 13 cm adalah ...',
                'options' => [
                    'A' => '169 cm²',
                    'B' => '180 cm²',
                    'C' => '156 cm²',
                    'D' => '312 cm²',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika x + 5 = 7, nilai x adalah ...',
                'options' => [
                    'A' => '1',
                    'B' => '2',
                    'C' => '5',
                    'D' => '3',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika x + 5 = 8, nilai x adalah ...',
                'options' => [
                    'A' => '3',
                    'B' => '6',
                    'C' => '2',
                    'D' => '4',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika x + 5 = 9, nilai x adalah ...',
                'options' => [
                    'A' => '5',
                    'B' => '4',
                    'C' => '3',
                    'D' => '7',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika x + 5 = 10, nilai x adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '8',
                    'C' => '5',
                    'D' => '4',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika x + 5 = 11, nilai x adalah ...',
                'options' => [
                    'A' => '5',
                    'B' => '7',
                    'C' => '6',
                    'D' => '9',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika x + 5 = 12, nilai x adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '10',
                    'C' => '7',
                    'D' => '8',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika x + 5 = 13, nilai x adalah ...',
                'options' => [
                    'A' => '11',
                    'B' => '8',
                    'C' => '9',
                    'D' => '7',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika x + 5 = 14, nilai x adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '8',
                    'C' => '9',
                    'D' => '10',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika x + 5 = 15, nilai x adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '9',
                    'C' => '11',
                    'D' => '13',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika x + 5 = 16, nilai x adalah ...',
                'options' => [
                    'A' => '14',
                    'B' => '10',
                    'C' => '12',
                    'D' => '11',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Jika x + 5 = 17, nilai x adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '13',
                    'C' => '11',
                    'D' => '15',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika x + 5 = 18, nilai x adalah ...',
                'options' => [
                    'A' => '12',
                    'B' => '14',
                    'C' => '16',
                    'D' => '13',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Jika x + 5 = 19, nilai x adalah ...',
                'options' => [
                    'A' => '14',
                    'B' => '17',
                    'C' => '13',
                    'D' => '15',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika x + 5 = 20, nilai x adalah ...',
                'options' => [
                    'A' => '14',
                    'B' => '16',
                    'C' => '18',
                    'D' => '15',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Jika x + 5 = 21, nilai x adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '17',
                    'C' => '19',
                    'D' => '15',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika 2x = 6, nilai x adalah ...',
                'options' => [
                    'A' => '5',
                    'B' => '3',
                    'C' => '1',
                    'D' => '4',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 8, nilai x adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '4',
                    'C' => '2',
                    'D' => '5',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 10, nilai x adalah ...',
                'options' => [
                    'A' => '6',
                    'B' => '7',
                    'C' => '5',
                    'D' => '3',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika 2x = 12, nilai x adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '7',
                    'C' => '4',
                    'D' => '6',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Jika 2x = 14, nilai x adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '7',
                    'C' => '9',
                    'D' => '5',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 16, nilai x adalah ...',
                'options' => [
                    'A' => '8',
                    'B' => '10',
                    'C' => '9',
                    'D' => '6',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika 2x = 18, nilai x adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '11',
                    'C' => '7',
                    'D' => '9',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Jika 2x = 20, nilai x adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '12',
                    'C' => '11',
                    'D' => '8',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika 2x = 22, nilai x adalah ...',
                'options' => [
                    'A' => '11',
                    'B' => '12',
                    'C' => '13',
                    'D' => '9',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika 2x = 24, nilai x adalah ...',
                'options' => [
                    'A' => '10',
                    'B' => '13',
                    'C' => '12',
                    'D' => '14',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Jika 2x = 26, nilai x adalah ...',
                'options' => [
                    'A' => '15',
                    'B' => '13',
                    'C' => '11',
                    'D' => '14',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 28, nilai x adalah ...',
                'options' => [
                    'A' => '15',
                    'B' => '14',
                    'C' => '16',
                    'D' => '12',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 30, nilai x adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '15',
                    'C' => '17',
                    'D' => '13',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Jika 2x = 32, nilai x adalah ...',
                'options' => [
                    'A' => '16',
                    'B' => '18',
                    'C' => '14',
                    'D' => '17',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika 2x = 34, nilai x adalah ...',
                'options' => [
                    'A' => '17',
                    'B' => '15',
                    'C' => '19',
                    'D' => '18',
                ],
                'correct' => 'A',
            ],

        ];

        /*
        |--------------------------------------------------------------------------
        | 150 SOAL IPS
        |--------------------------------------------------------------------------
        */
        $ips = [
            [
                'question' => 'Benua terluas di dunia adalah ...',
                'options' => [
                    'A' => 'Asia',
                    'B' => 'Afrika',
                    'C' => 'Eropa',
                    'D' => 'Australia',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Samudra terluas di dunia adalah ...',
                'options' => [
                    'A' => 'Pasifik',
                    'B' => 'Atlantik',
                    'C' => 'Hindia',
                    'D' => 'Arktik',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Garis khatulistiwa membagi bumi menjadi ...',
                'options' => [
                    'A' => 'belahan utara dan selatan',
                    'B' => 'timur dan barat',
                    'C' => 'daratan dan lautan',
                    'D' => 'tropis dan kutub',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Peta yang menggambarkan kenampakan umum suatu wilayah disebut peta ...',
                'options' => [
                    'A' => 'umum',
                    'B' => 'tematik',
                    'C' => 'kadaster',
                    'D' => 'geologi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Skala peta menunjukkan ...',
                'options' => [
                    'A' => 'perbandingan jarak peta dengan jarak sebenarnya',
                    'B' => 'arah mata angin',
                    'C' => 'tinggi rendah wilayah',
                    'D' => 'jumlah penduduk',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Arah yang berlawanan dengan timur adalah ...',
                'options' => [
                    'A' => 'barat',
                    'B' => 'utara',
                    'C' => 'selatan',
                    'D' => 'tenggara',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Gunung, sungai, dan danau termasuk kenampakan ...',
                'options' => [
                    'A' => 'alam',
                    'B' => 'buatan',
                    'C' => 'sosial',
                    'D' => 'ekonomi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sawah, waduk, dan jalan termasuk kenampakan ...',
                'options' => [
                    'A' => 'buatan',
                    'B' => 'alam',
                    'C' => 'geologi',
                    'D' => 'iklim',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Indonesia berada di antara Benua Asia dan ...',
                'options' => [
                    'A' => 'Australia',
                    'B' => 'Afrika',
                    'C' => 'Eropa',
                    'D' => 'Amerika',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Indonesia berada di antara Samudra Hindia dan ...',
                'options' => [
                    'A' => 'Pasifik',
                    'B' => 'Atlantik',
                    'C' => 'Arktik',
                    'D' => 'Selatan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Sumatera Utara adalah ...',
                'options' => [
                    'A' => 'Medan',
                    'B' => 'Makassar',
                    'C' => 'Yogyakarta',
                    'D' => 'Jakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Sumatera Barat adalah ...',
                'options' => [
                    'A' => 'Makassar',
                    'B' => 'Padang',
                    'C' => 'Yogyakarta',
                    'D' => 'Jakarta',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Ibu kota Provinsi Riau adalah ...',
                'options' => [
                    'A' => 'Pekanbaru',
                    'B' => 'Jakarta',
                    'C' => 'Makassar',
                    'D' => 'Yogyakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Jambi adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Jakarta',
                    'C' => 'Makassar',
                    'D' => 'Jambi',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Ibu kota Provinsi Sumatera Selatan adalah ...',
                'options' => [
                    'A' => 'Makassar',
                    'B' => 'Yogyakarta',
                    'C' => 'Palembang',
                    'D' => 'Jakarta',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Ibu kota Provinsi Bengkulu adalah ...',
                'options' => [
                    'A' => 'Jakarta',
                    'B' => 'Yogyakarta',
                    'C' => 'Makassar',
                    'D' => 'Bengkulu',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Ibu kota Provinsi Lampung adalah ...',
                'options' => [
                    'A' => 'Jakarta',
                    'B' => 'Bandar Lampung',
                    'C' => 'Yogyakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Ibu kota Provinsi Banten adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Serang',
                    'C' => 'Jakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Ibu kota Provinsi Jawa Barat adalah ...',
                'options' => [
                    'A' => 'Bandung',
                    'B' => 'Yogyakarta',
                    'C' => 'Jakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Jawa Tengah adalah ...',
                'options' => [
                    'A' => 'Makassar',
                    'B' => 'Yogyakarta',
                    'C' => 'Semarang',
                    'D' => 'Jakarta',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Ibu kota Provinsi Jawa Timur adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Makassar',
                    'C' => 'Jakarta',
                    'D' => 'Surabaya',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Ibu kota Provinsi Bali adalah ...',
                'options' => [
                    'A' => 'Denpasar',
                    'B' => 'Makassar',
                    'C' => 'Yogyakarta',
                    'D' => 'Jakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Kalimantan Barat adalah ...',
                'options' => [
                    'A' => 'Jakarta',
                    'B' => 'Makassar',
                    'C' => 'Yogyakarta',
                    'D' => 'Pontianak',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Ibu kota Provinsi Kalimantan Selatan adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Makassar',
                    'C' => 'Jakarta',
                    'D' => 'Banjarbaru',
                ],
                'correct' => 'D',
            ],

            [
                'question' => 'Ibu kota Provinsi Kalimantan Timur adalah ...',
                'options' => [
                    'A' => 'Samarinda',
                    'B' => 'Jakarta',
                    'C' => 'Yogyakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Sulawesi Utara adalah ...',
                'options' => [
                    'A' => 'Manado',
                    'B' => 'Jakarta',
                    'C' => 'Yogyakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Sulawesi Selatan adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Jakarta',
                    'C' => 'Makassar',
                    'D' => 'Medan',
                ],
                'correct' => 'C',
            ],

            [
                'question' => 'Ibu kota Provinsi Gorontalo adalah ...',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Gorontalo',
                    'C' => 'Jakarta',
                    'D' => 'Makassar',
                ],
                'correct' => 'B',
            ],

            [
                'question' => 'Ibu kota Provinsi Maluku adalah ...',
                'options' => [
                    'A' => 'Ambon',
                    'B' => 'Jakarta',
                    'C' => 'Makassar',
                    'D' => 'Yogyakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ibu kota Provinsi Papua adalah ...',
                'options' => [
                    'A' => 'Jayapura',
                    'B' => 'Yogyakarta',
                    'C' => 'Makassar',
                    'D' => 'Jakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kegiatan penduduk di wilayah pantai yang umum dilakukan adalah ...',
                'options' => [
                    'A' => 'menangkap ikan',
                    'B' => 'menanam teh',
                    'C' => 'menambang belerang',
                    'D' => 'beternak rusa kutub',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Wilayah dataran tinggi cocok untuk perkebunan ...',
                'options' => [
                    'A' => 'teh',
                    'B' => 'bakau',
                    'C' => 'rumput laut',
                    'D' => 'garam',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hujan yang terjadi karena udara naik di daerah pegunungan disebut hujan ...',
                'options' => [
                    'A' => 'orografis',
                    'B' => 'meteor',
                    'C' => 'buatan',
                    'D' => 'salju',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Angin muson barat di Indonesia umumnya membawa musim ...',
                'options' => [
                    'A' => 'hujan',
                    'B' => 'kemarau',
                    'C' => 'salju',
                    'D' => 'gugur',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Perpindahan penduduk dari desa ke kota disebut ...',
                'options' => [
                    'A' => 'urbanisasi',
                    'B' => 'transmigrasi',
                    'C' => 'imigrasi',
                    'D' => 'emigrasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Perpindahan penduduk dari suatu negara ke negara lain untuk menetap disebut ...',
                'options' => [
                    'A' => 'migrasi internasional',
                    'B' => 'urbanisasi',
                    'C' => 'komuter',
                    'D' => 'ruralisasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sensus penduduk bertujuan mengetahui ...',
                'options' => [
                    'A' => 'jumlah dan karakteristik penduduk',
                    'B' => 'harga barang',
                    'C' => 'arah angin',
                    'D' => 'jenis batuan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kepadatan penduduk adalah perbandingan jumlah penduduk dengan ...',
                'options' => [
                    'A' => 'luas wilayah',
                    'B' => 'jumlah kendaraan',
                    'C' => 'jumlah sekolah',
                    'D' => 'panjang jalan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Lapisan bumi tempat makhluk hidup tinggal disebut ...',
                'options' => [
                    'A' => 'biosfer',
                    'B' => 'atmosfer',
                    'C' => 'litosfer',
                    'D' => 'hidrosfer',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Lapisan udara yang menyelimuti bumi disebut ...',
                'options' => [
                    'A' => 'atmosfer',
                    'B' => 'hidrosfer',
                    'C' => 'biosfer',
                    'D' => 'pedosfer',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Seluruh perairan di bumi termasuk dalam ...',
                'options' => [
                    'A' => 'hidrosfer',
                    'B' => 'litosfer',
                    'C' => 'atmosfer',
                    'D' => 'biosfer',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Gempa yang disebabkan pergeseran lempeng disebut gempa ...',
                'options' => [
                    'A' => 'tektonik',
                    'B' => 'vulkanik',
                    'C' => 'runtuhan',
                    'D' => 'buatan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Gunung api banyak terdapat di Indonesia karena berada pada pertemuan ...',
                'options' => [
                    'A' => 'lempeng tektonik',
                    'B' => 'dua sungai',
                    'C' => 'zona waktu',
                    'D' => 'garis bujur',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sumber daya alam yang dapat diperbarui contohnya ...',
                'options' => [
                    'A' => 'air',
                    'B' => 'minyak bumi',
                    'C' => 'batu bara',
                    'D' => 'gas alam',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sumber daya alam yang tidak dapat diperbarui contohnya ...',
                'options' => [
                    'A' => 'minyak bumi',
                    'B' => 'angin',
                    'C' => 'sinar matahari',
                    'D' => 'air',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hutan bakau banyak tumbuh di daerah ...',
                'options' => [
                    'A' => 'pantai berlumpur',
                    'B' => 'puncak gunung',
                    'C' => 'gurun',
                    'D' => 'padang salju',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Terumbu karang merupakan ekosistem yang terdapat di ...',
                'options' => [
                    'A' => 'laut',
                    'B' => 'gurun',
                    'C' => 'sawah',
                    'D' => 'pegunungan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Danau buatan yang digunakan menampung air disebut ...',
                'options' => [
                    'A' => 'waduk',
                    'B' => 'delta',
                    'C' => 'teluk',
                    'D' => 'selat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Selat adalah perairan sempit yang memisahkan ...',
                'options' => [
                    'A' => 'dua pulau',
                    'B' => 'dua gunung',
                    'C' => 'dua sungai',
                    'D' => 'dua desa',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Teluk adalah bagian laut yang ...',
                'options' => [
                    'A' => 'menjorok ke daratan',
                    'B' => 'memisahkan dua pulau',
                    'C' => 'mengalir dari hulu',
                    'D' => 'berada di puncak gunung',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kegiatan menghasilkan barang atau jasa disebut ...',
                'options' => [
                    'A' => 'produksi',
                    'B' => 'distribusi',
                    'C' => 'konsumsi',
                    'D' => 'investasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kegiatan menyalurkan barang dari produsen ke konsumen disebut ...',
                'options' => [
                    'A' => 'distribusi',
                    'B' => 'produksi',
                    'C' => 'konsumsi',
                    'D' => 'promosi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kegiatan menggunakan barang atau jasa disebut ...',
                'options' => [
                    'A' => 'konsumsi',
                    'B' => 'produksi',
                    'C' => 'distribusi',
                    'D' => 'ekspor',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Orang yang menghasilkan barang atau jasa disebut ...',
                'options' => [
                    'A' => 'produsen',
                    'B' => 'konsumen',
                    'C' => 'distributor',
                    'D' => 'pembeli',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Orang yang memakai barang atau jasa disebut ...',
                'options' => [
                    'A' => 'konsumen',
                    'B' => 'produsen',
                    'C' => 'distributor',
                    'D' => 'eksportir',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Alat pembayaran yang sah digunakan masyarakat adalah ...',
                'options' => [
                    'A' => 'uang',
                    'B' => 'kuitansi',
                    'C' => 'nota',
                    'D' => 'cek kosong',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tempat bertemunya penjual dan pembeli disebut ...',
                'options' => [
                    'A' => 'pasar',
                    'B' => 'pabrik',
                    'C' => 'sekolah',
                    'D' => 'terminal',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika harga naik dan faktor lain tetap, permintaan cenderung ...',
                'options' => [
                    'A' => 'turun',
                    'B' => 'naik',
                    'C' => 'tetap selalu',
                    'D' => 'hilang',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jika harga naik dan faktor lain tetap, penawaran cenderung ...',
                'options' => [
                    'A' => 'naik',
                    'B' => 'turun',
                    'C' => 'hilang',
                    'D' => 'nol',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Barang yang digunakan untuk memenuhi kebutuhan disebut ...',
                'options' => [
                    'A' => 'barang ekonomi',
                    'B' => 'simbol',
                    'C' => 'legenda',
                    'D' => 'kompas',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kebutuhan makan termasuk kebutuhan ...',
                'options' => [
                    'A' => 'primer',
                    'B' => 'sekunder',
                    'C' => 'tersier',
                    'D' => 'pelengkap',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kebutuhan kendaraan pribadi umumnya termasuk kebutuhan ...',
                'options' => [
                    'A' => 'sekunder',
                    'B' => 'primer',
                    'C' => 'mutlak',
                    'D' => 'biologis',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kebutuhan barang mewah termasuk kebutuhan ...',
                'options' => [
                    'A' => 'tersier',
                    'B' => 'primer',
                    'C' => 'sekunder',
                    'D' => 'pokok',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Bank berfungsi antara lain untuk ...',
                'options' => [
                    'A' => 'menghimpun dan menyalurkan dana',
                    'B' => 'membuat undang-undang',
                    'C' => 'mengadili perkara',
                    'D' => 'mengatur cuaca',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Koperasi berasaskan ...',
                'options' => [
                    'A' => 'kekeluargaan',
                    'B' => 'monopoli',
                    'C' => 'persaingan bebas mutlak',
                    'D' => 'individualisme',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tujuan utama koperasi adalah meningkatkan ...',
                'options' => [
                    'A' => 'kesejahteraan anggota',
                    'B' => 'harga barang',
                    'C' => 'jumlah pajak',
                    'D' => 'utang negara',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pajak merupakan salah satu sumber ...',
                'options' => [
                    'A' => 'penerimaan negara',
                    'B' => 'pengeluaran rumah tangga',
                    'C' => 'produksi pabrik',
                    'D' => 'curah hujan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ekspor adalah kegiatan ...',
                'options' => [
                    'A' => 'menjual barang ke luar negeri',
                    'B' => 'membeli barang dari luar negeri',
                    'C' => 'menjual barang di desa',
                    'D' => 'membuat barang sendiri',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Impor adalah kegiatan ...',
                'options' => [
                    'A' => 'membeli barang dari luar negeri',
                    'B' => 'menjual barang ke luar negeri',
                    'C' => 'menyimpan barang',
                    'D' => 'memproduksi jasa',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tenaga kerja yang memiliki keterampilan tertentu disebut tenaga kerja ...',
                'options' => [
                    'A' => 'terampil',
                    'B' => 'tidak terdidik',
                    'C' => 'pasif',
                    'D' => 'musiman',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Interaksi sosial terjadi apabila terdapat ...',
                'options' => [
                    'A' => 'kontak dan komunikasi',
                    'B' => 'satu orang saja tanpa hubungan',
                    'C' => 'cuaca dan iklim',
                    'D' => 'peta dan skala',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kerja sama merupakan bentuk interaksi sosial yang bersifat ...',
                'options' => [
                    'A' => 'asosiatif',
                    'B' => 'disosiatif',
                    'C' => 'individual',
                    'D' => 'tertutup',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Persaingan termasuk proses sosial ...',
                'options' => [
                    'A' => 'disosiatif',
                    'B' => 'asosiatif',
                    'C' => 'integratif',
                    'D' => 'statis',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Norma sosial berfungsi untuk ...',
                'options' => [
                    'A' => 'mengatur perilaku masyarakat',
                    'B' => 'mengubah iklim',
                    'C' => 'menentukan cuaca',
                    'D' => 'mengukur jarak',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Keluarga merupakan lembaga sosial yang pertama bagi ...',
                'options' => [
                    'A' => 'anak',
                    'B' => 'negara',
                    'C' => 'pasar',
                    'D' => 'perusahaan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sekolah termasuk lembaga ...',
                'options' => [
                    'A' => 'pendidikan',
                    'B' => 'ekonomi',
                    'C' => 'politik',
                    'D' => 'agama saja',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pasar termasuk lembaga ...',
                'options' => [
                    'A' => 'ekonomi',
                    'B' => 'pendidikan',
                    'C' => 'keluarga',
                    'D' => 'keamanan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Gotong royong mencerminkan nilai ...',
                'options' => [
                    'A' => 'kerja sama',
                    'B' => 'persaingan',
                    'C' => 'konflik',
                    'D' => 'individualisme',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Musyawarah bertujuan mencapai ...',
                'options' => [
                    'A' => 'mufakat',
                    'B' => 'perselisihan',
                    'C' => 'persaingan',
                    'D' => 'paksaan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Keberagaman budaya Indonesia harus disikapi dengan ...',
                'options' => [
                    'A' => 'toleransi',
                    'B' => 'permusuhan',
                    'C' => 'diskriminasi',
                    'D' => 'ejekan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Perubahan dari masyarakat tradisional menuju masyarakat lebih maju disebut ...',
                'options' => [
                    'A' => 'modernisasi',
                    'B' => 'isolasi',
                    'C' => 'kolonisasi',
                    'D' => 'segregasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Globalisasi ditandai semakin mudahnya ...',
                'options' => [
                    'A' => 'hubungan antarnegara',
                    'B' => 'isolasi wilayah',
                    'C' => 'penutupan informasi',
                    'D' => 'larangan komunikasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Media sosial merupakan salah satu sarana ...',
                'options' => [
                    'A' => 'komunikasi',
                    'B' => 'produksi pangan',
                    'C' => 'pertambangan',
                    'D' => 'irigasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Mobilitas sosial berarti perpindahan ...',
                'options' => [
                    'A' => 'status sosial',
                    'B' => 'musim',
                    'C' => 'lempeng bumi',
                    'D' => 'arus laut',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Status yang diperoleh sejak lahir disebut status ...',
                'options' => [
                    'A' => 'ascribed',
                    'B' => 'achieved',
                    'C' => 'assigned',
                    'D' => 'ekonomi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Status yang diperoleh melalui usaha disebut status ...',
                'options' => [
                    'A' => 'achieved',
                    'B' => 'ascribed',
                    'C' => 'turunan',
                    'D' => 'bawaan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Konflik sosial dapat dikurangi melalui ...',
                'options' => [
                    'A' => 'mediasi',
                    'B' => 'provokasi',
                    'C' => 'diskriminasi',
                    'D' => 'kekerasan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Proses penyesuaian untuk meredakan pertentangan disebut ...',
                'options' => [
                    'A' => 'akomodasi',
                    'B' => 'kompetisi',
                    'C' => 'kontravensi',
                    'D' => 'isolasi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Masuknya unsur budaya baru tanpa menghilangkan budaya lama disebut ...',
                'options' => [
                    'A' => 'akulturasi',
                    'B' => 'asimilasi total',
                    'C' => 'segregasi',
                    'D' => 'konflik',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Peleburan dua kebudayaan hingga membentuk budaya baru disebut ...',
                'options' => [
                    'A' => 'asimilasi',
                    'B' => 'akulturasi',
                    'C' => 'isolasi',
                    'D' => 'kompetisi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Penduduk usia kerja yang bekerja atau mencari pekerjaan disebut ...',
                'options' => [
                    'A' => 'angkatan kerja',
                    'B' => 'balita',
                    'C' => 'pelajar saja',
                    'D' => 'pensiunan saja',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pengangguran terjadi ketika seseorang ...',
                'options' => [
                    'A' => 'tidak bekerja dan sedang mencari pekerjaan',
                    'B' => 'sedang berlibur',
                    'C' => 'sedang tidur',
                    'D' => 'masih bayi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Inflasi adalah kecenderungan ...',
                'options' => [
                    'A' => 'kenaikan harga secara umum',
                    'B' => 'penurunan penduduk',
                    'C' => 'kenaikan curah hujan',
                    'D' => 'penurunan produksi selalu',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Menabung berarti menyisihkan pendapatan untuk ...',
                'options' => [
                    'A' => 'masa depan',
                    'B' => 'dihabiskan segera',
                    'C' => 'membuang uang',
                    'D' => 'menghindari kebutuhan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Anggaran rumah tangga membantu mengatur ...',
                'options' => [
                    'A' => 'pendapatan dan pengeluaran',
                    'B' => 'arah angin',
                    'C' => 'curah hujan',
                    'D' => 'batas wilayah',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Prinsip ekonomi adalah memperoleh hasil tertentu dengan ...',
                'options' => [
                    'A' => 'pengorbanan sekecil mungkin',
                    'B' => 'biaya sebesar mungkin',
                    'C' => 'waktu tanpa batas',
                    'D' => 'sumber daya tanpa perhitungan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Motif ekonomi adalah alasan seseorang melakukan ...',
                'options' => [
                    'A' => 'kegiatan ekonomi',
                    'B' => 'perubahan cuaca',
                    'C' => 'pergeseran lempeng',
                    'D' => 'perjalanan wisata saja',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pasar tradisional umumnya ditandai adanya ...',
                'options' => [
                    'A' => 'tawar-menawar',
                    'B' => 'harga selalu tetap dari pusat',
                    'C' => 'tidak ada penjual',
                    'D' => 'tidak ada pembeli',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'UMKM adalah singkatan dari ...',
                'options' => [
                    'A' => 'Usaha Mikro, Kecil, dan Menengah',
                    'B' => 'Usaha Modal Koperasi Masyarakat',
                    'C' => 'Unit Masyarakat Kota Mandiri',
                    'D' => 'Usaha Modern Kawasan Metropolitan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Badan usaha milik negara disingkat ...',
                'options' => [
                    'A' => 'BUMN',
                    'B' => 'BUMD',
                    'C' => 'UMKM',
                    'D' => 'KUD',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Proklamasi Kemerdekaan Indonesia dibacakan pada ...',
                'options' => [
                    'A' => '17 Agustus 1945',
                    'B' => '20 Mei 1908',
                    'C' => '28 Oktober 1928',
                    'D' => '10 November 1945',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tokoh yang membacakan teks Proklamasi adalah ...',
                'options' => [
                    'A' => 'Soekarno',
                    'B' => 'Mohammad Hatta',
                    'C' => 'Bung Tomo',
                    'D' => 'Ki Hajar Dewantara',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sumpah Pemuda diikrarkan pada ...',
                'options' => [
                    'A' => '28 Oktober 1928',
                    'B' => '17 Agustus 1945',
                    'C' => '20 Mei 1908',
                    'D' => '1 Juni 1945',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Organisasi Budi Utomo berdiri pada tahun ...',
                'options' => [
                    'A' => '1908',
                    'B' => '1928',
                    'C' => '1945',
                    'D' => '1967',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hari Kebangkitan Nasional diperingati setiap ...',
                'options' => [
                    'A' => '20 Mei',
                    'B' => '17 Agustus',
                    'C' => '28 Oktober',
                    'D' => '10 November',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pertempuran 10 November 1945 terjadi di ...',
                'options' => [
                    'A' => 'Surabaya',
                    'B' => 'Bandung',
                    'C' => 'Jakarta',
                    'D' => 'Medan',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tokoh yang terkenal dalam Pertempuran Surabaya adalah ...',
                'options' => [
                    'A' => 'Bung Tomo',
                    'B' => 'Pattimura',
                    'C' => 'Sultan Agung',
                    'D' => 'Gajah Mada',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Peristiwa Bandung Lautan Api terjadi di kota ...',
                'options' => [
                    'A' => 'Bandung',
                    'B' => 'Surabaya',
                    'C' => 'Semarang',
                    'D' => 'Yogyakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tokoh yang mengetik naskah Proklamasi adalah ...',
                'options' => [
                    'A' => 'Sayuti Melik',
                    'B' => 'Sukarni',
                    'C' => 'Ahmad Soebardjo',
                    'D' => 'B.M. Diah',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Bendera Merah Putih yang dikibarkan saat Proklamasi dijahit oleh ...',
                'options' => [
                    'A' => 'Fatmawati',
                    'B' => 'R.A. Kartini',
                    'C' => 'Dewi Sartika',
                    'D' => 'Cut Nyak Dien',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'BPUPKI dibentuk pada masa pendudukan ...',
                'options' => [
                    'A' => 'Jepang',
                    'B' => 'Belanda',
                    'C' => 'Inggris',
                    'D' => 'Portugis',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'PPKI merupakan singkatan dari ...',
                'options' => [
                    'A' => 'Panitia Persiapan Kemerdekaan Indonesia',
                    'B' => 'Panitia Perjuangan Kemerdekaan Indonesia',
                    'C' => 'Persatuan Pemuda Kemerdekaan Indonesia',
                    'D' => 'Panitia Pembela Kemerdekaan Indonesia',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Hari lahir Pancasila diperingati setiap ...',
                'options' => [
                    'A' => '1 Juni',
                    'B' => '17 Agustus',
                    'C' => '20 Mei',
                    'D' => '28 Oktober',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Konferensi Asia Afrika tahun 1955 diselenggarakan di ...',
                'options' => [
                    'A' => 'Bandung',
                    'B' => 'Jakarta',
                    'C' => 'Surabaya',
                    'D' => 'Yogyakarta',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'ASEAN didirikan pada tahun ...',
                'options' => [
                    'A' => '1967',
                    'B' => '1945',
                    'C' => '1955',
                    'D' => '1975',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Deklarasi Bangkok menjadi dasar pembentukan ...',
                'options' => [
                    'A' => 'ASEAN',
                    'B' => 'PBB',
                    'C' => 'OPEC',
                    'D' => 'APEC',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kerajaan Hindu tertua yang dikenal di Indonesia adalah ...',
                'options' => [
                    'A' => 'Kutai',
                    'B' => 'Majapahit',
                    'C' => 'Sriwijaya',
                    'D' => 'Demak',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kerajaan Sriwijaya bercorak agama ...',
                'options' => [
                    'A' => 'Buddha',
                    'B' => 'Hindu',
                    'C' => 'Islam',
                    'D' => 'Kristen',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Majapahit mencapai puncak kejayaan pada masa ...',
                'options' => [
                    'A' => 'Hayam Wuruk',
                    'B' => 'Airlangga',
                    'C' => 'Mulawarman',
                    'D' => 'Sultan Agung',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Patih Majapahit yang terkenal dengan Sumpah Palapa adalah ...',
                'options' => [
                    'A' => 'Gajah Mada',
                    'B' => 'Ken Arok',
                    'C' => 'Raden Wijaya',
                    'D' => 'Purnawarman',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Candi Borobudur merupakan peninggalan bercorak ...',
                'options' => [
                    'A' => 'Buddha',
                    'B' => 'Hindu',
                    'C' => 'Islam',
                    'D' => 'Kristen',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Candi Prambanan merupakan peninggalan bercorak ...',
                'options' => [
                    'A' => 'Hindu',
                    'B' => 'Buddha',
                    'C' => 'Islam',
                    'D' => 'Kristen',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Kerajaan Islam awal yang berkembang di Aceh adalah ...',
                'options' => [
                    'A' => 'Samudra Pasai',
                    'B' => 'Demak',
                    'C' => 'Banten',
                    'D' => 'Mataram Islam',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sultan Agung merupakan raja dari kerajaan ...',
                'options' => [
                    'A' => 'Mataram Islam',
                    'B' => 'Demak',
                    'C' => 'Banten',
                    'D' => 'Aceh',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pattimura memimpin perlawanan terhadap Belanda di ...',
                'options' => [
                    'A' => 'Maluku',
                    'B' => 'Jawa',
                    'C' => 'Bali',
                    'D' => 'Sumatra Barat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tuanku Imam Bonjol memimpin Perang ...',
                'options' => [
                    'A' => 'Padri',
                    'B' => 'Diponegoro',
                    'C' => 'Aceh',
                    'D' => 'Banjar',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pangeran Diponegoro memimpin perang di wilayah ...',
                'options' => [
                    'A' => 'Jawa',
                    'B' => 'Maluku',
                    'C' => 'Bali',
                    'D' => 'Sulawesi',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Perang Diponegoro berlangsung pada ...',
                'options' => [
                    'A' => '1825–1830',
                    'B' => '1800–1805',
                    'C' => '1900–1905',
                    'D' => '1945–1949',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Cut Nyak Dien merupakan tokoh perjuangan dari ...',
                'options' => [
                    'A' => 'Aceh',
                    'B' => 'Maluku',
                    'C' => 'Bali',
                    'D' => 'Jawa Barat',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sultan Hasanuddin merupakan tokoh dari kerajaan ...',
                'options' => [
                    'A' => 'Gowa-Tallo',
                    'B' => 'Demak',
                    'C' => 'Mataram',
                    'D' => 'Sriwijaya',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'VOC didirikan oleh bangsa ...',
                'options' => [
                    'A' => 'Belanda',
                    'B' => 'Inggris',
                    'C' => 'Portugis',
                    'D' => 'Spanyol',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'VOC didirikan pada tahun ...',
                'options' => [
                    'A' => '1602',
                    'B' => '1596',
                    'C' => '1700',
                    'D' => '1799',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Sistem Tanam Paksa diperkenalkan oleh ...',
                'options' => [
                    'A' => 'Van den Bosch',
                    'B' => 'Daendels',
                    'C' => 'Raffles',
                    'D' => 'Van Mook',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Tanam Paksa mulai diterapkan pada tahun ...',
                'options' => [
                    'A' => '1830',
                    'B' => '1808',
                    'C' => '1901',
                    'D' => '1942',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pendiri Taman Siswa adalah ...',
                'options' => [
                    'A' => 'Ki Hajar Dewantara',
                    'B' => 'Dr. Sutomo',
                    'C' => 'Douwes Dekker',
                    'D' => 'Wahidin Sudirohusodo',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Ki Hajar Dewantara dikenal sebagai tokoh ...',
                'options' => [
                    'A' => 'pendidikan',
                    'B' => 'militer',
                    'C' => 'perdagangan',
                    'D' => 'pelayaran',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Jepang mulai menduduki Indonesia pada tahun ...',
                'options' => [
                    'A' => '1942',
                    'B' => '1940',
                    'C' => '1945',
                    'D' => '1939',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pendudukan Jepang di Indonesia berakhir setelah ...',
                'options' => [
                    'A' => 'Jepang menyerah kepada Sekutu',
                    'B' => 'VOC dibubarkan',
                    'C' => 'Belanda merdeka',
                    'D' => 'Konferensi Asia Afrika',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Agresi Militer Belanda II terjadi pada tahun ...',
                'options' => [
                    'A' => '1948',
                    'B' => '1947',
                    'C' => '1945',
                    'D' => '1950',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pengakuan kedaulatan Indonesia oleh Belanda terkait dengan ...',
                'options' => [
                    'A' => 'Konferensi Meja Bundar',
                    'B' => 'Perjanjian Renville',
                    'C' => 'Perjanjian Linggarjati',
                    'D' => 'Perjanjian Roem-Royen',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Konferensi Meja Bundar dilaksanakan di ...',
                'options' => [
                    'A' => 'Den Haag',
                    'B' => 'Jakarta',
                    'C' => 'Bandung',
                    'D' => 'New York',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pancasila merupakan ... negara Indonesia.',
                'options' => [
                    'A' => 'dasar',
                    'B' => 'lagu',
                    'C' => 'bahasa',
                    'D' => 'mata uang',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Semboyan Bhinneka Tunggal Ika bermakna ...',
                'options' => [
                    'A' => 'berbeda-beda tetapi tetap satu',
                    'B' => 'bersatu karena sama',
                    'C' => 'hidup sendiri-sendiri',
                    'D' => 'semua budaya harus sama',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'UUD 1945 merupakan ... negara Indonesia.',
                'options' => [
                    'A' => 'konstitusi',
                    'B' => 'lagu kebangsaan',
                    'C' => 'mata uang',
                    'D' => 'lambang daerah',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Lambang negara Indonesia adalah ...',
                'options' => [
                    'A' => 'Garuda Pancasila',
                    'B' => 'Burung Cenderawasih',
                    'C' => 'Harimau Sumatra',
                    'D' => 'Komodo',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Lagu kebangsaan Indonesia adalah ...',
                'options' => [
                    'A' => 'Indonesia Raya',
                    'B' => 'Bagimu Negeri',
                    'C' => 'Hari Merdeka',
                    'D' => 'Garuda Pancasila',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Bahasa persatuan Indonesia adalah ...',
                'options' => [
                    'A' => 'Bahasa Indonesia',
                    'B' => 'Bahasa Jawa',
                    'C' => 'Bahasa Sunda',
                    'D' => 'Bahasa Melayu saja',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Warna bendera Indonesia adalah ...',
                'options' => [
                    'A' => 'merah dan putih',
                    'B' => 'merah dan biru',
                    'C' => 'putih dan hijau',
                    'D' => 'kuning dan merah',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Pemilihan umum merupakan sarana pelaksanaan ...',
                'options' => [
                    'A' => 'demokrasi',
                    'B' => 'monarki',
                    'C' => 'kolonialisme',
                    'D' => 'feodalisme',
                ],
                'correct' => 'A',
            ],

            [
                'question' => 'Lembaga yang membuat undang-undang bersama presiden adalah ...',
                'options' => [
                    'A' => 'DPR',
                    'B' => 'BPS',
                    'C' => 'BMKG',
                    'D' => 'KPU saja',
                ],
                'correct' => 'A',
            ],

        ];

        /*
        |--------------------------------------------------------------------------
        | Simpan ke database
        |--------------------------------------------------------------------------
        */
        $data = [
            'Bahasa Indonesia' => $bahasaIndonesia,
            'Matematika' => $matematika,
            'IPS' => $ips,
        ];

        foreach ($data as $subjectName => $questions) {
            if (!isset($subjects[$subjectName])) {
                throw new \RuntimeException(
                    "Mata pelajaran '{$subjectName}' tidak ditemukan di tabel subjects."
                );
            }

            $subject = $subjects[$subjectName];

            foreach ($questions as $item) {
 $question = Question::create([
    'subject_id' => $subject->id,
    'playload' => $item['question'],
    'correct_answer' => $item['correct'],
    'score' => 1,
    'description' => null,
    'is_active' => 1,
]);

foreach ($item['options'] as $letter => $text) {
    Answer::create([
        'question_id' => $question->id,
        'letter' => $letter,
        'text' => $text,
        'is_correct' => $letter === $item['correct'],
        'is_active' => 1,
    ]);

                }
            }
        }
    }
}
