<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\StatistikPengunjung;

class PageController extends Controller
{
    public function home()
    {
        $today = Carbon::now()->format('d');
        $bulanIni = Carbon::now()->format('m');

        $statistikPengunjung = StatistikPengunjung::find(1);
        $tambah = $statistikPengunjung->dilihat + 1;

        $tglDb = $statistikPengunjung->created_at->format('d');
        $bulanDb = $statistikPengunjung->created_at->format('m');
        $hariIni = ($today != $tglDb) ? 1 : $statistikPengunjung->hari_ini + 1;
        $bulanIniDb = ($bulanIni != $bulanDb) ? $bulanIni : $statistikPengunjung->bulan_ini + 1;

        $statistikPengunjung->update([
            'dilihat' => $tambah,
            'hari_ini' => $hariIni,
            'bulan_ini' => $bulanIniDb,
            'created_at' => Carbon::now(),
        ]);

        $beritaTerbaru = Berita::latest('tanggal')->paginate(8);
        $websiteSkpds = DB::table('website_skpds')->latest('id')->limit(5)->get();
        $imageSlider = DB::table('sliders')->latest('id')->limit(5)->get();
        $galeri = DB::table('galeris')->latest('id')->limit(4)->get();
        $video = DB::table('video_kegiatans')->latest('created_at')->limit(12)->get();
        $latestRecord = Berita::latest('tanggal')->first();
        $beritaTerbaruNew = Berita::latest('tanggal')->skip(1)->take(2)->get();

        $infografis = DB::table('infografis')->latest('id')->limit(4)->get();
        $popup = DB::table('popup')->latest('created_at')->first();

        return view('frontend.home.index', compact(
            'beritaTerbaru', 'popup', 'beritaTerbaruNew', 'latestRecord', 'websiteSkpds', 'infografis', 'imageSlider', 'galeri', 'video'
        ));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $beritaTerbaru = Berita::latest('created_at')->limit(5)->get();

        return view('frontend.home.page', [
            'slug' => $slug,
            'judul' => $page->judul,
            'isi' => $page->isi,
            'created_at' => $page->created_at,
            'beritaTerbaru' => $beritaTerbaru,
        ]);
    }

    public function downloadFile($file)
    {
        $filePath = public_path("frontend/infografis/file/".$file);
        return response()->download($filePath, null, ['Content-Type: application/pdf']);
    }

    public function show($file)
    {
        $filePath = public_path("frontend/infografis/file/".$file);
        return response()->file($filePath, ['content-type' => 'application/pdf']);
    }

    public function tampil($slug)
    {
        $content = $this->getContentBySlug($slug);

        return $this->home()->with('content', $content)->with('slug', $slug);
    }

    public function index()
    {
        $infografis = DB::table('infografis')->latest('id')->get();
        return view('frontend.infografis.index', compact('infografis'));
    }

    private function getContentBySlug($slug)
    {
        $contents = [
            'profil-batanghari' => 'Content of Profil Batanghari page',
            'sejarah' => 'Content of Sejarah page',
            'arti-lambang' => 'Content of Arti Lambang page',
            'kondisi-demografi' => 'Content of Kondisi Demografi page',
            'peta-batanghari' => 'Content of Peta Batanghari page',
            'visi-dan-misi' => 'Content of Visi & Misi page',
            'pemerintah-batanghari' => 'Content of Pemerintahan Batanghari page',
            'akuntabiltas-pemerintahan' => 'Content of Akuntabiltas Pemerintahan page',
            'akuntabiltas-pelaporan' => 'Content of Akuntabiltas Pelaporan page',
            'akuntabilitas-batanghari' => 'Content of Transparansi Anggaran page',
            'struktur-organisasi' => 'Content of Struktur Organisasi page',
            'profil-puskesmas-batin' => 'Content of Profil Puskesmas Batin page',
            'jadwal-pelayanan' => 'Content of Jadwal Pelayanan page',
            'tarif-retribusi' => 'Content of Tarif Retribusi page',
            'jadwal-pusling-puskesmas' => 'Content of Jadwal Pusling Puskesmas page',
            'jadwal-pelayanan-usg' => 'Content of Jadwal Pelayanan USG page',
            'jadwal-pelayanan-posyandu' => 'Content of Jadwal Pelayanan Posyandu page',
            'denah-dan-ruangan-puskesmas' => 'Content of Denah dan Ruangan Puskesmas page',
            'alur-pelayanan' => 'Content of Alur Pelayanan page',
            'klaster-i-pelayanan-manajemen' => 'Content of Klaster I Pelayanan Manajemen page',
            'klaster-ii-pelayanan-kesehatan-ibu-dan-anak' => 'Content of Klaster II Pelayanan Kesehatan Ibu dan Anak page',
            'klaster-iii-pelayanan-kesehatan-dewasa-dan-lanjut-usia' => 'Content of Klaster III Pelayanan Kesehatan Dewasa dan Lanjut Usia page',
            'klaster-iv-pelayanan-penanggulangan-penyakit-menular-dan-kesehatan-lingkungan' => 'Content of Klaster IV  Pelayanan Penanggulangan Penyakit Menular dan Kesehatan Lingkungan page',
            'pelayanan-lintas-klaster' => 'Content of Pelayanan Lintas Klaster page',
        ];

        return $contents[$slug] ?? 'Content not found';
    }
}
