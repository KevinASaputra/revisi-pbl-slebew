<?php
$nama = $_SESSION['user']['nama'] ?? 'Nama tidak ditemukan';
$nim = $_SESSION['user']['identifier'] ?? 'NIM tidak ditemukan';
$foto_profil = $_SESSION['user']['foto_profil'] ?? 'image_placeholder.png'
?>

<aside class="bg-[#D9D9D9] h-screen flex flex-col fixed top-0 left-0 z-40">
    <!-- PROFILE BOX -->
    <section class="flex items-center rounded-sm">
        <figure class="bg-[#2862C6]">
            <div class="flex gap-3 text-xs bg-[#D9D9D9] p-2 rounded-br-xl">
                <img src="/assets/images/<?php echo $foto_profil; ?>" alt="profile" class="size-12 rounded-full object-cover" />
                <span class="flex flex-col gap-2 w-44">
                    <p class="truncate"><?php echo htmlspecialchars($nama); ?></p>
                    <p><?php echo htmlspecialchars($nim); ?></p>
                </span>
            </div>
        </figure>
        <div class="bg-[#2862C6] container-fluid px-4 py-[17px] rounded-tl-xl">
            <span class="material-symbols-outlined text-white">
                left_panel_close
            </span>
        </div>
    </section>

    <section class="flex flex-col px-2 py-2 rounded-tl-xl bg-[#2862C6] flex-1">
        <!-- NAVIGATION ELEMENTS -->
        <a href="/mahasiswa/beranda" class="flex p-3 rounded-lg text-white hover:bg-gray-700">
            <span class="material-symbols-outlined">home</span>
            &ensp;
            <h5 class="mr-3">Beranda</h5>
        </a>
        <a href="/mahasiswa/submisi" class="flex p-3 rounded-lg text-white hover:bg-gray-700">
            <span class="material-symbols-outlined">cloud_upload</span>
            &ensp;
            <h5 class="mr-3">Submisi</h5>
        </a>
        <a href="/mahasiswa/riwayat" class="flex p-3 rounded-lg text-white hover:bg-gray-700">
            <span class="material-symbols-outlined">history</span>
            &ensp;
            <h5 class="mr-3">Riwayat</h5>
        </a>
        <a href="/logout" class="flex p-3 rounded-lg text-white hover:bg-gray-700">
            <span class="material-symbols-outlined">logout</span>
            &ensp;
            <h5 class="mr-3">Keluar</h5>
        </a>
    </section>
</aside>