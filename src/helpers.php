<?php

date_default_timezone_set('Asia/Jakarta');
setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID');

if (!function_exists('setAngka')) {
    function setAngka($angka, $desimal = 0)
    {
        return number_format($angka, $desimal, ',', '.');
    }
}

if (!function_exists('setRupiah')) {
    function setRupiah($angka, $desimal = false)
    {
        $desimal = ($desimal) ? ',00' : '';
        return 'Rp' . setAngka($angka) . $desimal;
    }
}

if (!function_exists('setSatuan')) {
    function setSatuan($angka, $satuan)
    {
        return setAngka($angka) . ' ' . $satuan;
    }
}

/*
 * */

if (!function_exists('setHari')) {
    function setHari($hari)
    {
        $haris = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        return $haris[$hari];
    }
}

if (!function_exists('setBulan')) {
    function setBulan($bulan)
    {
        $bulans = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        return $bulans[$bulan];
    }
}

if (!function_exists('setTanggal')) {
    function setTanggal($tanggal)
    {
        return strftime('%e %B %Y', strtotime($tanggal));
    }
}

if (!function_exists('setHariTanggal')) {
    function setHariTanggal($tanggal)
    {
        return strftime('%A, %e %B %Y', strtotime($tanggal));
    }
}

if (!function_exists('setTertanggal')) {
    function setTertanggal($tanggal)
    {
        $date = new DateTime($tanggal);
        $now = new DateTime();

        $dateInterval = $date->diff($now);

        $f = ($dateInterval->f < 0) ? 'kemudian' : 'yang lalu';

        if ($dateInterval->s) {
            $tertanggal = $dateInterval->s . ' detik ' . $f;
        } else {
            $tertanggal = 'beberapa detik ' . $f;
        }

        if ($dateInterval->i) {
            $tertanggal = $dateInterval->i . ' menit ' . $f;
        }

        if ($dateInterval->h) {
            $tertanggal = $dateInterval->h . ' jam ' . $f;
        }

        if ($dateInterval->d) {
            $tertanggal = $dateInterval->d . ' hari ' . $f;
        }

        if ($dateInterval->m) {
            $tertanggal = $dateInterval->m . ' bulan ' . $f;
        }

        if ($dateInterval->y) {
            $tertanggal = $dateInterval->y . ' tahun ' . $f;
        }

        return $tertanggal;
    }
}

if (!function_exists('setDiperbarui')) {
    function setDiperbarui($tanggal)
    {
        return 'Diperbarui ' . setTertanggal($tanggal);
    }
}

if (!function_exists('setUmur')) {
    function setUmur($tanggal)
    {
        $date = new DateTime($tanggal);
        $now = new DateTime();

        $dateInterval = $date->diff($now);
        
        if ($dateInterval->d) {
            $tertanggal = $dateInterval->d . ' hari ' . $f;
        }

        if ($dateInterval->m) {
            $tertanggal = $dateInterval->m . ' bulan ' . $f;
        }

        if ($dateInterval->y) {
            $tertanggal = $dateInterval->y . ' tahun ' . $f;
        }
        
        if ($dateInterval->f < 0) {
            return '0 hari';
        } else {
            return $tertanggal;
        }

    }
}
