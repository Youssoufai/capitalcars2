<x-hero>
    <section class="h-full p-11">
        <div
            class="{{-- bg-hero h-[35vh] --}} {{-- bg-center bg-cover --}} bg-gray-100 text-black p-8 space-y-4 w-[1136] h-[120px] flex flex-col  justify-center rounded-lg">
            <h1 class="text-xl text-black">What are you looking for?</h1>
            <input type="text" placeholder="What are you looking for?"
                class="w-full h-[38px] px-4 py-5 border rounded-lg">
        </div>
        <section class="flex gap-8 p-4">
            <div class="w-[20%]">
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
            <div class="shadow-lg p-8">
                <div class="flex space-x-8 border-b-2 py-4">
                    <div class="w-[340px]">
                        <img src="450e.jpg" alt="mercedes-benz e450" class="w-full h-[200px]">
                    </div>
                    <div class="flex flex-col justify-between items-start">
                        <h1 class="font-bold text-2xl">MERCEDES BENZ GLA250</h1>
                        <h2 class="text-red text-2xl font-bold"><sup>₦</sup>14,800,000</h2>
                        <h2 class="font-bold"><i class="fas fa-calendar-alt font-extralight text-red"></i>
                            <span>2015</span>
                        </h2>
                        <section class="flex">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-car-battery 4x text-red p-2" style="border-right: 1px solid black"></i>
                                <!-- Engine icon -->
                                <div>
                                    <h3 class="text-red text-[12px] font-bold">Engine:</h3>
                                    <p>2.4L H4</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-car-battery 4x text-red p-2" style="border-right: 1px solid black"></i>
                                <!-- Engine icon -->
                                <div>
                                    <h3 class="text-red text-[12px] font-bold">Drivetrain:</h3>
                                    <p>RWD</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-calendar-alt font-extralight text-red"></i>
                                <!-- Engine icon -->
                                <div>

                                    <h3 class="text-red text-[12px] font-bold">Year</h3>
                                    <p>2015</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <section>
                    <div>
                        <h1 class="text-[14px] font-bold text-red">Capital Cars.</h1>
                        <p>Abuja, <span class="font-bold">Nigeria</span></p>
                    </div>
                </section>
            </div>
        </section>
    </section>
</x-hero>
