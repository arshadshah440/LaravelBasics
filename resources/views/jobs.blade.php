<x-layout>
    <x-slot:heading> Jobs </x-slot:heading>
    
    <h1 class="text-lg font-medium">Jobs Page</h1>
    <ul>
    @foreach ($jobs as $job)
         <li>
            <a href="/job/{{ $job['id'] }}">{{ $job['title'] }}</a>
        </li>  
    @endforeach
    </ul>
</x-layout>