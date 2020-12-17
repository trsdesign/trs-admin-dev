@props(['method'])

<div class="h-100 w-100 d-flex align-items-center justify-content-between">
    <div class="mx-auto w-11/12 p-5 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 shadow">
        @csrf

        <h1 class="h4 font-weight-bold">Hello there 👋, <span class="font-weight-normal">please fill in your information to continue</span></h1>
    
        <form class="mt-3">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="firstname" class="">Firstname</label>
                    <input id="firstname" type="text" name="firstname" placeholder="John" autocomplete="given-name" class="form-control py-4 rounded-0 border-0 bg-light" required />
                </div>

                <div class="form-group col-md-6 mt-2 mt-sm-0">
                    <label for="lastname" class="">Lastname</label>
                    <input id="lastname" type="text" name="lastname" placeholder="Doe" autocomplete="family-name" class="form-control py-4 rounded-0 border-0 bg-light" required />
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="form-control py-4 rounded-0 border-0 bg-light" required />
            </div>
            
            <div class="form-group mt-2">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="form-control py-4 rounded-0 border-0 bg-light" required />
            </div>
            
            <div class="form-group mt-2">
                <label for="password-confirm">Confirm password</label>
                <input id="password-confirm" type="password" name="password-confirm" placeholder="********" autocomplete="new-password" class="form-control py-4 rounded-0 border-0 bg-light" required />
            </div>
            
            <button type="submit" class="w-100 bg-dark text-white py-3 border-0 mb-2 text-uppercase">Sign up</button>
            
            <a href="#" class="text-decoration-none text-secondary">Already registered?</a>
        </form>
    </div>
</div>