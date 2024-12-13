<?php
$title = "Master Mahasiswa > Edit Data Mahasiswa";
$description = "";

$isDataPembimbing = false;
$fieldName = [
    'Nomor Induk Mahasiswa',
    'Nama Mahasiswa',
    'Program Studi',
    'Tahun Masuk (Angkatan)',
    'Password'
];
$dataToShow = [
    'nomor_induk' => "123456789",
    'name' => 'John Doe',
    'prodi' => 'D-IV Sistem Informasi Bisnis',
    'angkatan' => '2022',
    'password' => '123456789'
];

$prodiOptions = [
    "D-IV Teknik Informatika",
    "D-IV Sistem Informasi Bisnis",
    "D-II PPLS",
];
include "../../layouts/admin.php"; ?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>

        <?php include "templates/edit_add_data_master.php" ?>
    </section>

</body>