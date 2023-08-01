<x-base-layout :scrollspy="false">

  <x-slot:pageTitle>
    Login
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
      <!--  BEGIN CUSTOM STYLE FILE  -->
      @vite(['resources/scss/light/assets/authentication/auth-boxed.scss'])
      @vite(['resources/scss/dark/assets/authentication/auth-boxed.scss'])
      <!--  END CUSTOM STYLE FILE  -->
      </x-slot>
      <!-- END GLOBAL MANDATORY STYLES -->

      <div class="auth-container d-flex">

        <div class="align-self-center container mx-auto">

          <div class="row">

            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
              <div class="card mt-3 mb-3">
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 mb-3">

                        <h2>Sign In</h2>
                        <p>Enter your email and password to login</p>

                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <x-input-label for="email" :value="__('model.user.email')" />
                          <x-text-input id="email" class="mt-1 block w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-4">
                          <x-input-label for="password" :value="__('model.user.password')" />

                          <x-text-input id="password" class="mt-1 block w-full" type="password" name="password"
                                        required autocomplete="current-password" />

                          <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-3">
                          <div class="form-check form-check-primary form-check-inline">
                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="mb-4">
                          <x-primary-button>
                            {{ __('Log in') }}
                          </x-primary-button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

      <!--  BEGIN CUSTOM SCRIPTS FILE  -->
      <x-slot:footerFiles>

        </x-slot>
        <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>
