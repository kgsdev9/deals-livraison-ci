
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- title and description-->
    <title>Inscription</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('asset_auth/css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('asset_auth/css/style.css')}}">


    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

  <div class="sm:flex">

    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">

      <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <!-- logo image-->
        <a href="#"> <img src="assets/images/logo.png" class="w-28 absolute top-10 left-10 dark:hidden" alt="">VTP LIVRAISON</a>

        <!-- logo icon optional -->
        <div class="hidden">
          <img class="w-12" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Socialite html template">
        </div>

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5">Explorez le monde depuis chez vous avec VTP Livraison Internationale </h2>
          <p class="text-sm text-gray-700 font-normal">Vous n'avez pas de compte alors . <a href="{{route('login')}}" class="text-blue-700" >Connectez-vous!</a></p>
        </div>


        <!-- form -->
        <form  method="POST" action="{{ route('login') }}"  class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
         @csrf
          <!-- email -->
          <div>
              <label for="email" class="">Adresse email</label>
              <div class="mt-2.5">
                  <input   id="email" type="email" name="email" autofocus=""  placeholder="Email" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
              </div>
          </div>
          <!-- password -->
          <div>
            <label for="email" class="">Mot de passe </label>
            <div class="mt-2.5">
                <input id="password" name="password" type="password" placeholder="***"  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
            </div>
          </div>

          <div class="flex items-center justify-between">

            <div class="flex items-center gap-2.5">
              <input id="rememberme" name="remember" type="checkbox"  id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="rememberme" class="font-normal">Se souvenir de moi </label>
            </div>
            <a href="{{route('password.request')}}" class="text-blue-700">Mot de passé oublié </a>
          </div>
          <div>
            <button type="submit" class="button bg-primary text-white w-full">Connexion</button>
          </div>

          <div class="text-center flex items-center gap-6">
            <hr class="flex-1 border-slate-200 dark:border-slate-800">
            ou  continuer avec
            <hr class="flex-1 border-slate-200 dark:border-slate-800">
          </div>

          <!-- social login -->
          <div class="flex gap-2" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true">
            <a href="#" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"> <ion-icon name="logo-facebook" class="text-lg"></ion-icon> Google  </a>

          </div>

        </form>


      </div>

    </div>

    <!-- image slider -->
    <div class="flex-1 relative bg-primary max-md:hidden">


      <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">

        <ul class="uk-slideshow-items w-full h-full">
            <li class="w-full">
                <img src="{{asset('livraison/livraison11.jpg')}}"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                    <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" >
                        <img class="w-12" src="{{asset('livraison/logo-icon.png')}}" alt="Socialite html template">
                        <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 600,0,0">Livraison securisée </h4>
                        <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> Notre service de livraison transcende les frontières pour vous offrir une expérience unique. De Paris à Pékin, de New York à Sydney.</p>
                    </div>
                </div>
                <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
            </li>
            <li class="w-full">
              <img src="{{asset('livraison/livraison05.jpg')}}"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                  <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" >
                      <img class="w-12" src="{{asset('livraison/logo-icon.png')}}" alt="Socialite html template">
                      <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 800,0,0">Zero Souci avec VTP LIVRAISON </h4>
                      <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> Avec VTP Livraison, votre satisfaction est notre priorité absolue. En cas de problème, notre équipe dévouée est à votre disposition pour résoudre rapidement toutes vos préoccupations.</p>
                  </div>
              </div>
              <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
          </li>
        </ul>

        <!-- slide nav -->
        <div class="flex justify-center">
            <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"> </ul>
        </div>


    </div>


    </div>

  </div>

    <script src="{{asset('asset_auth/js/script.js')}}"></script>
    <script src="{{asset('asset_auth/js/uikit.min.js')}}"></script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
