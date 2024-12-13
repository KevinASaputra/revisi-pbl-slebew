<?php
$title = "Data Submisi > Data Pembimbing";
$description = "";

// layout
include "../../layouts/admin.php";

$isDataPembimbing= true;
$dataToShow = [
    [
        'nomor_induk' => "123456789",
        'name' => 'John Doe',
        'role' => 'Membimbing mahasiswa menghasilkan produk saintifik bereputasi dan mendapatkan pengakuan tingkat Nasional.',
    ],
    [
        'nomor_induk' => "123456789",
        'name' => 'John Moles',
        'role' => 'Membimbing mahasiswa mengikuti kompetisi dibidang akademik dan kemahasiswaan bereputasi dan mencapai juara tingkat Nasional.',
    ]
];

?>

<body class="bg-[#D9D9D9] font-sans">

    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <?php include "templates/dekomp_2_3.php" ?>

        </main>
    </section>

    <script src="" async defer></script>
</body>

</html>