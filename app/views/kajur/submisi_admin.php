<?php 
$title = "Data Admin";
$description = "";
include "../../layouts/kajur.php";?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
            <form class="flex flex-col gap-8" action="">
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="nama_admin" class="">Nama Admin</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Nama lengkap admin baru</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nama_admin" id="nama_admin">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="NIP" class="">Nomor Induk Pegawai</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Masukkan Nomer Induk Pegawai admin</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="NIP" id="NIP">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Kontak</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Masukkan kontak nomer admin</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="kontak" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Tempat tinggal</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Masukkan kota tempat tinggal admin</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="tempat_tinggal" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="tanggal_lahir" class="">Tanggal Lahir</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Masukkan tanggal lahir admin</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_lahir" id="tanggal_lahir">
                </span>
                <span class="text-red-500 flex justify-between">
                    <p>
                        *Wajib diisi.
                    </p>
                    <div class="flex gap-3">
                        <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                            <p>TAMBAH</p>
                        </button>
                        <!-- Tombol Kembali -->
                        <button type="button" class="flex rounded-md  w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]" onclick="history.back()">
                            <p>Kembali</p>
                        </button>
                    </div>
                </span>
            </form>
        </main>
    </section>
</body>