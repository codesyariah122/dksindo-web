<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKASA FARM DOMBA AING</title>
    <link rel="canonical" href="https://dksindo.com/contoh-website" />
    <link rel="icon" href="https://dksindo.com/contoh-website/assets/favico/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="https://dksindo.com/contoh-website/assets/favico/favicon.ico" type="image/x-icon">
    <meta name="description" content="PRAKAS FARM | DOMBA AING">
    <meta name="keywords" content="PRAKAS FARM DOMBA AING | Penyedia Hewan Quran dan Aqiqah">
    <meta name="author" content="PRAKAS FARM | DOMBA AING">
    <meta property="og:url" content="https://dksindo.com/contoh-website">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="PRAKAS FARM | DOMBA AING - Penyedia Hewan Quran dan Aqiqah" />
    <meta property="og:title" content="PRAKAS FARM | DOMBA AING">
    <meta property="og:description" content="PRAKAS FARM DOMBA AING | Penyedia Hewan Quran dan Aqiqah">
    <meta property="og:image" content="https://dksindo.com/contoh-website/assets/images/hero-img.png">
    <meta property="og:image:width" content="600>" />
    <meta property="og:image:height" content="600" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style>
        /* Tambahkan gaya CSS untuk navbar sticky di sini */
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .video-container {
            position: relative;
            display: block;
            width: 100%;
        }

        .video-container video {
            width: 100%;
            height: auto;
        }
    </style>

</head>

<body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <nav class="bg-gray-800 p-4 text-white" id="navbar">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">
                <img src="https://dksindo.com/contoh-website/assets/img/logo-aqiqah.png" alt="aqiqah-logo" class="lg:w-48 w-36" />
            </a>
            <ul class="flex space-x-4">
                <li><a href="#product" class="hover:text-gray-300">Produk</a></li>
                <li><a href="#gallery-img" class="hover:text-gray-300">Gallery</a></li>
                <li><a href="#contact" class="hover:text-gray-300">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-cover lg:h-96 sm:h-40" style="background-image: url('https://dksindo.com/contoh-website/assets/images/bg-hero.png');">
        <div class="container mx-auto text-center py-16">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="https://dksindo.com/contoh-website/assets/images/hero-img.png" alt="hero-aqiqah-img" class="w-[80vh] mx-auto py-2" />
            </div>
        </div>
    </div>

    <!-- <div id="popup-modal" tabindex="-1" class="block overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Product Section -->
    <div id="product" class="container mx-auto my-24">
        <h2 class="text-2xl font-bold mb-8">Produk Domba Qurban dan Aqiqah Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://dksindo.com/contoh-website/assets/images/product/domba2.jpeg" alt="Kambing 1" class="w-full h-60 mb-4 rounded">
                <h3 class="text-lg font-bold mb-2">Domba Qurban Grade A</h3>
                <p class="text-gray-600">Domba sehat dan berkualitas.</p>
                <p class="text-gray-800 mt-2">Harga: Rp. 4.500.000</p>
                <div class="flex justify-center">
                    <div>
                        <button onclick="whatsappRedirect('6283822395226', {name: 'Prakasa Farm', service: 'Saya ingin memesan kambing qurban/aqiqah paket harga Rp. 2.500.000.'})" class="mt-4 bg-yellow-500 text-gray-900 px-4 py-2 rounded-full hover:bg-yellow-400">Beli Sekarang <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://dksindo.com/contoh-website/assets/images/product/domba1.jpeg" alt="Kambing 2" class="w-full h-60 mb-4 rounded">
                <h3 class="text-lg font-bold mb-2">Domba Qurban Grade B</h3>
                <p class="text-gray-600">Domba besar dan kuat.</p>
                <p class="text-gray-800 mt-2">Harga: Rp. 3.800.000</p>
                <div class="flex justify-center">
                    <div>
                        <button onclick="whatsappRedirect('6283822395226', {name: 'Prakasa Farm', service: 'Saya ingin memesan kambing qurban/aqiqah paket harga Rp. 3.000.000.'})" class="mt-4 bg-yellow-500 text-gray-900 px-4 py-2 rounded-full hover:bg-yellow-400">Beli Sekarang <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img src="https://dksindo.com/contoh-website/assets/images/product/domba3.jpeg" alt="Kambing 3" class="w-full h-60  mb-4 rounded">
                <h3 class="text-lg font-bold mb-2">Domba Qurban Grade C</h3>
                <p class="text-gray-600">Domba siap untuk qurban.</p>
                <p class="text-gray-800 mt-2">Harga: Rp. 2.800.000</p>
                <div class="flex justify-center">
                    <div>
                        <button onclick="whatsappRedirect('6283822395226', {name: 'Prakasa Farm', service: 'Saya ingin memesan kambing qurban/aqiqah paket harga Rp. 2.800.000.'})" class="mt-4 bg-yellow-500 text-gray-900 px-4 py-2 rounded-full hover:bg-yellow-400">Beli Sekarang <i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div id="gallery-img" class="container mx-auto my-24">
        <h2 class="text-2xl font-bold mb-8 text-center">Gallery Kami</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Card 1 - Image -->
            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba7.jpg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba7.jpg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba4.jpeg" alt="Image 1" class="w-full h-96 object-cover rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba4.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba5.jpeg" alt="Image 1" class="w-full h-96 object-cover rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba5.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba6.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba6.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba8.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba8.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba9.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba9.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba10.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba10.jpeg">
            </div>


            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba11.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba11.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba12.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba12.jpeg">
            </div>

            <div class="relative group">
                <img src="https://dksindo.com/contoh-website/assets/images/gallery/domba13.jpeg" alt="Image 1" class="w-full h-96 object-fit rounded-lg cursor-pointer" data-fancybox="gallery" data-src="https://dksindo.com/contoh-website/assets/images/gallery/domba13.jpeg">
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4 mt-12">
            <!-- Card 2 - Video -->
            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba5.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba6.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-container relative group">
                <video class="w-full h-40" controls>
                    <source src="https://dksindo.com/contoh-website/assets/images/video/video-domba8.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="bg-gray-800 text-white py-16 px-4">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
            <p class="text-lg mb-6">Jika Anda memiliki pertanyaan atau ingin melakukan pemesanan, hubungi kami sekarang.</p>

            <div class="grid grid-cols-1 justify-items-center mb-6 mt-6">
                <div class="col-span-full">
                    <ul class="w-80 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 font-semibold">
                            <h1 class="font-bold text-2xl">Pemilik : </h1>
                        </li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 font-semibold">
                            <div class="flex justify-center">
                                <div>
                                    <img src="https://dksindo.com/contoh-website/assets/images/profile/bang-day.jpeg" alt="bang-day" class="w-40 h-60 rounded-lg">
                                </div>
                            </div>
                            <br>
                            <h2 class="font-bold">Nama : Bpk. Dadi Supriyadi (Bang Day)</h2>
                        </li>
                        <li class=" w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600 font-semibold">
                            Pekerjaan : TNI-AD (Aktif)
                        </li>
                        <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                            No Telp : <a href="tel:6282118006475" class="text-blue-700 hover:text-blue-600">0821 1800 6475</a>
                        </li>
                    </ul>
                </div>
            </div>

            <button onclick="whatsappRedirect('6283822395226', {name: 'Prakasa Farm', service: 'Saya ingin memesan kambing qurban/aqiqah, boleh tau paket kambing qurban/aqiqah terbaik dari PRAKASA FARM.'})" href="#" class="bg-yellow-500 text-gray-900 px-6 py-3 rounded-full hover:bg-yellow-400">Hubungi Kami <i class="fa-solid fa-phone"></i></button>
        </div>
    </div>

    <div class="grid grid-cols-1" style="margin-top: 10rem;">
        <div class="col-12">
            <div class="flex justify-center">
                <h2 class="text-3xl font-bold mb-2">Lokasi Kami</h2>
            </div>
            <div class="flex justify-center mb-8 divide-y divide-gray-100">
                <div>
                    <address>
                        Jl. Sadu kaler RT.01/RW.04 Desa Sadu <br />
                        Kec. Soreang Kab Bandung - 40913
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1">
        <div class="col-12">
            <div class="flex justify-self-center mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.4904007429191!2d107.51097828193963!3d-7.027332713919777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68edc4f6cbe7c1%3A0x487c44d0754fb05e!2sJl.%20Sadu%20Kaler%2C%20Sadu%2C%20Kec.%20Soreang%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1703676392863!5m2!1sid!2sid" style="width: 100%; height: 50vh; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4">
        <p>&copy; 2023 PRAKASA FARM - All rights reserved.</p>
    </footer>

    <div id="popup-modal" tabindex="-1" class="block fixed top-0 left-0 w-full h-full bg-black bg-opacity-12 flex items-center justify-center">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Apakah anda pemilik website ini ?? <blockquote>Selesaikan pembayaran website terlebih dahulu !</blockquote>
                    </h3>
                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.getElementById('show-popup').addEventListener('click', function() {
            document.getElementById('popup-modal').classList.remove('hidden');
        });

        document.getElementById('hide-popup').addEventListener('click', function() {
            document.getElementById('popup-modal').classList.add('hidden');
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('[data-fancybox="gallery"]').fancybox();
        });

        const publicModal = $('#popup-modal');

        function closeModal() {
            publicModal.hide('slow').slideUp(1000)
        }
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cube",
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>


    <script>
        var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?43125';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#00e785",
                "ctaText": "Hubungi kami !",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginRight": "20",
                "marginBottom": "20",
                "ctaIconWATI": false,
                "position": "right"
            },
            "brandSetting": {
                "brandName": "PRAKASA FARM",
                "brandSubTitle": "DOMBA AING",
                "brandImg": "https://t3.ftcdn.net/jpg/03/18/92/30/360_F_318923036_2838rLqctxfIwYrc89zsgXqxflJmSnEK.jpg",
                "welcomeText": "Halo kaka, lagi cari hewan qurab/aqiqah ?",
                "messageText": "Silahkan kaka, bisa kami bantu ? {{page_link}} {{page_title}}",
                "backgroundColor": "#00e785",
                "ctaText": "Hubungi kami !",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "6282118006475"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>


    <script type="text/javascript">
        const whatsappRedirect = (num, data) => {
            console.log(num)
            Swal.fire({
                title: "Lanjut ke whatsapp ?",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "Hayu ah",
                denyButtonText: `Nanti dulu deh !`
            }).then((result) => {
                const whatsappNumber = num;

                const whatsappUrl = `https://wa.me/${whatsappNumber}?text=`;
                if (result.isConfirmed) {
                    // Swal.fire("Saved!", "", "success");
                    const text = `Hello, ${data.name} ${data.service}`;
                    const encodeText = encodeURIComponent(text);
                    window.open(`${whatsappUrl}${encodeText}`)
                } else if (result.isDenied) {
                    Swal.fire({
                        title: "Oke atuh ai kitu mah, sip lah.",
                        width: 600,
                        padding: "3em",
                        color: "#716add",
                        background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                        backdrop: `
                    rgba(0,0,123,0.4)
                    url("https://sweetalert2.github.io/images/nyan-cat.gif")
                    left top
                    no-repeat
                    `
                    });
                }
            });

        }
    </script>

    <script>
        var navbar = document.getElementById("navbar");
        var prevScrollPos = window.pageYOffset;

        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;

            if (prevScrollPos > currentScrollPos) {
                // Scroll ke atas
                navbar.classList.remove("sticky");
            } else {
                // Scroll ke bawah
                navbar.classList.add("sticky");
            }

            prevScrollPos = currentScrollPos;
        };
    </script>

</body>

</html>