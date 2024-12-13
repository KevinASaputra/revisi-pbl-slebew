<?php 
$title = "Beranda";
$description = "Ini adalah beranda admin.";
include "../../layouts/admin.php";
?>
<body class="bg-[#D9D9D9] font-sans flex flex-row">

    <!-- MAIN CONTENT -->
    <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
        <h1 class="text-3xl font-bold">Selamat Datang di SARIS</h1>
        <section class="flex flex-row w-full gap-[90px] ml-10 items-center">
            <div class="relative inline-block">
                <!-- Foto Profil -->
                <img
                    src="../../../public/assets/images/image.png"
                    alt="profile"
                    class="w-64 h-64 object-cover rounded-2xl" />
                <!-- Icon add_a_photo -->
                <span class="material-symbols-outlined absolute bottom-2 right-2 bg-[#2862C6] p-3 rounded-full text-white">
                    add_a_photo
                </span>
            </div>
            <div class="flex flex-col items-center gap-8 text-2xl">
                <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                    Alan Walker
                </span>
                <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                    12349802094383248
                </span>
            </div>
        </section>
        <section class="flex justify-center gap-32 text-xl pt-10">
            <a href="validasi.php" class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-10">
                Validasi
            </a>
        </section>
    </main>
    <!-- Pop up Ganti Password -->
  <section class="hidden fixed h-screen w-screen grid place-items-center bg-white bg-opacity-50">
    <form action="" class="fixed flex flex-col bg-white p-6 rounded-md text-[#2862C6] w-[455px] items-center gap-5">
      <h4 class="text-2xl font-semibold flex-1 ">Ganti Password</h4>
      <div class="flex flex-col items-start w-full">
        <p>Password Lama</p>
        <input type="password" name="password_lama" id="password_lama" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <div class="flex flex-col items-start w-full">
        <p>Password Baru</p>
        <input type="password" name="password_baru" id="password_baru" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <div class="flex flex-col items-start w-full">
        <p>Konfirmasi Password</p>
        <input type="password" name="password_baru_konfirmasi" id="password_baru_konfirmasi" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <span class="flex flex-row-reverse w-full justify-between">
        <button class="bg-[#2862C6] text-white p-3 rounded-lg gap-1 w-48">
          Konfirmasi
        </button>
        <button class="bg-white text-[#2862C6] p-3 rounded-lg gap-1 border-[#2862C6] border-2 w-48">
          Batal
        </button>
      </span>
    </form>
  </section>
  <!-- ------------ -->

  <!-- Pop up Ganti Foto -->
  <section class="hidden fixed h-screen w-screen grid place-items-center bg-white bg-opacity-50">
    <div action="" class="fixed flex flex-col bg-white p-6 rounded-md text-[#2862C6] w-[455px] items-center gap-5">
      <h4 class="text-2xl font-semibold flex-1 ">Ganti Foto Profil</h4>

      <span class="bg-gradient-to-tr from-purple-700 to-red-600 p-3 rounded-full size-40">

      </span>
      <span class="w-full border-2 p-1 rounded border-[#2862C6]">
        <button class="bg-[#2862C6] text-white p-1 rounded text-sm">
          Upload Foto
        </button>
      </span>

      <span class="flex flex-row-reverse w-full justify-between">
        <button class="bg-[#2862C6] text-white p-3 rounded-lg gap-1 w-48">
          Konfirmasi
        </button>
        <button class="bg-white text-[#2862C6] p-3 rounded-lg gap-1 border-[#2862C6] border-2 w-48">
          Batal
        </button>
      </span>
    </div>
  </section>
  <!-- ------------ -->
</body>
