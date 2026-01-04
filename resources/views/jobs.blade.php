
<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <x-slot:testing></x-slot:testing>
    <h1>Hello from the jobs page</h1>

    {{-- <ul> --}}
    @foreach ($jobs as $job)
        <li>
        <a href="/jobs/{{$job['id']}}" >
            {{$job['title']}}: Pays {{$job['salary']}}
        </a>
        </li>
    @endforeach
    {{-- </ul> --}}
</x-layout>



