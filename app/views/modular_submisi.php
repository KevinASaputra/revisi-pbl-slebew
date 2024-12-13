<form class="flex flex-col gap-8" action="">
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="nama_kompetisi" class="">Nama Kompetisi</label>
            <p class=" text-red-500">*</p>
        </div>
        <p class="text-sm text-gray-400">Nama kompetisi yang tertera di dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['nama_kompetisi'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nama_kompetisi" id="nama_kompetisi">
        <?php endif; ?>

    </span>
    <span class="flex flex-1 gap-16">
        <div class="flex flex-col flex-1">
            <div class="flex">
                <label for="tanggal_mulai" class="">Tanggal Mulai</label>
                <?php if (!$isAdmin) : ?>
                    <p class=" text-red-500">*</p>
                <?php endif; ?>
            </div>
            <p class="text-sm text-gray-400">Tanggal kompetisi dimulai.</p>

            <!-- input or show -->
            <?php if ($isAdmin) : ?>
                <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                    <?php echo $dataToShow['tanggal_mulai'] ?>
                </section>
            <?php else: ?>
                <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_mulai" id="tanggal_mulai">
            <?php endif; ?>

        </div class="flex flex-col">
        <div class="flex flex-col flex-1">
            <div class="flex">
                <label for="tanggal_selesai" class="">Tanggal Selesai</label>
                <?php if (!$isAdmin) : ?>
                    <p class=" text-red-500">*</p>
                <?php endif; ?>
            </div>
            <p class="text-sm text-gray-400">Tanggal kompetisi selesai.</p>

            <!-- input or show -->
            <?php if ($isAdmin) : ?>
                <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                    <?php echo $dataToShow['tanggal_selesai'] ?>
                </section>
            <?php else: ?>
                <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_selesai" id="tanggal_selesai">
            <?php endif; ?>

        </div>
    </span>
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="penyelenggara" class="">Penyelenggara</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tulis penyelenggara yang tertera pada dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['penyelenggara'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="penyelenggara" id="penyelenggara">
        <?php endif; ?>
    </span>
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="jenis_kompetisi" class="">Jenis Kompetisi</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Pilih jenis di bawah yang paling cocok dengan kompetisimu.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['jenis_kompetisi'] ?>
            </section>
        <?php else: ?>
            <select name="jenis_kompetisi" id="jenis_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                <option value="Akademik">Akademik</option>
                <option value="Non Akademik">Non Akademik</option>
                <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

            </select>
        <?php endif; ?>

    </span>
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="tingkat_kompetisi" class="">Tingkat Kompetisi</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Pilih tingkat di bawah yang paling cocok dengan kompetisimu.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['tingkat_kompetisi'] ?>
            </section>
        <?php else: ?>
            <select name="tingkat_kompetisi" id="tingkat_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                <option value="Nasional">Nasional</option>
                <option value="Internasional">Internasional</option>
                <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

            </select>
        <?php endif; ?>

    </span>
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="juara_kompetisi" class="">Juara Kompetisi</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Pilih juara di bawah yang paling cocok dengan kompetisimu.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['juara_kompetisi'] ?>
            </section>
        <?php else: ?>
            <select name="juara_kompetisi" id="juara_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                <option value="Juara Pertama">Juara Pertama</option>
                <option value="Juara Kedua">Juara Kedua</option>
                <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

            </select>
        <?php endif; ?>

    </span>

    <span class="flex flex-col gap-2">
        <div class="flex">
            <h4 class="">URL Kompetisi</h4>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tulis URL publikasi penyelenggara kompetisi.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['url_kompetisi'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="url_kompetisi" id="">
        <?php endif; ?>
    </span>

    <span class="flex flex-col gap-2">
        <div class="flex">
            <h4 class="">Jumlah Peserta</h4>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tulis jumlah peserta yang mengikuti kompetisi.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['jumlah_peserta'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="number" name="jumlah_peserta" id="">
        <?php endif; ?>
    </span>

    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="jumlah_pt" class="">Jumlah PT</label>
            <?php if (!$isAdmin) :  ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tulis jumlah perguruan tinggi yang mengikuti kompetisi.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['jumlah_pt'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="number" name="jumlah_pt" id="jumlah_pt">
        <?php endif; ?>
    </span>

    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="nomor_surat_tugas" class="">Nomor Surat Tugas</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tulis nomor surat tugas.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['nomor_surat_tugas'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nomor_surat_tugas" id="nomor_surat_tugas">
        <?php endif; ?>
    </span>

    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="tanggal_surat_tugas" class="">Tanggal Surat Tugas</label>
            <?php if (!$isAdmin) : ?>
                <p class=" text-red-500">*</p>
            <?php endif; ?>
        </div>
        <p class="text-sm text-gray-400">Tanggal surat tugas diberikan.</p>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['tanggal_surat_tugas'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_surat_tugas" id="tanggal_surat_tugas">
        <?php endif; ?>
    </span>

    <span class="flex flex-col gap-4">
        <h1 class="font-bold text-lg">Data Mahasiswa</h1>
        <table id="dynamicTable" class="border-separate border-spacing-1">
            <tr>
                <th class="bg-gray-400 rounded">No</th>
                <th class="bg-gray-400 rounded">Mahasiswa</th>
                <th class="bg-gray-400 rounded">Peran</th>
                <th class="bg-gray-400 rounded">Hapus</th>
            </tr>
            <tr>
                <td class="text-center bg-gray-200 rounded py-3">
                    1
                </td>
                <td class="bg-gray-200 rounded p-3 ">
                    <select class="w-full">
                        <!-- Opsi untuk nama mahasiswa -->
                        <option value="Jono">Jono</option>'
                        <option value="Joni">Joni</option>'
                        <option value="Jini">Jini</option>'
                        <!-- ambil dari db -->
                    </select>
                </td>
                <td class="bg-gray-200 rounded p-3 w-52">
                    <select class="w-full">
                        <option value="Ketua">Ketua</option>
                        <option value="Anggota">Anggota</option>
                        <!-- ambil dari db -->
                    </select>

                </td>
                <td class=" bg-gray-200 rounded  w-20">
                    <div class="grid place-items-center">
                        <button class="flex items-center rounded-md w-fit text-white bg-red-400 p-1">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>
        </table>
        <button id="addRowBtn" class="bg-[#31E266] text-white p-3 w-fit rounded-md flex">
            <span class="material-symbols-outlined">add</span>
        </button>
    </span>

    <span class="flex flex-col gap-4">
        <h1 class="font-bold text-lg">Data Pembimbing</h1>
        <table id="dynamicTable" class="border-separate border-spacing-1">
            <tr>
                <th class="bg-gray-400 rounded">No</th>
                <th class="bg-gray-400 rounded">Dosen</th>
                <th class="bg-gray-400 rounded">Peran</th>
                <th class="bg-gray-400 rounded">Hapus</th>
            </tr>
            <tr>
                <td class="text-center bg-gray-200 rounded py-3">
                    1
                </td>
                <td class="bg-gray-200 rounded p-3">
                    <select class="w-full select2">
                        <!-- Opsi untuk nama mahasiswa -->
                        <option value="Jono">Jono</option>'
                        <option value="Joni">Joni</option>'
                        <option value="Jini">Jini</option>'
                        <!-- ambil dari db -->
                    </select>
                </td>
                <td class="bg-gray-200 rounded p-3 w-96">
                    <select class="w-full">
                        <option value="Membimbing mahasiswa menghasilkan produk saintifik bereputasi dan mendapat pengakuan tingkat Internasional">Membimbing mahasiswa menghasilkan produk saintifik bereputasi dan mendapat pengakuan tingkat Internasional</option>
                        <option value="Membimbing mahasiswa mengikuti kompetisi dibidang akademik dan kemahasiswaan bereputasi dan mencapai juara tingkat Nasional">Membimbing mahasiswa mengikuti kompetisi dibidang akademik dan kemahasiswaan bereputasi dan mencapai juara tingkat Nasional</option>
                        <!-- ambil dari db -->
                    </select>

                </td>
                <td class=" bg-gray-200 rounded  w-20">
                    <div class="grid place-items-center">
                        <button class="flex items-center rounded-md w-fit text-white bg-red-400 p-1">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </div>
                </td>
            </tr>
        </table>
        <button id="addRowBtn" class="bg-[#31E266] text-white p-3 w-fit rounded-md flex">
            <span class="material-symbols-outlined">add</span>
        </button>
    </span>

    <span class="flex flex-wrap p-16 justify-between gap-y-8">
    <h1 class="font-bold text-lg w-full">Data Mahasiswa</h1>
        <!-- modular submisi_4 -->
        <?php
        $isAdmin = false;
        include "../modular_submisi_4.php"; ?>

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


</form>