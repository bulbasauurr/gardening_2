<!DOCTYPE html>
<html lang="en">

<head>

<?php include_once 'layout/header.php';
require 'layout/function.php';

?>
<title>Detail Pupuk Kandang</title>
<style>
    /* style carousel 2 */
    .carousel-open:checked+.carousel-item {
      position: static;
      opacity: 100;
    }

    .carousel-item {
      -webkit-transition: opacity 0.6s ease-out;
      transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
      display: block;
    }

    .carousel-indicators {
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      bottom: 2%;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
      color: #2b6cb0;
      /*Set to match the Tailwind colour you want the active one to be */
    }

    .content {
      display: none;
    }

    .content-active {
      display: block;
    }
</style>

</head>

<body>

<?php include_once 'layout/navbar.php';?>
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-2 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://s3.bukalapak.com/img/3176876926/s-330-330/85468918_b322fb7e_ef05_4b83_bef1_45aee7889c82.jpg.webp" />
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><b>Pupuk Hijau</b></h1>
          <div class="flex space-x-2 text-black-400 text-sm my-3"></div>
                <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">
                  Organik</button>
                  <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">
                  Majemuk</button>
                  <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">
                  Padat</button>
                <br></br>
                <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900 pt-1">Rp.4.000 - Rp.100.000 per Kilogram</span>
                </div>
          <p class="leading-relaxed">Berasal dari tanaman sisa panen.</p>
            <!-- <div class="flex">
              <span class="title-font font-medium text-l text-gray-900 pt-1">Jenis Pupuk</span>
            </div>
              <span class="title-font font-medium text-l text-gray-900 pt-1">Unsur</span>
            </div>
              <span class="title-font font-medium text-l text-gray-900 pt-1">Bentuk Pupuk</span>
            </div>
              <span class="title-font font-medium text-l text-gray-900 pt-1">Kadar Air</span>
            </div> -->
          <!-- <div class="py-6 flex flex-col justify-center sm:py-12">
            <div class="grid lg:grid-cols-2 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4"> -->
              <!-- SMALL CARD ROUNDED -->
              <!-- <div class="bg-gray-100  | p-4 border-solid rounded border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
                <img class="w-16 h-16 object-cover" src="https://logodownload.org/wp-content/uploads/2015/02/burger-king-logo-0.png" alt="" />
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Nama Mitra</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">99.000</p>
                </div>
              </div> -->
              <!-- END SMALL CARD ROUNDED -->
  
              <!-- SMALL CARD ROUNDED -->
              <!-- <div class="bg-gray-100 | p-4 border-solid rounded border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
                <img class="w-16 h-16 object-cover" src="https://logodownload.org/wp-content/uploads/2015/02/burger-king-logo-0.png" alt="" />
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Nama Mitra</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">99.000</p>
                </div>
              </div> -->
              <!-- END SMALL CARD ROUNDED -->
  
              <!-- SMALL CARD ROUNDED -->
              <!-- <div class="bg-gray-100 | p-4 border-solid rounded border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
                <img class="w-16 h-16 object-cover" src="https://logodownload.org/wp-content/uploads/2015/02/burger-king-logo-0.png" alt="" />
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Nama Mitra</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">99.000</p>
                </div>
              </div> -->
              <!-- END SMALL CARD ROUNDED -->
  
              <!-- SMALL CARD ROUNDED -->
              <!-- <div class="bg-gray-100 | p-4 border-solid rounded border-2 | flex justify-around cursor-pointer | hover:bg-green-400 dark:hover:bg-green-600 hover:border-transparent | transition-colors duration-500">
                <img class="w-16 h-16 object-cover" src="https://logodownload.org/wp-content/uploads/2015/02/burger-king-logo-0.png" alt="" />
                <div class="flex flex-col justify-center">
                  <p class="text-gray-900 dark:text-gray-300 font-semibold">Nama Mitra</p>
                  <p class="text-black dark:text-gray-100 text-justify font-semibold">99.000</p>
                </div>
              </div> -->
              <!-- END SMALL CARD ROUNDED -->
            <!-- </div> -->

          </div>
        </div>
      </div>
    </div>
  </section>

    <div class="text-center mb-5">
      <h1 class="text-lg text-center text-green-800 md:text-3xl font-bold mb-2">Tanaman yang cocok dengan pupuk</h1>
    </div>

    <div class="container my-4 mx-auto md:px-10 justify-center">
      <div class="flex flex-wrap -mx-1 lg:-mx-4 justify-center">
          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg border-green-600 border-opacity-50 border-2 border-solid">
                    <img class="object-cover md:object-cover h-60 w-full" src="messageImage_1634568677697.jpg">
                <header class="flex h-16 bg-green-800 items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-base md:text-base text-white text-center font-bold">Tanaman Sayur</h1>
                  </header>
            </article>
          </div>

      </div>
    </div>

    <!-- NavTab -->
    <div class="tab-header my-20 mx-auto flex text-center justify-center">
      <a
        class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none border-gray-200 cursor-pointer hover-tab active-tab text-green-800 hover:bg-gray-100 transition-colors duration-150 md:text-2xl border-green-500 tracking-wider rounded-t">
        Manfaat </a>
      <a
        class="sm:px-6 py-3 w-1/2 sm:w-auto justify-center sm:justify-start border-b-2 title-font font-medium inline-flex items-center leading-none cursor-pointer hover-tab text-green-800 hover:bg-gray-100 transition-colors duration-150 md:text-2xl border-green-500 tracking-wider rounded-t">
        Pengaplikasian </a>
    </div>
    <!-- End Navtab -->
    <!-- content Start -->
    <div class="konten">
      <div class="manfaat content content-active">
      <!-- <h1 class="text-3xl text-center text-green-800 md:text-3xl font-bold mb-2">Manfaat </h1> -->
        <div class="py-12 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
            </div>
            <div class="mt-10">
              <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 ">
                <div class="relative">
                  <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://i2.wp.com/f1-styx.imgix.net/article/2019/07/25162412/pixabay-4-768x512.jpg?resize=768%2C512&ssl=1" />
                      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                      <h1 class="text-gray-900 text-xl title-font font-medium mb-1"><b>Manfaat Pupuk Hijau</b></h1>
                      <p class="leading-relaxed">Peningkatan produktivitas tanah dan ketahanan tanah terhadap erosi.</p>
                    </div>
                  </div>
                </div>
              </dl>
            </div>
          <div class="mt-10">
           <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 ">
            <div class="relative">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  <h1 class="text-gray-900 text-xl title-font font-medium mb-1"><b>Komposisi Pupuk Kandang Ayam</b></h1>
                  <p class="leading-relaxed">Nitrogen >2,5%, Lignin '<'15%, Polifenol '<'4% </p>
                </div>
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://i2.wp.com/f1-styx.imgix.net/article/2019/07/25162412/pixabay-4-768x512.jpg?resize=768%2C512&ssl=1" />
              </div>
            </div>
           </dl>
          </div>
        </div>
      </div>
      </div>
      <!-- EndManfaat -->
      <!--Frekuensi Manfaat End-->
      <div class="pengaplikasian content">
      <!-- <h1 class="text-3xl text-center text-green-800 md:text-3xl font-bold mb-2">Pengaplikasian</h1> -->
        <div class="py-12 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
            </div>
            <div class="mt-10">
              <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 ">
                <div class="relative">
                  <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <iframe alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64" src="https://youtu.be/bwKKA2AUNHM"></iframe>
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-xl title-font font-medium mb-1"><b>Cara Pembuatan</b></h1>
                    <ul class="list-none md:list-disc">
                      <li>Hija daun dicacah dan dibasahi.</li>
                      <li>Campurkan dedak halus atau bekatul dengan hijau daun.</li>
                      <li>Cairkan gula pasir atau gula merah dengan air</li>
                      <li>Masukkan bakteri ke dalam air. Campurkan dengan cairan gula pasir atau gula merah.</li>
                      <li>Aduk hingga rata</li>
                      <li>Cairan bakteri dan gula disiramkan pada campuran hijau daun/sampah dan bekatul.
                      <li>Aduk sampai rata, kemudian digundukkan/ditumpuk hingga ketinggian 15-20 cm dan ditutup rapat.</li>
                      <li>Dalam waktu 3-4 hari pupuk hijau sudah jadi dan siap digunakan.</li>
                    </ul>

                    </div>
                  </div>
                </div>
              </dl>
            </div>
          <div class="mt-10">
           <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 ">
            <div class="relative">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  <h1 class="text-gray-900 text-xl title-font font-medium mb-1"><b>Cara Penggunaan</b></h1>
                  <button class="inline-flex text-white font-semibold bg-gray-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex">
                  Aplikasikan pada Daun</button>
                  <button class="inline-flex text-white font-semibold bg-gray-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex">
                  Aplikasikan pada Tanah</button>
                  <br></br>
                  <h1 class="text-gray-900 text-xl title-font font-medium mb-1"><b>Waktu Penggunaan</b></h1>
                  <p class="leading-relaxed">Digunakan pada waktu masih hijau atau segera setelah dikomposkan</p>
                </div>
                <iframe alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64" src="https://youtu.be/TTCvx1L8UYM"></iframe>
              </div>
            </div>
           </dl>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- end content -->

    <div class="text-center mb-5">
      <h1 class="text-lg text-center text-green-800 md:text-3xl font-bold mb-2">Media tanam yang cocok</h1>
    </div>

    <div class="container my-4 mx-auto md:px-10 justify-center">
      <div class="flex flex-wrap -mx-1 lg:-mx-4 justify-center">
          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg border-green-600 border-opacity-50 border-2 border-solid">
                    <img class="object-cover md:object-cover h-60 w-full" src="tanah.jpg">
                <header class="flex h-16 bg-green-800 items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-base md:text-base text-white text-center font-bold">Tanah Gembur</h1>
                </header>
            </article>
            <button class="inline-flex items-center text-white font-semibold -2 bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med" onclick="document.location='detailalatkebun.html'">
              Media Tanam</button>
      </div>
    </div>

    <h1 class=" text-center text-gray-900 text-3xl title-font font-medium mb-1 py-1"><b>Pupuk Sejenis</b></h1>
    <div class="flex items-center justify-center">
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
        <!-- card 1 -->
          <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class="mt-8">
              <div class="flex space-x-2">
                <img src="https://dummyimage.com/720x600" class="w-auto" style="border-radius: 5%" />
              </div>
              <p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk kebun 3</a></p>
                <div class="flex space-x-2 text-black-400 text-sm">
                  <!-- svg -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                    <path
                      d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                  </svg>
                  <p>Rp 99.000 - 109.000</p>
                </div>
                <div class="flex space-x-2 text-black-400 text-sm my-3">
                  <!-- svg -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-pin-angle-fill"
                    viewBox="0 0 16 16">
                    <path
                      d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z" />
                  </svg>
                  <p>Pupuk organik</p>
                </div>
                <div class="flex space-x-2 text-black-400 text-sm my-3"></div>
                <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">Detail</button>
                <br></br>
                <div class="border-t-2"></div>
    
                <div class="flex justify-between">
                  <div class="my-2">
                    <div class="flex space-x-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-share"
                        viewBox="0 0 16 16">
                        <path
                          d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-heart"
                        viewBox="0 0 16 16">
                        <path
                          d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                      </svg>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        <!-- card 2 -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
          <div class="mt-8">
            <div class="flex space-x-2">
              <img src="https://dummyimage.com/720x600" class="w-auto" style="border-radius: 5%" />
            </div>
            <p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Alat kebun 3</a></p>
              <div class="flex space-x-2 text-black-400 text-sm">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  <path
                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                </svg>
                <p>Rp 99.000 - 109.000</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-pin-angle-fill"
                  viewBox="0 0 16 16">
                  <path
                    d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z" />
                </svg>
                <p>Pupuk Organik</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3"></div>
              <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">Detail</button>
              <br></br>
              <div class="border-t-2"></div>
  
              <div class="flex justify-between">
                <div class="my-2">
                  <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-share"
                      viewBox="0 0 16 16">
                      <path
                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-heart"
                      viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- card 3 -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
          <div class="mt-8">
            <div class="flex space-x-2">
              <img src="https://dummyimage.com/720x600" class="w-auto" style="border-radius: 5%" />
            </div>
            <p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk kebun</a></p>
              <div class="flex space-x-2 text-black-400 text-sm">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  <path
                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                </svg>
                <p>Rp 99.000 - 109.000</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-pin-angle-fill"
                  viewBox="0 0 16 16">
                  <path
                    d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z" />
                </svg>
                <p>Pupuk</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3"></div>
              <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">Detail</button>
              <br></br>
              <div class="border-t-2"></div>
  
              <div class="flex justify-between">
                <div class="my-2">
                  <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-share"
                      viewBox="0 0 16 16">
                      <path
                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-heart"
                      viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- card 4 -->
        <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
          <div class="mt-8">
            <div class="flex space-x-2">
              <img src="https://dummyimage.com/720x600" class="w-auto" style="border-radius: 5%" />
            </div>
            <p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk kebun 3</a></p>
              <div class="flex space-x-2 text-black-400 text-sm">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  <path
                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                </svg>
                <p>Rp 99.000 - 109.000</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3">
                <!-- svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-pin-angle-fill"
                  viewBox="0 0 16 16">
                  <path
                    d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z" />
                </svg>
                <p>Kategori alat</p>
              </div>
              <div class="flex space-x-2 text-black-400 text-sm my-3"></div>
              <button class="inline-flex text-white font-semibold bg-green-500 py-1 px-2 focus:outline-none hover:bg-green-600 rounded text-med tex" onclick="document.location='detailalatkebun.html'">Detail</button>
              <br></br>
              <div class="border-t-2"></div>
  
              <div class="flex justify-between">
                <div class="my-2">
                  <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-share"
                      viewBox="0 0 16 16">
                      <path
                        d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                      height="16" fill="currentColor" class="bi bi-heart"
                      viewBox="0 0 16 16">
                      <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                  </div>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>  
      
  <?php include_once 'layout/footer.php';?>

  <script>
    //JS to switch slides and replace text in bar//
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("description");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" opacity-100", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " opacity-100";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>
  <script>
    let tabHeader = document.getElementsByClassName("tab-header")[0];

    let headIsi = document.getElementsByClassName("konten")[0];
    let konten = headIsi.getElementsByClassName("content");

    let tabsPane = tabHeader.getElementsByTagName("a");
    for (let i = 0; i < tabsPane.length; i++) {
      tabsPane[i].addEventListener("click", function () {
        tabHeader.getElementsByClassName("active-tab")[0].classList.remove("active-tab");
        tabsPane[i].classList.add("active-tab");
        headIsi.getElementsByClassName("content-active")[0].classList.remove("content-active");
        konten[i].classList.add("content-active")
      });

    }
  </script>

</body> 

</html>