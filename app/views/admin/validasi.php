<?php 
$title = "Daftar Submisi";
$description = "Ini adalah daftar submisi";
include "../../layouts/admin.php";
?>

<body class="bg-[#D9D9D9] font-sans">
  <section class="flex flex-col flex-1">
    <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
      <?php echo $title; ?></h4>
    <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
      <span>
        <div class="grid grid-cols-3">
          <figure class="bg-[#2862C6] text-white text-center p-2 text-xl rounded-t-lg">
            Diterima
          </figure>
          <figure class="bg-[#7794c6] text-white text-center p-2 text-xl rounded-t-lg">
            Ditolak
          </figure>
          <figure class="bg-[#7794c6] text-white text-center p-2 text-xl rounded-t-lg">
            Proses
          </figure>
        </div>
        <div class="bg-[#2862C6] min-h-96 rounded-b-lg p-1">
          <table class="w-full border-spacing-1 border-separate">
            <tr>
              <th class="bg-gray-400 rounded">
                No
              </th>
              <th class="bg-gray-400 rounded">
                Prestasi
              </th>
              <th class="bg-gray-400 rounded">
                Detail
              </th>
              <th class="bg-gray-400 rounded">
                Select
              </th>
            </tr>
            <tr>
              <td class="bg-gray-200 rounded p-2 text-center">
                1
              </td>
              <td class="bg-gray-200 rounded p-2">
                Gelatik
              </td>
              <td class="bg-gray-200 rounded p-2 text-center">
                <span class="material-symbols-outlined bg-[#2862C6] rounded text-white">
                  edit
                </span>
              </td>
              <td class="bg-gray-200 rounded p-2 text-center">
                <span class="material-symbols-outlined bg-[#2862C6] rounded text-white">
                  check
                </span>
              </td>
            </tr>
            <tr>
              <td class="bg-gray-200 rounded p-2 text-center">
                1
              </td>
              <td class="bg-gray-200 rounded p-2">
                Gelatik
              </td>
              <td class="bg-gray-200 rounded p-2 text-center">
                <span class="material-symbols-outlined bg-[#2862C6] rounded text-white">
                  edit
                </span>
              </td>
              <td class="bg-gray-200 rounded p-2 text-center">
                <span class="material-symbols-outlined border-[#2862C6] border-[3px] rounded text-white p-2 ">

                </span>
              </td>
            </tr>
          </table>
        </div>

      </span>
      <span class="flex flex-row-reverse ">
        <button class="bg-[#31E266] rounded-md px-8 py-2 text-white font-semibold">
          EXPORT
        </button>
      </span>
    </main>

</body>