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
        'name' => 'Data',
        'icon' => '<span class="material-symbols-outlined size-6"> task</span>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Tambah Admin',
        'icon' => '<svg class="size-6" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.33203 15C8.33203 11.6016 10.8789 8.80078 14.1641 8.39062V8.33203C14.3789 8.01953 14.9961 7.5 14.9961 6.66406C14.9961 5.82813 14.1641 4.99609 14.1641 4.58203C14.168 1.25 12.4688 0 10 0C7.63672 0 5.83203 1.25 5.83203 4.58203C5.83203 5 5 5.83203 5 6.66406C5 7.49609 5.59375 8.04688 5.83203 8.33203C5.83203 8.33203 5.83203 9.16406 6.25 10.4141C6.25 10.832 7.08203 11.2461 7.5 11.6641C7.5 12.082 7.5 12.4961 7.08203 13.332L2.5 14.168C0.832031 14.582 0 17.5 0 20H10.6016C9.21484 18.7773 8.33203 16.9922 8.33203 15ZM15 10C12.2383 10 10 12.2383 10 15C10 17.7617 12.2383 20 15 20C17.7617 20 20 17.7617 20 15C20 12.2383 17.7617 10 15 10ZM18.332 15.832H15.832V18.332H14.1641V15.832H11.6641V14.1641H14.1641V11.6641H15.832V14.1641H18.332V15.832Z" fill="white"/>
</svg>
',
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
                    <p class="truncate">Kajur</p>
                    <p>1456789456</p>
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
            <a href="/Mawapres-Website/resources/views/kajur/<?php echo strtolower(str_replace(' ', '_', $menu['name'])); ?>.php" class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass($menu['page_dir']); ?>">
                <?php
                echo $menu['icon'];
                ?>
                &ensp;
                <h5 class="mr-3">
                    <?php echo $menu['name']; ?>
                </h5>
            </a>
        <?php endforeach; ?>
        <div class="mt-72 flex justify-center text-white items-center gap-1">
            <span class="material-symbols-outlined">
                logout
            </span>
            <p>Keluar</p>
        </div>
    </section>
</aside>