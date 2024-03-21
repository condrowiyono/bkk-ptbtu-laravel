<!doctype html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="PT Baja Titian Utama, didirakan 2018 sebagai bagian dari PT Bukaka Teknik Utama. Berkolaborasi dengan pemerintah untuk membangun jembatan di Indonesia. Dengan konsesi selama 12 tahun, ratusan jembatan telah dibangun." />
    <meta name="keywords"
        content="PT Baja Titian Utama, PT Bukaka Teknik Utama Tbk, PT Bukaka Teknik Utama, terbaik di indonesia, proyek jembatan, pembuatan jembatan, jembatan jawa, konstruksi, kerjasama pemerintah, baja handal, konstruksi handal, infrastruktur negara, kementrian pekerjaan umum, pupr, jembatan di pulau jawa, pt btu, btu" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.ico" />
    <meta name="generator" content={Astro.generator} />
    <meta name="author" content="PT Baja Titian Utama" />
    <meta name="author" content="Condro Wiyono" />
    <meta name="author" content="PT Bukaka Teknik utama" />
    <meta name="referrer" content="origin" />
    <meta name="creator" content="Condro Wiyono" />
    <meta name="publisher" content="PT Baja Titian Utama" />
    <meta property="og:title" content="PT Baja Titian Utama" />
    <meta property="og:description"
        content="PT Baja Titian Utama, yang didirikan pada tahun 2018 sebagai bagian dari PT Bukaka Teknik Utama, berkolaborasi dengan pemerintah untuk menciptakan dan merawat jembatan di seluruh Indonesia, terutama di Jawa. Dengan konsesi selama 12 tahun (2 tahun konstruksi dan 10 tahun pemeliharaan), ratusan jembatan telah dibangun dan dirawat oleh perusahaan kami. Kami bangga menjadi terbaik di Indonesia dalam proyek jembatan, pembuatan jembatan, dan konstruksi handal. Kerjasama dengan pemerintah dan keahlian dalam penggunaan baja yang handal menjadikan kami mitra yang andal dalam membangun masa depan infrastruktur negara." />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="PT Baja Titian Utama" />
    <meta name="twitter:description"
        content="PT Baja Titian Utama, yang didirikan pada tahun 2018 sebagai bagian dari PT Bukaka Teknik Utama, berkolaborasi dengan pemerintah untuk menciptakan dan merawat jembatan di seluruh Indonesia, terutama di Jawa. Dengan konsesi selama 12 tahun (2 tahun konstruksi dan 10 tahun pemeliharaan), ratusan jembatan telah dibangun dan dirawat oleh perusahaan kami. Kami bangga menjadi terbaik di Indonesia dalam proyek jembatan, pembuatan jembatan, dan konstruksi handal. Kerjasama dengan pemerintah dan keahlian dalam penggunaan baja yang handal menjadikan kami mitra yang andal dalam membangun masa depan infrastruktur negara." />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M7174VN4ZB"></script>

    <title>PT Baja Titian Utama | Konstruksi Jembatan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="sticky top-0 z-40 w-full border-b bg-background/60 backdrop-blur">
        <nav class="container mx-auto flex items-center justify-between py-2 h-16">
            <a href="/" class="font-bold text-xl text-primary" aria-label="Home">
                <img src="/icon/logo.svg" alt="Home" class="h-12" />
            </a>
            <nav class="hidden gap-6 md:flex">
                <a href="/#home"> Beranda </a>
                <a href="#profile"> Profil </a>
                <a href="#activities"> Aktivitas </a>
                <a href="#gallery"> Galeri </a>
                <a href="{{ route('blog.index') }}"> Blog </a>
                <a href="#contact" class="text-primary font-bold"> Hubungi Kami </a>
            </nav>
            <nav class="flex md:hidden">
                <select id="nav-menu" class="p-2 border border-gray-300 rounded-md">
                    <option value="/#home">Beranda</option>
                    <option value="#profile">Profil</option>
                    <option value="#activities">Aktivitas</option>
                    <option value="#gallery">Galeri</option>
                    <option value="/blog">Blog</option>
                    <option value="#contact">Hubungi Kami</option>
                </select>
            </nav>
        </nav>
    </header>
    <section id="not-found" class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-9xl font-bold text-primary">404</h1>
            <h2 class="text-3xl font-bold">Halaman Tidak Ditemukan</h2>
            <p class="text-lg">Maaf, halaman yang Anda cari tidak ditemukan.</p>
            <a href="/" class="text-primary font-bold">Kembali ke Beranda</a>
        </div>
    </section>
</body>

</html>
