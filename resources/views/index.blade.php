<!DOCTYPE html>
<html>
<head>
	<title>Fadil Andrian</title>

	<meta charset="UTF-8" />

   	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

   	<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

   	<script src="{{ secure_asset('js/app.js') }}" defer></script>

   	<style>
   		html {
			scroll-behavior: smooth;
		}
   	</style>

</head>
<body>
	<div class="h-screen w-full bg-blue-50 lg:mb-0 mb-20">
		<!-- navbar -->
		<div class="lg:flex block w-full pt-4 lg:pb-10 pb-2 bg-gradient-to-b from-blue-200">
			<div class="lg:border-0 border-b border-gray-700 border-opacity-10 flex justify-between items-center relative">
				<div class="mr-auto ml-5 lg:ml-32 lg:py-0 py-2 flex text-gray-700 text-4xl font-bold">
					my<div class="text-blue-600">portfolio</div>
				</div>
				
				<!-- bagian mobile -->
				<div x-data="{menu:false}" @click.away="menu= false" class="flex">
					<div @click="menu=!menu" class="lg:hidden mr-5 hover:text-gray-100 flex">
						<svg xmlns="http://www.w3.org/2000/svg" :class="{'opacity-0':menu, 'transform opacity-100 duration-1000 delay-200':!menu}" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						</svg>
					</div>

					<!-- mobile nav -->
					<div x-show="menu"
				          x-transition:enter="transition transform duration-300"
				          x-transition:enter-start="scale-0"
				          x-transition:enter-end="scale-100"
				          x-transition:leave="transition transform duration-300"
				          x-transition:leave-start="scale-100"
				          x-transition:leave-end="scale-0"
					class=" w-full lg:mt-0 lg:ml-auto text-center lg:mr-32 mr-5 self-center lg:flex lg:space-x-12 lg:space-y-0 space-y-2 text-gray-700 font-bold">
						
						<!-- modal buat about -->
						<div x-data="{about: false}" @click.away="about= false">
						<a @click="about= !about" href="#" class="hover:text-blue-500 lg:border-b-0 border-b-2 border-blue-300 px-2">About</a>
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
							<figure class="relative lg:flex block mt-28 lg:pb-0 pb-2 lg:mx-32 mx-5 lg:space-x-14 bg-blue-100 rounded-t-xl overflow-hidden">
								<!-- gambar project -->
								<div class="lg:w-1/2 w-1/3 mx-auto lg:my-0 lg:shadow-none lg:rounded-none rounded-full shadow-md my-3 h-full">
									<img class="lg:rounded-none rounded-full" src="img/profile.jpg">
								</div>
								<!-- /gambar project -->

								<!-- about -->
								<div class="w-full self-center lg:text-left font-mono">
									<p class="lg:text-4xl text-2xl font-semibold mx-auto text-gray-700">"I like to make a web using Laravel. PHP is my language"</p>
									<p class="lg:mt-12 mt-5 lg:text-2xl text-sm text-blue-600">Fadil Andrian</p>
									<p class="lg:text-2xl text-sm text-gray-400">Junior Web Developer</p>
								</div>
								<!-- /about -->

								<!-- close button -->
								<button class="absolute top-0 right-0 focus:outline-none self-start p-2 " @click="about = false">
					              <svg class="fill-current h-6 w-6 transform hover:rotate-180 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
					                <path
					                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
					                ></path>
					              </svg>
					            </button>
								<!-- end close button -->
							</figure>

							<!-- download resume button -->
							<a class="text-blue-50" href="document/CV2.pdf">
								<div style="cursor: pointer;" class="lg:mx-32 mx-5 text-center rounded-b-xl p-4 bg-blue-500 hover:bg-blue-400">
									Download Resume
								</div>
							</a>
							<!-- end download resume button -->
							
							<!-- /content about -->

					        </div>
					      </div>
					    </div>
						</div>
						<!-- end modal buat about -->



						<!-- modal buat contact -->
						<div x-data="{contact: false}" @click.away="contact= false">
						<a @click="contact= !contact" href="#" class="hover:text-blue-500 lg:border-b-0 border-b-2 border-blue-300 px-2">Contact</a>
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
							<div class="flex lg:mt-20 mt-16 lg:mx-32 mx-5 lg:space-x-14 space-x-2 lg:bg-transparent bg-blue-100 border-2 border-gradient-to-b from-blue-200 rounded-xl lg:shadow-md shadow-md overflow-hidden">
								<!-- title contact -->
								<div class="lg:w-1/2 lg:m-7 my-7 ml-3 mr-5 h-full self-center">
									<div class="lg:text-2xl text-sm font-semibold text-gray-700 font-mono">Contact me on :</div>
								</div>
								<!-- /title contact -->

								<!-- contact -->
								<div class="w-full self-center flex">
									<a class="lg:m-7 my-7 mx-3" href="https://github.com/fadilAndrian"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/038-github.png"></a> <!-- github -->
									<a class="lg:m-7 my-7 mx-3" href="https://linkedin.com/in/fadil-andrian-642942200/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/045-linkedin.png"></a> <!-- linkedin -->
									<a class="lg:m-7 my-7 mx-3" href="https://t.me/fdlndrn"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/029-telegram.png"></a> <!-- telegram -->
									<a class="lg:m-7 my-7 mx-3" href="https://instagram.com/wondertac/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/025-instagram.png"></a> <!-- instagram -->
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
					<!-- end mobile nav -->

				</div>
				<!-- end bagian mobile -->

			</div>

			<!-- desktop navigation -->
			<div class="hidden lg:mt-0 mt-5 lg:ml-auto text-center lg:mr-32 self-center lg:flex lg:space-x-12 lg:space-y-0 space-y-3 text-gray-700 font-bold">
				
				<!-- modal buat about -->
				<div x-data="{about: false}" @click.away="about= false">
				<a @click="about= !about" href="#" class="hover:text-blue-500 lg:border-b-0 border-b-2 border-blue-300 px-2">About</a>
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
					<figure class="relative lg:flex block mt-28 lg:pb-0 pb-2 lg:mx-32 mx-5 lg:space-x-14 bg-blue-100 rounded-t-xl overflow-hidden">
						<!-- gambar project -->
						<div class="lg:w-1/2 w-1/3 mx-auto lg:my-0 lg:shadow-none lg:rounded-none rounded-full shadow-md my-3 h-full">
							<img class="lg:rounded-none rounded-full" src="img/profile.jpg">
						</div>
						<!-- /gambar project -->

						<!-- about -->
						<div class="w-full self-center lg:text-left font-mono">
							<p class="lg:text-4xl text-2xl font-semibold mx-auto text-gray-700">"I like to make a web using Laravel. PHP is my language"</p>
							<p class="lg:mt-12 mt-5 lg:text-2xl text-sm text-blue-600">Fadil Andrian</p>
							<p class="lg:text-2xl text-sm text-gray-400">Junior Web Developer</p>
						</div>
						<!-- /about -->

						<!-- close button -->
						<button class="absolute top-0 right-0 focus:outline-none self-start p-2 " @click="about = false">
			              <svg class="fill-current h-6 w-6 transform hover:rotate-180 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
			                <path
			                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
			                ></path>
			              </svg>
			            </button>
						<!-- end close button -->
					</figure>

					<!-- download resume button -->
					<a class="text-blue-50" href="document/CV2.pdf">
						<div style="cursor: pointer;" class="lg:mx-32 mx-5 text-center rounded-b-xl p-4 bg-blue-500 hover:bg-blue-400">
							Download Resume
						</div>
					</a>
					<!-- end download resume button -->
					
					<!-- /content about -->

			        </div>
			      </div>
			    </div>
				</div>
				<!-- end modal buat about -->



				<!-- modal buat contact -->
				<div x-data="{contact: false}" @click.away="contact= false">
				<a @click="contact= !contact" href="#" class="hover:text-blue-500 lg:border-b-0 border-b-2 border-blue-300 px-2">Contact</a>
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
					<div class="flex lg:mt-20 mt-16 lg:mx-32 mx-5 lg:space-x-14 space-x-2 lg:bg-transparent bg-blue-100 border-2 border-gradient-to-b from-blue-200 rounded-xl lg:shadow-md shadow-md overflow-hidden">
						<!-- title contact -->
						<div class="lg:w-1/2 lg:m-7 my-7 ml-3 mr-5 h-full self-center">
							<div class="lg:text-2xl text-sm font-semibold text-gray-700 font-mono">Contact me on :</div>
						</div>
						<!-- /title contact -->

						<!-- contact -->
						<div class="w-full self-center flex">
							<a class="lg:m-7 my-7 mx-3" href="https://github.com/fadilAndrian"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/038-github.png"></a> <!-- github -->
							<a class="lg:m-7 my-7 mx-3" href="https://linkedin.com/in/fadil-andrian-642942200/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/045-linkedin.png"></a> <!-- linkedin -->
							<a class="lg:m-7 my-7 mx-3" href="https://t.me/fdlndrn"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/029-telegram.png"></a> <!-- telegram -->
							<a class="lg:m-7 my-7 mx-3" href="https://instagram.com/wondertac/"><img class="h-10 w-10 transform hover:scale-110" src="img/icon/socmed-flat/png/025-instagram.png"></a> <!-- instagram -->
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
			<!-- end desktop navigation -->

		</div>
		<!-- /navbar -->


		<!-- project -->
		<div id="project-slide" class="lg:flex block lg:mx-28 mx-5 h-3/4">
			<div class="flex justify-center mr-3 mt-6 lg:mt-0 lg:space-y-3 lg:flex-col">
				<a for="radio1" name="btn" href="#project1" class="w-3 h-3 mx-2 rounded-full lg:mx-0 lg:bg-gray-300 bg-yellow-400 hover:bg-yellow-700 lg:hover:bg-blue-500"></a>
				
				<a for="radio2" name="btn" href="#project2" class="w-3 h-3 mx-2 rounded-full lg:mx-0 lg:bg-gray-300 bg-yellow-400 hover:bg-yellow-700 lg:hover:bg-blue-500 active:bg-blue-500"></a>
				
	        </div>
			
			<div class="block px-5 pb-4 lg:h-full h-full lg:overflow-hidden">
				<!-- content projects Kedar -->
				<div id="project1" class="lg:flex block lg:mx-auto mx-0 lg:space-x-16 space-x-0 lg:pb-24 lg:pt-32 mb-20 pt-5">

					<!-- gambar project Kedar -->
					<div class="lg:w-11/12 w-full self-center flex mx-auto lg:mb-0 mb-5">
						<div x-data="{gallery1: false}" @click.away="gallery1= false">
						<img @click="gallery1= !gallery1" style="cursor: pointer;" class="rounded-xl shadow-xl" src="img/projek/Kedar1.png">

						<!-- content gallery Kedar -->
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

							<div class="lg:my-12 my-5 lg:mx-32 mx-5 lg:h-full h-screen relative">

							<!-- close button -->
							<button class="absolute top-0 right-0 focus:outline-none bg-black bg-opacity-70 hover:bg-red-400 text-white rounded-bl-xl rounded-tr-xl self-start p-2" @click="gallery1 = false">
				              <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
				                <path
				                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
				                ></path>
				              </svg>
				            </button>
							<!-- end close button -->

							<div class="lg:flex block lg:space-x-14 lg:space-y-0 space-y-10 lg:h-full h-4/5 bg-transparent rounded-xl overflow-auto">
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

					<!-- review project Kedar -->
					<div class="w-full text-gray-700 self-center">
					<div  x-data="{open: false}" @click.away="open= false">
						<div class="flex justify-between items-center">
							<a href="https://kedar-id.herokuapp.com" style="cursor: pointer;" class="lg:text-3xl text-center md:text-2xl text-xl font-bold text-blue-700 hover:text-blue-500">Kedar! Web Belajar Online</a>
							<button @click="open= !open" class="lg:hidden h-full text-blue-700 hover:bg-blue-100 rounded-full">
								<svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180':open, 'rotate-0':!open}" class="h-6 w-6 transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
								</svg>
							</button>
						</div>
						<p x-show="open"
				           x-transition:enter="transition transform duration-300"
				           x-transition:enter-start="opacity-0 -translate-y-5"
				           x-transition:enter-end="opacity-100 translate-y-0"
				           x-transition:leave="transition transform duration-300"
				           x-transition:leave-start="opacity-100 translate-y-0"
				           x-transition:leave-end="opacity-0 -translate-y-5"
						class="mt-5 text-justify">Kedar! ditujukan untuk para pelajar dan pengajar yang mengalami kendala dalam proses ajar-mengajar oleh dampak pandemi Covid-19. <span class="text-purple-700">Memiliki fitur untuk berbagi materi dan tugas serta melakukan pertemuang secara daring.</span> Tantangannya adalah dalam merancang fitur-fitur sistem ini. Itu adalah hal baru yang perlu dipelajari, dan itu membutuhkan waktu.</p>
						<p class="lg:block hidden mt-5 text-justify">Kedar! ditujukan untuk para pelajar dan pengajar yang mengalami kendala dalam proses ajar-mengajar oleh dampak pandemi Covid-19. <span class="text-purple-700">Memiliki fitur untuk berbagi materi dan tugas serta melakukan pertemuang secara daring.</span> Tantangannya adalah dalam merancang fitur-fitur sistem ini. Itu adalah hal baru yang perlu dipelajari, dan itu membutuhkan waktu.</p>
						<p class="mt-5 text-gray-700 font-bold flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							April - June 2021
						</p>
					</div>	
					</div>
					<!-- /review project -->
				</div>
				<!-- /content projects Kedar -->

				<!-- content projects SIP -->
				<div id="project2" class="lg:flex block lg:mx-auto mx-0 lg:space-x-16 space-x-0 lg:pb-32 lg:pt-32 pb-0 mb-20">
					<!-- gambar project SIP -->
					<div class="lg:w-11/12 w-full lg:mb-0 mb-5 self-center">

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

							<div class="lg:my-12 my-5 lg:mx-32 mx-5 lg:h-full self-center h-screen relative">

							<!-- close button -->
							<button class="absolute top-0 right-0 focus:outline-none bg-black bg-opacity-70 hover:bg-red-400 text-white rounded-bl-xl rounded-tr-xl self-start p-2" @click="gallery2 = false">
				              <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
				                <path
				                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
				                ></path>
				              </svg>
				            </button>
							<!-- end close button -->

							<div class="lg:flex block lg:space-x-14 lg:space-y-0 space-y-10 lg:h-full h-4/5 bg-transparent rounded-xl overflow-auto">
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

					<!-- review project SIP -->
					<div class="w-full text-gray-700 self-center">
					<div x-data="{open: false}" @click.away="open= false">
						<div class="flex justify-between items-center">
							<p class="lg:text-3xl md:text-2xl text-xl font-bold text-blue-700 flex">Sistem Informasi Pegawai</p>
							<button @click="open= !open" class="lg:hidden h-full text-blue-700 hover:bg-blue-100 rounded-full">
								<svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180':open, 'rotate-0':!open}" class="h-6 w-6 transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
								</svg>
							</button>
						</div>
						<p x-show="open"
				           x-transition:enter="transition transform duration-300"
				           x-transition:enter-start="opacity-0 -translate-y-5"
				           x-transition:enter-end="opacity-100 translate-y-0"
				           x-transition:leave="transition transform duration-300"
				           x-transition:leave-start="opacity-100 translate-y-0"
				           x-transition:leave-end="opacity-0 -translate-y-5"
						class="mt-5 text-justify">Sistem ini diharapkan dapat mengolah dan menyimpan data-data untuk sebuah instansi. <span class="text-purple-700">Sistem dilengkapi dengan pengolahan data pegawai, proses cuti, dan proses lembur.</span> Dalam sistem ini tantangannya ialah dalam menganalisa kebutuhan dari sebuah sistem pegawai itu sendiri.</span></p>
						<p class="lg:block hidden mt-5 text-justify">Sistem ini diharapkan dapat mengolah dan menyimpan data-data untuk sebuah instansi. <span class="text-purple-700">Sistem dilengkapi dengan pengolahan data pegawai, proses cuti, dan proses lembur.</span> Dalam sistem ini tantangannya ialah dalam menganalisa kebutuhan dari sebuah sistem pegawai itu sendiri.</span></p>
						<p class="mt-5 text-gray-700 font-bold flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							June 2021 - On Going
						</p>
					</div>
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
