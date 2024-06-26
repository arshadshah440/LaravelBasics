<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1 class="text-lg font-medium"><strong>Title: </strong>{{$job['title']}}</h1>
    <h5 class="text-md font-medium"><strong>Salary: </strong>{{$job['salary']}}</h5>
    <p class="text-md font-medium"><strong>Location: </strong>{{$job['location']}}</p>
</x-layout>