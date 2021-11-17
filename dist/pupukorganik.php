<html lang="en">

<head>

<?php include_once 'layout/header.php';
require 'layout/function.php';

$id = $_GET["id"];	


$tanaman_all = query("SELECT * FROM tanaman  WHERE kategori_tanaman_id=$id AND indoorflag LIKE '%$indoor%' AND tanaman_nama LIKE '%$name%' AND daerah_id LIKE '%$daerah%' AND penempatan_id LIKE '%$penempatan%'");
$kategori_tanamans = query("SELECT * FROM kategori_tanaman WHERE kategori_tanaman_id=$id")[0];



//pagination
$jumlah_data = 8;
$total_data = count($tanaman_all);
$jumlah_pagination = ceil($total_data / $jumlah_data);




if (isset($_GET['halaman'])){
	$halaman_aktif = $_GET['halaman'];
  if ($halaman_aktif==0){$halaman_aktif=1;}else{}
} else { $halaman_aktif = 1;}

$i=$halaman_aktif;


$data_awal = ($halaman_aktif * $jumlah_data ) - $jumlah_data;


$tanamans = query("SELECT * FROM tanaman WHERE kategori_tanaman_id=$id AND indoorflag LIKE '%$indoor%' AND tanaman_nama LIKE '%$name%' AND daerah_id LIKE '%$daerah%' AND penempatan_id LIKE '%$penempatan%' LIMIT $data_awal,$jumlah_data");
$pupuks = query("SELECT * FROM pupuks WHERE kategori_tanaman_id=$id");

//end pagination
?>
<title>Cari Pupuk Organik</title>

</head>
	
<body class="bg-white">
<!-- The navigation menu -->
<div class="navbar">
	<a href="home.html">Beranda</a>
	<div class="subnav">
	  <button class="subnavbtn">Tanaman <i class="fa fa-caret-down"></i></button>
	  <div class="subnav-content">
		<a href="caritanaman.html">Tanaman Hias</a>
		<a href="tanamanbuah.html">Tanaman Buah</a>
		<a href="tanamansayur.html">Tanaman Sayur</a>
		<a href="toga.html">TOGA</a>
	  </div>
	</div>
	<div class="subnav">
	  <button class="subnavbtn">Alat Berkebun <i class="fa fa-caret-down"></i></button>
	  <div class="subnav-content">
		<a href="pupuk.html">Pupuk</a>
		<a href="pot.html">Pot</a>
		<a href="mediatanam.html">Media Tanam</a>
		<a href="alatalat.html">Alat-alat</a>
	  </div>
	</div>
	  <a href="listmitra.html">Mitra</a>
	  <!--Search bar-->
	  <div class="search-container">
		<form action="/action_page.php">
		  <input type="text" placeholder="Cari" name="search">
		</form>
	  </div>
  </div> 

  <!-- Search Filter -->
<div class="container h-500 mx-auto flex justify-center items-center p-2 md:pt-16">
	<div class="border border-gray-100 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
		<div class="flex flex-col md:flex-row">
			<div class="pt-6 md:pt-0 md:pl-6">
				<select class="border p-2 rounded">
					<option>Mitra 1</option>
					<option>Mitra 2</option>
					<option>Mitra 3</option>
					<option>Mitra 4</option>
				</select>
			</div>
			<div class="pt-6 md:pt-0 md:pl-6">
				<select class="border p-2 rounded">
					<option>&#60; Rp 50.000,00</option>
					<option>Rp 50.000,00 - Rp 150.000,00</option>
					<option>&#62; Rp 150.000,00</option>
				</select>
			</div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-1 gap-4">
			<div class="grid grid-cols-1 gap-2 border border-gray-200 p-2 rounded">
				<div class="flex border rounded bg-gray-300 items-center p-2 ">
					<input type="text" placeholder="Enter text here..."
						   class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
				</div>
			</div>
		</div>
		<div class="flex justify-center"><button class="p-2 border w-1/4 rounded-md bg-green-900 text-white">Search</button></div>
	</div>
</div>

    <!-- Judul
      <h1 class=" text-center text-gray-900 text-3xl title-font font-medium mb-1 py-2 pt-10"><b>Daftar Pupuk Organik</b></h1>
	  <h1 class=" text-center text-gray-900 text-base title-font font-small mb-1 py-2 pt-5"> Pupuk Organik adalah pupuk yang berasal dari bahan alami atau langsung dari sumber tanaman atau hewan.</h1>
       -->
	  <!--Kelebihan Kekurangan-->

	  <div class="lg:p-50 lg:pb-10 lg:pt-10 pb-10 pt-10">
		<div class="grid md:grid-cols-2 m-5 mb-5">
		  <div class="bg-green-100 overflow-hidden m-5 p-5 rounded shadow-lg">
			<div class="m-2 text-justify text-sm">
			  <h2 class="font-bold text-xl h-2 mb-8 text-green-800">Kelebihan</h2><br>
			  <div class="mb-4">
				<div class="pb-6 md:pb-0 flex flex-col">
				  <div>
					  <!-- <label class="bg-white input-field inline-flex items-baseline border-none shadow-md bg-white p-4 rounded"> -->
					  <ul class="list-disc">
						<li ><p class="flex-none text-dusty-blue-darker select-none leading-none text-gray-700 font-bold">
							Mengurangi pengerasan tanah, memperbaiki aerasi dan struktur tanah. Pupuk organik secara enggak langsung juga berfungsi sebagai makanan bagi mikroorganisme tanah, sehingga mengurangi degradasi.						</p></li>
					  </ul>
					  <!-- </label> -->
				  </div>
				</div>
			</div>
			</div>
		  </div>

		  <div class="bg-pink-200 overflow-hidden m-5 p-5 rounded shadow-lg">
			<div class="m-2 text-justify text-sm">
			  <h2 class="font-bold text-xl h-2 mb-8 text-red-800">Kekurangan</h2><br>
			  <div class="mb-4">
				<div class="pb-6 md:pb-0 flex flex-col">
				  <div>
					<ul class="list-disc">
					  <li><p class="flex-none text-dusty-blue-darker select-none leading-none text-red-600 font-bold">
						  Memiliki proses yang lama terhadap hasil yang diinginkan.
					  </p></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	  <!--Pagination-->
	  <div class="flex flex-col items-center my-7">
		<ul class="flex">
		  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-600 rounded-lg">
			  <a class="flex items-center font-bold" href="#">
				  <span class="mx-1">previous</span>
			  </a>
		  </li>
		  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
			  <a class="font-bold" href="#">1</a>
		  </li>
		  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
			  <a class="font-bold" href="#">2</a>
		  </li>
		  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
			  <a class="font-bold" href="#">3</a>
		  </li>
		  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
			  <a class="flex items-center font-bold" href="#">
				  <span class="mx-1">Next</span>
			  </a>
		  </li>
		</ul>
		</div>

	<!--hasil pencarian--> 
	  <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
            <!-- card 1 -->
			<div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
				<div class="mt-8">
					<div class="flex space-x-2">
						<img src="http://cybex.pertanian.go.id/xms/files/1/201911/fec313649dfb322ca2b323b0226bd97c.jpg" class="w-auto" style="border-radius: 5%" />
					</div>
						<p class="text-xl font-semibold my-2"><a href="detailpupuk.php">Pupuk Kandang Ayam</a></p>
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
						<img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/10/19/543429097.jpg" class="w-auto" style="border-radius: 5%" />
					</div>
					<p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk Kandang Sapi</a></p>
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
						<img src="https://s0.bukalapak.com/img/01922789052/s-330-330/data.jpeg.webp" class="w-auto" style="border-radius: 5%" />
					</div>
					<p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk Kandang Kambing</a></p>
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
						<img src="https://s3.bukalapak.com/img/3176876926/s-330-330/85468918_b322fb7e_ef05_4b83_bef1_45aee7889c82.jpg.webp" class="w-auto" style="border-radius: 5%" />
					</div>
					<p class="text-xl font-semibold my-2"><a href="detailalatkebun.html">Pupuk Hijau</a></p>
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
		
<!--Pagination-->
<div class="flex flex-col items-center my-12">
	<ul class="flex">
	  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-600 rounded-lg">
		  <a class="flex items-center font-bold" href="#">
			  <span class="mx-1">previous</span>
		  </a>
	  </li>
	  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
		  <a class="font-bold" href="#">1</a>
	  </li>
	  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
		  <a class="font-bold" href="#">2</a>
	  </li>
	  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
		  <a class="font-bold" href="#">3</a>
	  </li>
	  <li class="mx-1 px-3 py-2 bg-gray-200 text-green-900 hover:bg-green-900 hover:text-gray-200 rounded-lg">
		  <a class="flex items-center font-bold" href="#">
			  <span class="mx-1">Next</span>
		  </a>
	  </li>
	</ul>
  </div>

			<!--Footer-->
			<div class="w-full bg-green-900 text-white">
				<div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
				  <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2 justify-start">
					<div class="w-full sm:w-2/5 pr-6 flex flex-col space-y-4">
					  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="57" viewBox="0 0 160 57">
						<defs>
						  <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 197 70">
							<image width="197" height="70" xlink:href="data:image/png;base64,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" />
						  </pattern>
						</defs>
						<rect id="ETI-Logo" width="160" height="57" fill="url(#pattern)" />
					  </svg>
					  <p class="opacity-60">Website UMKM Produk Tanaman dan Alat Berkebun di Surabaya.</p>
					</div>
					<div class="w-full sm:w-1/5 flex flex-col space-y-4">
					  <a class="opacity-60"><b>Informasi</b></a>
					  <a class="opacity-60">Tentang Kami</a>
					  <a class="opacity-60">Mitra Kami</a>
					  <a class="opacity-60">Privacy Policy</a>
					  <a class="opacity-60">Syarat dan Kebijakan</a>
					</div>
					<div class="w-full sm:w-1/5 flex flex-col space-y-4">
					  <a class="opacity-60"><b>Produk dan Layanan</b></a>
					  <a class="opacity-60">Tanaman</a>
					  <a class="opacity-60">Alat Berkebun</a>
					</div>
					<div class="w-full sm:w-1/5 pt-6 flex items-end mb-1">
					  <div class="flex flex-row space-x-4">
						<i class="fab fa-whatsapp"></i>
						<i class="fab fa-google"></i>
					  </div>
					</div>
				  </div>
				  <div class="opacity-60 pt-2">
					<p>© 2021 Tim Gardening Bisnis Digital.</p>
				  </div>
				</div>
			  </div>
</body>