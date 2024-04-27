
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
        <form method="POST" action="{{ route('register') }}" class="space-y-7 text-sm text-black font-medium dark:text-white uk-scrollspy-inview " uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" style="">
            @csrf
            <div class="grid grid-cols-2 gap-4 gap-y-7 uk-scrollspy-inview " style="">

              <!-- first name -->
              <div class="col-span-2">
                  <label for="email" class="">Nom d'utilisateur</label>
                  <div class="mt-2.5">
                      <input id="name" type="text" name="name" autofocus="" placeholder="VTP-998778" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" required autocomplete="name" autofocus>
                  </div>
              </div>


              <!-- email -->
              <div class="col-span-2">
                  <label for="email" class="">Email address</label>
                  <div class="mt-2.5">
                      <input id="email" name="email" type="email" placeholder="Email" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                  </div>
              </div>

              <!-- password -->
              <div>
                <label for="email" class="">Password</label>
                <div class="mt-2.5">
                    <input id="password" name="password" type="password" placeholder="***" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                </div>
              </div>

              <!-- Confirm Password -->
              <div>
                  <label for="email" class="">Confirm Password</label>
                  <div class="mt-2.5">
                      <input id="password_confirmation" name="password_confirmation" type="password" placeholder="***" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                  </div>
              </div>

              <div class="col-span-2">

                <label class="inline-flex items-center" id="rememberme">
                  <input type="checkbox" id="accept-terms" class="!rounded-md accent-red-800" checked>
                  <span class="ml-2">Acceptez-vous  <a href="#" class="text-blue-700 hover:underline">les termes et conditions </a> </span>
                </label>

              </div>


              <!-- submit button -->
              <div class="col-span-2">
                <button type="submit" class="button bg-primary text-white w-full">Inscription</button>
              </div>
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
