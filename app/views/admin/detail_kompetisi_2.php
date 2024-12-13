<?php
$title = "Data Submisi > Data Mahasiswa";
$description = "";

// layout
include "../../layouts/admin.php";

$isDataPembimbing = false;
$dataToShow = [
    [
        'nomor_induk' => "123456789",
        'name' => 'John Doe',
        'role' => 'Anggota',
    ],
    [
        'nomor_induk' => "123456789",
        'name' => 'John Moles',
        'role' => 'Ketua',
    ]
];
?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <?php include "templates/dekomp_2_3.php"?>

        </main>
    </section>
</body>n