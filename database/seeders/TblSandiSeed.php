<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblSandiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            0=>array('namaref'=>'Jenis Kredit BPR'),
            1=>array('namaref'=>'Jenis Debitur BPR'),
            2=>array('namaref'=>'Sektor Ekonomi BPR'),
            3=>array('namaref'=>'Kategori Usaha BPR'),
            4=>array('namaref'=>'Perhitungan Suku Bunga BPR'),
            5=>array('namaref'=>'Jenis Agunan BPR'),
            6=>array('namaref'=>'Perubahan Kualitas BPR'),
            7=>array('namaref'=>'Kualitas Kredit BPR'),
            8=>array('namaref'=>'Penyebab Penurunan Baki Debet BPR'),
            9=>array('namaref'=>'Penyebab Perubahan Kualitas Kredit BPR'),
            10=>array('namaref'=>'Jenis DPK (Dana Pihak Ketiga) BPR'),
            11=>array('namaref'=>'Daftar Kabupaten Kota'),
            12=>array('namaref'=>'Jenis Penempatan Pada Bank Lain (ABA)'),
            13=>array('namaref'=>'Jenis Buku BPR'),
            14=>array('namaref'=>'Jenis Akad BPRS'),
            15=>array('namaref'=>'Jenis Debitur BPRS'),
            16=>array('namaref'=>'Jenis Piutang BPRS'),
            17=>array('namaref'=>'Sektor Ekonomi BPRS'),
            18=>array('namaref'=>'Kategori Usaha BPRS'),
            19=>array('namaref'=>'Jenis Agunan BPRS'),
            20=>array('namaref'=>'Perubahan Kualitas BPRS'),
            21=>array('namaref'=>'Kualitas Pembiayaan BPRS'),
            22=>array('namaref'=>'Penyebab Penurunan Baki Debet BPRS'),
            23=>array('namaref'=>'Penyebab Perubahan Kualitas Pembiayaan BPRS'),
            24=>array('namaref'=>'Jenis DPK BPRS'),
            25=>array('namaref'=>'Jenis Penembapan Pada Bank Lain BPRS'),
            26=>array('namaref'=>'Jenis Buku BPRS'),

        );

        for ($i=0; $i < count($data); $i++) { 
            $namaref = $data[$i]['namaref'];

            \App\Models\Obox\RF\Sandi::insert([
                'snddesc'   => $namaref,
            ]);
        }
    }
}
