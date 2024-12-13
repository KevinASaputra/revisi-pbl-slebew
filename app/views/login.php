<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saris</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const showPasswordCheckbox = document.getElementById('showPassword');
            const passwordInput = document.getElementById('password');

            showPasswordCheckbox.addEventListener('change', function () {
                passwordInput.type = this.checked ? 'text' : 'password';
            });

            const forgotPasswordButton = document.getElementById('forgotPassword');
            const popup = document.getElementById('passwordPopup');
            const closeButton = document.getElementById('closePopup');

            popup.style.display = 'none';

            forgotPasswordButton.addEventListener('click', function (e) {
                e.preventDefault();
                popup.style.display = 'flex';
            });

            closeButton.addEventListener('click', function () {
                popup.style.display = 'none';
            });
        });
    </script>
</head>

<body class="relative">

    <!-- pop-up ganti password -->
    <section id="passwordPopup" class="fixed h-screen w-screen grid place-items-center justify-center bg-white bg-opacity-50 z-20">
        <div class="fixed flex flex-col bg-white p-6 rounded-md w-[455px] items-center gap-5">
            <span>
                <h4 class="text-2xl font-semibold flex-1 text-[#2862C6]">Pemulihan Password</h4>
                <p class="">Langkah-langkah pemulihan password.</p>
            </span>
            <span class="flex flex-col gap-1">
                <h4 class="text-[#2862C6] font-semibold">1. Hubungi Admin Kampus</h4>
                <p>
                    Silakan menghubungi admin kampus dan sampaikan bahwa Anda lupa password akun.
                </p>
            </span>
            <span class="flex flex-col gap-1">
                <h4 class="text-[#2862C6] font-semibold">2. Berikan Informasi Diri</h4>
                <p>
                    Mohon sertakan nama lengkap dan NIM yang digunakan untuk login
                </p>
            </span>
            <span class="flex flex-col gap-1">
                <h4 class="text-[#2862C6] font-semibold">3. Verifikasi Nomor Telepon</h4>
                <p>
                    Untuk keperluan verifikasi, harap mencantumkan nomor telepon yang dapat dihubungi.
                </p>
            </span>
            <span class="flex flex-col gap-1">
                <h4 class="text-[#2862C6] font-semibold">4. Ikuti Instruksi Selanjutnya</h4>
                <p>
                    Admin akan memberikan panduan lebih lanjut mengenai prosedur reset password.
                </p>
            <span class="flex flex-row-reverse w-full justify-between">
            <a href="https://wa.me/6287859882508?text=Pak/Bu%20saya%20ingin%20mereset%20kata%20sandi" 
                target="_blank" 
                class="bg-[#2862C6] text-white p-3 rounded-lg gap-1 w-48 text-center">
                Kontak
            </a>
            <button id="closePopup" class="bg-white text-[#2862C6] p-3 rounded-lg gap-1 border-[#2862C6] border-2 w-48">
                Batal
            </button>
        </span>
        </div>
    </section>
    <!-- ------------ -->

    <main class="relative flex items-center justify-center min-h-screen">
        <section class="bg-[#2862C6] p-8 rounded-lg shadow-lg relative">
            <div class="absolute inset-0 bg-cover bg-center opacity-[0.06]" style="background-image: url('/assets/images/pola.jpg');"></div>

            <form method="POST" class="flex flex-col items-center p-4 gap-1 w-96 relative z-10">
                <span class="flex flex-col items-center">
                    <h1 class="font-bold mb-4 text-3xl text-white">
                        LOGIN
                    </h1>
                    <p class="mb-4 text-white">Silakan masukkan akun Anda.</p>
                </span>

                <!-- NIM/NIP -->
                <input type="text" name="identifier" id="username" placeholder="NIM/NIP" class="border rounded-md w-full mb-4 p-2 flex-1 bg-[#F0EDFF]" required>

                <!-- Password -->
                <div class="w-full mb-4">
                    <input type="password" name="password" id="password" placeholder="Password" class="border rounded-md w-full p-2 flex-1 bg-[#F0EDFF]" required>
                    <label for="showPassword" class="mt-2 flex items-center text-white cursor-pointer">
                        <input type="checkbox" id="showPassword" class="mr-2">
                        Tampilkan Password
                    </label>
                </div>

                <!-- Submit Button -->
                <span class="flex flex-col gap-5">
                    <button type="submit" class="bg-[#F35804] text-white py-2 px-4 rounded-md font-bold text-xl transition hover:scale-110 ease-in-out hover:shadow-xl duration-500'">MASUK</button>
                    <button id="forgotPassword" class="bg-[#F35804] text-white px-4 py-1 mt-2 rounded-full font-bold text-xs">Lupa Password?</button>
                </span>
            </form>
        </section>
    </main>

    <figure class="fixed top-0 left-0 w-screen h-screen -z-10">
        <img src="/assets/images/grapol.jpg" alt="Gambar 1" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <img src="/assets/images/glass.jpg" alt="Gambar 2" class="absolute inset-0 w-full h-full object-cover opacity-25">
        <div class="bg-gradient-to-tr from-[#2337EB] to-[#1278DE] absolute inset-0 w-full h-full opacity-20"></div>
    </figure>
</body>

</html>