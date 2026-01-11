<x-layout>
<x-slot:heading>
Register
</x-slot:heading>
<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Register new account</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">First name</x-form-label>
          <div class="mt-2">
            <x-form-input id="first_name"  name="first_name"  required placeholder="Johnm"></x-form-input>
            <x-form-error name='first_name'/>
          </div>
        </x-form-field>
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">Last name</x-form-label>
          <div class="mt-2">
            <x-form-input id="last_name"  name="last_name"  required placeholder="Doe"></x-form-input>
            <x-form-error name='last_name'/>
          </div>
        </x-form-field>
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">Email</x-form-label>
          <div class="mt-2">
            <x-form-input id="email"  name="email" type="email" required placeholder="test@test.com"></x-form-input>
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
        <x-form-field class="sm:col-span-4">
          <x-form-label for="title">confirm password</x-form-label>
          <div class="mt-2">
            <x-form-input type="password" id="password_confirmation"  name="password_confirmation" required placeholder="********"></x-form-input>
            <x-form-error name='password_confirmation'/>
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
    <x-form-button>Register</x-form-button>
  </div>
</form>

</x-layout>