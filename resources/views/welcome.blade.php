
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
                                    <p class="lead">Déposer une livraison et faites recevez votre livraison à domic.</p>
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
                                <img src="{{asset('livreur01.png')}}" class="img-fluid" alt="img">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-mortarboard text-primary" viewBox="0 0 16 16">
                                            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"></path>
                                            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"></path>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="mb-2">Suivi en Temps Réel :</h3>
                                    <p class="mb-0">Suivez votre colis à chaque étape du processus de livraison, depuis notre entrepôt jusqu'à votre porte..</p>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-graph-up-arrow text-primary" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"></path>
                                        </svg>
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
                    <div class="row">
                        <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center">
                            <span class="fs-4 text-warning ls-md text-uppercase fw-semibold">LIVRAISON RAPIDE AVEC VTP </span>
                            <!-- heading  -->
                            <h2 class="display-3 mt-4 mb-3 fw-bold"></h2>
                            <!-- para  -->
                            <p class="lead px-lg- 8 mb-6">Déposez une Livraison avec VTP Livraison et Recevez Votre Colis Chez Vous .</p>
                            <a href="{{route('create.delivery')}}" class="btn btn-primary">Commencer</a>
                        </div>
                    </div>
                </div>
            </section>



        </main>
        <!-- footer -->
@endsection
