<?php
$title = "Konfigurasi Form Mahasiswa";
$description = "";

$options = [
    'jenis_kompetisi' => [
        'Akademik',
        'Non Akademik'
    ],
    'tingkat_kompetisi' => [
        'Nasional',
        'Internasional'
    ],
    'juara_kompetisi' => [
        'Juara Pertama',
        'Juara Kedua',
        'Juara Ketiga',
        'Juara Harapan Satu'
    ]
];

include "../../layouts/admin.php"; ?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-[#F7F7F8] flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px] min-h-[560px]">
            <span class="flex flex-col gap-3">
                <div>
                    <h4 class="font-semibold">
                        Nama Field
                    </h4>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        Jenis Kompetisi
                    </section>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Pilihan
                    </h4>
                    <section class="h-fit w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex flex-col">
                        <?php foreach ($options['jenis_kompetisi'] as $key) : ?>
                            <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                                <p class="border-b-2 border-gray-200 w-full">
                                    <?php echo $key; ?>
                                </p>
                                <button class="bg-gray-400 rounded-lg text-white p-1">
                                    <svg class="size-5" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.88462 6.68091V19.8059C1.88462 20.5278 2.50769 21.1184 3.26923 21.1184H15.7308C16.4923 21.1184 17.1154 20.5278 17.1154 19.8059V6.68091H1.88462ZM6.03846 18.4934H4.65385V9.30591H6.03846V18.4934ZM8.80769 18.4934H7.42308V9.30591H8.80769V18.4934ZM11.5769 18.4934H10.1923V9.30591H11.5769V18.4934ZM14.3462 18.4934H12.9615V9.30591H14.3462V18.4934ZM17.4615 2.74341H12.9615V1.10278C12.9604 0.84203 12.8507 0.592252 12.6562 0.40787C12.4617 0.223489 12.1982 0.119445 11.9231 0.118408L7.07692 0.118408C6.80184 0.119445 6.53834 0.223489 6.34383 0.40787C6.14932 0.592252 6.03956 0.84203 6.03846 1.10278V2.74341H1.53846C1.26304 2.74341 0.998908 2.84712 0.804158 3.03172C0.609409 3.21633 0.5 3.46671 0.5 3.72778V5.36841H18.5V3.72778C18.5 3.46671 18.3906 3.21633 18.1958 3.03172C18.0011 2.84712 17.737 2.74341 17.4615 2.74341ZM11.5769 2.74341H7.42308V1.44797H11.5769V2.74341Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                        <?php endforeach; ?>
                        <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                            <input type="text" class="w-full bg-transparent border-b-2 border-gray-200">
                            <button class="bg-gray-400 rounded-lg text-white p-1">
                                <svg class="size-5" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41699 9.20182H0.916992V7.03516H7.41699V0.535156H9.58366V7.03516H16.0837V9.20182H9.58366V15.7018H7.41699V9.20182Z" fill="white" />
                                </svg>

                            </button>
                        </div>
                    </section>
                </div>
            </span>
            <span class="flex flex-col gap-3">
                <div>
                    <h4 class="font-semibold">
                        Nama Field
                    </h4>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        Tingkat Kompetisi
                    </section>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Pilihan
                    </h4>
                    <section class="h-fit w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex flex-col">
                        <?php foreach ($options['tingkat_kompetisi'] as $key) : ?>
                            <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                                <p class="border-b-2 border-gray-200 w-full">
                                    <?php echo $key; ?>
                                </p>
                                <button class="bg-gray-400 rounded-lg text-white p-1">
                                    <svg class="size-5" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.88462 6.68091V19.8059C1.88462 20.5278 2.50769 21.1184 3.26923 21.1184H15.7308C16.4923 21.1184 17.1154 20.5278 17.1154 19.8059V6.68091H1.88462ZM6.03846 18.4934H4.65385V9.30591H6.03846V18.4934ZM8.80769 18.4934H7.42308V9.30591H8.80769V18.4934ZM11.5769 18.4934H10.1923V9.30591H11.5769V18.4934ZM14.3462 18.4934H12.9615V9.30591H14.3462V18.4934ZM17.4615 2.74341H12.9615V1.10278C12.9604 0.84203 12.8507 0.592252 12.6562 0.40787C12.4617 0.223489 12.1982 0.119445 11.9231 0.118408L7.07692 0.118408C6.80184 0.119445 6.53834 0.223489 6.34383 0.40787C6.14932 0.592252 6.03956 0.84203 6.03846 1.10278V2.74341H1.53846C1.26304 2.74341 0.998908 2.84712 0.804158 3.03172C0.609409 3.21633 0.5 3.46671 0.5 3.72778V5.36841H18.5V3.72778C18.5 3.46671 18.3906 3.21633 18.1958 3.03172C18.0011 2.84712 17.737 2.74341 17.4615 2.74341ZM11.5769 2.74341H7.42308V1.44797H11.5769V2.74341Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                        <?php endforeach; ?>
                        <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                            <input type="text" class="w-full bg-transparent border-b-2 border-gray-200">
                            <button class="bg-gray-400 rounded-lg text-white p-1">
                                <svg class="size-5" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41699 9.20182H0.916992V7.03516H7.41699V0.535156H9.58366V7.03516H16.0837V9.20182H9.58366V15.7018H7.41699V9.20182Z" fill="white" />
                                </svg>

                            </button>
                        </div>
                    </section>
                </div>
            </span>
            <span class="flex flex-col gap-3">
                <div>
                    <h4 class="font-semibold">
                        Nama Field
                    </h4>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        Juara Kompetisi
                    </section>
                </div>
                <div>
                    <h4 class="font-semibold">
                        Pilihan
                    </h4>
                    <section class="h-fit w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex flex-col">
                        <?php foreach ($options['juara_kompetisi'] as $key) : ?>
                            <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                                <p class="border-b-2 border-gray-200 w-full">
                                    <?php echo $key; ?>
                                </p>
                                <button class="bg-gray-400 rounded-lg text-white p-1">
                                    <svg class="size-5" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.88462 6.68091V19.8059C1.88462 20.5278 2.50769 21.1184 3.26923 21.1184H15.7308C16.4923 21.1184 17.1154 20.5278 17.1154 19.8059V6.68091H1.88462ZM6.03846 18.4934H4.65385V9.30591H6.03846V18.4934ZM8.80769 18.4934H7.42308V9.30591H8.80769V18.4934ZM11.5769 18.4934H10.1923V9.30591H11.5769V18.4934ZM14.3462 18.4934H12.9615V9.30591H14.3462V18.4934ZM17.4615 2.74341H12.9615V1.10278C12.9604 0.84203 12.8507 0.592252 12.6562 0.40787C12.4617 0.223489 12.1982 0.119445 11.9231 0.118408L7.07692 0.118408C6.80184 0.119445 6.53834 0.223489 6.34383 0.40787C6.14932 0.592252 6.03956 0.84203 6.03846 1.10278V2.74341H1.53846C1.26304 2.74341 0.998908 2.84712 0.804158 3.03172C0.609409 3.21633 0.5 3.46671 0.5 3.72778V5.36841H18.5V3.72778C18.5 3.46671 18.3906 3.21633 18.1958 3.03172C18.0011 2.84712 17.737 2.74341 17.4615 2.74341ZM11.5769 2.74341H7.42308V1.44797H11.5769V2.74341Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                        <?php endforeach; ?>
                        <div class="py-2 pr-2 pl-12 h-14 w-full flex items-center justify-between">
                            <input type="text" class="w-full bg-transparent border-b-2 border-gray-200">
                            <button class="bg-gray-400 rounded-lg text-white p-1">
                                <svg class="size-5" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41699 9.20182H0.916992V7.03516H7.41699V0.535156H9.58366V7.03516H16.0837V9.20182H9.58366V15.7018H7.41699V9.20182Z" fill="white" />
                                </svg>

                            </button>
                        </div>
                    </section>
                </div>
            </span>
            <span class="flex flex-row-reverse gap-3 w-full">

                <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>TERAPKAN</p>
                </button>
                <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KEMBALI</p>
                </button>
            </span>
        </main>

    </section>

</body>