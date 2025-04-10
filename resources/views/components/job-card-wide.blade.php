@props(['job'])
<x-panel class="flex gap-x-6 ">

    <div>
        
        <x-employer-logo />
    </div>    
    <div class="flex-1 flex flex-col" >    
        
            <a href="#" class="self-start text-sm text-gray-700 transition-colors duration-300">{{ $job->employer->name }}</a>
            
                <h3 class="font-bold text-xl mt-3 group-hover:text-blue-700">{{ $job->title }}</h3>
                <p class="text-sm text-grey-700 mt-auto">{{ $job->salary }}</p>
            
    </div>            
            <div class="flex justify-between items-center mt-auto">
                <div>
                    @foreach($job->tags as $tag) 
                        <x-tag :$tag />
                    @endforeach
                </div>
            </div>

        
</x-panel>   