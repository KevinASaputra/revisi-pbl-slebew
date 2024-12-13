<?php
$title = "Data Submisi > Data File";
$description = "";

// layout
include "../../layouts/admin.php";?>

<body class="bg-[#D9D9D9] font-sans">

    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-wrap p-16 justify-between gap-y-20">
                <!-- modular submisi_4 -->
                <?php 
                $isAdmin = true;
                include "../modular_submisi_4.php"; ?>

            </span>
            <span class="flex flex-row-reverse relative gap-3">
                <button id="kirimBtn" class="flex rounded-md w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>TERIMA</p>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
                <button class="flex rounded-md w-fit p-3 text-white bg-[#EC6565] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>TOLAK</p>
                </button>
                <button class="flex rounded-md w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KEMBALI</p>
                </button>
            </span>

        </main>
    </section>

</body>