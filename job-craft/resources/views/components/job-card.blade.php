@props(['job'])

<div class="p-4 bg-white rounded flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration:300 shadow-md shadow-gray-400">
            <div class="self-start text-sm text-blue-800"><a href="#">{{$job->employer->name}}</a></div>
            <div class="py-8">
                <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration:300">
                    <a href="{{$job->url}}" target="_blank">{{$job->title}}</a>
                </h3>

                <p class="text-sm mt-4">{{ $job->schedule }} - Salary Tk. {{$job->salary}}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
                <div>
                    @foreach ($job->tags as $tag)
                    <x-tag :$tag>Backend</x-tag>
                    @endforeach
                </div>
                <div>
                    <x-employer-logo :employer="$job->employer" :width="42"/>
                </div>
            </div>

        </div>