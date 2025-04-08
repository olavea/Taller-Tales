<x-layout>
    <div class="space-y-10 ">
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
            <div class="flex items-center mt-6 space-x-1">
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
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>      
        </section> 

    </div>   
</x-layout>    