<x-layout>

    <div class="bg-white max-w-[600px] md:w-[500px] mx-auto px-5 lg:px-20 py-8 my-20 rounded-lg shadow-lg">
        <h1 class="font-bold text-xl mb-6 text-[#333]">Sign Up</h1>

        <div class="mb-5">
             <x-error name='password'/>
             <x-error name='email' />
        </div>

        <form action="/signup" method="POST">
            @csrf
            <x-form-label  for="name">name</x-form-label>
            <x-form-input type="text" id="name" name="name" :value="old('name')" />


            <x-form-label  for="email">Email</x-form-label>
            <x-form-input  type="email" id="email" name="email" :value="old('email')" />

            <x-form-label  for="password">Password</x-form-label>
            <x-form-input  type="password" id="password" name="password" />


           <x-form-label name="password_confirmation" for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input  type="password" id="password_confirmation" name="password_confirmation" />


            <x-form-button class="w-full" type="submit" value="Login">Signup</x-form-button>
        </form>
        <p>Already have an account? <a class='underline text-blue-500 italic' href="/login">Log in </a></p>


    </div>

</x-layout>
