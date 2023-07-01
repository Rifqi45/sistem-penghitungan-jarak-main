<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sekolah;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::insert([
           [
             "name" => "SMA Negeri 1",
             "latitude" => "-6.9387784",
             "longitude" => "106.928701",
             "npsn" => "20221559",
             "alamat" => "Jl. Rh. Didi Sukardi No.124, Citamiang, Kec. Citamiang, Kota Sukabumi, Jawa Barat 43143",
             "foto" => "images/myJsO73RdJA06A3WTsJIlDTMumUYTmfxdCoDtKS6.jpg",
             "description" => "SMA Negeri 1",
         ],
         [
             "name" => "SMA Negeri 2",
             "latitude" => "-6.9056852",
             "longitude" => "106.9147573",
             "npsn" => "20221560",
             "alamat" => "Jl. Karamat No.93, Karamat, Kec. Gunungpuyuh, Kota Sukabumi, Jawa Barat 43122",
             "foto" => "images/47ZCIcfyci6hXzOcjzTrv6lpvRyJY0jFFEkXWzJb.jpg",
             "description" => "SMA Negeri 2",
         ],
         [
             "name" => "SMA Negeri 3",
             "latitude" => "-6.9220308",
             "longitude" => "106.942062",
             "npsn" => "20221561",
             "alamat" => "Jl. Ciaul Baru No.21, RT.1/RW.7, Subangjaya, Kec. Cikole, Kota Sukabumi, Jawa Barat 43116",
             "foto" => "images/3S6WzZzTrXQ7ME8lwwzeBssASdCG35clir812p6r.jpg",
             "description" => "SMA Negeri 3",
         ],
         [
             "name" => "SMA Negeri 4",
             "latitude" => "-6.9194617",
             "longitude" => "106.9292316",
             "npsn" => "20221562",
             "alamat" => "Jl. Ir. H. Juanda No.8, Cikole, Kec. Cikole, Kota Sukabumi, Jawa Barat 43113",
             "foto" => "images/fek2WY9qqkCy5t3otQh3NUpPRvTaL4QLsykf14H7.jpg",
             "description" => "SMA Negeri 4",
         ],
         [
             "name" => "SMA Negeri 5",
             "latitude" => "-6.9456097",
             "longitude" => "106.9492325",
             "npsn" => "20221563",
             "alamat" => "Jl. Sarasa No.1, Babakan, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43165",
             "foto" => "images/zt5O7QjHyoR7fp6fiUDxFblx3vH2pqApilfGhrJI.jpg",
             "description" => "SMA Negeri 5",
         ],
         [
             "name" => "SMA Mardi Yuana",
             "latitude" => "-6.920794",
             "longitude" => "106.9299699",
             "npsn" => "20221590",
             "alamat" => "JL. R.E Martadinata No. 54 Sukabumi, Kebonjati, Kec. Cikole, Kota Sukabumi",
             "foto" => "images/BQlIhIWAAoQR3WmZbrnKB1ltxn7PCfur7WiCijmL.jpg",
             "description" => "SMA Mardi Yuana",
         ],
         [
             "name" => "SMA Muhammadiyah",
             "latitude" => "-6.9183022",
             "longitude" => "106.9330715",
             "npsn" => "20221591",
             "alamat" => "JL. R. Syamsudin SH. NO. 59 Sukabumi, Cikole, Kec. Cikole Kota Sukabumi",
             "foto" => "images/AAEOwlh3IESPa3QOH1uJJGMkIdZHRxDg0lMNlTlE.jpg",
             "description" => "SMA Muhammadiyah",
         ],
         [
             "name" => "SMA Pesantren Terpadu Hayyatan Thayyibah",
             "latitude" => "-6.9041541",
             "longitude" => "106.915484",
             "npsn" => "20221587",
             "alamat" => "JL. Kramat NO. 123 SukabumiI, Gunung Puyuh, Kec. Gunung Puyuh Kota Sukabumi",
             "foto" => "images/tjcmIuaNMKgU7XFCR0eXNgWyENDkvQlNnjQcljDb.jpg",
             "description" => "SMA Pesantren Terpadu Hayyatan Thayyibah",
         ],
         [
             "name" => "SMA IT Al Izzah",
             "latitude" => "-6.949068",
             "longitude" => "106.9424623",
             "npsn" => "69916542",
             "alamat" => "Kp. Cibungur , Limusnunggal, Kec. Cibeureum, Kota Sukabumi",
             "foto" => "images/sbXHK6CxA7KWjmhNw5zfZ0B1DUJXuCvruN6jrXJ8.jpg",
             "description" => "SMA IT Al Izzah",
         ],
         [
             "name" => "SMA Al Azhar",
             "latitude" => "-6.9490667",
             "longitude" => "106.90954",
             "npsn" => "69983844",
             "alamat" => "Jl. Subang Jaya, RT.03/RW.04, Subangjaya, Kec. Cikole",
             "foto" => "images/ZfHYwEIqFvERmq1SRKKysbZuTVd10M52IOCNB1PJ.jpg",
             "description" => "SMA Al Azhar",
         ],
         [
             "name" => "SMA YAD",
             "latitude" => "-6.9197232",
             "longitude" => "106.9220382",
             "npsn" => "20277180",
             "alamat" => "JL. Veteran I NO. 36 Sukabumi, Gunung Parang, Kec. Cikole Kota Sukabumi",
             "foto" => "images/33lKOwsMINh4KPWDIZnAFwaA8HwBeZ1CUzYp4Pzx.jpg",
             "description" => "SMA YAD",
         ],
         [
             "name" => "SMA Nurul Karomah",
             "latitude" => "-6.9074978",
             "longitude" => "106.9150997",
             "npsn" => "20221588",
             "alamat" => "JL. Karamat NO. 79 Sukabumi, Karamat, Kec. Gunung Puyuh, Kota Sukabumi",
             "foto" => "images/J3xTyge4QFdKtTqMGYOxy8ntnPWMwymsjcZhm1m8.jpg",
             "description" => "SMA Nurul Karomah",
         ],
         [
             "name" => "SMA Adven",
             "latitude" => "-6.9188006",
             "longitude" => "106.925108",
             "npsn" => "20221586",
             "alamat" => "JL. Veteran II No. 8  Selabatu, Kec. Cikole Kota Sukabumi",
             "foto" => "images/4sCVJaUZhvPhQqjsKA3I14BAKrSjjCbSjmx0gQDH.jpg",
             "description" => "SMA Adven",
         ],
         [
             "name" => "SMA Taman Siswa",
             "latitude" => "-6.9186947",
             "longitude" => "106.932145",
             "npsn" => "20221575",
             "alamat" => "Jl. Syamsudin. SH, Cikole, Kec. Cikole",
             "foto" => "images/QdlCDaKWcTic2A9XrNHtmwE31kV3yLi7GAOIjXnj.jpg",
             "description" => "SMA Taman Siswa",
         ],
         [
             "name" => "SMA PGRI 1",
             "latitude" => "-6.9368729",
             "longitude" => "106.9307844",
             "npsn" => "20221577",
             "alamat" => "JL. R.H. Didi Sukardi NO.12 Sukabumi, Citamiang, Kec. Citamiang\r\nKota Sukabumi",
             "foto" => "images/r2Rqu5jH8lQdmcDFvW4nEUxnnrTaJcgDJbXBfsCy.jpg",
             "description" => "SMA PGRI 1",
         ],
         [
             "name" => "SMA Pelita Madania",
             "latitude" => "-6.9456859",
             "longitude" => "106.9334213",
             "npsn" => "20221593",
             "alamat" => "Jagaraksa Permai, Jl. Rh. Didi Sukardi, Jayaraksa, Baros",
             "foto" => "images/8wgwfPpfANALjJXB9jgh74Hi3cIrymw1Jog1lAZy.jpg",
             "description" => "SMA Pelita Madania",
         ],
         [
             "name" => "SMA Kristen BPK Penabur",
             "latitude" => "-6.9207737",
             "longitude" => "106.9285812",
             "npsn" => "20221589",
             "alamat" => "JL. Bhayangkara NO. 240 Sukabumi, Selabatu, Kec. Cikole\r\nKota Sukabumi",
             "foto" => "images/43ytJkUlMibOIZzUdzpdlnWSpztB9xJhN0Y62T81.jpg",
             "description" => "SMA Kristen BPK Penabur",
         ],
         [
             "name" => "SMA IT Alfath",
             "latitude" => "-6.9237034",
             "longitude" => "106.9319149",
             "npsn" => "69972549",
             "alamat" => "Jl. Otto Iskandardinata No.23, Kebonjati, Kec. Cikole,",
             "foto" => "images/Kw5Y3rfKCzfOlxWn6TyeC5AuVZxtXoRdTjXJTSoj.jpg",
             "description" => "SMA IT Alfath",
         ],
     ]);
}
}
