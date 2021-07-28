<!DOCTYPE html>
<html>
<head>
	<title>Fadil Andrian</title>

	<meta charset="UTF-8" />

   	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

   	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

   	<script src="{{asset('js/app.js')}}" defer></script>

   	<style>
   		html {
			scroll-behavior: smooth;
		}
   	</style>

</head>
<body>
	<div class="h-screen w-full bg-blue-50">
		<!-- navbar -->
		<div class="flex w-full pt-4 pb-10 bg-gradient-to-b from-blue-200">
			<div class="mr-auto ml-32 flex text-gray-700 text-4xl font-bold">
				my<div class="text-blue-600">portfolio</div>
			</div>
			<div class="ml-auto mr-32 self-center flex space-x-12 text-gray-700 font-bold">

				<a href="/" class="hover:text-blue-500 px-2 {{'/' == Request()->path() ? 'border-b-2 border-blue-500' : ''}}">Home</a>
				
				<!-- modal buat about -->
				<div x-data="{about: false}" @click.away="about= false">
				<a @click="about= !about" href="#" class="hover:text-blue-500 px-2">About</a>
			    <div
			      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-70 duration-300 overflow-y-auto"
			      x-show="about"
			      x-transition:enter="transition duration-300"
			      x-transition:enter-start="opacity-0"
			      x-transition:enter-end="opacity-100"
			      x-transition:leave="transition duration-300"
			      x-transition:leave-start="opacity-100"
			      x-transition:leave-end="opacity-0"
			    >
			      <div class="relative w-full mx-2 mx-auto opacity-100">
			        <div
			          class="relative bg-transparent text-gray-900 z-20"
			          @click.away="about = false"
			          x-show="about"
			          x-transition:enter="transition transform duration-300"
			          x-transition:enter-start="scale-0"
			          x-transition:enter-end="scale-100"
			          x-transition:leave="transition transform duration-300"
			          x-transition:leave-start="scale-100"
			          x-transition:leave-end="scale-0"
			        >

					<!-- content about -->
					<figure class="flex mt-28 mx-32 space-x-14 bg-blue-100 rounded-t-xl overflow-hidden">
						<!-- gambar project -->
						<div class="w-1/2 h-full">
							<img src="img/profile.jpg">
						</div>
						<!-- /gambar project -->

						<!-- about -->
						<div class="w-full self-center font-mono">
							<p class="text-4xl font-semibold mx-auto text-gray-700">"I like to make a web using Laravel. PHP is my language"</p>
							<p class="mt-12 text-2xl text-blue-600">Fadil Andrian</p>
							<p class="text-2xl text-gray-400">Junior Web Developer</p>
						</div>
						<!-- /about -->

						<!-- close button -->
						<button class="focus:outline-none self-start p-2" @click="about = false">
			              <svg class="fill-current h-6 w-6 transform hover:rotate-180 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
			                <path
			                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
			                ></path>
			              </svg>
			            </button>
						<!-- end close button -->
					</figure>

					<!-- download resume button -->
					<div style="cursor: pointer;" class="mx-32 text-center rounded-b-xl p-4 bg-blue-500 hover:bg-blue-400">
						<a class="text-blue-50" href="document/CV2.pdf">Download Resume</a>
					</div>
					<!-- end download resume button -->
					
					<!-- /content about -->

			        </div>
			      </div>
			    </div>
				</div>
				<!-- end modal buat about -->



				<!-- modal buat contact -->
				<div x-data="{contact: false}" @click.away="contact= false">
				<a @click="contact= !contact" href="#" class="hover:text-blue-500 px-2">Contact</a>
			    <div
			      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-0 duration-300 overflow-y-auto"
			      x-show="contact"
			      x-transition:enter="transition duration-300"
			      x-transition:enter-start="opacity-0"
			      x-transition:enter-end="opacity-100"
			      x-transition:leave="transition duration-300"
			      x-transition:leave-start="opacity-100"
			      x-transition:leave-end="opacity-0"
			    >
			      <div class="relative w-full mx-2 mx-auto opacity-100">
			        <div
			          class="relative bg-transparent text-gray-900 z-20"
			          @click.away="contact = false"
			          x-show="contact"
			          x-transition:enter="transition transform duration-300"
			          x-transition:enter-start="-translate-x-full opacity-0"
			          x-transition:enter-end="translate-x-0 opacity-100"
			          x-transition:leave="transition transform duration-300"
			          x-transition:leave-start="translate-x-0 opacity-100"
			          x-transition:leave-end="translate-x-full opacity-0"
			        >

					<!-- content about -->
					<div class="flex mt-20 mx-32 space-x-14 bg-transparent border-2 border-gradient-to-b from-blue-200 rounded-xl shadow-lg overflow-hidden">
						<!-- title contact -->
						<div class="w-1/2 m-7 h-full self-center">
							<div class="text-2xl font-semibold text-gray-700 font-mono">Contact me on :</div>
						</div>
						<!-- /title contact -->

						<!-- contact -->
						<div class="w-full self-center flex">
							<a class="m-7" href="https://github.com/fadilAndrian"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/038-github.png"></a> <!-- github -->
							<a class="m-7" href="https://linkedin.com/in/fadil-andrian-642942200/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/045-linkedin.png"></a> <!-- linkedin -->
							<a class="m-7" href="https://t.me/fdlndrn"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/029-telegram.png"></a> <!-- telegram -->
							<a class="m-7" href="https://instagram.com/wondertac/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/025-instagram.png"></a> <!-- instagram -->
						</div>
						<!-- /contact -->

					</div>
					<!-- /content about -->

			        </div>
			      </div>
			    </div>
				</div>
				<!-- end modal buat contact -->



			</div>
		</div>
		<!-- /navbar -->


		<!-- project -->
		<div id="project-slide" class="flex mx-28 h-3/4">
			<div class="flex justify-center mr-3 mt-6 md:mt-0 md:space-y-3 md:flex-col">
				<a for="radio1" name="btn" href="#project1" class="w-3 h-3 mx-2 rounded-full md:mx-0 bg-gray-300 hover:bg-blue-500"></a>
				
				<a for="radio2" name="btn" href="#project2" class="w-3 h-3 mx-2 rounded-full md:mx-0 bg-gray-300 hover:bg-blue-500 active:bg-blue-500"></a>
				
	        </div>
			
			<div class="block px-5 pb-4 overflow-hidden">
				<!-- content projects -->
				<div id="project1" class="flex mx-auto space-x-16 pb-24 pt-32">

					<!-- gambar project -->
					<div class="w-11/12 self-center flex">
						<div x-data="{gallery1: false}" @click.away="gallery1= false">
						<img @click="gallery1= !gallery1" style="cursor: pointer;" class="rounded-xl shadow-xl" src="img/projek/Kedar1.png">

						<!-- content gallery -->
						<div
					      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-70 duration-300 overflow-y-auto"
					      x-show="gallery1"
					      x-transition:enter="transition duration-300"
					      x-transition:enter-start="opacity-0"
					      x-transition:enter-end="opacity-100"
					      x-transition:leave="transition duration-300"
					      x-transition:leave-start="opacity-100"
					      x-transition:leave-end="opacity-0"
					    >
					      <div class="relative w-full mx-2 mx-auto opacity-100">
					        <div
					          class="relative bg-transparent text-gray-900 z-20"
					          @click.away="gallery1 = false"
					          x-show="gallery1"
					          x-transition:enter="transition transform duration-300"
					          x-transition:enter-start="scale-0"
					          x-transition:enter-end="scale-100"
					          x-transition:leave="transition transform duration-300"
					          x-transition:leave-start="scale-100"
					          x-transition:leave-end="scale-0"
					        >

							<!-- gallery picts -->

							<div class="my-12 mx-32 relative">

							<!-- close button -->
							<button class="absolute top-0 right-0 focus:outline-none bg-black bg-opacity-70 hover:bg-red-400 text-white rounded-bl-xl rounded-tr-xl self-start p-2" @click="gallery1 = false">
				              <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
				                <path
				                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
				                ></path>
				              </svg>
				            </button>
							<!-- end close button -->

							<div class="flex space-x-14 bg-transparent rounded-xl overflow-auto">
								<img class="rounded-xl" src="img/projek/Kedar1.png">
								<img class="rounded-xl" src="img/projek/Kedar2.png">
								<img class="rounded-xl" src="img/projek/Kedar3.png">
								<img class="rounded-xl" src="img/projek/Kedar4.png">
							</div>
							
							</div>
							<!-- /gallery picts -->

					        </div>
					      </div>
					    </div>
					    <!-- end content gallery -->
						</div>

					</div>

					<!-- /gambar project -->

					<!-- review project -->
					<div class="w-full text-gray-700 self-center">
						<p class="text-3xl font-bold text-blue-700 flex">Kedar! Web Belajar Online
							<a style="cursor: pointer;" href="https://kedar-id.herokuapp.com" class="ml-2 hover:text-blue-500 h-full transform hover:scale-110">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
								</svg>
							</a>
						</p>
						<p class="mt-5 text-justify">Kedar! ditujukan untuk para pelajar dan pengajar yang mengalami kendala dalam proses ajar-mengajar oleh dampak pandemi Covid-19. <span class="text-purple-700">Memiliki fitur untuk berbagi materi dan tugas serta melakukan pertemuang secara daring.</span> <span class="text-green-500">Tantangannya adalah dalam merancang fitur-fitur sistem ini. Itu adalah hal baru yang perlu dipelajari, dan itu membutuhkan waktu.</span></p>
						<p class="mt-5 text-gray-700 font-bold flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							April - June 2021
						</p>
					</div>
					<!-- /review project -->
				</div>
				<!-- /content projects -->

				<!-- content projects -->
				<div id="project2" class="flex mx-auto space-x-16 pb-32 pt-32">
					<!-- gambar project -->
					<div class="w-11/12 self-center">

						<div x-data="{gallery2:false}" @click.away="gallery2=false">
						<img @click="gallery2=!gallery2" style="cursor: pointer;" class="rounded-xl shadow-xl" src="img/projek/sipu2.png">
						<!-- content gallery -->
						<div
					      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-70 duration-300 overflow-y-auto"
					      x-show="gallery2"
					      x-transition:enter="transition duration-300"
					      x-transition:enter-start="opacity-0"
					      x-transition:enter-end="opacity-100"
					      x-transition:leave="transition duration-300"
					      x-transition:leave-start="opacity-100"
					      x-transition:leave-end="opacity-0"
					    >
					      <div class="relative w-full mx-2 mx-auto opacity-100">
					        <div
					          class="relative bg-transparent text-gray-900 z-20"
					          @click.away="gallery2 = false"
					          x-show="gallery2"
					          x-transition:enter="transition transform duration-300"
					          x-transition:enter-start="scale-0"
					          x-transition:enter-end="scale-100"
					          x-transition:leave="transition transform duration-300"
					          x-transition:leave-start="scale-100"
					          x-transition:leave-end="scale-0"
					        >

							<!-- gallery picts -->

							<div class="my-12 mx-32 relative">

							<!-- close button -->
							<button class="absolute top-0 right-0 focus:outline-none bg-black bg-opacity-70 hover:bg-red-400 text-white rounded-bl-xl rounded-tr-xl self-start p-2" @click="gallery2 = false">
				              <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
				                <path
				                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
				                ></path>
				              </svg>
				            </button>
							<!-- end close button -->

							<div class="flex space-x-14 bg-transparent rounded-xl overflow-auto">
								<img class="rounded-xl" src="img/projek/sipu2.png">
							</div>
							
							</div>
							<!-- /gallery picts -->

					        </div>
					      </div>
					    </div>
					    <!-- end content gallery -->
					    </div>

					</div>
					<!-- /gambar project -->

					<!-- review project -->
					<div class="w-full text-gray-700 self-center">
						<p class="text-3xl font-bold text-blue-700 flex">Sistem Informasi Pegawai
							<!-- <a style="cursor: pointer;" href="https://kedar-id.herokuapp.com" class="ml-2 hover:text-blue-500 h-full transform hover:scale-110">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
								</svg>
							</a> -->
						</p>
						<p class="mt-5 text-justify">Sistem ini diharapkan dapat mengolah dan menyimpan data-data untuk sebuah instansi. <span class="text-purple-700">Sistem dilengkapi dengan pengolahan data pegawai, proses cuti, dan proses lembur.</span> <span class="text-green-500">Dalam sistem ini tantangannya ialah dalam menganalisa kebutuhan dari sebuah sistem pegawai itu sendiri.</span></p>
						<p class="mt-5 text-gray-700 font-bold flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							June 2021 - On Going
						</p>
					</div>
					<!-- /review project -->
				</div>
				<!-- /content projects -->

			</div>

		</div>
		<!-- end project -->
	</div>

	<script>
		<!--  -->
	</script>

</body>
<footer>
	<div class="fixed bottom-0 bg-gradient-to-t from-blue-200 py-10 w-full"><p class="text-transparent">l</p></div>
</footer>
</html>