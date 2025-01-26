<section class='h-full p-5 md:p-12 bg-gray-100 flex flex-col md:flex-row gap-12 justify-between'>
    <section class='p-8 bg-[#1F2E4E] flex flex-col items-center rounded-lg flex-1'>
        <h1 class='text-3xl text-red text-left'>Send Your Message</h1>
        <form action="#" class='p-4 bg-[#1F2E4E] flex flex-col items-center space-y-8 w-full'>

            <div class='flex flex-col md:flex-row gap-4 w-full'>
                <input type="text" class='p-4 rounded-lg flex-1' placeholder='Your Name' />
                <input type="text" class='p-4 rounded-lg flex-1' placeholder='Your Email' />
            </div>
            <div class='flex flex-col md:flex-row gap-4 w-full'>
                <input type="text" class='p-4 rounded-lg flex-1' placeholder='Your Phone' />
                <input type="text" class='p-4 rounded-lg flex-1' placeholder='Your Address' />
            </div>
            <input type="text" placeholder='Subject' class='p-4 rounded-lg w-full' />
            <textarea name="message" id="message" placeholder='Your Message' class='p-4 rounded-lg w-full py-12 text-start'></textarea>
            <button type="submit" class='py-4 px-8 bg-gray-50 w-full rounded-lg text-red'>Send Message</button>
        </form>
    </section>
    <section class='space-y-12 flex-1 flex flex-col items-center'>
        <i class='fab fa-facebook fa-4x p-8 rounded-full bg-gray-300 text-red'></i>
        <i class='fab fa-twitter fa-4x p-8 rounded-full bg-gray-300 text-red'></i>
        <i class='fab fa-instagram fa-4x p-8 rounded-full bg-gray-300 text-red'></i>
        <i class='fab fa-linkedin-in fa-4x p-8 rounded-full bg-gray-300 text-red'></i>
    </section>
    <section class='bg-gray-300 flex flex-col gap-8 p-12 rounded-lg flex-1'>
        <div class='bg-white p-8 rounded-lg space-y-4'>
            <h1 class='font-bold text-3xl'>Our Branch 01</h1>
            <h3 class='flex gap-1'><span class="font-bold">Address:</span>
                <i class='fas fa-location-arrow text-red fa-2x'></i> 123 Street New York. USA
            </h3>
            <h3 class='flex gap-1'><span class="font-bold">Telephone:</span>
                <i class='fas fa-phone fa-2x text-red'></i> +2348034534834
            </h3>
        </div>
        <div class='bg-white p-8 rounded-lg space-y-4'>
            <h1 class='font-bold text-3xl'>Our Branch 02</h1>
            <h3 class='flex gap-1'><span class="font-bold">Address:</span>
                {{-- address --}}
                <i class='fas fa-location-arrow text-red fa-2x'></i> 456 Avenue New York. USA
            </h3>
            <h3 class='flex gap-1'><span class="font-bold">Telephone:</span>
                <i class='fas fa-phone fa-2x text-red'></i> +2348034534834
            </h3>

        </div>
        <div class='bg-white p-8 rounded-lg space-y-4'>
            <h1 class='font-bold text-3xl'>Our Branch 03</h1>
            <h3 class='flex gap-1'><span class="font-bold">Address:</span>
                <i class='fas fa-location-arrow fa-2x text-red'></i> 789 Boulevard New York. USA
            </h3>
            <h3 class='flex gap-1'><span class="font-bold">Telephone:</span>
                <i class='fas fa-phone text-red fa-2x'></i> +2348034534834
            </h3>
        </div>
    </section>
</section>
