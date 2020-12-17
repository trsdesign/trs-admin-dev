@props(['method', 'fields'])

@props(['method', 'fields'])

<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 shadow-md">
        <h1 class="text-xl font-semibold">Hello there 👋, <span class="font-normal">please fill in your information to continue</span></h1>
    
        <form class="mt-6 grid grid-cols-1 gap-1" >
            @crsf
            <div class="grid grid-cols-1 sm:grid-cols-2 justify-between gap-x-3">
                <span class="col-span-1">
                    <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
                    <input id="firstname" type="text" name="firstname" placeholder="John" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                </span>

                <span class="col-span-1">
                    <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
                    <input id="lastname" type="text" name="lastname" placeholder="Doe" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                </span>
            </div>

            <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
            <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            
            <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
            <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            
            <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirm password</label>
            <input id="password-confirm" type="password" name="password-confirm" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
            
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-700 hover:shadow-none transition-all duration-300 ease-in-out">Sign up</button>
            
            <a href="#" class="flex justify-between mt-4 text-xs text-gray-500 cursor-pointer hover:text-black transition-all duration-300 ease-in-out">Already registered?</a>
        </form>
    </div>
</div>