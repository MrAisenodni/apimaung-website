<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';

    public function getAllData() {
        return DB::table('penduduk')
                    ->get(); // get() => SELECT * FROM penduduk
    }

    public function getData($id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->first();
    }

    public function getCount() {
        return DB::table('penduduk')->count();
    }

    /*
    ============================
    =   Count Jenis Kelamin    =
    ============================
    */

    public function getCountLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->count();
    }

    public function getCountPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->count();
    }

    /*
    =========================
    =   Count Pendidikan    =
    =========================
    */

    public function getCountPendN() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'n')
                    ->count();
    }
    public function getCountPendNLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'n')
                    ->count();
    }
    public function getCountPendNPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'n')
                    ->count();
    }

    public function getCountPendSD() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'sd')
                    ->count();
    }
    public function getCountPendSDLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'sd')
                    ->count();
    }
    public function getCountPendSDPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'sd')
                    ->count();
    }

    public function getCountPendSMP() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'smp')
                    ->count();
    }
    public function getCountPendSMPLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'smp')
                    ->count();
    }
    public function getCountPendSMPPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'smp')
                    ->count();
    }

    public function getCountPendSMA() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'sma')
                    ->count();
    }
    public function getCountPendSMALaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'sma')
                    ->count();
    }
    public function getCountPendSMAPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'sma')
                    ->count();
    }

    public function getCountPendD1() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'd1')
                    ->count();
    }
    public function getCountPendD1Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'd1')
                    ->count();
    }
    public function getCountPendD1Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'd1')
                    ->count();
    }

    public function getCountPendD2() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'd2')
                    ->count();
    }
    public function getCountPendD2Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'd2')
                    ->count();
    }
    public function getCountPendD2Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'd2')
                    ->count();
    }

    public function getCountPendD3() {
        return DB::table('penduduk')
                    ->where('pendidikan', 'd3')
                    ->count();
    }
    public function getCountPendD3Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 'd3')
                    ->count();
    }
    public function getCountPendD3Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 'd3')
                    ->count();
    }

    public function getCountPendS1() {
        return DB::table('penduduk')
                    ->where('pendidikan', 's1')
                    ->count();
    }
    public function getCountPendS1Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 's1')
                    ->count();
    }
    public function getCountPendS1Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 's1')
                    ->count();
    }

    public function getCountPendS2() {
        return DB::table('penduduk')
                    ->where('pendidikan', 's2')
                    ->count();
    }
    public function getCountPendS2Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 's2')
                    ->count();
    }
    public function getCountPendS2Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 's2')
                    ->count();
    }

    public function getCountPendS3() {
        return DB::table('penduduk')
                    ->where('pendidikan', 's3')
                    ->count();
    }
    public function getCountPendS3Laki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pendidikan', 's3')
                    ->count();
    }
    public function getCountPendS3Perempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pendidikan', 's3')
                    ->count();
    }

    /*
    =====================
    =   Count Status    =
    =====================
    */

    public function getCountStatusNikah() {
        return DB::table('penduduk')
                    ->where('status', 'nikah')
                    ->count();
    }
    public function getCountStatusNikahLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('status', 'nikah')
                    ->count();
    }
    public function getCountStatusNikahPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('status', 'nikah')
                    ->count();
    }

    public function getCountStatusLajang() {
        return DB::table('penduduk')
                    ->where('status', 'lajang')
                    ->count();
    }
    public function getCountStatusLajangLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('status', 'lajang')
                    ->count();
    }
    public function getCountStatusLajangPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('status', 'lajang')
                    ->count();
    }

    public function getCountStatusDuda() {
        return DB::table('penduduk')
                    ->where('status', 'duda')
                    ->count();
    }
    public function getCountStatusDudaLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('status', 'duda')
                    ->count();
    }
    public function getCountStatusDudaPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('status', 'duda')
                    ->count();
    }

    public function getCountStatusJanda() {
        return DB::table('penduduk')
                    ->where('status', 'janda')
                    ->count();
    }
    public function getCountStatusJandaLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('status', 'janda')
                    ->count();
    }
    public function getCountStatusJandaPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('status', 'janda')
                    ->count();
    }

    /*
    ========================
    =   Count Pekerjaan    =
    ========================
    */

    public function getCountPekN() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'n')
                    ->count();
    }
    public function getCountPekNLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'n')
                    ->count();
    }
    public function getCountPekNPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'n')
                    ->count();
    }

    public function getCountPekPNS() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'pns')
                    ->count();
    }
    public function getCountPekPNSLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'pns')
                    ->count();
    }
    public function getCountPekPNSPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'pns')
                    ->count();
    }

    public function getCountPekTani() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'petani')
                    ->count();
    }
    public function getCountPekTaniLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'petani')
                    ->count();
    }
    public function getCountPekTaniPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'petani')
                    ->count();
    }

    public function getCountPekNel() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'nelayan')
                    ->count();
    }
    public function getCountPekNelLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'nelayan')
                    ->count();
    }
    public function getCountPekNelPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'nelayan')
                    ->count();
    }

    public function getCountPekRT() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'rumahtangga')
                    ->count();
    }
    public function getCountPekRTLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'rumahtangga')
                    ->count();
    }
    public function getCountPekRTPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'rumahtangga')
                    ->count();
    }

    public function getCountPekSiswa() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'siswa')
                    ->count();
    }
    public function getCountPekSiswaLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'siswa')
                    ->count();
    }
    public function getCountPekSiswaPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'siswa')
                    ->count();
    }

    public function getCountPekTambak() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'tambak')
                    ->count();
    }
    public function getCountPekTambakLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'tambak')
                    ->count();
    }
    public function getCountPekTambakPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'tambak')
                    ->count();
    }

    public function getCountPekLain() {
        return DB::table('penduduk')
                    ->where('pekerjaan', 'lain')
                    ->count();
    }
    public function getCountPekLainLaki() {
        return DB::table('penduduk')
                    ->where('jenkel', 'l')
                    ->where('pekerjaan', 'lain')
                    ->count();
    }
    public function getCountPekLainPerempuan() {
        return DB::table('penduduk')
                    ->where('jenkel', 'p')
                    ->where('pekerjaan', 'lain')
                    ->count();
    }

    /*
    ======================
    =   CRUD Penduduk    =
    ======================
    */

    public function tambahData($data) {
        return DB::table('penduduk')
                    ->insert($data);
    }

    public function ubahData($data,$id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->delete();
    }
}
