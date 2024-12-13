<?php
include "../SidebarButton.php";

// Membuat objek SidebarButton
$sidebarButton = new SidebarButton();

$sidebarMenu = [
    [
        'name' => 'Beranda',
        'icon' => '<span class="material-symbols-outlined size-6">home</span>',
        'page_dir' => ['/src/frontend/admin/beranda.php'],
    ],
    [
        'name' => 'Validasi',
        'icon' => '<span class="material-symbols-outlined size-6"> task</span>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Master Mahasiswa',
        'icon' => '<span class="material-symbols-outlined size-6">school </span>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Master Dosen',
        'icon' => '<svg class="fill-white size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384l0-128 16 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-288 56 0 64 0 16 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-16 0 0-64 192 0 0 192-192 0 0-32-64 0 0 48c0 26.5 21.5 48 48 48l224 0c26.5 0 48-21.5 48-48l0-224c0-26.5-21.5-48-48-48L368 0c-26.5 0-48 21.5-48 48l0 80-76.9 0-65.9 0c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9 120 480c0 17.7 14.3 32 32 32s32-14.3 32-32z"/></svg>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Konfigurasi Form',
        'icon' => '<svg class="fill-white size-6" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V17C0 17.5304 0.210714 18.0391 0.585786 18.4142C0.960859 18.7893 1.46957 19 2 19H5V17H2V2H14V6H16V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0H2ZM5 5C4.73478 5 4.48043 5.10536 4.29289 5.29289C4.10536 5.48043 4 5.73478 4 6C4 6.26522 4.10536 6.51957 4.29289 6.70711C4.48043 6.89464 4.73478 7 5 7H9C9.26522 7 9.51957 6.89464 9.70711 6.70711C9.89464 6.51957 10 6.26522 10 6C10 5.73478 9.89464 5.48043 9.70711 5.29289C9.51957 5.10536 9.26522 5 9 5H5ZM12.949 8.811C13.5132 8.25603 14.2739 7.94648 15.0653 7.9498C15.8567 7.95311 16.6147 8.26902 17.1743 8.8287C17.7338 9.38838 18.0496 10.1465 18.0527 10.9379C18.0558 11.7293 17.7461 12.4899 17.191 13.054L11.535 18.711C11.3475 18.8986 11.0932 19.0039 10.828 19.004H7.999C7.73378 19.004 7.47943 18.8986 7.29189 18.7111C7.10436 18.5236 6.999 18.2692 6.999 18.004V15.175C6.99906 14.9098 7.10445 14.6555 7.292 14.468L12.949 8.811ZM15.777 10.225C15.5895 10.0375 15.3352 9.93221 15.07 9.93221C14.8048 9.93221 14.5505 10.0375 14.363 10.225L15.777 11.64C15.87 11.5471 15.9437 11.4368 15.9941 11.3154C16.0444 11.194 16.0703 11.0639 16.0703 10.9325C16.0703 10.8011 16.0444 10.671 15.9941 10.5496C15.9437 10.4282 15.87 10.3179 15.777 10.225ZM14.363 13.054L12.949 11.64L8.999 15.59V17.004H10.413L14.363 13.054Z" fill="white"/></svg>',
        'page_dir' => ['-'],
    ],

];

?>

<aside class="bg-[#D9D9D9] h-screen flex flex-col fixed top-0 left-0  ">
    <!-- PROFILE BOX -->
    <section class="flex items-center rounded-sm">
        <figure class="bg-[#2862C6]">
            <div class="flex gap-3 text-xs bg-[#D9D9D9] p-2 rounded-br-xl">
                <img src="../../../public/assets/images/image.png" alt="profile" class="size-12 rounded-full object-cover" />
                <span class="flex flex-col gap-2 w-44">
                    <p class="truncate">Muhammad Erril Putra Pratidina</p>
                    <p>2341720183</p>
                </span>
            </div>
        </figure>
        <div class="bg-[#2862C6] container-fluid px-4 py-[17px] rounded-tl-xl">
            <span class="material-symbols-outlined text-white">
                left_panel_close
            </span>

        </div>
    </section>

    <!-- MENU STUFF -->
    <section class="flex flex-col px-2 py-2 rounded-tl-xl bg-[#2862C6] flex-1">
        <!-- NAVIGATION ELEMENTS -->
        <?php foreach ($sidebarMenu as $menu) : ?>
            <a href="/Mawapres-Website/resources/views/admin/<?php echo strtolower(str_replace(' ', '_', $menu['name'])); ?>.php" class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass($menu['page_dir']); ?>">
                <?php
                echo $menu['icon'];
                ?>
                &ensp;
                <h5 class="mr-3">
                    <?php echo $menu['name']; ?>
                </h5>
            </a>
        <?php endforeach; ?>

    </section>
</aside>