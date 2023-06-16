<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MalangBersuara</title>

  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="css/output.css" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />

  <!-- Font Google -->
  <link
    href="css/font.css"
    rel="stylesheet" />

  <!-- Remixicons -->
  <link href="css/remixicon.css" rel="stylesheet" />

  <!-- Boxicons -->
  <link href="css/boxicons.min.css" rel="stylesheet" />

  <!-- Drop Down Menu -->
  <link href="css/tailwind.min.css" rel="stylesheet">
  <script defer src="js/cdn.min.js"></script>

  <script>
    if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia(
        "(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
    } else {
      document.documentElement.classList.remove("dark");
    }
  </script>

  <!-- Scroll Reveal JS -->
  <script src="js/scrollreveal.min.js"></script>
</head>

<body class="scrollbar">
  <!-- Navbar Section -->
  <header class="header-nav">
    <nav class="container">
      <div class="container flex justify-center mx-auto">
        <div x-data="{ open: true }" @mouseleave="open = true" class="relative">
        <h1 class="dark-mode-text my-1 block text-4xl font-bold text-dark lg:text-[40px]">MALANG BERSUARA</h1>
        <h5 class="dark-mode-text my-1 block font-bold text-dark ">Powered BY GENERASI WIBU</h5>
      
       
      </div>
    </nav>
  </header>
  <hr>

  <!-- Hero Section -->
  <section id="home" class="dark-mode py-28">
    <div class="container">
      <!-- Automatic Column View -->
      <div class="flex flex-wrap">
        <!-- Greetings -->
        <div class="home-greets">
          <h1 class="dark-mode-text my-1 block text-4xl font-bold text-dark lg:text-[40px]">HALO</h1>
         
          <p class="dark-mode-text mb-10 text-base leading-relaxed text-secondary md:text-base">
            <span class="font-bold md:text-xl">"</span>Selamat datang di website MALANG BERSUARA, Website MalangBersuara ini adalah sarana yang di sediakan untuk menjembatani sekaligus memudahkan warga kota khususnya untuk menyampaikan aspirasi, saran, kritik, pengaduan maupun pertanyaan kepada perangkat pemerintah Kota MALANG. Silahkan melakukan pengaduan anda untuk Kota MALANG yang lebih baik <span
              class="font-bold md:text-xl">"</span>
              
            <br />
            <br>
            <br>
            <br>
            <a href="cek.php"
                    class="btn-ghost-ver">
                     Masuk
                </a>
                <br>
                <br>
                <br>
                <a href="daftar.php"
                    class="btn-ghost-ver">
                   Daftar
                </a>
            <!-- <span class="text-red-500">*</span><span class="text-sm">Attention, please use this file </span><span class="text-sm font-semibold">according to the applicable procedure</span> -->
          </p>
          <!-- <a download="Nope" href="" class="btn-ghost mb-10"><i
              class="bx bxs-download bx-burst mr-2"></i>Nope</a> -->
        </div>
        
        <!-- Profile Img -->
        <div class="home-image">
          <div class="relative mt-10 lg:right-0 lg:mt-0">
            <img src="img/icon/wa.jpg" alt="profile-img"
              class="mx-auto max-w-full rounded-xl dark:relative dark:z-10" />
            <span class="absolute bottom-5 left-1/2 -z-10 -translate-x-1/2 dark:z-0 md:scale-110 lg:scale-125">
              <!--<img src="dist/img/blob.svg" alt="blob" />-->
              <!-- <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#77bef8"
                    d="M67.6,-22.3C74.6,-0.5,58.2,28.5,35.2,44.2C12.2,59.9,-17.4,62.3,-39.8,47.7C-62.2,33.1,-77.3,1.5,-69.5,-21.4C-61.7,-44.4,-30.8,-58.7,-0.3,-58.6C30.3,-58.5,60.6,-44,67.6,-22.3Z"
                    transform="translate(300 300) scale(1.1)"
                  />
                </svg> -->
            </span>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  

  <!-- Skill Section -->
  <section id="home" class="dark-mode py-24">
    <div class="container">
      

      <div class="skill-data">
        <!-- Frontend -->
        <div class="w-full py-4 px-2 md:w-5/2 lg:w-5/2 xl:w-5/3">
          <div class="skill-card">
            <div class="pt-5 pb-7 text-center">
              <h3 class="skill-title">Alur Pengaduan</h3>
            </div>
            <div class="flex flex-wrap px-2 pb-5">
              <div class="w-5/2">
                <div class="skill-list">
                  <i class="bx bxl-html5 text-3xl text-[#E34F26]"></i>
                  <span class="skill-list-name">1. Input pengaduan anda dengan login website</span>
                </div>
                <div class="skill-list">
                  <i class="bx bxl-css3 text-3xl text-[#1572B6]"></i>
                  <span class="skill-list-name">2. Pengaduan telah diterima dan diverifikasi</span>
                </div>
                <div class="skill-list">
                  <i class="bx bxl-bootstrap text-3xl text-[#7952B3]"></i>
                  <span class="skill-list-name">3. Pengaduan akan didisposisi ke ODP terkait</span>
                </div>
                <div class="skill-list">
                  <i class="bx bxl-tailwind-css text-3xl text-[#06B6D4]"></i>
                  <span class="skill-list-name">4. Pengaduan akan ditindaklanjuti oleh ODP dan menjawab pengaduan masyarakat</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </section>
  <section id="home" class="dark-mode py-24">
    <div class="container">

      <div class="skill-data">
        <!-- Frontend -->
        <div class="w-full py-4 px-2 md:w-5/2 lg:w-5/2 xl:w-5/3">
          <div class="skill-card">
            <div class="pt-5 pb-7 text-center">
              <h3 class="skill-title">VISI & MISI</h3>
            </div>
            <div class="flex flex-wrap px-2 pb-5">
              <div class="w-5/2">
                

                <div class="skill-list">
                  <i class="bx bxl-html5 text-3xl text-[#E34F26]">VISI</i>
                  
                  <span class="skill-list-name">“Terwujudnya Pelayanan Pengaduan yang Optimal untuk Memenuhi Hak Pengadu Sesuai dengan Ketentuan Peraturan Perundang-Undangan”</span>
                </div>
                
                <hr>
                <hr>
                <div class="skill-list">
                  <i class="bx bxl-css3 text-3xl text-[#1572B6]">MISI</i>
                  <span class="skill-list-name">1. Meningkatkan pengelolaan dan pelayanan pengaduan msyarakat yang berkualitas <br><br>
2. Membangun dan mengembangkan sistem penyediaan dan layanan pengaduan masyarakat<br><br>
3. Meningkatkan kompetensi sumber daya manusia<br><br>
</span>
               
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </section>

  

  <!-- Footer -->
  <footer class="bg-primary pt-16 pb-12">
    <div class="container">

      <div class="w-full border-t border-slate-400 pt-10">
        <span class="ml-4 text-sm text-icons">&#169; 2023 <span class="font-semibold">Pemerintah Kota Malang</span>. All Rights
          Reserved</span>
          <span class="ml-4 text-sm text-icons"> <span class="font-semibold" >www.malang.co.id</span><br>
          <span class="ml-4 text-sm text-icons"> <span class="font-semibold" >Nomor Admin: 0859176807285 (KenzienID)</span>
          <span class="ml-4 text-sm text-icons"> <span class="font-semibold" >Email: malangbersuara@gmail.com</span>



      </div>
      <!-- <ul class="text-icons text-sm flex justify-start gap-6 mb-1">
          <li><a href="#about" class="footer-link">About</a></li>
          <li><a href="#portfolio" class="footer-link">Portfolio</a></li>
        </ul> -->
    </div>  
  </footer>

  <!-- JS -->
  <script src="js/main.js"></script>

  <!-- Swiper JS -->
  <script src="js/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    let swiperPortfolio = new Swiper(".portfolio-list", {
      spaceBetween: 24,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 2,
        },
      },
    });
  </script>
</body>

</html>
