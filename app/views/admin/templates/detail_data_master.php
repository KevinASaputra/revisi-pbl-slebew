<main class="bg-[#F7F7F8] flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px] min-h-[560px]">
    <?php
    $i = 0;
    foreach ($dataToShow as $key => $data) : ?>
        <span>
            <h4 class="font-semibold">
                <?php echo $fieldName[$i]; ?>
            </h4>
            <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                <?php
                // Jika key adalah 'password', tampilkan asterisk
                echo ($key === 'password') ? str_repeat('*', strlen($data)) : $data;
                ?>
            </section>
        </span>
        <?php $i += 1; ?>
    <?php endforeach; ?>

    <div class="flex flex-row-reverse gap-3 w-full">
        <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#5088DA] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
            <p>EDIT</p>
        </button>
        <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#EC6565] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
            <p>HAPUS</p>
        </button>
        <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
            <p>EDIT</p>
        </button>
    </div>
</main>