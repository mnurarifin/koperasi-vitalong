<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
   protected $table = "peminjaman";

    public function total_peminjaman()
    {
        return $this->sum('jumlah_angsuran');
    }

    public function total_realisasi()
    {
        return $this->sum('jumlah_realisasi');
    }

    public function total_angsuran()
    {
        return $this->sum('lama_angsuran');
    }

    public function total_bunga()
    {
        return $this->sum('bunga');
    }

        //RATA-RATA
    public function rata_peminjaman()
    {
        return $this->average('jumlah_angsuran');
    }

    public function rata_realisasi()
    {
        return $this->average('jumlah_realisasi');
    }

    public function rata_angsuran()
    {
        return $this->average('lama_angsuran');
    }

    public function rata_bunga()
    {
        return $this->average('bunga');
    }


    //MAKSIMUM
    public function max_peminjaman()
    {
        return $this->max('jumlah_angsuran');
    }

    public function max_realisasi()
    {
        return $this->max('jumlah_realisasi');
    }

    public function max_angsuran()
    {
        return $this->max('lama_angsuran');
    }

    public function max_bunga()
    {
        return $this->max('bunga');
    }


    //MINIMUM
    public function min_peminjaman()
    {
        return $this->min('jumlah_angsuran');
    }

    public function min_realisasi()
    {
        return $this->min('jumlah_realisasi');
    }

    public function min_angsuran()
    {
        return $this->min('lama_angsuran');
    }

    public function min_bunga()
    {
        return $this->min('bunga');
    }


}
