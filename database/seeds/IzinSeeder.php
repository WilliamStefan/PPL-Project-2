<?php
 
use Illuminate\Database\Seeder;
 
class IzinSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('izin')->delete();
 
        $izins = array(
            ['NamaPemohon' => 'Orang1', 'JenisIzin' => 'IUTM','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang2', 'JenisIzin' => 'IUPP','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang3', 'JenisIzin' => 'IPPT','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang4', 'JenisIzin' => 'ITPMB','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang5', 'JenisIzin' => 'ITPW','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang6', 'JenisIzin' => 'IUTM','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang7', 'JenisIzin' => 'IUPP','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang8', 'JenisIzin' => 'IPPT','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang9', 'JenisIzin' => 'ITPMB','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
			['NamaPemohon' => 'Orang10', 'JenisIzin' => 'ITPW','TanggalMasuk'=>new DateTime, 'BerlakuSampai'=>new DateTime,'StatusIzin'=>'Ditunda','DokumenPersetujuan'=>'Dok','created_at' => new DateTime, 'updated_at' => new DateTime],
		);
 
        // Uncomment the below to run the seeder
        DB::table('izin')->insert($izins);
    }
 
}