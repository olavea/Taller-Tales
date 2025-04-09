<x-layout>
    <div class="space-y-10 ">
        <section>
            <h1 class="font-bold text-4xl">Let's find  you a Tall Tale</h1>

            <form>
                <input 
                    type="text" 
                    placeholder="tresure hunt"
                    class=" rounded-xl bg-white/5 border-white/30 px-5 py-4 "
                    >
            </form>
        </section>    
        <section>
        <x-section-heading>Top Tales</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>    
        <section>    
            <x-section-heading>Tags</x-section-heading>
            <div class="flex  items-center mt-6 space-x-1">
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
                <div>
                    <x-tag>Tag </x-tag>
                </div>
            </div>
        </section>    
        <section>    
            <x-section-heading>Recent </x-section-heading>
            <div class="bg-red-300  gap-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section> 

    </div>   
</x-layout>    