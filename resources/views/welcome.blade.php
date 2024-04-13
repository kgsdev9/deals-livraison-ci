
@extends('master.master')
@section('title', 'Bienvenue sur livraison coursier')
@section('master')

        <main>

            <section class="bg-light py-8 bg-cover">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div>
                                <div class="text-center text-md-start">
                                    <!-- heading -->
                                    <h1 class="display-2 fw-bold mb-3">Déposer votre livraison  </h1>
                                    <!-- lead -->
                                    <p class="lead">Faites-nous confiance pour prendre soin de votre livraison et vous offrir la tranquillité d'esprit que vous méritez. Déposez votre livraison sur  VTP MARKET  dès aujourd'hui et laissez-nous vous montrer ce que signifie une livraison en toute sécurité..</p>
                                </div>
                                <div class="mt-8">
                                    <!-- card -->
                                    <div class="bg-white rounded-md-pill shadow rounded-3 mb-4">
                                        <!-- card body -->
                                        <div class="p-md-2 p-4">
                                            <!-- form -->
                                            <form class="row g-1" method="POST" action="{{route('delivery.verify')}}">
                                                @csrf
                                                <div class="col-12 col-md-5">
                                                    <!-- input -->
                                                    <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                                                        <!-- input group -->
                                                        <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0" id="searchJob">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                            </svg>
                                                        </span>
                                                        <!-- search -->
                                                        <input
                                                            type="search"
                                                            class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                            placeholder="Code de livraison"
                                                            aria-label="Code de livraison"
                                                            aria-describedby="Rechercher une livraisn" name="code">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <!-- inpt group -->

                                                </div>
                                                <div class="col-12 col-md-3 text-end d-grid">
                                                    <!-- button -->
                                                    <button type="submit" class="btn btn-warning rounded-pill">Rechercher</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <span class="fs-4">Renseigner votre code de livraison pour  voir le statut de votre livraison .</span>
                                </div>
                            </div>
                        </div>
                        <div class="offset-lg-1 col-lg-5 col-12 text-center">
                            <div class="position-relative d-none d-lg-block">
                                <img src="{{asset('okay.png')}}" class="img-fluid rounded-4 w-100 z-1 position-relative" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-8 mt-4">
                <div class="container mb-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-12">
                            <!-- Brand logo -->
                            <span class="text-dark mb-3 d-block text-uppercase fw-semibold ls-xl text-center">NOS CLIENTS </span>
                            <div class="row mt-8">
                                <!-- logo -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-6 text-center mb-4 mb-xl-0">
                                    <img src="{{asset('airivoire.jpeg')}}" alt="logo" style="height:30px;">
                                </div>
                                <!-- logo -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-6 text-center mb-4 mb-xl-0">

                                </div>
                                <!-- logo -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-6 text-center mb-4 mb-xl-0">
                                    <img src="{{asset('airfrance.jpg')}}" alt="logo" style="height:30px;">
                                </div>
                                <!-- logo -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-6 text-center mb-4 mb-xl-0">

                                </div>
                                <!-- logo -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-6 text-center mb-4 mb-xl-0">
                                    <img src="{{asset('aircanada.png')}}" alt="logo" style="height:30px;">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-8 ">
                <div class="container my-lg-8">
                    <div class="row ">
                        <div class="justify-content center">
                            <!-- caption -->
                            <h2 class="display-4 mb-3 fw-bold text-center">Livraison Assurée par VTP! </h2>
                            <p class="lead text-center">🚚 Livraison Assurée par VTP Livraison ! Ne vous inquiétez plus pour vos colis ! 🚚.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <!-- card -->
                            <div class="card mb-4 mb-lg-0">
                                <!-- card body -->
                                <div class="card-body p-5">
                                    <!-- icon -->
                                    <div class="mb-3">
                                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 612 612" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M612,195.722c0,105.87-510.374,222.727-549.02,222.727c-21.667,0-46.25-4.994-46.25-24.969 c0-6.674,7.703-16.32,21.22-27.949l-0.015,0.008L2.109,301.883c-4.851-8.618-1.005-19.536,8.175-23.212l6.157-2.465 c11.159-4.468,23.718-3.802,34.341,1.821l65.039,34.432c25.323-15.02,54.049-30.746,84.326-46.229L73.402,184.001 c-10.027-6.506-9.92-21.22,0.201-27.578l10.368-6.514c17.256-10.841,38.234-14.043,57.938-8.846l210.85,55.616 c65.742-26.094,125.181-43.904,160.363-43.904c9.396,0,18.806,0.249,27.887,0.898l-63.675,28.745l-1.524,21.418l98.29-45.183 C597.661,164.272,612,174.759,612,195.722z M355.492,378.476l78.648,89.344c4.793,5.445,12.599,7.084,19.176,4.027l10.533-4.896 c19.208-8.928,30.521-29.172,28.061-50.209l-9.846-84.186c-0.61-5.209-5.896-8.506-10.843-6.764l-112.308,39.562 C353.447,367.281,351.661,374.125,355.492,378.476z"></path> </g> </g></svg>
                                    </div>
                                    <h3 class="mb-2">Livraison Assurée </h3>
                                    <p class="mb-0">Avec VTP Livraison, vous pouvez être sûr(e) que vos colis seront livrés en toute sécurité et dans les délais impartis..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <!-- card -->
                            <div class="card mb-4 mb-lg-0">
                                <!-- card body -->
                                <div class="card-body p-5">
                                    <!-- icon -->
                                    <div class="mb-3">
                                     <svg fill="#000000" width="64px" height="64px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Followup_x5F_research" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M85.571,340.094c13.006,10.057,29.318,16.02,47.025,16.02c42.592,0,77.105-34.537,77.105-77.129 c0-42.57-34.514-77.107-77.105-77.107s-77.105,34.537-77.105,77.107c0,16.785,5.33,32.289,14.443,44.932L16.61,377.24 c-4.389,4.389-4.389,11.498,0,15.908c2.182,2.184,5.084,3.285,7.943,3.285c2.877,0,5.758-1.102,7.961-3.285l46.666-46.664 L85.571,340.094z M94.118,240.297c9.879-9.834,23.469-15.908,38.477-15.908c30.104,0,54.605,24.502,54.605,54.605 c0,15.008-6.074,28.598-15.908,38.477c-9.898,9.967-23.6,16.133-38.697,16.133c-30.105,0-54.609-24.504-54.609-54.609 C77.985,263.896,84.151,250.196,94.118,240.297z"></path> <path d="M263.006,13.61c-55.46-1.557-110.201,16.127-154.158,49.797C65.524,96.59,34.354,143.84,21.083,196.454 c-0.838,3.313,1.172,6.676,4.484,7.512c3.314,0.848,6.678-1.172,7.514-4.484c12.594-49.918,42.174-94.756,83.293-126.25 c41.711-31.951,93.666-48.707,146.285-47.25c61.439,1.725,118.529,27.273,160.754,71.939 c42.223,44.666,64.527,103.104,62.801,164.542c-3.566,126.832-109.645,227.182-236.482,223.553 c-54.342-1.525-105.584-21.863-145.932-57.605l8.188-8.629c1.836-1.939,0.582-5.141-2.084-5.314l-27.441-1.783 c-1.967-0.129-3.566,1.559-3.336,3.516l3.232,27.309c0.314,2.652,3.58,3.738,5.418,1.797l7.506-7.912 c42.566,37.84,96.691,59.381,154.102,60.994c2.309,0.064,4.607,0.098,6.904,0.098c130.576,0,238.601-104.332,242.296-235.676 C502.338,129.155,396.658,17.364,263.006,13.61z"></path> <path d="M21.645,291.207c0.252,0,0.506-0.016,0.764-0.047c3.389-0.414,5.803-3.502,5.387-6.895 c-1.402-11.438-1.947-23.121-1.619-34.732c0.148-5.359,0.49-10.801,1.016-16.174c0.33-3.4-2.158-6.426-5.561-6.758 c-3.404-0.33-6.426,2.16-6.758,5.559c-0.551,5.656-0.91,11.383-1.068,17.027c-0.346,12.224,0.23,24.533,1.707,36.585 C15.897,288.908,18.565,291.207,21.645,291.207z"></path> <path d="M259.27,296.5h30.23v-14h-38.587c-3.854,0-9.413,3.855-9.413,7.709v140.232c0,3.854,5.559,7.059,9.413,7.059h80.859 c3.854,0,6.729-3.205,6.729-7.059V338.5h-13v71.211c0,1.641-0.439,3.789-2.08,3.789h-64.15c-1.641,0-3.77-2.148-3.77-3.789V298.559 C255.5,296.939,257.629,296.5,259.27,296.5z M291.342,423.266c2.445,0,4.428,1.979,4.428,4.424c0,2.443-1.982,4.426-4.428,4.426 c-2.443,0-4.426-1.982-4.426-4.426C286.916,425.244,288.898,423.266,291.342,423.266z"></path> <g> <path d="M325.617,78.27c-0.508-0.191-1.057-0.77-1.635-0.77H189.004c-0.652,0-1.264,0.607-1.822,0.84l69.164,43.805L325.617,78.27 z"></path> <path d="M418.459,158.5H327.5V94.823v-1.828l-67.965,43.313c-1.104,0.699-2.146,1.049-3.4,1.049s-2.827-0.35-3.931-1.049 L183.5,92.995v1.828v76.926c0,1.49,1,2.805,2,3.689v0.095c1,0.742,2.311,0.967,3.504,0.967H302.5v119.109v21.063v0.383 c0,4.908,5.072,8.445,9.982,8.445h105.977c4.91,0,8.041-3.537,8.041-8.445V168.329C426.5,163.42,423.369,158.5,418.459,158.5z M402.875,255.5h-75.023c-2.486,0-4.5-2.016-4.5-4.5s2.014-4.5,4.5-4.5h75.023c2.484,0,4.5,2.016,4.5,4.5 S405.359,255.5,402.875,255.5z M402.875,233.5h-75.023c-2.486,0-4.5-2.016-4.5-4.5s2.014-4.5,4.5-4.5h75.023 c2.484,0,4.5,2.016,4.5,4.5S405.359,233.5,402.875,233.5z"></path> </g> </g> </g></svg>
                                    </div>
                                    <h3 class="mb-2">Suivi en Temps Réel :</h3>
                                    <p class="mb-0">Suivez votre colis à chaque étape du processus de livraison, depuis notre entrepôt jusqu'à votre porte en toute sécurite..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <!-- card -->
                            <div class="card mb-4 mb-lg-0">
                                <!-- card body -->
                                <div class="card-body p-5">
                                    <!-- icon -->
                                    <div class="mb-3">
                                        <svg width="64px" height="64px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-customer-support" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>715</title> <defs> </defs> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g transform="translate(1.000000, 0.000000)" fill="#434343"> <g transform="translate(0.000000, 2.000000)"> <path d="M8.005,10.094 C6.563,10.094 5.098,9.238 4.243,8.105 C0.141,8.105 0.017,13.965 0.017,13.965 L15.992,13.965 C15.992,13.965 16.314,8.079 11.701,8.079 C10.847,9.226 9.447,10.094 8.005,10.094 Z" class="si-glyph-fill"> </path> <path d="M11.441,3.069 C11.441,4.755 9.902,7.979 8.002,7.979 C6.105,7.979 4.565,4.754 4.565,3.069 C4.565,1.384 6.104,0.016 8.002,0.016 C9.902,0.017 11.441,1.385 11.441,3.069 L11.441,3.069 Z" class="si-glyph-fill"> </path> </g> <path d="M12.975,3.614 C12.975,3.298 12.535,3.043 11.989,3.041 L11.989,2.39 C11.989,2.293 12.026,0.022 8.014,0.022 C4.004,0.022 4.041,2.293 4.041,2.39 L4.041,3.064 C4.031,3.064 4.023,3.061 4.014,3.061 C3.471,3.061 3.034,3.312 3.034,3.623 L3.034,6.377 C3.034,6.686 3.472,6.938 4.014,6.938 C4.556,6.938 4.996,6.686 4.996,6.377 L4.996,3.623 C4.996,3.58 4.969,3.541 4.953,3.501 L4.953,2.75 C4.953,2.681 4.665,0.967 8.014,0.967 C11.364,0.967 11.016,2.681 11.016,2.75 L11.016,3.541 C11.01,3.566 10.991,3.588 10.991,3.614 L10.991,6.431 C10.991,6.748 11.434,7.005 11.983,7.005 C11.995,7.005 12.004,7.001 12.016,7.001 L12.016,8.03 L11.032,8.03 L11.032,9 L12.985,9 L12.975,3.614 L12.975,3.614 Z" class="si-glyph-fill"> </path> </g> </g> </g></svg>
                                    </div>
                                    <h3 class="mb-2">Service Client Exceptionnel </h3>
                                    <p class="mb-0">Notre équipe est là pour répondre à toutes vos questions et vous assister tout au long du processus de livraison..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-8 bg-light">
                <div class="container my-lg-8">
                    <!-- row -->
                    <div class="row justify-content-center text-center">
                        <div class="col-md-9 col-12">
                            <!-- heading -->
                            <h2 class="display-4">  🌟 Un service de qualité assuré par une équipe de qualité 🌟</h2>
                            <p class="lead px-lg-8 mb-6">Nous sommes fiers de notre dévouement à fournir un service qui dépasse les attentes, à chaque interaction. Notre équipe est non seulement compétente et expérimentée, mais elle est également passionnée par ce qu'elle fait.</p>
                            <!-- button -->
                            <div class="d-grid d-md-block">
                                <a href="#" class="btn btn-outline-secondary mb-2 mb-md-0">Consulter les départs imminents</a>
                                <a href="{{route('create.delivery')}}" class="btn btn-warning">Déposer une livraison</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-8 bg-white container">

                <div class="row">
                    <!-- row -->
                    <div class="col-md-6 offset-right-md-6">
                        <!-- heading -->
                        <h1 class="display-4 fw-bold mb-3">Nous Parcours le monde</h1>
                        <!-- para -->
                        <p class="lead">Les livraisons internationales peuvent être un défi passionnant, avec la diversité des cultures, des langues et des réglementations à prendre en compte. Votre engagement à satisfaire vos clients partout dans le monde est admirable..</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <!-- counter -->
                        <div class="border-top pt-4 mt-6 mb-5">
                            <h1 class="display-3 fw-bold mb-0">20M</h1>
                            <p class="text-uppercase">Learners</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <!-- counter -->
                        <div class="border-top pt-4 mt-6 mb-5">
                            <h1 class="display-3 fw-bold mb-0">57K</h1>
                            <p class="text-uppercase">Instructors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <!-- counter -->
                        <div class="border-top pt-4 mt-6 mb-5">
                            <h1 class="display-3 fw-bold mb-0">21K</h1>
                            <p class="text-uppercase">Courses</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <!-- counter -->
                        <div class="border-top pt-4 mt-6 mb-5">
                            <h1 class="display-3 fw-bold mb-0">380M</h1>
                            <p class="text-uppercase">Course enrollments</p>
                        </div>
                    </div>
                </div>

                <div class="gallery mb-8">
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--1 mb-0">
                        <img src="{{asset('livraison/img1.jpg')}}" alt="Gallery image 1" class="gallery__img rounded-3">
                    </figure>
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--2 mb-0">
                        <img src="{{asset('livraison/img2.jpg')}}" alt="Gallery image 2" class="gallery__img rounded-3">
                    </figure>
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--3 mb-0">
                        <img src="{{asset('livraison/img3.jpg')}}" alt="Gallery image 3" class="gallery__img rounded-3">
                    </figure>
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--4 mb-0">
                        <img src="{{asset('livraison/img4.jpg')}}" alt="Gallery image 4" class="gallery__img rounded-3">
                    </figure>
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--5 mb-0">
                        <img src="{{asset('livraison/img5.jpg')}}" alt="Gallery image 5" class="gallery__img rounded-3">
                    </figure>
                    <!-- gallery-item -->
                    <figure class="gallery__item gallery__item--6 mb-0">
                        <img src="{{asset('livraison/img6.jpg')}}" alt="Gallery image 6" class="gallery__img rounded-3">
                    </figure>
                </div>

        </section>

            {{-- <section class="py-8 bg-white">
                <div class="container my-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-12 mb-8">
                            <h2 class="display-4 mb-3 fw-bold">NOUS PARCOURONS LE MONDE </h2>
                            <p class="lead mb-5">
                                Que vous soyez à Paris, Berlin, New York, Tokyo ou ailleurs, notre équipe travaille sans relâche pour que votre colis vous parvienne rapidement et en parfait état. Avec nos partenaires logistiques de confiance, nous assurons un suivi précis à chaque étape du processus, pour votre tranquillité d'esprit.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src=" {{asset('logo-pays/france.jpg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="one">
                                <!-- text -->
                                <div id="one" class="d-none">
                                    <div class="mb-0 fw-semibold">France</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/ci.png')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="two">
                                <!-- text -->
                                <div id="two" class="d-none">
                                    <div class="mb-0 fw-semibold">Cote d'ivoire </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/canada.avif')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="three">
                                <!-- text -->
                                <div id="three" class="d-none">
                                    <div class="mb-0 fw-semibold">CANADA</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/sengak.svg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="four">
                                <!-- text -->
                                <div id="four" class="d-none">
                                    <div class="mb-0 fw-semibold">Senegal</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/belgique.png')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="five">
                                <!-- text -->
                                <div id="five" class="d-none">
                                    <div class="mb-0 fw-semibold">Bélgique</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/guadaloupe.jpeg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="six">
                                <!-- text -->
                                <div id="six" class="d-none">
                                    <div class="mb-0 fw-semibold">Guadeloupe</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/martinique.jpeg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="seven">
                                <!-- text -->
                                <div id="seven" class="d-none">
                                    <div class="mb-0 fw-semibold">Martinique</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/camerroun.jpg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="eight">
                                <!-- text -->
                                <div id="eight" class="d-none">
                                    <div class="mb-0 fw-semibold">Cameroun </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/espagne.png')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="eleven">
                                <!-- text -->
                                <div id="eleven" class="d-none">
                                    <div class="mb-0 fw-semibold">Espagne</div>
                                    <span>Seo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/allemagne.jpg')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="twelve">
                                <!-- text -->
                                <div id="twelve" class="d-none">
                                    <div class="mb-0 fw-semibold">Allemagne</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/italie.webp')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="thirteen">
                                <!-- text -->
                                <div id="thirteen" class="d-none">
                                    <div class="mb-0 fw-semibold">Italie</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-3">
                            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
                                <!-- avatar -->
                                <img src="{{asset('logo-pays/portugal.avif')}}" alt="avatar" class="imgtooltip img-fluid rounded-circle" data-template="fourteen">
                                <!-- text -->
                                <div id="fourteen" class="d-none">
                                    <div class="mb-0 fw-semibold">Portugal</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}



        </main>
        <!-- footer -->
@endsection
