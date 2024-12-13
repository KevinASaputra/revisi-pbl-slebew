<?php
$fileUploadBoxes = [
    [
        'title' => 'File Surat Tugas',
        'description' => 'Surat tugas dari kompetisi yang diikuti.'
    ],
    [
        'title' => 'File Proposal Kompetisi',
        'description' => 'Proposal yang diajukan untuk mengikuti kompetisi.'
    ],
    [
        'title' => 'Foto Kegiatan',
        'description' => 'Foto dokumentasi kegiatan saat kompetisi.'
    ],
    [
        'title' => 'File Poster',
        'description' => 'Poster dari kompetisi yang diikuti.'
    ]
];

$title = "!Nama Kompetisi di sini!";
$description = "Buka riwayat kompetisi";
include "../../layouts/mahasiswa.php";
?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-wrap p-16 justify-between gap-y-20">
                <!-- BOX TEMPAT UPLOAD FILE -->
                <?php foreach ($fileUploadBoxes as $box): ?>
                    <div class="flex flex-col items-center justify-between p-3 bg-white [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-2xl w-96">
                        <section class="flex flex-col items-center">
                            <h1 class="font-semibold text-2xl"><?php echo $box['title']; ?></h1>
                            <p class="text-base text-gray-500"><?php echo $box['description']; ?></p>
                            <img src="../../../public/assets/images/image_placeholder.png" alt="placeholder" class="size-56 object-cover">
                        </section>
                        <button type="button" class="bg-[#2862C6] rounded text-white p-1 flex items-center gap-1">
                            <span class="material-symbols-outlined">
                                download
                            </span>
                            Download
                        </button>
                        <!-- <section class="w-full bg-[#2862C6] rounded-b-2xl flex justify-between px-4 py-2">
                        </section> -->
                    </div>
                <?php endforeach; ?>

            </span>
            <span class="flex flex-row-reverse relative gap-3">
                <button class="flex rounded-md w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KEMBALI</p>
                </button>
            </span>

            <!-- Pop-up Box -->
            <div id="popupBox" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-5 rounded-lg shadow-lg w-80">
                    <h2 class="text-lg font-semibold mb-4 text-center">Apakah Anda yakin?</h2>
                    <p class="text-sm text-gray-600 mb-6 text-center">Apakah data yang telah dimasukkan dan diunggah sudah benar? Tindakan ini tidak dapat dibatalkan.</p>
                    <div class="flex justify-between">
                        <button id="cancelBtn" class="text-white bg-gray-400 rounded-md px-4 py-2">Batal</button>
                        <button id="confirmBtn" class="text-white bg-[#2862C6] rounded-md px-4 py-2">Konfirmasi</button>
                    </div>
                </div>
            </div>

        </main>
    </section>
</body>