<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index" />
    <meta name="description" content="<?php echo htmlspecialchars($description ?? 'Default Description'); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($title ?? 'Default Title'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($description ?? 'Default Description'); ?>" />
    <meta property="og:image" content="/technorules/images/logo.svg" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title ?? 'Default Title'); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description ?? 'Default Description'); ?>" />
    <meta name="twitter:image" content="/technorules/images/logo.svg" />

    <title><?php echo htmlspecialchars($title ?? 'Default Title'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body class="bg-gray-100 font-sans">
    <!-- Sidebar -->
    <?php 
        $sidebarPath = realpath(__DIR__ . '/../views/mahasiswa/sidebar.php');
        if ($sidebarPath && file_exists($sidebarPath)) {
            include $sidebarPath;
        } else {
            echo '<p class="text-red-500 p-4">Error: Sidebar file tidak ditemukan. Pastikan path benar.</p>';
        }
    ?>

    <!-- Konten Utama -->
    <main class="p-8">
        <button class="triggerPopup bg-blue-500 text-white py-2 px-4 rounded">Buka Popup</button>
    </main>

    <!-- Popup -->
    <section id="popupContainer" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-md w-[455px] text-center shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Popup Judul</h2>
            <p class="mb-6">Isi dari popup Anda. Tambahkan konten di sini.</p>
            <button id="closePopup" class="bg-red-500 text-white py-2 px-4 rounded">Tutup</button>
        </div>
    </section>

    <!-- External JS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popupContainer = document.getElementById('popupContainer');
            const closePopup = document.getElementById('closePopup');

            // Menyembunyikan popup secara default
            popupContainer.classList.add('hidden');

            // Buka popup ketika tombol dengan class 'triggerPopup' diklik
            document.querySelectorAll('.triggerPopup').forEach(button => {
                button.addEventListener('click', () => {
                    popupContainer.classList.remove('hidden');
                });
            });

            // Tutup popup
            closePopup.addEventListener('click', () => {
                popupContainer.classList.add('hidden');
            });
        });
    </script>
</body>

</html>