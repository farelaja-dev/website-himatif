@extends('frontpage.layouts.app-frontpage')

@section('title', 'Pemilu Himatif')

@section('pageClass', 'pemilu')

@section('content')
    <!-- Header Section - Di luar wrapper supaya lebar selayar -->
    <div class="pemilu-header">
        <!-- Gambar dekorasi di dalam header -->
        <img src="{{ asset('img/bagian/3.png') }}" class="header-decoration-left">
        <img src="{{ asset('img/bagian/4.png') }}" class="header-decoration-right">

        <h1 class="pemilu-title">PEMILU HIMATIF 202</h1>
        <p class="pemilu-subtitle">Dengan Tema</p>
        <div class="theme-card">
            <p style="font-size: 1.5rem; line-height: 1.6; font-weight: 600;">
                Mewujudkan Kepemimpinan Inovatif yang Kolaboratif, Responsif, Proaktif, dan Berintegritas bagi
                HIMATIF
                2024/2025
            </p>
        </div>
    </div>

    <div class="pemilu-wrapper">
        <!-- konten utama -->

        <!-- Scroll Indicator -->
        <div style="text-align: center; padding: 40px 0;">
            <p style="color: #FEF9F1; margin-bottom: 15px;">Scroll kebawah untuk melihat Visi dan Misi mereka</p>
            <div style="width: 30px; height: 30px; margin: 0 auto; animation: bounce 2s infinite;">
                <svg viewBox="0 0 24 24" fill="#FEF9F1" style="width: 100%; height: 100%;">
                    <path d="M7 10l5 5 5-5z" />
                </svg>
            </div>
        </div>

        <!-- 3 Reasons Section -->
        <div class="reasons-section">
            <h2 class="reasons-title">3 Alasan Kenapa Jangan Sampai Golput</h2>
            <div class="reasons-grid">
                <div class="reason-card">
                    <div class="reason-header">
                        Partisipasi Aktif Mendorong Kepemimpinan yang Berkualitas
                    </div>
                    <div class="reason-content">
                        Pemilihan umum adalah cara demokratis untuk menentukan pemimpin yang akan mewakili mahasiswa.
                        Dengan tidak Golput maka mahasiswa berpartisipasi aktif ini memastikan bahwa pemilihan dilakukan
                        secara adil dan demokratis.
                    </div>
                </div>

                <div class="reason-card">
                    <div class="reason-header">
                        Menghormati Proses Demokrasi
                    </div>
                    <div class="reason-content">
                        Dengan memberikan suara, mahasiswa ikut serta dalam pembentukan keputusan bersama dan
                        menunjukkan rasa tanggung jawab terhadap pilihan kepemimpinan yang akan mempengaruhi arah
                        himpunan.
                    </div>
                </div>

                <div class="reason-card">
                    <div class="reason-header">
                        Meningkatkan Legitimasi Pemimpin Terpilih
                    </div>
                    <div class="reason-content">
                        Memastikan bahwa kepemimpinan yang terpilih memiliki dukungan luas dari anggota himpunan. Jika
                        banyak anggota memilih untuk golput, pemimpin terpilih mungkin menghadapi tantangan untuk
                        meyakinkan anggota bahwa mereka memiliki dukungan yang diperlukan.
                    </div>
                </div>
            </div>
        </div>

        <!-- Candidates Section -->
        <div class="candidates-section">
            @foreach ($candidates as $key => $candidate)
                @if ($key > 0)
                    <div class="divider"></div>
                @endif

                <div class="candidate-container">
                    <!-- Paslon Badge di luar dan di atas -->
                    <div class="paslon-badge-container">
                        <div class="paslon-badge">Paslon {{ $candidate->id }}</div>
                    </div>
                    
                    <div class="candidate-grid" style="{{ $key === 1 ? 'direction: rtl;' : '' }}">
                        <div class="candidate-photo-section" style="{{ $key === 1 ? 'direction: ltr;' : '' }}">
                            <div class="photo-name-card">
                                <div class="photo-section">
                                    <img src="{{ asset('storage/' . $candidate->photo) }}" alt="Candidate {{ $candidate->id }}"
                                        class="candidate-photo">
                                </div>
                                <div class="name-social-section">
                                    <div class="candidate-name">
                                        {{ $candidate->nama }}
                                    </div>
                                    <div class="social-section">
                                        <div class="arrow">→</div>
                                        <div class="social-icons">
                                            <span class="linkedin-icon">in</span>
                                            <span class="instagram-icon">📷</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="candidate-info" style="{{ $key === 1 ? 'direction: ltr;' : '' }}">
                            <div class="info-card">
                                <div class="info-header">Visi</div>
                                <div class="info-content">
                                    {{ $candidate->visi }}
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-header">Misi</div>
                                <div class="info-content">
                                    <ol>
                                        @foreach ($candidate->misi as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Vote Section -->
        <div class="vote-section">
            <p class="vote-text">Klik tombol, jika sudah siap memberikan suara</p>
            <button class="vote-button" onclick="location.href='{{ route('frontpage.pemilu.vote') }}'">
                Vote Sekarang
            </button>
        </div>
        <!-- Footer Image -->
        
        <!-- Footer Image -->
        <div style="width:100%;text-align:center;margin:48px 0 0 0;">
        <div style="background:#FEF9F1;width:100vw;max-width:100%;margin:0 auto;padding:32px 0;display:flex;justify-content:center;align-items:center;position:relative;">
            <div style="width:100%;text-align:center;position:relative;">
                <img src="{{ asset('img/bagian/9.png') }}" alt="Bagian 8" style="max-width:1600px;width:100%;height:auto;display:block;margin:0 auto;position:absolute;top:-40px;left:50%;transform:translateX(-50%);">
            </div>
        </div>
        </div>
@endsection

@section('style')
    <style>
        body.pemilu {
            background-color: #013049 !important;
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .pemilu-header {
            background-color: #FEF9F1;
            padding: 60px 20px 80px 20px;
            text-align: center;
            border-radius: 0 0 120px 120px;
            margin-bottom: 0;
            width: 100%;
            position: relative;
        }

        .header-decoration-left {
            position: absolute;
            top: -20px;
            left: 0;
            width: 35px;
            height: auto;
            z-index: 1000;
        }

        .header-decoration-right {
            position: absolute;
            top: -20px;
            right: 0;
            width: 35px;
            height: auto;
            z-index: 1000;
        }

        .pemilu-wrapper {
            background-color: #013049;
            min-height: 100vh;
            width: 100%;
        }

        .pemilu-title {
            font-size: 3rem;
            font-weight: 900;
            color: white;
            background: #910E19;
            padding: 20px 40px;
            border-radius: 50px;
            display: inline-block;
            margin: 0 0 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .pemilu-subtitle {
            font-size: 1.4rem;
            color: #013049;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .theme-card {
            background: transparent;
            color: black;
            padding: 0;
            border-radius: 0;
            max-width: 900px;
            margin: 0 auto;
            border: none;
            box-shadow: none;
            font-weight: 600;
        }

        .reasons-section {
            padding: 80px 20px;
            text-align: center;
            background-color: #013049;
        }

        .reasons-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #FEF9F1;
            margin-bottom: 50px;
        }

        .reasons-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .reason-card {
            background: #910E19;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            border: 2px solid #FEF9F1;
        }

        .reason-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .reason-header {
            background: #910E19;
            color: #FEF9F1;
            padding: 20px;
            font-weight: 700;
            font-size: 1.1rem;
            text-align: center;
        }

        .reason-content {
            background: #910E19;
            padding: 25px;
            color: #FEF9F1;
            font-size: 1rem;
            line-height: 1.6;
            text-align: left;
        }

        .candidates-section {
            padding: 80px 20px;
            background-color: #013049;
        }

        .candidate-container {
            max-width: 1400px;
            margin: 0 auto 60px;
            background: #013049;
            border-radius: 0;
            padding: 0;
            box-shadow: none;
            border: none;
            position: relative;
        }

        .paslon-badge-container {
            text-align: left;
            margin-bottom: 20px;
        }

        .paslon-badge {
            background: #910E19;
            color: #FEF9F1;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 2px solid #FEF9F1;
        }

        .candidate-grid {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 40px;
            align-items: start;
            padding: 0 40px;
        }

        .candidate-photo-section {
            display: flex;
            justify-content: center;
        }

        .photo-name-card {
            background: #910E19;
            border-radius: 25px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.18);
            text-align: center;
            position: relative;
            overflow: hidden;
            /* Clip path untuk sudut kiri atas masuk ke dalam lebih dalam */
            clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 25%);
        }

        .photo-section {
            background: #910E19;
            padding: 30px 30px 20px 30px;
        }

        .name-social-section {
            background: #FEF9F1;
            padding: 15px 20px;
            color: #013049;
        }

        .candidate-photo {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #FEF9F1;
        }

        .candidate-name {
            font-weight: 900;
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 10px;
            color: #013049;
        }

        .social-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .arrow {
            font-size: 1.5rem;
            color: #910E19;
            font-weight: bold;
        }

        .social-icons {
            display: flex;
            gap: 8px;
        }

        .linkedin-icon {
            background: #0077B5;
            color: white;
            padding: 5px 8px;
            border-radius: 3px;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .instagram-icon {
            background: #E4405F;
            color: white;
            padding: 3px 6px;
            border-radius: 3px;
            font-size: 0.9rem;
        }

        .candidate-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .info-card {
            background: transparent;
            border: 2px solid #FEF9F1;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .info-header {
            background: transparent;
            color: #FEF9F1;
            padding: 15px 25px;
            font-size: 1.5rem;
            font-weight: 700;
            text-align: left;
            border-bottom: 2px solid #FEF9F1;
        }

        .info-content {
            padding: 25px;
            color: #FEF9F1;
            font-size: 1rem;
            line-height: 1.7;
            text-align: left;
        }

        .info-content ol {
            padding-left: 20px;
            color: #FEF9F1;
        }

        .info-content li {
            margin-bottom: 10px;
            color: #FEF9F1;
        }

        .vote-section {
            text-align: center;
            padding: 60px 20px;
            background-color: #013049;
        }

        .vote-text {
            font-size: 1.3rem;
            color: #FEF9F1;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .vote-button {
            background: #910E19;
            color: #FEF9F1;
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #FEF9F1;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .vote-button:hover {
            background: #FEF9F1;
            color: #910E19;
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        .divider {
            height: 2px;
            background: #FEF9F1;
            border-radius: 5px;
            margin: 60px auto;
            width: 80%;
            max-width: 600px;
        }

        @keyframes bounce {

            0%,
            20%,
            53%,
            80%,
            100% {
                transform: translateY(0);
            }

            40%,
            43% {
                transform: translateY(-10px);
            }

            70% {
                transform: translateY(-5px);
            }
        }

        @media (max-width: 768px) {

            .header-decoration-left,
            .header-decoration-right {
                display: none;
            }

            .pemilu-title {
                font-size: 2.5rem;
            }

            .candidate-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 0 20px;
            }

            .candidate-photo {
                width: 200px;
                height: 200px;
            }

            .photo-name-card {
                padding: 25px;
            }

            .reasons-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .candidate-container {
                padding: 0;
            }

            .pemilu-header>div:first-child {
                grid-template-columns: 1fr !important;
                text-align: center !important;
            }

            .pemilu-header>div:first-child>div:first-child {
                text-align: center !important;
            }
        }
    </style>
@endsection

@section('script')
    <script></script>
@endsection