<?php 
$title = "Data Kompetisi";
$description = "";

// data yang akan ditampilkan lewat `modular_submisi.php`
$dataToShow=[
    'nama_kompetisi' => 'Nama Kompetisi',
    'tanggal_mulai' => '2020-12-30',
    'tanggal_selesai' => '2020-12-30',
    'penyelenggara' => 'Kemdikbud',
    'jenis_kompetisi' => 'Non Akademik',
    'tingkat_kompetisi' => 'Internasional',
    'juara_kompetisi' => 'Juara Pertama',
    'url_kompetisi' => 'https://',
    'jumlah_peserta' => '20',
    'jumlah_pt' => '10',
    'nomor_surat_tugas' => '123',
    'tanggal_surat_tugas' => '2020-12-31',
];

$dataKeanggotaan = [
    ['nim' => '2341720184', 'nama' => 'Muhammad Erril', 'peran' => 'Ketua'],
    ['nim' => '14132121312', 'nama' => 'Maulana Rangga', 'peran' => 'Anggota'],
    ['nim' => '11323142142', 'nama' => 'John Doe', 'peran' => 'Anggota']
];

$dataDosen = [
    'nama' => 'Dika Rizky Yunianto, S.Kom.',
    'peran' => 'Membimbing mahasiswa menghasilkan...'
];

$dataLampiran = [
    ['nama_file' => 'SuratTugas.pdf', 'url' => '/files/SuratTugas.pdf', 'keterangan' => 'File Surat Tugas'],
    ['nama_file' => 'Sertifikat.pdf', 'url' => '/files/Sertifikat.pdf', 'keterangan' => 'File Sertifikat'],
    ['nama_file' => 'Poster.png', 'url' => '/files/Poster.png', 'keterangan' => 'File Poster'],
    ['nama_file' => 'KegiatanLomba.png', 'url' => '/files/KegiatanLomba.png', 'keterangan' => 'File Kegiatan Lomba']
];

include "../../layouts/kajur.php";?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
            <?php 
            $isKajur = true;
            include "../modular_submisi_kajur.php"?>

        </main>
    </section>
</body>