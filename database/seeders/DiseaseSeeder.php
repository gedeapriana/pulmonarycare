<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deseases = [
            [
                'name' => 'Penyakit Paru Obstruktif Kronik (PPOK)',
                'description' => 'Penyakit paru obstruktif kronik (PPOK) adalah peradangan paru-paru yang tak kunjung sembuh. Kondisi ini membuat pernapasan menjadi lebih sulit karena peradangan menyebabkan produksi lendir meningkat. Selain itu, alveoli kesulitan membawa oksigen masuk dan mengeluarkan karbon dioksida akibat penebalan lapisan paru-paru.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asma',
                'description' => 'Asma merupakan penyakit paru-paru yang paling sering ditemukan di Indonesia. Berdasarkan data Kemenkes per 2020, 12 juta lebih penduduk Indonesia mengalami asma. Penyakit ini bisa menyerang siapa saja, mulai dari anak-anak hingga orang tua. Penyebabnya bisa karena alergi, stres, emosi yang tidak terkontrol, ataupun kondisi udara sekitar yang tidak baik. Oleh karenanya, saluran pernapasan mengalami pembengkakan dan penyempitan karena iritasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bronkitis',
                'description' => 'Bronkitis umumnya terjadi karena virus, tetapi tidak menutup kemungkinan polutan jadi salah satu penyebab bronkus mengalami infeksi. Infeksi biasanya dimulai di hidung atau tenggorokan dan menyebar ke saluran bronkial. Ketika tubuh mencoba melawan infeksi, hal itu menyebabkan saluran bronkial membengkak dan pengidapnya mengalami batuk kering ataupun berdahak. Seiring waktu, kondisi saluran udara kembali membaik jika sistem imun sudah normal. Sebaliknya, sistem imun yang semakin turun menyebabkan bronkitis kronis. Bronkitis kronis sangat sulit untuk disembuhkan. Namun dengan perawatan yang tepat, gejalanya lambat laun kembali mereda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pneumonia',
                'description' => 'Pneumonia adalah infeksi paru-paru yang disebabkan oleh bakteri, virus, atau jamur. Mikroorganisme tumbuh dan berkembang di paru-paru membuat kantung udara (alveoli) menjadi meradang dan dipenuhi cairan sehingga yang mengganggu aliran oksigen. Sebagian orang pulih dalam beberapa minggu dengan antibiotik dan antivirus, namun terkadang kondisinya tetap ada atau malah mengancam nyawa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tuberkulosis (TB)',
                'description' => 'Tuberkulosis (TB) adalah infeksi bakteri di udara yang disebabkan oleh Mycobacterium tuberculosis. Penyakit ini bisa menular ketika orang sehat menghirup udara yang mengandung bakteri dari batuk atau bersin orang terinfeksi TB. Dari paru-paru, bakteri tersebut nantinya bergerak melalui darah atau sistem limfatik ke berbagai bagian tubuh. Meski menular, gejalanya mungkin tidak akan terlihat sampai berbulan-bulan atau bertahun-tahun kemudian sampai sistem imun tubuh mulai melemah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kanker Paru-Paru',
                'description' => 'Kanker paru-paru adalah penyakit ketika sel abnormal di paru-paru tumbuh secara tidak terduga dan berkembang menjadi tumor ganas. Kanker paru-paru jadi penyebab utama kematian akibat kanker di Amerika Serikat menurut Disease Control and Prevention (CDC). Gejala biasanya tidak muncul sampai sel kanker menyebar ke bagian tubuh lain dan mencegah organ lain berfungsi dengan baik. Pada titik ini, lebih sulit untuk mengobati kanker paru-paru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emfisema',
                'description' => 'Emfisema adalah salah satu penyakit yang termasuk PPOK (penyakit paru obstruktif kronik). Penyakit ini menyebabkan kerusakan di alveoli. Lambat laun, kerusakan tersebut menyebabkan kantung udara pecah dan menciptakan satu kantung udara besar sehingga mencegah oksigen bergerak melalui aliran darah. Selain itu, penyumbatan yang dihasilkannya membuat paru-paru dipenuhi cairan. Tanda emfisema membutuhkan waktu bertahun-tahun untuk berkembang. Pada tahap awal gejalanya meliputi sesak napas, batuk dengan lendir, mengi, dan sesak dada.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emboli Paru',
                'description' => 'Emboli paru terjadi ketika arteri paru tersumbat oleh bekuan darah yang terjadi bagian tubuh lain, terutama kaki. Pada titik tertentu, gumpalan vena dalam ini terlepas dan berjalan melalui sistem peredaran darah hingga menyumbat jaringan paru-paru. Penyumbatan menyebabkan penurunan jumlah oksigen dalam darah. Semakin lama gumpalan menghalangi oksigen, kian banyak kerusakan yang dapat ditimbulkannya pada organ lain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($deseases as $desease) {
            DB::table('diseases')->insert($desease);
        }
    }
}
