<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capital Cars</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-/N4JfwrYYp72iRFJeOf8ZtzJzCOBd+mNmc1y27ix9CD4hbzUq71aPSSbFT8KN27x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- Navbar -->
    <nav class="bg-black text-white p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-4xl md:text-5xl font-bold">Capital <span class="text-red-500">Cars</span></h1>
            <button class="md:hidden text-2xl focus:outline-none" id="menu-btn">
                ☰
            </button>
            <ul id="menu" class="hidden md:flex items-center gap-8">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('inventory.index') }}">Inventory</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('contact') }}">Contacts</a></li>
                <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            </ul>
        </div>
        <ul id="mobile-menu" class="hidden flex flex-col gap-4 mt-4 text-white md:hidden">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="/inventory">Inventory</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/contact">Contacts</a></li>
            <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            {{-- board --}}
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <!-- About Section -->
    {{-- sec --}}
    <section
        class="h-full p-5 md:p-20 bg-black text-white flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-12"
        data-aos="fade-up">
        <section class="flex-1 space-y-5">
            <h1 class="text-3xl md:text-5xl">About Us</h1>
            <p>Cars are not just our business, they are our very soul; they are the life-blood that cruises through our
                veins and the drumbeats that make our heart sing.</p>

            <div class="flex flex-col md:flex-row gap-3">
                <input type="text" class="py-3 p-4 text-black rounded-lg px-11" placeholder="Enter your email" />
                <button class="text-red-500 bg-white rounded-lg py-3 px-6">Submit</button>
            </div>
        </section>
        <!-- Quick Links Section -->
        <section class="flex-1 space-y-5 w-full">
            <h1 class="text-3xl md:text-5xl">Quick Links</h1>
            <ul class="space-y-4 flex md:block flex-col items-start w-full">
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right"></i> <span>Home</span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right"></i> <span>
                        <a href="{{ route('about') }}">About</a>
                    </span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right"></i> <span>
                        <a href=" {{ route('inventory.index') }} ">Inventory</a>
                    </span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right"></i> <span>
                        <a href="{{ route('service') }}">Services</a>
                    </span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right"></i> <span>
                        <a href="{{ route('contact') }}">Contact</a>
                    </span>
                </li>
            </ul>
        </section>
        <!-- Contact Section -->
        <section class="flex-1 space-y-5 w-full">
            <h1 class="text-3xl md:text-5xl text-left md:text-center">Contact Info</h1>
            <ul class="space-y-4">
                <li class="flex">
                    <i class="fas fa-location-arrow mx-4"></i> 123 STREET, Abuja, Nigeria.
                </li>
                <li class="flex">
                    <i class="fas fa-envelope mx-4"></i> Info@capitalcars.com
                </li>
                <li class="flex">
                    <i class="fas fa-phone mx-4"></i> +2348034534834
                </li>
                <li class="flex">
                    <i class="fab fa-whatsapp mx-4"></i> +2348034534834
                </li>
            </ul>
        </section>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        // Hamburger Menu Logic
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
