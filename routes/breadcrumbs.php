<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// parent
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('tentang_batanghari', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Tentang Batanghari', route('home'));
});



//parent
Breadcrumbs::for('profil_batanghari', function (BreadcrumbTrail $trail) {
    $trail->parent('tentang_batanghari');
    $trail->push('Profil Batanghari', route('home'));
});
 
//parent
Breadcrumbs::for('page', function (BreadcrumbTrail $trail, $slug) {
    $trail->parent('home');
    $trail->push(ucwords(str_replace('-', ' ', $slug)), route('page', $slug));
});

Breadcrumbs::for('page.tampil', function (BreadcrumbTrail $trail, $slug) {
    $pages = [
        'sejarah' => 'Sejarah Batanghari',
        'arti-lambang' => 'Arti Lambang',
        'kondisi-demografi' => 'Kondisi Demografi',
        'peta-batanghari' => 'Peta Batanghari',
        'visi-dan-misi' => 'Visi & Misi',
        'pemerintah-batanghari' => 'Pemerintahan Batanghari',
        'akuntabiltas-pemerintahan' => 'Akuntabilitas Pemerintahan',
        'akuntabiltas-pelaporan' => 'Akuntabilitas Pelaporan',
        'lakip' => 'LAKIP',
        'akuntabilitas-batanghari' => 'Transparansi Anggaran',
        'struktur-organisasi' => 'Struktur Organisasi',
        'profil-puskesmas-batin' => 'Profil Puskesmas Batin',
        'jadwal-pelayanan' => 'Jadwal Pelayanan',
        'tarif-retribusi' => 'Tarif Retribusi',
        'jadwal-pusling-puskesmas' => 'Jadwal Pusling Puskesmas',
        'jadwal-pelayanan-usg' => 'Jadwal Pelayanan USG',
        'jadwal-pelayanan-posyandu' => 'Jadwal Pelayanan Posyandu',
        'denah-dan-ruangan-puskesmas' => 'Denah dan Ruangan Puskesmas',
        'alur-pelayanan' => 'Alur Pelayanan',
        'klaster-i-pelayanan-manajemen' => 'Klaster I Pelayanan Manajemen',
        'klaster-ii-pelayanan-kesehatan-ibu-dan-anak' => 'Klaster II Pelayanan Kesehatan Ibu dan Anak',
        'klaster-iii-pelayanan-kesehatan-dewasa-dan-lanjut-usia' => 'Klaster III Pelayanan Kesehatan Dewasa dan Lanjut Usia',
        'klaster-iv-pelayanan-penanggulangan-penyakit-menular-dan-kesehatan-lingkungan' => 'Klaster IV  Pelayanan Penanggulangan Penyakit Menular dan Kesehatan Lingkungan',
        'pelayanan-lintas-klaster' => 'Pelayanan Lintas Klaster',
    ];

    // Check if the page slug is related to Pemerintahan Batanghari
 
    $trail->parent('profil_batanghari');
    $trail->push($pages[$slug], route('tampil', $slug));
});

// Home > Berita
Breadcrumbs::for('berita.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Informasi Publik / ".'Berita', route('index'));
});

// Home > Berita > Baca
Breadcrumbs::for('berita.baca', function (BreadcrumbTrail $trail, $id, $title, $tanggal) {
    $trail->parent('berita.index');
    $trail->push(ucwords(str_replace('-', ' ', $title)), route('baca', [$id, $title, $tanggal]));
});

// Home > Berita > Read
Breadcrumbs::for('berita.read', function (BreadcrumbTrail $trail, $id,$title) {
    $trail->parent('berita.index');
    $trail->push("{$title}", route('read', [$id,$title]));
});

Breadcrumbs::for('galeri_foto', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Informasi Publik / ".'Galeri Foto', route('galeri_foto'));
});

// Home > Galeri Video
Breadcrumbs::for('galeri_video', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Informasi Publik / ".'Galeri Video', route('galeri_video'));
});

// Home > Infografis
Breadcrumbs::for('infografis', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Informasi Publik / ".'Infografis', route('index'));
});

// Home > Website SKPD
Breadcrumbs::for('website_skpd', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Website SKPD', route('website_skpd'));
});

Breadcrumbs::for('akuntabilitas-batanghari', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Akuntabilitas Batanghari', route('index'));
});

Breadcrumbs::for('lakip', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('LAKIP', route('index'));
});