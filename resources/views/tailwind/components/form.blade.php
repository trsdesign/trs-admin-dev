<div class="grid min-h-screen place-items-center">
    <x-trs-card>
        <x-slot name="title">
            Hello there 👋, <span class="font-normal">please fill in your information to continue</span>
        </x-slot>
    
        <x-slot name="content">
            <form class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-3" method="POST">
                @csrf
    
                <div class="col-span-1">
                    <x-trs-label for="firstname" value="Firstname" />
                    <x-trs-input id="firstname" type="text" name="firstname" placeholder="John" autocomplete="given-name" required />
                </div>
    
                <div class="col-span-1">
                    <x-trs-label for="firstname" value="Lastname" />
                    <x-trs-input id="lastname" type="text" name="lastname" placeholder="Doe" autocomplete="family-name" required />
                </div>
    
                <div class="col-span-1 sm:col-span-2">
                    <x-trs-label for="email" value="Email" />
                    <x-trs-input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" required />
                </div>
                
                <div class="col-span-1 sm:col-span-2">
                    <x-trs-label for="password" value="Password" />
                    <x-trs-input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" required />
                </div>
                
                <div class="col-span-1 sm:col-span-2">
                    <x-trs-label for="password-confirm" value="Confirm Password" />
                    <x-trs-input id="password-confirm" type="password" name="password-confirm" placeholder="********" autocomplete="new-password" required />
                </div>
                
                <x-trs-button>
                    Sign Up
                </x-trs-button>
                
                <a href="#" class="flex justify-between mt-4 text-xs text-gray-500 cursor-pointer hover:text-black transition-all duration-300 ease-in-out">Already registered?</a>
            </form>
        </x-slot>
    </x-trs-card>
</div>