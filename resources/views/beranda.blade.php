<x-app-layout>
    <div class="min-h-screen px-6 md:px-8 py-10" style="background-color: #f8f7f5;">
        <div class="max-w-6xl mx-auto space-y-16">

            <!-- Hero: light-orange text card + dark-orange photo -->
            <section class="relative" >
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 z-20" style="background-color: rgb(255, 176, 92); border-radius:10px; width:550px;">
                        <div class="rounded-2xl p-8 shadow-md" style="min-height:260px;">
                            <h2 class="text-2xl font-bold mb-3">Jadilah Bagian dari Masa Depan Energi!</h2>
                            <p class="text-base mb-4">Institut Teknologi Petroleum Balongan membuka kesempatan bagi calon pemimpin dan inovator di sektor energi.</p>
                            <p class="font-semibold">Penerimaan Mahasiswa Baru</p>
                            <p class="mb-3">Gelombang I: 25 Agustus - 25 September 2025</p>
                            <p class="text-sm">Daftar sekarang dan wujudkan karirmu di dunia teknologi dan bisnis perminyakan!</p>
                            <a href="{{ route('daftar') }}" class="inline-block mt-4 bg-white text-black font-semibold px-4 py-2 rounded-lg">Daftar Sekarang</a>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <!-- decorative orange box behind the photo -->
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <!-- orange background 'shadow' (offset) -->
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(16px,-16px); border-radius:12px;"></div>

                            <!-- image card on top -->
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('news1.jpg') }}" alt="dummy" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mirrored section: dark-orange photo + light-orange rounded text overlapping -->
            <section class="relative" style="margin: 40px 0px 0px 0px">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 order-2 md:order-1">
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(-16px,16px); border-radius:12px;"></div>
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('news1.jpg') }}" alt="dummy-2" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 order-1 md:order-2 z-20 -mt-12 md:-mt-0">
                        <div class="bg-[#F9C8A8] rounded-2xl p-6 shadow-md w-full" style="max-width:420px; background-color: rgb(255, 176, 92); border-radius:10px;">
                            <h3 class="text-xl font-bold mb-2">Program Magang & Pelatihan Industri</h3>
                            <p class="text-sm mb-3">Dapatkan pengalaman lapangan di perusahaan minyak dan gas mitra kami. Program intensif dengan sertifikat.</p>
                            <a href="#" class="inline-block bg-white text-black px-3 py-2 rounded-md font-medium">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </section>

            {{-- blok 3 --}}
            <section class="relative" style="margin: 40px 0px 0px 0px">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 z-20" style="background-color: rgb(255, 176, 92); border-radius:10px; ">
                        <div class="rounded-2xl p-8 shadow-md" style="min-height:260px;">
                            <h2 class="text-2xl font-bold mb-3">Jadilah Bagian dari Masa Depan Energi!</h2>
                            <p class="text-base mb-4">Institut Teknologi Petroleum Balongan membuka kesempatan bagi calon pemimpin dan inovator di sektor energi mari bergabung untuk jadi bagian dari kami.</p>
                            <p class="font-semibold">Penerimaan Mahasiswa Baru</p>
                            <p class="mb-3">Gelombang I: 25 Agustus - 25 September 2025</p>
                            <p class="text-sm">Daftar sekarang dan wujudkan karirmu di dunia teknologi dan bisnis perminyakan!</p>
                            {{-- <a href="{{ route('daftar') }}" class="inline-block mt-4 bg-white text-black font-semibold px-4 py-2 rounded-lg">Daftar Sekarang</a> --}}
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(16px,-16px); border-radius:12px;"></div>
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('news1.jpg') }}" alt="dummy" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- blok 4 --}}
            <section class="relative" style="margin: 40px 0px 0px 0px">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 order-2 md:order-1">
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(-16px,16px); border-radius:12px;"></div>
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('news1.jpg') }}" alt="dummy-2" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 order-1 md:order-2 z-20 -mt-12 md:-mt-0">
                        <div class="bg-[#F9C8A8] rounded-2xl p-6 shadow-md w-full" style="max-width:420px; background-color: rgb(255, 176, 92); border-radius:10px;">
                            <h3 class="text-xl font-bold mb-2">Program Magang & Pelatihan Industri</h3>
                            <p class="text-sm mb-3">Dapatkan pengalaman lapangan di perusahaan minyak dan gas mitra kami. Program intensif dengan sertifikat.</p>
                            {{-- <a href="#" class="inline-block bg-white text-black px-3 py-2 rounded-md font-medium">Pelajari Lebih Lanjut</a> --}}
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery: dark-orange cards with 4 dummy photos, centered carousel-like behavior -->
            <section style="margin: 40px 0px 0px 0px">
                <h4 class="text-lg font-semibold mb-4">Galeri Kegiatan</h4>

                    <div class="mx-auto max-w-1xl">
                    <div id="gallery" class="flex gap-4 md:gap-6 overflow-x-auto pb-4" style="scroll-behavior: smooth;">
                        <div class="slide w-[120px] md:w-[420px] h-24 md:h-[320px] flex-shrink-0 rounded-2xl overflow-hidden shadow-md bg-[#F79436]">
                            <img src="{{ asset('news1.jpg') }}" alt="gal1" class="w-full h-full object-cover">
                        </div>
                        <div class="slide w-[120px] md:w-[420px] h-24 md:h-[320px] flex-shrink-0 rounded-2xl overflow-hidden shadow-md bg-[#F79436]">
                            <img src="{{ asset('news1.jpg') }}" alt="gal2" class="w-full h-full object-cover">
                        </div>
                        <div class="slide w-[120px] md:w-[420px] h-24 md:h-[320px] flex-shrink-0 rounded-2xl overflow-hidden shadow-md bg-[#F79436]">
                            <img src="{{ asset('itpb.png') }}" alt="gal3" class="w-full h-full object-cover">
                        </div>
                        <div class="slide w-[120px] md:w-[420px] h-24 md:h-[320px] flex-shrink-0 rounded-2xl overflow-hidden shadow-md bg-[#F79436]">
                            <img src="{{ asset('news1.jpg') }}" alt="gal4" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-4 mt-6">
                        <button onclick="galleryPrev()" aria-label="Scroll left" class="gallery-btn w-10 h-10 bg-[#F9C8A8] rounded-md shadow-sm flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 14.707a1 1 0 01-1.414 0L7 10.414a1 1 0 010-1.414l4.293-4.293a1 1 0 011.414 1.414L9.414 10l3.293 3.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>

                        <div class="flex items-center gap-2" id="gallery-dots">
                            <button onclick="galleryTo(0)" aria-label="Slide 1" class="w-3 h-3 md:w-4 md:h-4 rounded-sm bg-[#F9C8A8]" ></button>
                            <button onclick="galleryTo(1)" aria-label="Slide 2" class="w-3 h-3 md:w-4 md:h-4 rounded-sm bg-[#F9C8A8]" ></button>
                            <button onclick="galleryTo(2)" aria-label="Slide 3" class="w-3 h-3 md:w-4 md:h-4 rounded-sm bg-[#F9C8A8]" ></button>
                            <button onclick="galleryTo(3)" aria-label="Slide 4" class="w-3 h-3 md:w-4 md:h-4 rounded-sm bg-[#F9C8A8]" ></button>
                        </div>

                        <button onclick="galleryNext()" aria-label="Scroll right" class="gallery-btn w-10 h-10 bg-[#F9C8A8] rounded-md shadow-sm flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 5.293a1 1 0 011.414 0L13 9.586a1 1 0 010 1.414L8.707 15.707a1 1 0 11-1.414-1.414L10.586 10 7.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <style>
        /* small button hover/focus styles */
        .gallery-btn:focus, .gallery-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.12);
            transition: transform 160ms ease, box-shadow 160ms ease;
        }
    </style>

    <script>
        // Enhanced carousel: dynamic sizes, keyboard nav, autoplay with pause on hover/focus
        (function() {
            const gallery = document.getElementById('gallery');
            const dots = Array.from(document.querySelectorAll('#gallery-dots button'));
            const slides = Array.from(document.querySelectorAll('#gallery .slide'));
            const prevBtn = document.querySelector('.gallery-btn[aria-label="Scroll left"]');
            const nextBtn = document.querySelector('.gallery-btn[aria-label="Scroll right"]');

            let currentIndex = 0;
            let slideWidth = 0;
            let gap = 0;
            let centerOffset = 0;
            let autoplayInterval = 4000; // ms
            let autoplayTimer = null;
            let isPaused = false;
            let userInteracting = false;
            let resumeAfterInteractionTimer = null;

            function calcSizes() {
                if (!slides.length) return;
                const rect = slides[0].getBoundingClientRect();
                slideWidth = rect.width;
                // Compute gap in pixels robustly: use offsetLeft difference if available
                if (slides.length > 1) {
                    gap = Math.round(slides[1].offsetLeft - slides[0].offsetLeft - slideWidth);
                    if (isNaN(gap) || gap < 0) gap = 0;
                } else {
                    gap = 0;
                }
                // compute center offset used when centering slides
                centerOffset = Math.max(0, (gallery.clientWidth - slideWidth) / 2);
                // ensure currentIndex is within bounds
                currentIndex = Math.max(0, Math.min(currentIndex, slides.length - 1));
            }

            function updateDots() {
                dots.forEach((d, i) => {
                    d.style.opacity = i === currentIndex ? '1' : '0.45';
                    d.style.transform = i === currentIndex ? 'scale(1.05)' : 'scale(1)';
                });
            }

            function galleryTo(index) {
                if (!gallery) return;
                const clamped = Math.max(0, Math.min(index, slides.length - 1));
                currentIndex = clamped;
                // Scroll to the exact slide's offsetLeft so alignment is precise across breakpoints
                // Prefer centering the target slide in the gallery viewport for a nicer UX.
                const slide = slides[clamped];
                let left = Math.round(slide.offsetLeft - centerOffset);
                if (left < 0) left = 0;
                gallery.scrollTo({ left, behavior: 'smooth' });
                updateDots();
            }

            function galleryNext() { galleryTo(currentIndex + 1); }
            function galleryPrev() { galleryTo(currentIndex - 1); }

            // keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') galleryPrev();
                if (e.key === 'ArrowRight') galleryNext();
            });

            // autoplay handling
            function startAutoplay() {
                if (autoplayTimer || isPaused) return;
                autoplayTimer = setInterval(() => {
                    if (userInteracting || slides.length <= 1) return;
                    // Recompute currentIndex from scroll position to avoid drift
                    const computed = computeCurrentIndexFromScroll();
                    currentIndex = computed;
                    const next = (currentIndex + 1) % slides.length;
                    galleryTo(next);
                }, autoplayInterval);
            }

            function stopAutoplay() {
                if (autoplayTimer) {
                    clearInterval(autoplayTimer);
                    autoplayTimer = null;
                }
            }

            function computeCurrentIndexFromScroll(){
                if (!gallery || !slides.length) return 0;
                const leftPos = gallery.scrollLeft;
                let nearest = 0;
                let nearestDist = Infinity;
                slides.forEach((s, i) => {
                    // account for centering offset used when programmatically scrolling
                    const dist = Math.abs(leftPos - (s.offsetLeft - centerOffset));
                    if (dist < nearestDist) { nearestDist = dist; nearest = i; }
                });
                return Math.max(0, Math.min(nearest, slides.length - 1));
            }

            // pause on hover/focus and on pointer/touch interaction
            gallery.addEventListener('mouseenter', () => { isPaused = true; stopAutoplay(); });
            gallery.addEventListener('mouseleave', () => { isPaused = false; startAutoplay(); });
            gallery.addEventListener('focusin', () => { isPaused = true; stopAutoplay(); });
            gallery.addEventListener('focusout', () => { isPaused = false; startAutoplay(); });
            // Pause while the user is touching or dragging the gallery
            ['pointerdown', 'touchstart'].forEach(evt => {
                gallery.addEventListener(evt, () => {
                    userInteracting = true;
                    if (resumeAfterInteractionTimer) clearTimeout(resumeAfterInteractionTimer);
                    stopAutoplay();
                }, { passive: true });
            });
            ['pointerup', 'touchend', 'pointercancel', 'touchcancel'].forEach(evt => {
                gallery.addEventListener(evt, () => {
                    // resume after short delay to avoid immediate auto-advance
                    if (resumeAfterInteractionTimer) clearTimeout(resumeAfterInteractionTimer);
                    resumeAfterInteractionTimer = setTimeout(() => { userInteracting = false; if (!isPaused) startAutoplay(); }, 2200);
                }, { passive: true });
            });

            // expose functions for buttons/dots
            window.galleryNext = galleryNext;
            window.galleryPrev = galleryPrev;
            window.galleryTo = galleryTo;

            // wire prev/next buttons to keyboard-safe focus outline
            [prevBtn, nextBtn].forEach(btn => {
                if (!btn) return;
                btn.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') btn.click();
                });
            });

            // recalc sizes on resize and init
            // debounce helper
            function debounce(fn, wait=120){ let t; return (...args) => { clearTimeout(t); t = setTimeout(() => fn(...args), wait); }; }

            window.addEventListener('resize', debounce(() => { calcSizes(); }), { passive: true });

            // Recalculate sizes after all slide images load (handles slow network or cached images)
            const imgs = Array.from(gallery.querySelectorAll('img'));
            let loaded = 0;
            if (!imgs.length) {
                calcSizes();
            } else {
                imgs.forEach(img => {
                    if (img.complete) {
                        loaded++; if (loaded === imgs.length) calcSizes();
                    } else {
                        img.addEventListener('load', () => { loaded++; if (loaded === imgs.length) calcSizes(); });
                        img.addEventListener('error', () => { loaded++; if (loaded === imgs.length) calcSizes(); });
                    }
                });
            }
            updateDots();
            startAutoplay();

            // update active dot while user scrolls — choose the nearest slide by offsetLeft
            let scrollTimeout = null;
            gallery.addEventListener('scroll', () => {
                if (scrollTimeout) clearTimeout(scrollTimeout);
                userInteracting = true;
                if (resumeAfterInteractionTimer) clearTimeout(resumeAfterInteractionTimer);
                resumeAfterInteractionTimer = setTimeout(() => { userInteracting = false; if (!isPaused) startAutoplay(); }, 2000);

                scrollTimeout = setTimeout(() => {
                    const nearest = computeCurrentIndexFromScroll();
                    currentIndex = nearest;
                    updateDots();
                }, 120);
            });
        })();
    </script>

</x-app-layout>
