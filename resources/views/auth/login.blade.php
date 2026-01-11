<x-layout>
<x-slot:heading>
Login
</x-slot:heading>
<form method="POST" action="/login">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Login</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">Email</x-form-label>
          <div class="mt-2">
            <x-form-input id="email"  name="email" type="email" required placeholder="test@test.com" :value="old('email')"></x-form-input>
            <x-form-error name='email'/>
          </div>
        </x-form-field>

        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">password</x-form-label>
          <div class="mt-2">
            <x-form-input type="password" id="password"  name="password" required placeholder="********"></x-form-input>
            <x-form-error name='password'/>
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
    <x-form-button>Login</x-form-button>
  </div>
</form>

</x-layout>