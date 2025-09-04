@extends('frontpage.layouts.app-frontpage')

@section('title', 'BERANDA')

@section('pageClass', 'homepage')

@section('content')
    {{-- HERO SECTION --}}
    <section class="hero-section">
        <div class="hero-container">
            <!-- Left Content -->
            <div class="left-content">
                <div class="hero-badge">
                    <span class="badge-text">HIMPUNAN MAHASISWA</span>
                </div>
                <h1 class="hero-title">TEKNOLOGI INFORMASI</h1>
                <div class="description-text">
                    <p>
                        HIMATIF (Himpunan Mahasiswa Teknologi Informasi) adalah<br>
                        Salah satu Organisasi Mahasiswa di Fakultas Ilmu Komputer<br>
                        Universitas Jember. Terbentuknya HIMATIF dirintis oleh 7 Orang<br>
                        Mahasiswa Teknologi Informasi pada tanggal 6 Agustus 2017.
                    </p>
                </div>
            </div>

            <!-- Right Content -->
            <div class="right-content">
                <div class="person-wrapper">
                    <img src="{{ asset('img/ulul.png') }}" alt="HIMATIF Member" class="person-image">
                </div>
            </div>
        </div>
    </section>

    {{-- APA YANG KAMI LAKUKAN --}}
    <section class="apa-kami-lakukan relative py-20" style="background: linear-gradient(to bottom, #FEF9F1, #002F49);">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center px-6 md:px-12">
            <!-- Left Image -->
            <div class="w-full md:w-1/3 flex justify-center md:justify-start mb-10 md:mb-0 relative">
                <img src="{{ asset('img/ulul.png') }}" alt="HIMATIF Member" class="w-64 md:w-80 rounded-lg z-10 relative" />
            </div>

            <!-- Right Content -->
            <div class="w-full md:w-2/3">
                <h2
                    class="text-3xl md:text-4xl font-extrabold text-white text-center md:text-left bg-[#910E19] inline-block px-10 py-4 rounded-full mb-10">
                    APA YANG KAMI LAKUKAN
                </h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Card -->
                    <div class="bg-[#910E19] text-white px-6 py-6 rounded-[30px] shadow-lg relative">
                        <h3 class="font-bold text-lg mb-3">Menyusun Proker</h3>
                        <p class="text-sm leading-relaxed">Program kerja dibuat dan dikelola oleh masing-masing divisi di
                            HIMATIF sesuai ruang lingkup masing-masing</p>
                        <span
                            class="absolute -top-3 -right-3 bg-[#5C0B11] text-white w-10 h-10 flex items-center justify-center rounded-full shadow-md">➜</span>
                    </div>
                    <!-- Card -->
                    <div class="bg-[#910E19] text-white px-6 py-6 rounded-[30px] shadow-lg relative">
                        <h3 class="font-bold text-lg mb-3">Melaksanakan Proker</h3>
                        <p class="text-sm leading-relaxed">Program kerja yang telah dirancang, dilaksanakan dan diikuti oleh
                            seluruh elemen di HIMATIF</p>
                        <span
                            class="absolute -top-3 -right-3 bg-[#5C0B11] text-white w-10 h-10 flex items-center justify-center rounded-full shadow-md">➜</span>
                    </div>
                    <!-- Card -->
                    <div class="bg-[#910E19] text-white px-6 py-6 rounded-[30px] shadow-lg relative">
                        <h3 class="font-bold text-lg mb-3">Meningkatkan Kualitas Sumber Daya Mahasiswa</h3>
                        <p class="text-sm leading-relaxed">Output yang diharapkan pada setiap proker yaitu meningkatnya
                            kualitas Sumber Daya Mahasiswa HIMATIF</p>
                        <span
                            class="absolute -top-3 -right-3 bg-[#5C0B11] text-white w-10 h-10 flex items-center justify-center rounded-full shadow-md">➜</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="visi-misi-section">
        <div class="container">
            <h2 class="title">VISI DAN MISI</h2>
            <div class="content">
                <div class="box visi">
                    <h3>VISI</h3>
                    <p>Terwujudnya mahasiswa berkarakter serta menjadi media untuk mengembangkan potensi mahasiswa di bidang
                        IPTEK yang didasari tanggung jawab dan sikap profesionalisme.</p>
                </div>
                <div class="box misi">
                    <h3>MISI</h3>
                    <ol>
                        <li>Mengadakan kegiatan yang bertujuan untuk mengembangkan IPTEK.</li>
                        <li>Meningkatkan kualitas sumber daya manusia di bidang akademis, kewirausahaan, dan keprofesian.
                        </li>
                        <li>Memperkenalkan Program Studi Teknologi Informasi di lingkungan masyarakat luas.</li>
                        <li>Menjalin hubungan dan kerjasama atas dasar kekeluargaan dengan organisasi di dalam atau di luar
                            Program Studi Teknologi Informasi.</li>
                        <li>Melaksanakan setiap kegiatan dengan berlandaskan disiplin dan penuh tanggung jawab.</li>
                        <li>Mempererat tali persaudaraan antar mahasiswa khususnya anggota HIMATIF.</li>
                    </ol>
                </div>
                <div class="photo">
                    <img src="{{ asset('img/ulul.png') }}" alt="Foto Ulul" />
                </div>
            </div>
        </div>
    </section>

    {{-- DIVISI --}}
    <section class="divisi-section">
        <div class="container">
            <h2 class="title">DIVISI</h2>
            <div class="divisi-list">
                <div class="divisi-item">
                    <div class="logo-wrapper"><img src="{{ asset('img/logo1.png') }}" alt="BPH"></div>
                    <strong>BPH</strong>
                    <p>Badan Pengurus Harian</p>
                </div>
                <div class="divisi-item">
                    <div class="logo-wrapper"><img src="{{ asset('img/logo2.png') }}" alt="PSDM"></div>
                    <strong>PSDM</strong>
                    <p>Pengembangan Sumber Daya Manusia</p>
                </div>
                <div class="divisi-item">
                    <div class="logo-wrapper"><img src="{{ asset('img/logo3.png') }}" alt="Litbang"></div>
                    <strong>LITBANG</strong>
                    <p>Penelitian dan Pengembangan</p>
                </div>
                <div class="divisi-item">
                    <div class="logo-wrapper"><img src="{{ asset('img/logo4.png') }}" alt="Humas"></div>
                    <strong>HUMAS</strong>
                    <p>Hubungan Mahasiswa</p>
                </div>
                <div class="divisi-item">
                    <div class="logo-wrapper"><img src="{{ asset('img/logo5.png') }}" alt="Mediatek"></div>
                    <strong>MEDIATEK</strong>
                    <p>Media Teknologi</p>
                </div>
            </div>
        </div>
    </section>

    <section id="proker-section">
        <div class="container">
            <h2 class="section-title">PROGRAM KERJA</h2>

            <div class="proker-slider">
                @foreach ($prokers as $proker)
                    <div class="proker-card">
                        <div class="card-img">
                            @if ($proker->logo)
                                <img src="{{ asset('storage/' . $proker->logo) }}" alt="{{ $proker->name }}">
                            @else
                                <img src="{{ asset('img/placeholder/product-image-default.svg') }}" alt="placeholder">
                            @endif
                        </div>
                        <div class="card-content">
                            <h3>{{ $proker->name }}</h3>
                            <p>{{ substr(strip_tags($proker->description), 0, 60) }}...</p>
                        </div>
                        <a href="{{ route('frontpage.proker.show', $proker->id) }}" class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-up-right">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>




    {{-- CSS --}}
    <style>
        /* --- HERO --- */
        .hero-section {
            background-color: #FEF9F1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        .hero-container {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 60px;
            width: 100%;
        }

        .left-content {
            flex: 0 0 60%;
            padding-right: 60px;
        }

        .right-content {
            flex: 0 0 40%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-badge {
            margin-bottom: 30px;
        }

        .badge-text {
            background: #910E19;
            color: #FEF9F1;
            padding: 20px 100px;
            border-radius: 60px;
            font-weight: 900;
            font-size: 32px;
            letter-spacing: 1px;
            display: inline-block;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 900;
            color: #1a1a1a;
            margin: 0 0 40px 50px;
            letter-spacing: -1px;
            text-align: left;
        }

        .description-text {
            max-width: 600px;
            margin: 0 0 0 8px;
            text-align: center;
        }

        .person-image {
            width: 320px;
            border-radius: 12px;
        }

        /* --- VISI MISI --- */
        .visi-misi-section {
            background: #013049;
            padding: 40px 20px;
            color: #fff;
        }

        .visi-misi-section .container {
            max-width: 1200px;
            margin: auto;
        }

        .visi-misi-section .title {
            background: #910E19;
            padding: 12px 35px;
            border-radius: 50px;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 40px;
            display: inline-block;
        }

        .visi-misi-section .content {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 20px;
            align-items: start;
        }

        .visi-misi-section .box {
            background: #fff;
            color: #000;
            padding: 20px;
            border-radius: 12px 12px 12px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .visi-misi-section .box.visi {
            border-left: 6px solid #910E19;
        }

        .visi-misi-section .box.misi {
            border-left: 6px solid #013049;
        }

        .visi-misi-section .photo img {
            max-width: 250px;
            border-radius: 12px;
            transform: translateX(30px);
        }

        /* --- DIVISI --- */
        .divisi-section {
            background: linear-gradient(to bottom, #013049 0%, #FEF9F1 100%);
            padding: 60px 20px;
            text-align: center;
        }

        .divisi-section .title {
            background: #910E19;
            padding: 12px 35px;
            border-radius: 50px;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 40px;
            display: inline-block;
        }

        .divisi-section .divisi-list {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 30px;
            justify-items: center;
        }

        .divisi-section .divisi-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .divisi-section .logo-wrapper {
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 12px;
        }

        .divisi-section .logo-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .divisi-section .divisi-item strong {
            font-weight: bold;
            font-size: 15px;
            color: #013049;
            margin-bottom: 4px;
        }

        .divisi-section .divisi-item p {
            color: #013049;
            font-size: 13px;
            margin: 0;
        }

        #proker-section {
            background: linear-gradient(to bottom, #FEF9F1, #013049);
            padding: 60px 20px;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            display: inline-block;
            background: #9b0d18;
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            padding: 10px 30px;
            border-radius: 50px;
            margin-bottom: 40px;
        }

        .proker-slider {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
            /* Firefox */
        }

        .proker-slider::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari */
        }

        .proker-card {
            flex: 0 0 250px;
            background: #9b0d18;
            border-radius: 20px;
            color: #fff;
            position: relative;
            overflow: hidden;
            padding-bottom: 40px;
        }

        .card-img {
            background: #ddd;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px 15px 0 0;
            overflow: hidden;
        }

        .card-img img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
        }

        .card-content h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .card-content p {
            font-size: 14px;
            line-height: 1.4;
        }

        .card-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: #fff;
            color: #013049;
            font-size: 18px;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        /* --- RESPONSIVE --- */
        @media(max-width:1200px) {
            .hero-container {
                padding: 0 40px;
            }

            .hero-title {
                font-size: 2.8rem;
            }

            .person-image {
                width: 280px;
            }

            .visi-misi-section .content {
                grid-template-columns: 1fr 1fr;
                text-align: center;
            }
        }

        @media(max-width:992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
                padding: 0 30px;
            }

            .left-content {
                flex: none;
                padding-right: 0;
                margin-bottom: 50px;
            }

            .right-content {
                flex: none;
            }

            .hero-title {
                font-size: 2.5rem;
                margin: 0 0 20px 0;
                white-space: normal;
                text-align: center;
            }

            .description-text {
                margin: 0 auto;
            }

            .description-text br {
                display: none;
            }

            .divisi-section .divisi-list {
                grid-template-columns: repeat(3, 1fr);
            }

            .visi-misi-section .content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .visi-misi-section .photo img {
                transform: none;
                margin: 0 auto;
            }
        }

        @media(max-width:768px) {
            .hero-section {
                padding: 60px 0;
            }

            .hero-container {
                padding: 0 25px;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .person-image {
                width: 240px;
            }

            .badge-text {
                font-size: 18px;
                padding: 16px 40px;
            }

            .apa-kami-lakukan .grid {
                grid-template-columns: 1fr;
            }

            .divisi-section .divisi-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width:576px) {
            .hero-container {
                padding: 0 20px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .person-image {
                width: 200px;
            }

            .badge-text {
                font-size: 16px;
                padding: 14px 30px;
            }

            .description-text p {
                font-size: 0.95rem;
            }

            .divisi-section .divisi-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <script>
        const slider = document.querySelector('.proker-slider');

        function autoScroll() {
            if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
                // balik ke awal kalau sudah mentok kanan
                slider.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            } else {
                // geser 1 card (280px termasuk gap)
                slider.scrollBy({
                    left: 270,
                    behavior: 'smooth'
                });
            }
        }

        setInterval(autoScroll, 3000); // setiap 3 detik auto geser
    </script>
@endsection
