<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use PDF;
use Dompdf\Dompdf;
use App\Models\Peminjaman;

class peminjamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $list_peminjaman = Peminjaman::all();
        $categories = [];

        foreach($list_peminjaman as $jr)
        {
            $categories[] = $jr -> id_anggota;
            //$data[] = $Peminjaman-> total_realisasi()->wherePivot('jumlah_realisasi',$jr->id_anggota)->first();
        }

        //dd($data);
        //dd(json_encode($categories));

        //return view('peminjaman',['peminjaman' => $peminjaman,'jumlah_realisasi' => $jumlah_realisasi,'categories' => $categories]);
        return view("peminjaman",compact('list_peminjaman','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('peminjaman')->insert([
            'tglbp' => $request->tglbp,
            'id_bagiankredit' => $request->id_bagiankredit,
            'id_anggota' => $request->id_anggota,
            'jumlah_realisasi' => $request->jumlah_realisasi,
            'lama_angsuran' => $request->lama_angsuran,
            'jumlah_angsuran' => $request->jumlah_angsuran,
            'bunga' => $request->bunga,
        ]);

        return redirect('peminjaman');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function tambah()
    {
        return view('tambah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function ubah(Request $request, $no_bp)
    {
        $list_peminjaman = DB::table('peminjaman')->where('no_bp',$no_bp)->get();
        return view('update',['list_peminjaman'=> $list_peminjaman]);
    }
    public function update(Request $request)
    {
        DB::table('peminjaman')->where('no_bp', $request->no_bp)->update([
            'tglbp' => $request->tglbp,
            'id_bagiankredit' => $request->id_bagiankredit,
            'id_anggota' => $request->id_anggota,
            'jumlah_realisasi' => $request->jumlah_realisasi,
            'lama_angsuran' => $request->lama_angsuran,
            'jumlah_angsuran' => $request->jumlah_angsuran,
            'bunga' => $request->bunga,
        ]);
        return redirect('peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($no_bp)
    {
        DB::table('peminjaman')->where('no_bp',$no_bp)->delete();
        return redirect('peminjaman');
    }



    public function report()
    {

        $list_peminjaman = Peminjaman::All();

        $pdf = PDF::loadView('laporanpeminjaman', ['list_peminjaman' => $list_peminjaman])->setPaper('a4', 'landscape');;
        return $pdf->download('invoice.pdf');


    }








}
