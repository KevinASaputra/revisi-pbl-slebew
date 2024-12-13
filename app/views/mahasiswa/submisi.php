<?php
$title = "Data Submisi";
$description = "";
include "../../layouts/mahasiswa.php"; ?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
            <?php
            $isAdmin = false;

            include "../modular_submisi.php" ?>

            <span class="text-red-500 flex justify-between">
                <?php if (!$isAdmin) : ?>
                    <p class="w-36">
                        *Wajib diisi.
                    </p>
                <?php endif; ?>
                <div class="flex flex-row-reverse gap-3 w-full">
                    <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                        <p>KIRIM</p>
                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>
                    </button>
                </div>
            </span>

        </main>
    </section>

</body>