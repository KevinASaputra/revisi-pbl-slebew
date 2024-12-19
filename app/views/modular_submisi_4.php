<?php
$fileUploadBoxes = [
    [
        'title' => 'File Surat Tugas',
        'description' => 'Surat tugas dari kompetisi yang diikuti.'
    ],
    [
        'title' => 'File Proposal Kompetisi',
        'description' => 'Proposal yang diajukan untuk mengikuti kompetisi.'
    ],
    [
        'title' => 'Foto Kegiatan',
        'description' => 'Foto dokumentasi kegiatan saat kompetisi.'
    ],
    [
        'title' => 'File Poster',
        'description' => 'Poster dari kompetisi yang diikuti.'
    ]
];
?>

<!-- BOX TEMPAT UPLOAD FILE -->
<?php foreach ($fileUploadBoxes as $box): ?>
    <div class="flex flex-col items-center justify-between bg-white [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-2xl w-96">
        <section class="flex flex-col items-center p-2">
            <h1 class="font-semibold text-2xl"><?php echo $box['title']; ?></h1>
            <p class="text-base text-gray-500"><?php echo $box['description']; ?></p>
            <img src="/assets/images/image_placeholder.png"; alt="placeholder" class="size-56 object-cover">
        </section>

        <!-- input or show -->
        <?php if ($isAdmin) : ?>
            <section class="w-[162px] bg-[#2862C6] rounded flex justify-center gap-4 px-2 py-2 text-white font-medium text-sm mb-3">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.75 14.25V18.5833C20.75 19.158 20.5217 19.7091 20.1154 20.1154C19.7091 20.5217 19.158 20.75 18.5833 20.75H3.41667C2.84203 20.75 2.29093 20.5217 1.8846 20.1154C1.47827 19.7091 1.25 19.158 1.25 18.5833V14.25M5.58333 8.83333L11 14.25M11 14.25L16.4167 8.83333M11 14.25V1.25" stroke="#F5F5F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                <p>Download</p>
            </section>
        <?php else: ?>
            <section class="w-full bg-[#2862C6] rounded-b-2xl flex justify-between px-4 py-2">
                <input type="file" class="custom-file-input">
                <p class="text-xs text-white">Ukuran max 5 MB</p>
            </section>
        <?php endif; ?>
    </div>
<?php endforeach; ?>