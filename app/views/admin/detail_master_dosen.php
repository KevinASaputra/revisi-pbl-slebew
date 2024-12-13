<?php
$title = "Master Dosen > Detail Dosen";
$description = "";

$isDataPembimbing = true;
$fieldName = [
    'Nomor Induk Pegawai',
    'Nama Dosen',
    'Password'
];
$dataToShow = [
    'nomor_induk' => "123456789",
    'name' => 'John Doe',
    'password' => '123456789'
];
include "../../layouts/admin.php"; ?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>

        <?php include "templates/detail_data_master.php" ?>
    </section>

</body>