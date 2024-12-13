<main class="bg-[#F7F7F8] flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px] min-h-[560px]">
    <span class="flex flex-col gap-2">
        <div>
            <h4 class="font-semibold">
                <?php echo $fieldName[0]; ?>
            </h4>
            <p class="text-sm text-gray-400">
                <?php echo "Tulis " . $fieldName[0]; ?>
            </p>
        </div>
        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nomor_induk" id="nomor_induk"
            value="<?php if ($isEdit) {
                        echo $dataToShow['nomor_induk'];
                    } ?>">
    </span>
    <span class="flex flex-col gap-2">
        <div>
            <h4 class="font-semibold">
                <?php echo $fieldName[1]; ?>
            </h4>
            <p class="text-sm text-gray-400">
                <?php echo "Tulis " . $fieldName[1]; ?>
            </p>
        </div>
        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="name" id="name"
            value="<?php if ($isEdit) {
                        echo $dataToShow['name'];
                    } ?>">
    </span>
    <?php if (!$isDataPembimbing) : ?>
        <span class="flex flex-col gap-2">
            <div>
                <h4 class="font-semibold">
                    <?php echo $fieldName[2]; ?>
                </h4>
                <p class="text-sm text-gray-400">
                    <?php echo "Tulis " . $fieldName[2]; ?>
                </p>
            </div>
            <select name="prodi" id="prodi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                <?php foreach ($prodiOptions as $option): ?>
                    <option value="<?php echo $option; ?>">
                        <?php echo $option; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </span>
        <span class="flex flex-col gap-2">
            <div>
                <h4 class="font-semibold">
                    <?php echo $fieldName[3]; ?>
                </h4>
                <p class="text-sm text-gray-400">
                    <?php echo "Tulis " . $fieldName[3]; ?>
                </p>
            </div>
            <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="angkatan" id="angkatan"
                value="<?php if ($isEdit) {
                            echo $dataToShow['angkatan'];
                        } ?>">
        </span>
    <?php endif; ?>
    <span class="flex flex-col gap-2">
        <div>
            <h4 class="font-semibold">
                <?php echo $fieldName[2]; ?>
            </h4>
            <p class="text-sm text-gray-400">
                <?php echo "Tulis " . $fieldName[2]; ?>
            </p>
        </div>
        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="password" name="password" id="password" value="">
    </span>

    <div class="flex flex-row-reverse gap-3 w-full">
        <?php if ($isEdit) : ?>
            <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                <p>TERAPKAN</p>
            </button>
        <?php else : ?>
            <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                <p>TAMBAH</p>
            </button>
        <?php endif; ?>
        <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
            <p>KEMBALI</p>
        </button>
    </div>
</main>