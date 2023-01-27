<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>Sign Up | SEO Content</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico" />
  </head>

  <body>
    <main class="section-register">
      <section class="section-register--left">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Benefits of joining:</h1>
            <ul class="card-text">
              <li>Over 6,000 Proven Writers</li>
              <li>Powerful Content Creation Tools</li>
              <li>Easy-to-Use Platform</li>
              <li>Fast Turnaround</li>
              <li>Pay as You Go</li>
              <li>Quality Guaranteed!</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-register--right">
        <h2 class="heading mb-5">Create Your Free Account</h2>
        <p class="heading--sub mb-4 d-inline">
          High-quality content written on demand by the
          <span class="green"> web's best writers. </span>
        </p>
        <p>
          Sign up is easy and free. You don't pay anything until you're ready to
          order content.
        </p>







        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full form-control u-box-shadow-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control u-box-shadow-1" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full form-control u-box-shadow-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control u-box-shadow-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 btn btn-info">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>




        <p class="privacy-links mt-5">
          I agree to the
          <a href="terms-conditions.html"> Terms & Conditions </a>
          and
          <a href="privacy-policy.html"> Privacy Policy. </a>
        </p>
        <p class="login-link mt-5">
          Already have an account?
          <a href="login.html"> Sign in </a>
        </p>
      </section>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
