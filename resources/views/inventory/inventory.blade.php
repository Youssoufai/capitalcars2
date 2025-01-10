<x-hero>
    <section class="h-screen p-11">
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
                    <h1 class="font-bold">Condition</h1>
                    <div>
                        <input type="checkbox" name="all" id="all">
                        <span>All</span>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </section>
    </section>
</x-hero>
