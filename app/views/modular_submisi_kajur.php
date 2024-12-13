<form class="flex flex-col gap-8" action="">
    <span class="flex flex-col gap-2">
        <div class="flex">
            <label for="nama_kompetisi" class="">Nama Kompetisi</label>
        </div>
        <p class="text-sm text-gray-400">Nama kompetisi yang tertera pada dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
            </div>
            <p class="text-sm text-gray-400">Tanggal kompetisi dimulai.</p>

            <!-- input or show -->
            <?php if ($isKajur) : ?>
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
            </div>
            <p class="text-sm text-gray-400">Tanggal kompetisi selesai.</p>

            <!-- input or show -->
            <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Penyelenggara yang tertera pada dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Jenis kompetisi yang sesuai dengan dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Tingkat kompetisi yang sesuai dengan dokumen-dokumen bukti.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Nominasi juara.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">URL publikasi penyelenggara kompetisi.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Jumlah peserta yang mengikuti kompetisi.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Jumlah perguruan tinggi yang mengikuti kompetisi.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Nomor surat tugas.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
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
        </div>
        <p class="text-sm text-gray-400">Tanggal surat tugas diberikan.</p>

        <!-- input or show -->
        <?php if ($isKajur) : ?>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataToShow['tanggal_surat_tugas'] ?>
            </section>
        <?php else: ?>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_surat_tugas" id="tanggal_surat_tugas">
        <?php endif; ?>
    </span>


    <!-- Keanggotaan -->
    <span class="flex flex-col gap-2">
        <h4>Keanggotaan</h4>
        <p class="text-sm text-gray-400">Mahasiswa & Peran</p>
        <?php foreach ($dataKeanggotaan as $anggota): ?>
        <div class="flex gap-2">
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $anggota['nim'] . ' - ' . $anggota['nama'] ?>
            </section>
            <section class="p-2 h-14 w-32 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center justify-center">
                <?php echo $anggota['peran'] ?>
            </section>
        </div>
        <?php endforeach; ?>
    </span>

    <!-- Dosen Pembimbing -->
    <span class="flex flex-col gap-2">
        <p class="text-sm text-gray-400">Dosen Pembimbing & Peran</p>
        <div class="flex gap-2">
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataDosen['nama'] ?>
            </section>
            <section class="p-2 h-14 w-96 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $dataDosen['peran'] ?>
            </section>
        </div>
    </span>

    <!-- Lampiran -->
    <!-- <span class="flex flex-col gap-2">
        <h4>Lampiran</h4>
        <?php foreach ($dataLampiran as $lampiran): ?>
        <div class="flex gap-2 items-center">
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php echo $lampiran['nama_file'] ?>
            </section>
            <a href="<?php echo $lampiran['url'] ?>" target="_blank" class="h-14 w-14 flex items-center justify-center bg-gray-100 rounded-lg [box-shadow:0em_0.3em_0.3em#bcbcbc]">
            <span class="material-symbols-outlined">download</span>
            </a>
        </div>
        <?php endforeach; ?>
    </span> -->
    <!-- Lampiran -->
    <span class="flex flex-col gap-2">
        <h4>Lampiran</h4>
        <?php foreach ($dataLampiran as $lampiran): ?>
        <div class="flex flex-col gap-2">
            <!-- Keterangan file -->
            <p class="text-sm text-gray-500"><?php echo $lampiran['keterangan'] ?></p>
            <!-- Field file -->
            <div class="flex gap-2 items-center">
                <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                    <?php echo $lampiran['nama_file'] ?>
                </section>
                <a href="<?php echo $lampiran['url'] ?>" target="_blank" class="h-14 w-14 flex items-center justify-center bg-gray-100 rounded-lg [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                <span class="material-symbols-outlined">download</span>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </span> 

    <span class="flex flex-row-reverse relative gap-3">
        <!-- <?php if (!$isKajur) :?>
        <p class="w-36">
            *Wajib diisi.
        </p>
        <?php endif;?> -->
        <div class="flex flex-row-reverse gap-3 w-full">
            <button class="flex rounded-md  w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                <p>KEMBALI</p>
            </button>
        </div>
    </span>
</form>