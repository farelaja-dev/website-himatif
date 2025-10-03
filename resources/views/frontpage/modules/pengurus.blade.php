@extends('frontpage.layouts.app-frontpage')

@section('title', 'PENGURUS')

@section('pageClass', 'pengurus')
@section('content')

    <!-- Main Content -->
    <main>
        <img src="{{ asset('img/bagian/3.png') }}"
            class="header-decoration-left opacity-0 -translate-x-8 transition-all duration-1000 ease-out" data-animate-left>
        <img src="{{ asset('img/bagian/4.png') }}"
            class="header-decoration-right opacity-0 translate-x-8 transition-all duration-1000 ease-out" data-animate-right>
        <!-- Hero Section -->
        <section class="bg-[#FEF9F1] relative px-4 py-16 overflow-hidden md:px-6 md:py-24">
            <!-- Background Patterns -->
            <!-- <div class="absolute top-0 left-0 opacity-20">
                <div class="w-64 h-64 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full"></div>
        </div>
            <div class="absolute bottom-0 right-0 opacity-20">
                <div class="w-64 h-64 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full"></div>
            </div> -->
            
            <div class="container relative z-10 mx-auto flex justify-center">
                <div class="flex flex-col items-center">
                    <!-- Left Content -->
                        <div class="inline-block px-8 py-4 mb-6 text-white rounded-full bg-[#910E19] opacity-0 translate-y-8 transition-all duration-1000 ease-out" data-animate>
                            <span class="text-xl md:text-6xl font-semibold">Divisi & Pengurus</span>
                        </div>
                        <h1 class="mb-6 text-xl font-black text-gray-900 md:text-8xl opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-200" data-animate>
                            HIMATIF
                        </h1>
                        <p class="max-w-6xl text-lg leading-relaxed text-center text-gray-600 opacity-0 translate-y-8 transition-all duration-1000 ease-out delay-400" data-animate>
                            {{ $header['2-text2']->content ?? 'HIMATIF memiliki struktur kepengurusan yang bertanggung jawab atas berbagai aspek dan kegiatan organisasi. Setiap divisi memiliki tugas pokok dan fungsi masing-masing untuk mencapai tujuan organisasi secara keseluruhan.' }}
                        </p>
                </div>
            </div>
        </section>

        <!-- Divisi Sections -->
        <section class="px-4 py-16 md:px-6 bg-[#02314A] rounded-t-[4rem]">
            <div class="container mx-auto space-y-16">
                @foreach ($divisions as $division)
                    <div class="p-6 rounded-2xl md:p-8 flex flex-col justify-center items-center opacity-0 translate-y-8 transition-all duration-1000 ease-out" data-animate>
                        <div class="flex flex-col justify-center items-center gap-6 mb-8">
                            @php
                                $divisionIcons = [
                                    'BPH' => '👑',
                                    'PSDM' => '👥',
                                    'LITBANG' => '🔬',
                                    'HUMAS' => '🤝',
                                    'MEDTEK' => '💻',
                                    'MEDFO' => '📱',
                                    'PEMTEK' => '⚙️'
                                ];
                                $divisionColors = [
                                    'BPH' => 'from-gray-500 to-gray-700',
                                    'PSDM' => 'from-blue-500 to-blue-700',
                                    'LITBANG' => 'from-purple-500 to-purple-700',
                                    'HUMAS' => 'from-green-500 to-green-700',
                                    'MEDTEK' => 'from-red-500 to-red-700',
                                    'MEDFO' => 'from-indigo-500 to-indigo-700',
                                    'PEMTEK' => 'from-orange-500 to-orange-700'
                                ];
                                $icon = $divisionIcons[$division->name] ?? '👥';
                                $color = $divisionColors[$division->name] ?? 'from-blue-500 to-blue-700';
                            @endphp
                            
                            <div class="flex items-center justify-center w-40 h-40 text-2xl md:text-3xl rounded-full">
                                <img src="{{ asset('img/bagian/logo-divisi/' . $division->name . '.png') }}" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h2 class="mb-2 mt-2 text-2xl font-bold text-white md:text-3xl">{{ $division->name }}</h2>
                                <!-- <p class="text-gray-600">{{ $division->description ?? 'Bertanggung jawab atas berbagai aspek dan kegiatan organisasi' }}</p> -->
                                        </div>
                                    </div>
                        
                        @php
                            $divisionMembers = $pengurus->filter(function($user) use ($division) {
                                return $user->status === '1' && 
                                       isset($user->periode[0]) && 
                                       $user->periode[0]['division_id'] === strval($division->id);
                            });
                            
                            $kepalaDivisi = $divisionMembers->filter(function($user) {
                                return $user->periode[0]['position'] === 'Kepala Divisi';
                            });
                            
                            $anggota = $divisionMembers->filter(function($user) {
                                return $user->periode[0]['position'] !== 'Kepala Divisi';
                            });
                        @endphp
                        
                        @if($kepalaDivisi->count() > 0)
                            <!-- Kepala Divisi -->
                            <div class="mb-8 w-full">
                                <div class="flex justify-center">
                                    <div class="grid grid-cols-1 max-w-6xl">
                                        @foreach($kepalaDivisi as $user)
                                            <div class="relative w-72 rounded-2xl overflow-hidden shadow-lg">
                                                <!-- Bagian Merah -->
                                                <div class="bg-[#910E19] relative pt-8 pb-16 px-6" style="clip-path: polygon(20px 0, 100% 0, 100% 100%, 0 100%, 0 20px);">
                                                    <!-- Foto Profil -->
                                                    <div class="flex justify-center">
                                            @if ($user->photo)
                                                            <img src="{{ asset('storage/' . $user->photo) }}" 
                                                                alt="{{ $user->name }}" 
                                                                class="w-32 h-32 object-cover rounded-full border-4 border-[#FEF9F1] shadow-md">
                                            @else
                                                            <div class="w-32 h-32 flex items-center justify-center rounded-full bg-gray-300 text-4xl">👤</div>
                                                    @endif
                                                    </div>
                                                    <!-- Nama & Jabatan -->
                                                    <div class="text-center mt-4">
                                                        <h4 class="text-xl font-bold text-white truncate max-w-[200px]">{{ $user->name }}</h4>
                                                        <p class="text-sm text-white/90">{{ $user->periode[0]['position'] }}</p>
                                                    </div>
                                                </div>

                                                <!-- Bagian Krem -->
                                                <div class="bg-[#FEF9F1] flex justify-between items-center px-6 py-3 rounded-b-2xl">
                                                    <!-- Panah -->
                                                    <span class="text-[#910E19] text-2xl font-bold">→</span>
                                                    <!-- Icon Sosmed -->
                                                    <div class="flex gap-3">
                                                        <a href="#" class="w-8 h-8 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                        <a href="#" class="w-8 h-8 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                                    </div>
                                        </div>
                                    @endif

                        @if($anggota->count() > 0)
                            <!-- Anggota -->
                            <div class="mb-8 w-full">
                                <div class="flex justify-center">
                                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 max-w-6xl">
                                        @foreach($anggota as $user)
                                        <div class="relative w-72 rounded-2xl overflow-hidden shadow-lg">
                                            <!-- Bagian Merah -->
                                            <div class="bg-[#910E19] relative pt-8 pb-16 px-6" style="clip-path: polygon(20px 0, 100% 0, 100% 100%, 0 100%, 0 20px);">
                                                <!-- Foto Profil -->
                                                <div class="flex justify-center">
                                            @if ($user->photo)
                                                        <img src="{{ asset('storage/' . $user->photo) }}" 
                                                            alt="{{ $user->name }}" 
                                                            class="w-32 h-32 object-cover rounded-full border-4 border-[#FEF9F1] shadow-md">
                                            @else
                                                        <div class="w-32 h-32 flex items-center justify-center rounded-full bg-gray-300 text-4xl">👤</div>
                                                    @endif
                                                </div>
                                                <!-- Nama & Jabatan -->
                                                <div class="text-center mt-4">
                                                    <h4 class="text-xl font-bold text-white truncate max-w-[200px]">{{ $user->name }}</h4>
                                                    <p class="text-sm text-white/90">{{ $user->periode[0]['position'] }}</p>
                                                </div>
                                            </div>

                                            <!-- Bagian Krem -->
                                            <div class="bg-[#FEF9F1] flex justify-between items-center px-6 py-3 rounded-b-2xl">
                                                <!-- Panah -->
                                                <span class="text-[#910E19] text-2xl font-bold">→</span>
                                                <!-- Icon Sosmed -->
                                                <div class="flex gap-3">
                                                    <a href="#" class="w-8 h-8 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                    <a href="#" class="w-8 h-8 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($division->subDivisions->count() > 0)
                            @foreach($division->subDivisions as $subdivision)
                                @php
                                    $subdivisionMembers = $pengurus->filter(function($user) use ($subdivision) {
                                        return $user->status === '1' && 
                                               isset($user->periode[0]) && 
                                               $user->periode[0]['division_id'] === strval($subdivision->id);
                                    });
                                @endphp
                                
                                @if($subdivisionMembers->count() > 0)
                                <!-- Subdivisi -->
                                <div class="mb-12 w-full opacity-0 translate-y-8 transition-all duration-1000 ease-out" data-animate>
                                    <h3 class="mb-8 text-2xl font-bold text-white text-center">{{ $subdivision->name }}</h3>
                                    
                                        <div class="flex justify-center">
                                        <div class="grid grid-cols-1 gap-24 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-6xl">
                                                @foreach($subdivisionMembers as $user)
                                                <div class="relative w-72 rounded-2xl overflow-hidden shadow-lg">
                                                    <!-- Bagian Merah -->
                                                    <div class="bg-[#910E19] relative pt-8 pb-16 px-6" 
                                                        style="clip-path: polygon(20px 0, 100% 0, 100% 100%, 0 100%, 0 20px);">
                                                        
                                                        <!-- Foto Profil -->
                                                        <div class="flex justify-center">
                                                @if ($user->photo)
                                                                <img src="{{ asset('storage/' . $user->photo) }}" 
                                                                    alt="{{ $user->name }}" 
                                                                    class="w-28 h-28 object-cover rounded-full border-4 border-[#FEF9F1] shadow-md">
                                                @else
                                                                <div class="w-28 h-28 flex items-center justify-center rounded-full bg-gray-300 text-3xl">👤</div>
                                                @endif
                                                        </div>
                                                        
                                                        <!-- Nama & Jabatan -->
                                                        <div class="text-center mt-4">
                                                            <h4 class="text-lg font-bold text-white truncate max-w-[200px]">{{ $user->name }}</h4>
                                                            <p class="text-sm text-white/90">{{ $user->periode[0]['position'] }}</p>
                                                        </div>
                                                    </div>

                                                    <!-- Bagian Krem -->
                                                    <div class="bg-[#FEF9F1] flex justify-between items-center px-6 py-3 rounded-b-2xl">
                                                        <!-- Panah -->
                                                        <span class="text-[#910E19] text-xl font-bold">→</span>
                                                        
                                                        <!-- Icon Sosmed -->
                                                        <div class="flex gap-3">
                                                            <a href="#" class="w-7 h-7 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                                <i class="fab fa-linkedin-in"></i>
                                                            </a>
                                                            <a href="#" class="w-7 h-7 flex items-center justify-center rounded-md bg-[#910E19] text-white">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                            @endif
                    </div>
                @endforeach
            </div>
        </section>

    </section>
    </main>

@endsection

@section('style')
    <style>
        /* Custom styles for the new design */
        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }
        
        .from-red-600 {
            --tw-gradient-from: #dc2626;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(220, 38, 38, 0));
        }
        
        .to-red-800 {
            --tw-gradient-to: #991b1b;
        }
        
        .from-yellow-400 {
            --tw-gradient-from: #facc15;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(250, 204, 21, 0));
        }
        
        .to-yellow-300 {
            --tw-gradient-to: #fde047;
        }
        
        .from-green-600 {
            --tw-gradient-from: #16a34a;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(22, 163, 74, 0));
        }
        
        .to-green-700 {
            --tw-gradient-to: #15803d;
        }
        
        .from-gray-200 {
            --tw-gradient-from: #e5e7eb;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(229, 231, 235, 0));
        }
        
        .to-gray-300 {
            --tw-gradient-to: #d1d5db;
        }
        
        .from-gray-300 {
            --tw-gradient-from: #d1d5db;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(209, 213, 219, 0));
        }
        
        .to-gray-500 {
            --tw-gradient-to: #6b7280;
        }
        
        .from-gray-500 {
            --tw-gradient-from: #6b7280;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(107, 114, 128, 0));
        }
        
        .to-gray-700 {
            --tw-gradient-to: #374151;
        }
        
        .from-blue-500 {
            --tw-gradient-from: #3b82f6;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(59, 130, 246, 0));
        }
        
        .to-blue-700 {
            --tw-gradient-to: #1d4ed8;
        }
        
        .from-purple-500 {
            --tw-gradient-from: #8b5cf6;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(139, 92, 246, 0));
        }
        
        .to-purple-700 {
            --tw-gradient-to: #7c3aed;
        }
        
        .from-indigo-500 {
            --tw-gradient-from: #6366f1;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(99, 102, 241, 0));
        }
        
        .to-indigo-700 {
            --tw-gradient-to: #4338ca;
        }
        
        .from-orange-500 {
            --tw-gradient-from: #f97316;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(249, 115, 22, 0));
        }
        
        .to-orange-700 {
            --tw-gradient-to: #c2410c;
        }
        
        /* Member card hover effects */
        .member-card {
            transition: all 0.3s ease;
        }
        
        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Ensure proper spacing */
        .space-y-16 > * + * {
            margin-top: 4rem;
        }
        
        .space-y-8 > * + * {
            margin-top: 2rem;
        }
        
        .space-y-4 > * + * {
            margin-top: 1rem;
        }
        
        .space-y-6 > * + * {
            margin-top: 1.5rem;
        }
        
        .gap-12 {
            gap: 3rem;
        }
        
        .gap-8 {
            gap: 2rem;
        }
        
        .gap-6 {
            gap: 1.5rem;
        }
        
        .gap-4 {
            gap: 1rem;
        }
        
        /* Shadow utilities */
        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .shadow-yellow-500\/30 {
            box-shadow: 0 10px 15px -3px rgba(245, 158, 11, 0.3), 0 4px 6px -2px rgba(245, 158, 11, 0.1);
        }
        
        /* Rounded utilities */
        .rounded-2xl {
            border-radius: 1rem;
        }
        
        .rounded-xl {
            border-radius: 0.75rem;
        }
        
        .rounded-lg {
            border-radius: 0.5rem;
        }
        
        .rounded-full {
            border-radius: 9999px;
        }
        
        /* Grid centering utilities */
        .max-w-6xl {
            max-width: 72rem;
        }
        
        .flex {
            display: flex;
        }
        
        .justify-center {
            justify-content: center;
        }
        
        .items-center {
            align-items: center;
        }
        
        .text-center {
            text-align: center;
        }
        
        .w-full {
            width: 100%;
        }
        
        /* Grid utilities */
        .grid {
            display: grid;
        }
        
        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
        
        @media (min-width: 640px) {
            .sm\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        
        @media (min-width: 768px) {
            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
        
        @media (min-width: 1024px) {
            .lg\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
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

        /* Animation classes */
        .opacity-0 {
            opacity: 0;
        }

        .opacity-100 {
            opacity: 1;
        }

        .translate-y-8 {
            transform: translateY(2rem);
        }

        .translate-y-0 {
            transform: translateY(0);
        }

        .-translate-x-8 {
            transform: translateX(-2rem);
        }

        .translate-x-8 {
            transform: translateX(2rem);
        }

        .translate-x-0 {
            transform: translateX(0);
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-1000 {
            transition-duration: 1000ms;
        }

        .ease-out {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        .delay-400 {
            transition-delay: 400ms;
        }
    </style>
@endsection

@section('script')
    <script>
        // Smooth scroll animations with Intersection Observer
        document.addEventListener('DOMContentLoaded', function() {
            // Create intersection observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px 0px 0px'
            };

            // Observer for regular vertical animations
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observer for left-to-right animations (3.png)
            const observerLeft = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', '-translate-x-8');
                        entry.target.classList.add('opacity-100', 'translate-x-0');
                        observerLeft.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observer for right-to-left animations (4.png)
            const observerRight = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-x-8');
                        entry.target.classList.add('opacity-100', 'translate-x-0');
                        observerRight.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all elements with data-animate attribute
            const animateElements = document.querySelectorAll('[data-animate]');
            let divisionIndex = 0;

            animateElements.forEach((element, index) => {
                // Add staggered delay for division groups
                if (element.classList.contains('p-6') || element.classList.contains('md\\:p-8')) {
                    element.style.transitionDelay = `${divisionIndex * 200}ms`;
                    divisionIndex++;
                }
                observer.observe(element);
            });

            // Observe left-to-right decorative images
            const animateLeftElements = document.querySelectorAll('[data-animate-left]');
            animateLeftElements.forEach(element => {
                observerLeft.observe(element);
            });

            // Observe right-to-left decorative images
            const animateRightElements = document.querySelectorAll('[data-animate-right]');
            animateRightElements.forEach(element => {
                observerRight.observe(element);
            });

            // Header section animate on load (without intersection observer)
            setTimeout(() => {
                const headerElements = document.querySelectorAll('.bg-\\[\\#FEF9F1\\] [data-animate]');
                headerElements.forEach(element => {
                    element.classList.remove('opacity-0', 'translate-y-8');
                    element.classList.add('opacity-100', 'translate-y-0');
                });

                // Animate header decorative images
                const headerDecorativeLeft = document.querySelectorAll('[data-animate-left]');
                headerDecorativeLeft.forEach(element => {
                    element.classList.remove('opacity-0', '-translate-x-8');
                    element.classList.add('opacity-100', 'translate-x-0');
                });

                const headerDecorativeRight = document.querySelectorAll('[data-animate-right]');
                headerDecorativeRight.forEach(element => {
                    element.classList.remove('opacity-0', 'translate-x-8');
                    element.classList.add('opacity-100', 'translate-x-0');
                });
            }, 500);
        });
    </script>
@endsection
