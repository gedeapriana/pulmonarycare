<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $solutions = [
          ['description' => 'Menghindari asap rokok dan lingkungan yang berpolusi.', 'disease_id' => 1],
          ['description' => 'Menggunakan obat-obatan bronkodilator untuk membantu membuka saluran pernapasan.', 'disease_id' => 1],
          ['description' => 'Melakukan olahraga pernapasan dan terapi fisik yang direkomendasikan.', 'disease_id' => 1],
          ['description' => 'Menerapkan gaya hidup sehat, termasuk menjaga berat badan ideal dan mengonsumsi makanan bergizi.', 'disease_id' => 1],
          ['description' => 'Menghindari pemicu asma seperti alergen atau iritan tertentu.', 'disease_id' => 2],
          ['description' => 'Menggunakan obat-obatan inhaler yang diresepkan oleh dokter untuk meredakan gejala asma.', 'disease_id' => 2],
          ['description' => 'Memahami dan mengikuti rencana pengelolaan asma yang telah ditetapkan oleh dokter.', 'disease_id' => 2],
          ['description' => 'Melakukan olahraga yang sesuai dan tetap menjaga kebugaran fisik.', 'disease_id' => 2],
          ['description' => 'Mengonsumsi obat-obatan bronkodilator dan ekspektoran yang diresepkan oleh dokter untuk meredakan gejala bronkitis.', 'disease_id' => 3],
          ['description' => 'Minum banyak cairan untuk membantu melunakkan dahak dan mengencerkannya.', 'disease_id' => 3],
          ['description' => 'Menghindari paparan asap rokok dan polusi udara.', 'disease_id' => 3],
          ['description' => 'Istirahat yang cukup dan menjaga kebersihan pernapasan.', 'disease_id' => 3],
          ['description' => 'Mengonsumsi antibiotik yang diresepkan oleh dokter untuk melawan infeksi bakteri.', 'disease_id' => 4],
          ['description' => 'Beristirahat yang cukup untuk membantu pemulihan tubuh.', 'disease_id' => 4],
          ['description' => 'Minum banyak cairan untuk menjaga kecukupan hidrasi.', 'disease_id' => 4],
          ['description' => 'Menerapkan kebersihan tangan yang baik dan menghindari kontak dengan orang yang sakit.', 'disease_id' => 4],
          ['description' => 'Mengikuti program pengobatan TB yang direkomendasikan oleh dokter, termasuk penggunaan antibiotik.', 'disease_id' => 5],
          ['description' => 'Menjaga kebersihan pernapasan dengan menutup mulut dan hidung saat batuk atau bersin.', 'disease_id' => 5],
          ['description' => 'Menghindari berbagi barang-barang pribadi seperti sendok atau gelas dengan orang lain.', 'disease_id' => 5],
          ['description' => 'Menjaga daya tahan tubuh dengan makan makanan sehat dan bergizi.', 'disease_id' => 5],
          ['description' => 'Terapi yang direkomendasikan oleh dokter, seperti kemoterapi, radioterapi, atau pembedahan, tergantung pada jenis dan stadium kanker paru-paru.', 'disease_id' => 6],
          ['description' => 'Menjaga pola makan sehat dan aktifitas fisik yang cukup.', 'disease_id' => 6],
          ['description' => 'Menghindari paparan asap rokok dan polusi udara.', 'disease_id' => 6],
          ['description' => 'Mendapatkan dukungan emosional dan psikologis selama proses pengobatan.', 'disease_id' => 6],
          ['description' => 'Menghentikan kebiasaan merokok dan menghindari paparan asap rokok.', 'disease_id' => 7],
          ['description' => 'Menggunakan obat-obatan bronkodilator dan kortikosteroid untuk membantu meredakan gejala emfisema.', 'disease_id' => 7],
          ['description' => 'Melakukan latihan pernapasan dan terapi fisik untuk membantu memperbaiki kapasitas paru-paru.', 'disease_id' => 7],
          ['description' => 'Menghindari lingkungan yang berpolusi dan mendapatkan vaksinasi yang direkomendasikan.', 'disease_id' => 7],
          ['description' => 'Pengobatan dengan antikoagulan untuk mencegah pembekuan darah.', 'disease_id' => 8],
          ['description' => 'Pemberian obat-obatan pengencer darah untuk mencegah terbentuknya bekuan baru.', 'disease_id' => 8],
          ['description' => 'Melakukan tindakan medis seperti trombolisis atau pemasangan filter vena cava inferior, tergantung pada kondisi pasien.', 'disease_id' => 8],
          ['description' => 'Istirahat yang cukup dan menghindari aktivitas fisik yang berlebihan.', 'disease_id' => 8],
        ];

        foreach ($solutions as $solution) {
            \App\Models\Solution::create($solution);
        }
    }
}
