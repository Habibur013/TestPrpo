<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>Log In | SEO Content</title>

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
    <main class="section-login">
      <section class="section-login--logo">
        <a href="index.html">
          <img src="assets/images/logo.png" alt="logo" class="img-fluid" />
        </a>
      </section>

      <section class="section-login--form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-title">Sign In</div>
                <div class="card-body">



         @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif



        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control u-box-shadow-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full form-control u-box-shadow-1" type="password" name="password" required autocomplete="current-password" />
            </div>

           

            <div class="flex items-center justify-end mt-4">
               
                <x-jet-button class="ml-4 btn btn-success">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>





                  <div class="links">
                    <p>
                      <a href="{{ url ('register')}}">Need an account?</a>
                      <a href="{{ url ('forgot-password')}}">Forgot Password?</a>
                    </p>
                  </div>
                  <div class="back-button">
                    <a href={{ url ('/')}}>
                      <i class="bi bi-arrow-left-circle"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
