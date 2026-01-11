
<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <x-slot:testing></x-slot:testing>

    <h2>{{$job['title']}}</h2>
    <h3>This job pays: {{$job['salary']}}</h3>

    @can('edit', $job)
    <p class="mt-6">
        <a href="/jobs/{{$job['id']}}/edit">Edit job</a>
    </p>
    @endcan
</x-layout>



