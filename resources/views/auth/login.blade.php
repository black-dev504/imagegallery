<x-layout>

    <div class="bg-white  max-w-[600px] md:w-[500px] mx-auto px-5 lg:px-20 py-8 my-20 rounded-lg shadow-lg">
        <h1 class="font-bold text-xl mb-6 text-[#333]">Login</h1>

        <div>
        <x-error name='email'></x-error>
        <x-error name='password'></x-error>
        </div>

        <form action="/login" method="POST">
            @csrf
            <x-form-label  for="username">Email</x-form-label>
            <x-form-input type="email" id="email" name="email" />


            <x-form-label  for="password">Password</x-form-label>
            <x-form-input  type="password" id="password" name="password" />

            <x-form-button class="w-full" type="submit" value="Login">Login</x-form-button>
        </form>
        <p>Dont have an account? <a class='underline text-blue-500 italic' href="/signup">Sign up</a></p>


    </div>

</x-layout>
