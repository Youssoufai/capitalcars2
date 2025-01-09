<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capital Cars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-/N4JfwrYYp72iRFJeOf8ZtzJzCOBd+mNmc1y27ix9CD4hbzUq71aPSSbFT8KN27x" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="bg-black text-white p-4">
        <div class="flex items-center justify-between">
            <h1 class="text-4xl md:text-5xl font-bold">Capital <span class="text-red">Cars</span></h1>
            {{--   <button class="md:hidden text-2xl" 
                >
                ☰
            </button> --}}
            <ul class="md:flex items-center gap-8">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="/inventory">Inventory</a>
                </li>
                <li>
                    <a href="/service">Services</a>
                </li>
                <li>
                    <a href="/contact">Contacts</a>
                </li>
            </ul>
        </div>
        {{--  <ul class="md:hidden flex flex-col gap-4 mt-4 text-amber-500">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Inventory</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contacts</a>
            </li>
        </ul> --}}
    </nav>
    <main>
        {{ $slot }}
    </main>
    <section
        class="h-full p-5 md:p-20 bg-black text-white flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-12">
        <section class="flex-1 space-y-5">
            <h1 class="text-3xl md:text-5xl">About Us</h1>
            <p>Cars are not just our business, they are our very soul; they are the life-blood that cruises through our
                veins and the drumbeats that make our heart sing.</p>

            <div class="flex flex-col md:flex-row gap-3">
                <input type="text" class="py-3 p-4 text-black rounded-lg px-11" placeholder="Enter your email" />
                <button class="text-red bg-white rounded-lg py-3 px-6">Submit</button>
            </div>
        </section>
        <section class="flex-1 space-y-5 w-full">
            <h1 class="text-3xl md:text-5xl">Quick Links</h1>
            <ul class="space-y-4 flex md:block flex-col items-start w-full">
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right 4x"></i> <span>Home</span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right 4x"></i> <span>About</span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right 4x"></i> <span>Inventory</span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right 4x"></i> <span>Services</span>
                </li>
                <li class="flex space-x-4 items-center">
                    <i class="fas fa-angle-right 4x"></i> <span>Contact</span>
                </li>
            </ul>
        </section>
        <section class="flex-1 space-y-5 w-full">
            <h1 class="text-3xl md:text-5xl text-left md:text-center">Business Hours</h1>

            <div class="space-y-5">
                <div>
                    <h3>MON - FRIDAY:</h3>
                    <p>09.00 am to 07.00 pm</p>
                </div>
                <div>
                    <h3>SATURDAY:</h3>
                    <p>09.00 am to 05.00 pm</p>
                </div>
                <div>
                    <h3>VACATION:</h3>
                    <p>All Sunday is our vacation</p>
                </div>
            </div>
        </section>
        <section class="flex-1 space-y-5 w-full">
            <h1 class="text-3xl md:text-5xl text-left md:text-center">Contact Info</h1>
            <ul class="space-y-4">
                <li class="flex">
                    <i class="fas fa-location-arrow mx-4 4x"></i> 123 STREET, Abuja, Nigeria.
                </li>
                <li class="flex">
                    <i class="fas fa-envelope mx-4 4x"></i> Info@capitalcars.com
                </li>
                <li class="flex">
                    <i class="fas fa-phone mx-4 4x"></i> +024355237
                </li>
                <li class="flex">
                    <i class="fab fa-whatsapp mx-4 4x"></i> +934847739
                </li>
            </ul>
            <ul class="flex space-x-12 text-4xl">
                <li>
                    <i class="fab fa-instagram 4x"></i>
                </li>
                <li>
                    <i class="fab fa-twitter 4x"></i>
                </li>
                <li>
                    <i class="fab fa-linkedin 4x"></i>
                </li>
            </ul>
        </section>
    </section>
</body>

</html>
