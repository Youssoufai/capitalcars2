<section class="h-full p-14 bg-gray-200 space-y-7 overflow-hidden">
    <div class="space-y-4 text-center">
        <h1 class="text-4xl md:text-5xl font-semibold text-gray-800">We deal with a wide range of <span class="text-[#EA001E]">Brands</span></h1>
        <p class="text-base md:text-lg text-gray-600">Experience the Freedom of Choice with Our Extensive Range of Premium Cars, Tailored to Suit Every Style and Need!</p>
    </div>

    <!-- Swiper -->
    <div class="swiper-container rounded-lg overflow-hidden relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/toyota2.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="toyota" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/mercedes2.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="mercedes" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/mitsubishi.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="mitsubishi" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/kia2.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="kia" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/porsche.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="porsche" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/nissan2.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="nissan" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/cadillac.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="cadillac" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/volvo.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="volvo" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/land-rover.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="land rover" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/lincolcn.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="lincoln" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/mazda.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="mazda" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/hyundai.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="hyundai" />
            </div>
            <div class="swiper-slide p-4">
                <img src="{{ asset('images/mini.png') }}" class="h-[100px] w-[200px] md:h-[120px] md:w-[240px] object-contain mx-auto rounded-lg transition-transform duration-300 ease-in-out hover:scale-110" alt="mini" />
            </div>
        </div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination absolute bottom-4 left-0 right-0 z-10"></div>
    </div>
</section>

<!-- Swiper JS Initialization -->
<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4, // Adjust based on how many images you want visible at once
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000,  // Auto-scrolling every 2 seconds
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1280: {
                slidesPerView: 5,
            },
        },
    });
</script>
