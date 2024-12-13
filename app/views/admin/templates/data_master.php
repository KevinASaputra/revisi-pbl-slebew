<main class="bg-[#F7F7F8] flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px] min-h-[560px]">
    <section class="flex w-full justify-between">
        <span class="bg-[#2862C6] flex justify-center text-white px-6 py-3 rounded-sm gap-3">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.20924 0.854402C9.7226 0.354685 14.2773 0.354685 18.7907 0.854402C21.2896 1.13449 23.3057 3.10241 23.5989 5.61009C24.1337 10.1878 24.1337 14.8122 23.5989 19.3899C23.3057 21.8976 21.2896 23.8655 18.7907 24.1456C14.2773 24.6453 9.7226 24.6453 5.20924 24.1456C2.71032 23.8655 0.694256 21.8976 0.401037 19.3899C-0.133679 14.8127 -0.133679 10.1888 0.401037 5.61155C0.54935 4.39326 1.10473 3.26076 1.97717 2.39759C2.84961 1.53441 3.98798 0.991156 5.20778 0.855861M12 5.21621C12.2901 5.21621 12.5684 5.33149 12.7736 5.53667C12.9788 5.74185 13.0941 6.02014 13.0941 6.31031V11.4059H18.1896C18.4798 11.4059 18.7581 11.5212 18.9633 11.7264C19.1685 11.9315 19.2837 12.2098 19.2837 12.5C19.2837 12.7902 19.1685 13.0685 18.9633 13.2736C18.7581 13.4788 18.4798 13.5941 18.1896 13.5941H13.0941V18.6897C13.0941 18.9799 12.9788 19.2582 12.7736 19.4633C12.5684 19.6685 12.2901 19.7838 12 19.7838C11.7098 19.7838 11.4315 19.6685 11.2263 19.4633C11.0211 19.2582 10.9059 18.9799 10.9059 18.6897V13.5941H5.81027C5.52009 13.5941 5.24181 13.4788 5.03662 13.2736C4.83144 13.0685 4.71617 12.7902 4.71617 12.5C4.71617 12.2098 4.83144 11.9315 5.03662 11.7264C5.24181 11.5212 5.52009 11.4059 5.81027 11.4059H10.9059V6.31031C10.9059 6.02014 11.0211 5.74185 11.2263 5.53667C11.4315 5.33149 11.7098 5.21621 12 5.21621Z" fill="white" />
            </svg>
            <p class="font-medium">
                <?php
                echo "Tambah ";
                if ($isDataPembimbing) {
                    echo "Dosen";
                } else {
                    echo "Mahasiswa";
                } ?>
            </p>
        </span>
        <!-- search bar -->
        <span class="border-2 border-gray-400 flex justify-center w-7/12 rounded">
            <input type="text" class="p-3 w-full">
            <button class="rounded bg-white p-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.50025 1.91687e-08C7.14485 0.000115492 5.80912 0.324364 4.60451 0.945694C3.3999 1.56702 2.36135 2.46742 1.57549 3.57175C0.789633 4.67609 0.279263 5.95235 0.0869618 7.29404C-0.10534 8.63574 0.0260029 10.004 0.470032 11.2846C0.914061 12.5652 1.6579 13.7211 2.63949 14.6557C3.62108 15.5904 4.81196 16.2768 6.11277 16.6576C7.41358 17.0384 8.7866 17.1026 10.1173 16.8449C11.448 16.5872 12.6977 16.015 13.7623 15.176L17.4143 18.828C17.6029 19.0102 17.8555 19.111 18.1177 19.1087C18.3799 19.1064 18.6307 19.0012 18.8161 18.8158C19.0015 18.6304 19.1066 18.3796 19.1089 18.1174C19.1112 17.8552 19.0104 17.6026 18.8283 17.414L15.1763 13.762C16.1642 12.5086 16.7794 11.0024 16.9514 9.41573C17.1233 7.82905 16.8451 6.22602 16.1485 4.79009C15.4519 3.35417 14.3651 2.14336 13.0126 1.29623C11.66 0.449106 10.0962 -0.000107143 8.50025 1.91687e-08ZM2.00025 8.5C2.00025 6.77609 2.68507 5.12279 3.90406 3.90381C5.12305 2.68482 6.77635 2 8.50025 2C10.2242 2 11.8775 2.68482 13.0964 3.90381C14.3154 5.12279 15.0003 6.77609 15.0003 8.5C15.0003 10.2239 14.3154 11.8772 13.0964 13.0962C11.8775 14.3152 10.2242 15 8.50025 15C6.77635 15 5.12305 14.3152 3.90406 13.0962C2.68507 11.8772 2.00025 10.2239 2.00025 8.5Z" fill="black" fill-opacity="0.5" />
                </svg>
            </button>
        </span>
    </section>
    <section>
        <table class="w-full border-separate border-spacing-1">
            <thead>
                <tr class="font-semibold">
                    <th class="bg-gray-200 rounded p-3">
                        <?php echo $isDataPembimbing ? "NIP" : "NIM"; ?>
                    </th>
                    <th class="bg-gray-200 rounded p-3 w-6/12">
                        <?php echo $isDataPembimbing ? "Dosen" : "Mahasiswa"; ?>
                    </th>
                    <?php if (!$isDataPembimbing): ?>
                        <th class="bg-gray-200 rounded p-3">Prodi</th>
                        <th class="bg-gray-200 rounded p-3">Angkatan</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataToShow as $data): ?>
                    <tr
                        class="bg-white cursor-pointer hover:bg-gray-100"
                        onclick="window.location.href='https://google.com';">
                        <td class="p-3 text-center">
                            <?php echo $data['nomor_induk']; ?>
                        </td>
                        <td class="p-3 text-center">
                            <?php echo $data['name']; ?>
                        </td>
                        <?php if (!$isDataPembimbing): ?>
                            <td class="p-3 text-center">
                                <?php echo $data['prodi']; ?>
                            </td>
                            <td class="p-3 text-center">
                                <?php echo $data['angkatan']; ?>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</main>