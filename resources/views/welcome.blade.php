<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="text-2xl font-bold text-blue-600">Agathos Property</a>
      
      <!-- Navbar Links -->
      <div class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-600 hover:text-blue-600">Home</a>
        <a href="#listing" class="text-gray-600 hover:text-blue-600">Listing</a>
        <a href="#about" class="text-gray-600 hover:text-blue-600">About</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
      </div>
  
      <!-- Mobile Menu Button -->
      <button id="menu-toggle" class="md:hidden text-gray-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
      <a href="#home" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Home</a>
      <a href="#listing" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Listing</a>
      <a href="#about" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">About</a>
      <a href="#contact" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-96" style="background-image: url('your-hero-image-url.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
      <img src="your-logo-url.png" alt="Logo" class="w-24 mb-4">
      <h1 class="text-3xl font-bold">Ingin Menemukan Properti Impian Anda?</h1>
      <p class="mt-4 max-w-lg text-center">Dapatkan panduan lengkap untuk menemukan properti impian Anda dengan rekomendasi dan layanan profesional kami</p>
      <button class="mt-6 bg-white text-black px-6 py-2 rounded">Dapatkan Panduan</button>
    </div>
  </section>

  <!-- Property Listings -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold text-center mb-8">Property</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        
        <!-- Property Card -->
        <div class="bg-white rounded-lg shadow-md p-4 text-center">
          <img src="property-image-url.jpg" alt="Property Image" class="mx-auto mb-4 w-full h-48 object-cover rounded">
          <h3 class="text-lg font-bold">Post 5 Headline</h3>
          <p class="text-gray-600 mt-2">Sample small text. Lorem ipsum dolor sit amet.</p>
          <p class="text-gray-500 text-sm mt-2">User | Tue Nov 05 2024 | Edit</p>
          <button class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Read More</button>
        </div>
        
        <!-- Repeat Property Card for each listing -->
        

        <!-- More Property Cards as needed -->

      </div>
      <div class="text-center mt-8">
        <button class="bg-blue-500 text-white px-6 py-2 rounded">Lihat Semua</button>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold text-center mb-8">Kami Dapat Membantu</h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        
        <!-- Service Card -->
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="service-icon-url.png" alt="Service Icon" class="mx-auto mb-4 w-16 h-16">
          <h3 class="text-lg font-bold">Konsultasi Properti</h3>
          <p class="text-gray-600 mt-2">Kami menawarkan konsultasi mendalam dalam setiap kebutuhan untuk pembelian, penjualan, atau investasi properti.</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="service-icon-url.png" alt="Service Icon" class="mx-auto mb-4 w-16 h-16">
          <h3 class="text-lg font-bold">Negosiasi dan Mediasi</h3>
          <p class="text-gray-600 mt-2">Kami berpengalaman dalam negosiasi dan mediasi, baik dalam transaksi properti maupun konflik hukum.</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="service-icon-url.png" alt="Service Icon" class="mx-auto mb-4 w-16 h-16">
          <h3 class="text-lg font-bold">Layanan Pelanggan</h3>
          <p class="text-gray-600 mt-2">Kami berkomitmen untuk memberikan layanan pelanggan yang responsif untuk setiap pertanyaan atau bantuan yang dibutuhkan.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 text-center">
    <h2 class="text-2xl font-bold mb-4">Ingin Menjual Properti Anda?</h2>
    <p class="text-gray-600 max-w-xl mx-auto">Menjual properti bisa menantang, tapi dengan Agathos Property, Anda tidak perlu khawatir. Kami membantu Anda menjual properti dengan cepat dan harga terbaik.</p>
    <button class="mt-6 bg-blue-500 text-white px-6 py-3 rounded">Hubungi Kami</button>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm mb-4">© Agathos 2024</p>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        
        <!-- Footer Column -->
        <div>
          <h3 class="font-bold">Tentang Kami</h3>
          <p class="text-gray-300 text-sm mt-2">Agathos Property adalah spesialis properti dalam bidang lelang dengan pengalaman selama lebih dari 20 tahun.</p>
        </div>
        
        <div>
          <h3 class="font-bold">Alamat</h3>
          <p class="text-gray-300 text-sm mt-2">Jalan Merdeka 123, Jakarta, Indonesia</p>
        </div>
        
        <div>
          <h3 class="font-bold">Kontak Kami</h3>
          <p class="text-gray-300 text-sm mt-2">Email: agathosproperty@gmail.com</p>
          <p class="text-gray-300 text-sm mt-2">Telepon: +628123456789</p>
        </div>

      </div>
    </div>
  </footer>
  <script>
    // JavaScript to toggle mobile menu visibility
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
  
    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
