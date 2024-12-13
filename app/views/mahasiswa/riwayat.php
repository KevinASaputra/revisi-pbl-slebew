<?php
$title = "Riwayat Submisi";
$description = "Riwayat Submisi";
include "../../layouts/mahasiswa.php";


// dummy
enum Status
{
    case Ditolak;
    case Diterima;
    case Proses;
}

$dataToShow = [
    [
        'nama_kompetisi' => 'Gelatik',
        'penyelenggara' => 'Kemdikbud',
        'tanggal_submisi' => '2020-12-30',
        'status' => Status::Proses,
        'deskripsi' => ''
    ],
    [
        'nama_kompetisi' => 'Gemastik',
        'penyelenggara' => 'Kemdikbud',
        'tanggal_submisi' => '2020-12-12',
        'status' => Status::Ditolak,
        'deskripsi' => 'Scan sertifikasi buram.'
    ],
    [
        'nama_kompetisi' => '4C National Competition',
        'penyelenggara' => 'UB',
        'tanggal_submisi' => '2020-12-12',
        'status' => Status::Diterima,
        'deskripsi' => 'Scan sertifikasi buram.'
    ]
];

?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?></h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-col">
                <table id="dynamicTable" class="border-separate border-spacing-1">
                    <thead>
                        <tr>
                            <th class="bg-gray-400 rounded p-3">No</th>
                            <th class="bg-gray-400 rounded p-3">Prestasi</th>
                            <th class="bg-gray-400 rounded p-3">Status</th>
                            <th class="bg-gray-400 rounded p-3">Deskripsi</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($dataToShow as $data): ?>
                            <tr class="group">
                                <td class="text-center flex-1 bg-gray-200 rounded group-hover:bg-gray-300">
                                    <?php echo $i; $i++;?>
                                </td>
                                <!-- include row template -->
                                <!-- di dalam udah ada <tr> -->
                                <?php include "template/history_module_template.php" ?>

                                <td class="text-center bg-gray-200 rounded group-hover:bg-gray-300">
                                    <?php if ($data['status'] == Status::Proses) { ?>
                                        <section class="flex items-center justify-center gap-1 text-gray-500">

                                            <span class="material-symbols-outlined">
                                                do_not_disturb_on
                                            </span>
                                            Proses
                                        </section>
                                    <?php } elseif ($data['status'] == Status::Ditolak) { ?>
                                        <section class="flex items-center justify-center gap-1 text-[#EB1717]">
                                            <span class="material-symbols-outlined">
                                                cancel
                                            </span>
                                            Invalid
                                        </section>
                                    <?php } elseif ($data['status'] == Status::Diterima) { ?>
                                        <section class="flex items-center justify-center gap-1 text-[#13CB32]">

                                            <span class="material-symbols-outlined">
                                                check_circle
                                            </span>
                                            Valid
                                        </section>
                                    <?php } else { ?>
                                        eror
                                    <?php } ?>
                                </td>

                                <td class="text-center flex-1 bg-gray-200 rounded w-44 group-hover:bg-gray-300">
                                    <p class="font-medium text-wrap">
                                        Menunggu Validasi
                                    </p>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </span>
        </main>
    </section>
</body>