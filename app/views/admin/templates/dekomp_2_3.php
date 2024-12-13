<?php 
function concateNomorIndukNama($nomor_induk, $name) {
    return $nomor_induk . ' - ' . $name;
}
?>

<span class="flex flex-col gap-8">
    <table id="dynamicTable" class="border-separate border-spacing-1">
        <tr>
            <th class="bg-gray-400 rounded p-3">No</th>
            <th class="bg-gray-400 rounded p-3"><?php if ($isDataPembimbing) {echo "Dosen";}else{echo "Mahasiswa";}?></th>
            <th class="bg-gray-400 rounded p-3">Peran</th>
        </tr>
        <?php foreach ($dataToShow as $data): ?>
        <tr>
            <td class="text-center bg-gray-200 rounded py-3">
                1
            </td>
            <td class="bg-gray-200 rounded p-3">
                <p class="truncate w-full">
                    <?php 
                        // echo concateNomorIndukNama($data['nomor_induk'], $data['name']);
                        echo concateNomorIndukNama($data['nomor_induk'], $data['name']);
                    ?>
                </p>
                
            </td>
            <td class="bg-gray-200 rounded p-3 w-96">
                <p class="truncate w-full text-wrap">
                    <?php echo $data['role'];?>
                </p>

            </td>
            
        </tr>
        <?php endforeach; ?>
    </table>
</span>
<span class="flex flex-row-reverse relative gap-3">
    <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
        <p>LANJUT</p>
        <span class="material-symbols-outlined">
            arrow_forward
        </span>
    </button>
    <button class="flex rounded-md  w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
        <p>KEMBALI</p>

    </button>
</span>