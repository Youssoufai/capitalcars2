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
            <h1 class="text-4xl md:text-5xl font-bold">Capital <span className="text-green-700">Cars</span></h1>
            {{--   <button className="md:hidden text-2xl" 
                >
                ☰
            </button> --}}
            <ul class="md:flex items-center gap-8">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/about">About</a>
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
        {{--  <ul className="md:hidden flex flex-col gap-4 mt-4 text-amber-500">
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
</body>

</html>
