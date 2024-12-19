<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        $sidebarPath = realpath("../app/views/mahasiswa/sidebar.php");
        if ($sidebarPath && file_exists($sidebarPath)) {
            include $sidebarPath;
        } else {
            echo '<p class="text-red-500 p-4">Error: Sidebar file tidak ditemukan. Pastikan path benar.</p>';
        }
    ?>
</body>

</html>