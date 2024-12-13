<?php
$title = "Data Submisi > Data File";
$description = "";

include "../../layouts/mahasiswa.php"; ?>

<body class="bg-[#D9D9D9] font-sans">

    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title;?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-wrap p-16 justify-between gap-y-20">
                <!-- modular submisi_4 -->
                 <?php
                 $isAdmin = false;
                 include "../modular_submisi_4.php";?>

            </span>
            <span class="flex flex-row-reverse relative gap-3">
                <button id="kirimBtn" class="flex rounded-md w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KIRIM</p>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
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
