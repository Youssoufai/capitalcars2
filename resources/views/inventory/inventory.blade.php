<x-hero>
    <section class="h-full p-11">
        <div
            class="{{-- bg-hero h-[35vh] --}} {{-- bg-center bg-cover --}} bg-gray-100 text-black p-8 space-y-4 w-[1136] h-[120px] flex flex-col  justify-center rounded-lg">
            <h1 class="text-xl text-black">What are you looking for?</h1>
            <input type="text" placeholder="What are you looking for?"
                class="w-full h-[38px] px-4 py-5 border rounded-lg">
        </div>
        <section>
            <div>
                <div class="bg-black text-white p-4 rounded-t-lg">
                    <i class="fas fa-car"></i> <span class="text-2xl font-bold">Filters</span>
                </div>
                <div>
                    <h1 class="font-semibold">Condition</h1>
                    <div class="border-b-2">
                        <input type="checkbox" name="all" id="all">
                        <span>All</span>
                    </div>
                    <div class="border-b-2">
                        <input type="checkbox" name="all" id="all">
                        <span>New</span>
                    </div>
                    <div class="border-b-2">
                        <input type="checkbox" name="all" id="all">
                        <span>Used</span>
                    </div>
                    <div>
                        <input type="checkbox" name="all" id="all">
                        <span>Locally Used</span>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold">Price</h1>
                    <div>
                        <input type="checkbox" name="zero" id="zero">
                        {{-- <i class="fas fa-car-side"></i> --}}
                        <span>0-10M</span>
                    </div>
                    <div>
                        <input type="checkbox" name="zero" id="zero">
                        {{-- <i class="fas fa-car-side"></i> --}}
                        <span>10M-30M</span>
                    </div>
                    <div>
                        <input type="checkbox" name="zero" id="zero">
                        {{-- <i class="fas fa-car-side"></i> --}}
                        <span>30M-40M</span>
                    </div>
                    <div>
                        <input type="checkbox" name="zero" id="zero">
                        {{-- <i class="fas fa-car-side"></i> --}}
                        <span>Above 40M</span>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold">Transmission</h1>
                    <div>
                        <input type="checkbox" name="auto" id="auto">
                        <span>Automatic</span>
                    </div>
                    <div>
                        <input type="checkbox" name="manual" id="manual">
                        <span>Manual</span>
                    </div>
                </div>
                <div>
                    <h1 class="font-semibold">Body Type</h1>
                    <div>
                        <input type="checkbox" name="sedan" id="sedan">
                        <span>Sedan</span>
                    </div>
                    <div>
                        <input type="checkbox" name="sedan" id="sedan">
                        <span>SUV</span>
                    </div>
                    <div>
                        <input type="checkbox" name="sedan" id="sedan">
                        <span>Truck</span>
                    </div>
                    <div>
                        <input type="checkbox" name="sedan" id="sedan">
                        <span>Coupe</span>
                    </div>
                    <div>
                        <input type="checkbox" name="sedan" id="sedan">
                        <span>Minivan</span>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="e450.jpg" alt="mercedes-benz e450" class="w-[445px] h-[245px]">
                    <div class="flex space-x-7">
                        <h1 class="font-bold">MERCEDES BENZ E450 2018 COUPE</h1>| <h1
                            class="font-semibold text-red rounded-md">
                            ₦45,000,000
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-hero>
