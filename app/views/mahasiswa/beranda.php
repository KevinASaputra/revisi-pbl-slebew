<?php
$title = "Beranda";
$description = "Ini adalah beranda mahasiswa.";

$nama = $_SESSION['user']['nama'] ?? 'Nama tidak ditemukan';
$nim = $_SESSION['user']['identifier'] ?? 'NIM tidak ditemukan';

include __DIR__ . '/../../layouts/mahasiswa.php';
?>

<!-- MAIN CONTENT -->

<body class="bg-[#D9D9D9] font-sans flex flex-row">
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
        <span
          onclick="showPopup('changePhoto')"
          class="material-symbols-outlined absolute bottom-2 right-2 bg-[#2862C6] p-3 rounded-full text-white cursor-pointer">
          add_a_photo
        </span>
      </div>
      <div class="flex flex-col items-center gap-8 text-2xl">
        <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
          <?php echo htmlspecialchars($nama); ?>
        </span>
        <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
          <?php echo htmlspecialchars($nim); ?>
        </span>
      </div>
    </section>
    <section class="flex justify-center gap-32 text-xl pt-10">
      <button onclick="showPopup('changePassword')" class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-10">
        Ganti Password
      </button>
    </section>
  </main>

  <!-- Pop up Ganti Password -->
  <section id="changePassword" class="popup hidden fixed inset-0 bg-white bg-opacity-50 grid place-items-center">
    <form action="" method="POST" class="flex flex-col bg-white p-6 rounded-md text-[#2862C6] w-[455px] items-center gap-5">
      <h4 class="text-2xl font-semibold flex-1">Ganti Password</h4>
      <div class="flex flex-col items-start w-full">
        <label for="password_lama">Password Lama</label>
        <input type="password" name="password_lama" id="password_lama" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <div class="flex flex-col items-start w-full">
        <label for="password_baru">Password Baru</label>
        <input type="password" name="password_baru" id="password_baru" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <div class="flex flex-col items-start w-full">
        <label for="password_baru_konfirmasi">Konfirmasi Password</label>
        <input type="password" name="password_baru_konfirmasi" id="password_baru_konfirmasi" class="w-full border-[#2862C6] border-2 rounded">
      </div>
      <div class="flex flex-row-reverse w-full justify-between">
        <button type="submit" class="bg-[#2862C6] text-white p-3 rounded-lg gap-1 w-48">Konfirmasi</button>
        <button type="button" onclick="hidePopup('changePassword')" class="bg-white text-[#2862C6] p-3 rounded-lg gap-1 border-[#2862C6] border-2 w-48">
          Batal
        </button>
      </div>
    </form>
  </section>

  <!-- Pop up Ganti Foto -->
  <section id="changePhoto" class="popup hidden fixed inset-0 bg-white bg-opacity-50 grid place-items-center">
    <form action="" class="flex flex-col bg-white p-6 rounded-md text-[#2862C6] w-[455px] items-center gap-5">
      <h4 class="text-2xl font-semibold flex-1">Ganti Foto Profil</h4>
      <input type="file" name="profile_photo" accept="image/*" class="w-full border-2 p-1 rounded border-[#2862C6]">
      <div class="flex flex-row-reverse w-full justify-between">
        <button type="submit" class="bg-[#2862C6] text-white p-3 rounded-lg gap-1 w-48">Konfirmasi</button>
        <button type="button" onclick="hidePopup('changePhoto')" class="bg-white text-[#2862C6] p-3 rounded-lg gap-1 border-[#2862C6] border-2 w-48">
          Batal
        </button>
      </div>
    </form>
  </section>

  <script>
    // Menampilkan popup berdasarkan ID
    function showPopup(id) {
      document.getElementById(id).classList.remove('hidden');
    }

    // Menyembunyikan popup berdasarkan ID
    function hidePopup(id) {
      document.getElementById(id).classList.add('hidden');
    }
  </script>
</body>