<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Void_;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            ['nisn' => '0093318976', 'nis' => '25142', 'nama_siswa' => 'ACCER SUWITO RAHMATDANI', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-08-22', 'alamat' => 'JL. PURI PHAPROS I RT 14 RW 02 KEL. KALIPANCUR KEC. NGALIYAN', 'no_hp' => '085226018159'],
            ['nisn' => '0106171517', 'nis' => '25143', 'nama_siswa' => 'ALMIRA SHAFA KUSFIANA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-01-07', 'alamat' => 'PERUM GRIYA UTAMA BANJARDOWO BARU BLOK A, NO.106 RT 01 RW 11 KARANGROTO GENUK', 'no_hp' => '081283016613'],
            ['nisn' => '3104996996', 'nis' => '25144', 'nama_siswa' => 'ANGEL SYIFANA ELYSIA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-10-18', 'alamat' => 'JL SUMUR ADEM RT 3 RW 1, KEL BANGETAYU, KEC GENUK, KOT SEMARANG', 'no_hp' => '081386091390'],
            ['nisn' => '0107986244', 'nis' => '25145', 'nama_siswa' => 'DEVEN MANALU', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'ACEH', 'tanggal_lahir' => '2010-10-30', 'alamat' => 'JL GRIYA PANTURA REGENCY BLOK A-B', 'no_hp' => '089696030824'],
            ['nisn' => '0094060329', 'nis' => '25146', 'nama_siswa' => 'DIVA ALIFYA MURDIYANTI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-12-27', 'alamat' => 'JL. GAJAH BARAT IV RT 04 RW 09 KEL. PANDEAN LAMPER KEC. GAYAMSARI', 'no_hp' => '085328194821'],
            ['nisn' => '0093611791', 'nis' => '25147', 'nama_siswa' => 'FARRA AULIA RAMADHANI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-09-21', 'alamat' => 'JL. SELO MULYO MUKTI BARAT 9/16 RT06 RW09 KEL. TLOGOMULYO KEC. PEDURUNGAN', 'no_hp' => '089693518190'],
            ['nisn' => '0103932350', 'nis' => '25148', 'nama_siswa' => 'FAVIAN REZKY ARKANA', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-10-17', 'alamat' => 'JL. MRRANGEN', 'no_hp' => '089637865797'],
            ['nisn' => '0098031023', 'nis' => '25149', 'nama_siswa' => 'FEMILIA MADINARASTI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-07-08', 'alamat' => 'JL. RATAN CILIK III RT 06 RW 02 KEL. BANJARDOWO KEC. GENUK SEMARANG', 'no_hp' => '085243231948'],
            ['nisn' => '0102123290', 'nis' => '25150', 'nama_siswa' => 'GIZA WILIANA SAPUTRI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-03-27', 'alamat' => 'JL. PANCAKARYA NO 432 RT 08 RW 05 KEL REJOSARI KEC SEMARANG TIMUR', 'no_hp' => '085157491186'],
            ['nisn' => '0097833622', 'nis' => '25151', 'nama_siswa' => 'JIBRAN IHYA ULUMUDIN', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-04-25', 'alamat' => 'JL. GENUK', 'no_hp' => '082152760189'],
            ['nisn' => '0095821069', 'nis' => '25152', 'nama_siswa' => 'KEYLA STEFANI HEAVENLY GRACE', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-10-20', 'alamat' => 'BANJARDOWO RT03/RW01, GENUK SEMARANG', 'no_hp' => '087755597971'],
            ['nisn' => '0105812077', 'nis' => '25153', 'nama_siswa' => 'KHAYLILA NEZHYA ADITYAN', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-01-12', 'alamat' => 'JL KARANG PANAS RT 08 RW 01 KEL. JATINGALEH KEC. CANDISARI SEMARANG', 'no_hp' => '087814710497'],
            ['nisn' => '0105908677', 'nis' => '25154', 'nama_siswa' => 'KARUNIAWAN SATRIAJI ROUVIYANTO', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-06-13', 'alamat' => 'JALAN SIDODRAJAT 3 NO 47', 'no_hp' => '082365075291'],
            ['nisn' => '0102586754', 'nis' => '25155', 'nama_siswa' => 'KYRIELLOF RAHMA TSANIA SULISTIYANTO', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'JAKARTA', 'tanggal_lahir' => '2010-06-15', 'alamat' => 'JL. TLOGOSARI', 'no_hp' => '085103423667'],
            ['nisn' => '0104544306', 'nis' => '25156', 'nama_siswa' => 'LOLY MERRY SUSANTI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-08-22', 'alamat' => 'JL. WELIRANG 1/66 RT 05 RW 05 KEL. KARANGREJO KEC. GAJAHMUNGKUR SEMARANG', 'no_hp' => '081327684268'],
            ['nisn' => '0108534951', 'nis' => '25157', 'nama_siswa' => 'MARIA AVE KIRANA WIJAYA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-09-29', 'alamat' => 'JL. EMAS V NO. 8 RT 07 RW 16 KEL. MUKTIHARJO KIDUL KEC. PEDURUNGAN', 'no_hp' => '082365632122'],
            ['nisn' => '0109951035', 'nis' => '25158', 'nama_siswa' => 'MARSA CALISTA ARYANTI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-03-25', 'alamat' => 'JL. KYAI H. ZAINUDDIN RAYA, RT.16 RW.02, KEL KARANGROTO, KEC. GENUK, KOTA SEMARANG', 'no_hp' => '082230792440'],
            ['nisn' => '0108101642', 'nis' => '25159', 'nama_siswa' => 'NAUFAL WICAKSANA', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-11-01', 'alamat' => 'JALAN SIDODADI BARAT KP.SLAMET 189A RT 01 RW03 SEMARANG', 'no_hp' => '082168599528'],
            ['nisn' => '0108566033', 'nis' => '25160', 'nama_siswa' => 'NAURA WAHYU RYANI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-01-08', 'alamat' => 'KP. NGESTIMULYO RT 03 RW 03 KEL. MLATIBARU KEC. SEMARANG TIMUR SEMARANG', 'no_hp' => '089607866661'],
            ['nisn' => '0106870762', 'nis' => '25161', 'nama_siswa' => 'NAYLA ASYIFA ALIFATUNNISA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-01-30', 'alamat' => 'JL. TLUMPAK 05/08 KEL. TANDANG, KEC TEMBALANG, SEMARANG', 'no_hp' => '085160313721'],
            ['nisn' => '0104659014', 'nis' => '25162', 'nama_siswa' => 'NINDYA PUTRI ALVIRANI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-01-13', 'alamat' => 'JL. SAMBIROTO XI RT 07 RW 07 KEL. SAMBIROTO KEC. TEMBALANG', 'no_hp' => '085290109281'],
            ['nisn' => '0099237047', 'nis' => '25163', 'nama_siswa' => 'OLIVIA CITRA ERZALIANA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-07-05', 'alamat' => 'JL. SEDOMPYONG 3 RT 03 RW 10 KEL. KEMIJEN KEC. SEMARANG TIMUR', 'no_hp' => '085290139624'],
            ['nisn' => '0105564083', 'nis' => '25164', 'nama_siswa' => 'PETRA ANUGERAH SETIA KUNTORO', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-01-26', 'alamat' => 'JL. TANAH PUTIH', 'no_hp' => '085295711777'],
            ['nisn' => '0104560827', 'nis' => '25165', 'nama_siswa' => 'RAFANIA RADYA SAFWANA NUGROHO', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-04-04', 'alamat' => 'JL. PAPANDAYAN RT 07 RW 04 NO 37 KEL. GAJAHMUNGKUR KEC. GAJAHMUNGKUR', 'no_hp' => '085141215472'],
            ['nisn' => '0095595487', 'nis' => '25166', 'nama_siswa' => 'RISTHI NUR AINI ULFA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-06-13', 'alamat' => 'PONDOK DIPONEGORO NO.33 RT 08 RW 01 KEL. MANGUNHARJO KEC. TEMBALANG SEMARANG', 'no_hp' => '089503852808'],
            ['nisn' => '0094394721', 'nis' => '25167', 'nama_siswa' => 'SALSABILA OKTA AMIRAH TSARI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-10-04', 'alamat' => 'JL. TANJUNG SARI RT 02 RW 09 KEL. PEDURUNGAN LOR KEC. PEDURUNGAN SEMARANG', 'no_hp' => '082314852538'],
            ['nisn' => '0095993574', 'nis' => '25168', 'nama_siswa' => 'SASKIA PUTRI CANDRA KIRANA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-10-09', 'alamat' => 'JL. KARANG ROTO', 'no_hp' => '089585393363'],
            ['nisn' => '0091927116', 'nis' => '25169', 'nama_siswa' => 'SHEIFA ASABILLA RIZQI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-06-13', 'alamat' => 'KP. REJOMULYO RT 03 RW 01 KEL. WATES KEC. NGALIYAN KOTA SEMARANG', 'no_hp' => '082287500474'],
            ['nisn' => '0099323760', 'nis' => '25170', 'nama_siswa' => 'SHINTA ANINDA DEWI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-07-08', 'alamat' => 'JL. TAMBAK DALAM RAYA RT 03 RW 03 KEL. SAWAH BESAR KEC. GAYAMSARI', 'no_hp' => '082295755131'],
            ['nisn' => '0098868867', 'nis' => '25171', 'nama_siswa' => 'THALITA CHANTIKA AS\'SYANI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-06-17', 'alamat' => 'JL. NGABLAK INDAH 4 RT 03/RW 01 KEL. MUKTIHARJO LOR, KEC. GENUK, KOTA SEMARANG', 'no_hp' => '082273537990'],
            ['nisn' => '0102929180', 'nis' => '25172', 'nama_siswa' => 'TYO PUTRA SUGIARTO', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-03-11', 'alamat' => 'JL. KARANG LABAN RT 10 RW 02 KEL. JAGALAN KEC. SEMARANG TENGAH', 'no_hp' => '085151163726'],
            ['nisn' => '0097798068', 'nis' => '25173', 'nama_siswa' => 'VICKY ARAI MAHARDIKA', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-10-07', 'alamat' => 'JL. DEMPEL BARU PERMATA V RT 11 RW 25 KEL. MUKTIHARJO KIDUL KEC. PEDURUNGAN', 'no_hp' => '087751676122'],
            ['nisn' => '0097964610', 'nis' => '25174', 'nama_siswa' => 'VINCENTIUS RAFAEL EKA HARTONO', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-11-09', 'alamat' => 'KRANGGAN DALAM 43, RT 6 RW 1, KRANGGAN, SEMARANG TENGAH, KOTA SEMARANG', 'no_hp' => '082102972997'],
            ['nisn' => '0093900715', 'nis' => '25175', 'nama_siswa' => 'ZAHRA PRIMANDA SAPUTRI', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2009-08-08', 'alamat' => 'JL. GAJAH BARAT VI RT 06 RW 09 KEL. PANDEAN LAMPER KEC. GAYAMSARI SEMARANG', 'no_hp' => '089752882001'],
            ['nisn' => '0107921636', 'nis' => '25176', 'nama_siswa' => 'ZERLINDA SALSABILA', 'jenis_kelamin' => 'P', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-06-07', 'alamat' => 'JL. BOOMLAMA RT 03 RW 03 KEL. KUNINGAN KEC. SEMARANG TIMUR', 'no_hp' => '089526330434'],
            ['nisn' => '0101234567', 'nis' => '21123', 'nama_siswa' => 'FAHRI ASDIANSYAH', 'jenis_kelamin' => 'L', 'tempat_lahir' => 'SEMARANG', 'tanggal_lahir' => '2010-04-05', 'alamat' => 'JL. SAYUNG', 'no_hp' => '089539548620'],
        ]);
    }
}

