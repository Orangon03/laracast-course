<x-layout>
<x-slot:heading>
Create Job
</x-slot:heading>
<form method="POST" action="/jobs">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Create a new job</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">
            <x-form-input id="title"  name="title" required placeholder="Programmer"></x-form-input>
            <x-form-error name='title'/>
          </div>
        </x-form-field>

        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">
            <x-form-input id="salary"  name="salary" required placeholder="Milion dolarów kurwa przelew"></x-form-input>
            <x-form-error name='title'/>
          </div>
        </x-form-field>
      
      {{-- @if($errors->any())
      <ul>
        @foreach ($errors->all() as $item)
            <li class="text-red-500 italic">{{$item}}</li>
        @endforeach
      </ul>
      @endif --}}
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
    <x-form-button>save</x-form-button>
  </div>
</form>

</x-layout>