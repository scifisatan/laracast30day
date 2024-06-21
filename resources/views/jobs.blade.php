
<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue hover:underline">
               <strong> {{$job['title']}} </strong> pays for {{$job['salary']}}
            </a>
        </li>
    @endforeach

</x-layout>
