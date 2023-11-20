
@extends('master.master')
@section('title', 'Bienvenue sur livraison coursier')
@section('master')
        <!-- Page Content -->
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
                                    <h1 class="display-2 fw-bold mb-3">Un click un livreur </h1>
                                    <!-- lead -->
                                    <p class="lead">Nous systeme perfectionner reunir tous les livreurs d'Abidjan pour vous servir rapidement.</p>
                                </div>
                                <div class="mt-8">
                                    <!-- card -->
                                    <div class="bg-white rounded-md-pill shadow rounded-3 mb-4">
                                        <!-- card body -->
                                        <div class="p-md-2 p-4">
                                            <!-- form -->
                                            <form class="row g-1">
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
                                                            placeholder="Livraison"
                                                            aria-label="Livraison"
                                                            aria-describedby="searchJob">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <!-- inpt group -->
                                                    <div class="input-group mb-3 mb-md-0 border-md-0 border rounded-pill">
                                                        <span class="input-group-text bg-transparent border-0 pe-0 ps-md-0" id="location">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                                            </svg>
                                                        </span>
                                                        <!-- search -->
                                                        <input
                                                            type="search"
                                                            class="form-control rounded-pill border-0 ps-3 form-focus-none"
                                                            placeholder="localisation"
                                                            aria-label="Search Job"
                                                            aria-describedby="localisation">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-3 text-end d-grid">
                                                    <!-- button -->
                                                    <button type="submit" class="btn btn-warning rounded-pill">Rechercher</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- text -->
                                    <span class="fs-4">Avec dely vous avez la possbilité de contacter le livreur via  Whattssap.</span>
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



            <section class="py-8">
                <!-- container -->
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                            <!-- row -->
                            <div class="row text-center">
                                <!-- col -->
                                <div class="col">
                                    <div class="mb-3 mt-3">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/gray-logo-airbnb.svg" alt="logo">
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <div class="mb-3 mt-3">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/gray-logo-discord.svg" alt="logo">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 mt-3">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/gray-logo-intercom.svg" alt="logo">
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <div class="mb-3 mt-3">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/gray-logo-stripe.svg" alt="logo">
                                    </div>
                                </div>
                                <!-- col -->
                                <div class="col">
                                    <div class="mb-3 mt-3">
                                        <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/gray-logo-netflix.svg" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-light py-5 feature-list">
                <div class="container py-4">
                    <div class="text-center mb-8">
                        <!-- col -->
                        <!-- text -->
                        <span class="text-uppercase text-primary fw-semibold ls-md"></span>
                        <!-- heading -->
                        <h4>Livreurs recemments inscrits sur la plateforme </H4>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
                        @foreach ($allLivreurs as $livreur)
                        <div class="col">
                            <div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">
                                <img src="{{Storage::url($livreur->photo)}}" class="card-img-top" alt="..." >
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-1 text-dark">
                                       {{$livreur->nom}}  {{$livreur->prenom}}
                                    </h5>
                                    <p class="card-text text-muted small">
                                        Zone d'intervention
                                        @foreach ($livreur->communes as $commune)
                                            {{$commune->nom}}
                                        @endforeach
                                    </p>

                                </div>
                                <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                                    <p class="text-muted small mb-0">
                                       345  Course </p>

                                </div>
                                <a href="https://wa.me/{{$livreur->whatsApp}}?text=Salut , monsieur {{$livreur->nom}} de informatique.com J'aimerais solliticter vos service  : pour une livraison" class="btn btn-warning btn-sm px-2 py-0">

                                    <i class="bi bi-whatsapp"></i>   Contactez-moi sur WhatsApp</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>






            <section class="bg-white py-8">
                <!-- container -->

                <div class="container">
                    <div class="row">
                        <!-- col -->

                        <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                            <div class="row text-center">
                                <div class="col-md-12 px-lg-8 mb-8 mt-6">
                                    <!-- text -->


                                    <h2 class="h1 fw-bold mt-3">Trouver un livreur par commune </h2>
                                    <!-- text -->

                                    <p class="mb-0 fs-4">Trouver facilement un livreur en fonction de votre zone </p>
                                </div>
                            </div>
                            <div class="row gy-4">
                                @foreach ($allCommunes as $commune)
                                <div class="col-lg-3 col-md-4 col-12">
                                    <!-- card -->

                                    <div class="card border-top border-4 card-hover-with-icon">
                                        <!-- card body -->

                                        <div class="card-body">
                                            <!-- icon  -->


                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <!-- heading -->
                                                    <h4 class="mb-0">{{$commune->nom}}</h4>
                                                    <p>Total livreurs {{count($commune->livreurs)}}</p>
                                                </div>
                                                <!-- arrow -->
                                                <a href="#" class="text-inherit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                <!-- button -->

                                <div class="col-12 mt-8 text-center">
                                    <a href="#" class="btn btn-outline-warning">Consulter plus </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="py-lg-8 pb-8">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-md-12 col-12">
                            <div class="text-center mb-8">
                                <!-- col -->
                                <!-- text -->
                                <span class="text-uppercase text-primary fw-semibold ls-md"></span>
                                <!-- heading -->
                                <h2 class="h1 fw-bold mt-3">Livraison postés recemments </h2>
                            </div>
                            <!-- row -->

                            <div class="card card-bordered mb-4 card-hover cursor-pointer">
                                <!-- card body -->
                                <div class="card-body">
                                    <div>
                                        <div class="d-md-flex">
                                            <div class="mb-3 mb-md-0">
                                                <!-- Img -->
                                                <img src="https://geeksui.codescandy.com/geeks/assets/images/job/job-brand-logo/job-list-logo-1.svg" alt="Geeks UI - Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                            </div>
                                            <!-- text -->
                                            <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                                <div class="d-flex justify-content-between mb-5">
                                                    <div>
                                                        <!-- heading -->
                                                        <h3 class="mb-1 fs-4">
                                                            <a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html" class="text-inherit">Software Engineer (Web3/Crypto)</a>
                                                            <span class="badge bg-danger-soft ms-2">Featured Job</span>
                                                        </h3>

                                                        <div>
                                                            <span>at HelpDesk</span>
                                                            <!-- star -->
                                                            <span class="text-dark ms-2 fw-medium">
                                                                4.5
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning align-baseline"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                            </span>
                                                            <span class="ms-0">(131 Reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!-- bookmark -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="d-md-flex justify-content-between">
                                                    <div class="mb-2 mb-md-0">
                                                        <!-- year -->
                                                        <span class="me-2">
                                                            <i class="fe fe-briefcase"></i>
                                                            <span class="ms-1">1 - 5 years</span>
                                                        </span>
                                                        <!-- salary -->

                                                        <span class="me-2">
                                                            <i class="fe fe-dollar-sign"></i>
                                                            <span class="ms-1">12k - 18k</span>
                                                        </span>
                                                        <!-- location -->
                                                        <span class="me-2">
                                                            <i class="fe fe-map-pin"></i>
                                                            <span class="ms-1">Ahmedabad, Gujarat</span>
                                                        </span>
                                                    </div>
                                                    <!-- time -->
                                                    <div>
                                                        <i class="fe fe-clock"></i>
                                                        <span>21 hours ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card card-bordered mb-4 card-hover cursor-pointer">
                                <!-- card body -->
                                <div class="card-body">
                                    <div>
                                        <div class="d-md-flex">
                                            <div class="mb-3 mb-md-0">
                                                <!-- Img -->

                                                <img src="https://geeksui.codescandy.com/geeks/assets/images/job/job-brand-logo/job-list-logo-2.svg" alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                            </div>
                                            <!-- text -->
                                            <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div>
                                                        <h3 class="mb-1 fs-4"><a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html" class="text-inherit">Senior React Developer</a></h3>
                                                        <div>
                                                            <span>at Airtable</span>
                                                            <!-- icon -->
                                                            <span class="text-dark ms-2 fw-medium">
                                                                5.0
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning align-baseline"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                            </span>
                                                            <span class="ms-0">(324 Reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="d-md-flex justify-content-between">
                                                    <div class="mb-2 mb-lg-0">
                                                        <!-- year -->
                                                        <span class="me-2">
                                                            <i class="fe fe-briefcase"></i>
                                                            <span class="ms-1">0 - 5 years</span>
                                                        </span>
                                                        <!-- salary -->
                                                        <span class="me-2">
                                                            <i class="fe fe-dollar-sign"></i>
                                                            <span class="ms-1">5k - 8k</span>
                                                        </span>
                                                        <!-- location -->
                                                        <span class="me-2">
                                                            <i class="fe fe-map-pin"></i>
                                                            <span class="ms-1">Jaipur, Rajasthan</span>
                                                        </span>
                                                    </div>
                                                    <!-- day -->
                                                    <div>
                                                        <i class="fe fe-clock"></i>
                                                        <span>1 day ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card card-bordered mb-4 card-hover cursor-pointer">
                                <!-- card body -->
                                <div class="card-body">
                                    <div>
                                        <div class="d-md-flex">
                                            <div class="mb-3 mb-md-0">
                                                <!-- Img -->

                                                <img src="https://geeksui.codescandy.com/geeks/assets/images/job/job-brand-logo/job-list-logo-3.svg" alt class="icon-shape border rounded-circle">
                                            </div>
                                            <!-- text -->
                                            <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div>
                                                        <!-- heading -->
                                                        <h3 class="mb-1 fs-4"><a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html" class="text-inherit">Software Engineer (Web3/Crypto)</a></h3>
                                                        <div>
                                                            <span>at Square</span>
                                                            <!-- icon -->
                                                            <span class="text-dark ms-2 fw-medium">
                                                                3.9
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning align-baseline"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                            </span>
                                                            <span class="ms-0">(424 Reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!-- icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-md-flex justify-content-between">
                                                        <div class="mb-2 mb-md-0">
                                                            <!-- year -->
                                                            <span class="me-2">
                                                                <i class="fe fe-briefcase"></i>
                                                                <span class="ms-1">2 - 6 years</span>
                                                            </span>
                                                            <!-- year -->
                                                            <span class="me-2">
                                                                <i class="fe fe-dollar-sign"></i>
                                                                <span class="ms-1">Not discloses</span>
                                                            </span>
                                                            <!-- location -->
                                                            <span class="me-2">
                                                                <i class="fe fe-map-pin"></i>
                                                                <span class="ms-1">Hastsal, Delhi</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <!-- icon -->
                                                            <i class="fe fe-clock"></i>
                                                            <span>1 day ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card card-bordered mb-4 card-hover cursor-pointer">
                                <!-- card body -->
                                <div class="card-body">
                                    <div>
                                        <div class="d-md-flex">
                                            <div class="mb-3 mb-md-0">
                                                <!-- Img -->

                                                <img src="https://geeksui.codescandy.com/geeks/assets/images/job/job-brand-logo/job-list-logo-4.svg" alt class="icon-shape border rounded-circle">
                                            </div>
                                            <!-- text -->
                                            <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div>
                                                        <!-- heading -->
                                                        <h3 class="mb-1 fs-4"><a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html" class="text-inherit">Lead Software Engineer</a></h3>
                                                        <div>
                                                            <span>at Dot</span>
                                                            <!-- star -->
                                                            <span class="text-dark ms-2 fw-medium">
                                                                3.9
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning align-baseline"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                                <!-- reviews -->
                                                            </span>
                                                            <span class="ms-0">(523 Reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-md-flex justify-content-between">
                                                        <div class="mb-2 mb-md-0">
                                                            <!-- year -->
                                                            <span class="me-2">
                                                                <i class="fe fe-briefcase"></i>
                                                                <span class="ms-1">0 - 2 years</span>
                                                            </span>
                                                            <span class="me-2">
                                                                <!-- salary -->
                                                                <i class="fe fe-dollar-sign"></i>
                                                                <span class="ms-1">Not discloses</span>
                                                            </span>
                                                            <span class="me-2">
                                                                <!-- location -->
                                                                <i class="fe fe-map-pin"></i>
                                                                <span class="ms-1">Pune, Chennai</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <!-- time -->
                                                            <i class="fe fe-clock"></i>
                                                            <span>1 Month ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card card-bordered mb-4 card-hover cursor-pointer">
                                <!-- card body -->
                                <div class="card-body">
                                    <div>
                                        <div class="d-md-flex">
                                            <div class="mb-3 mb-md-0">
                                                <!-- Img -->

                                                <img src="https://geeksui.codescandy.com/geeks/assets/images/job/job-brand-logo/job-list-logo-5.svg" alt class="icon-shape border rounded-circle">
                                            </div>
                                            <!-- text -->
                                            <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                                <div class="d-flex justify-content-between mb-4">
                                                    <div>
                                                        <!-- heading -->
                                                        <h3 class="mb-1 fs-4"><a href="https://geeksui.codescandy.com/geeks/pages/jobs/job-single.html" class="text-inherit">Senior Full Stack Engineer</a></h3>
                                                        <div>
                                                            <span>at Toggle</span>
                                                            <span class="text-dark ms-2 fw-medium">
                                                                4.9
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning align-baseline"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </svg>
                                                            </span>
                                                            <span class="ms-0">(923 Reviews)</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <!-- icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark bookmark" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="d-md-flex justify-content-between">
                                                        <div class="mb-2 mb-md-0">
                                                            <!-- year -->
                                                            <span class="me-2">
                                                                <i class="fe fe-briefcase"></i>
                                                                <span class="ms-1">2 - 6 years</span>
                                                            </span>
                                                            <!-- salary -->
                                                            <span class="me-2">
                                                                <i class="fe fe-dollar-sign"></i>
                                                                <span class="ms-1">Not discloses</span>
                                                            </span>
                                                            <!-- location -->
                                                            <span class="me-2">
                                                                <i class="fe fe-map-pin"></i>
                                                                <span class="ms-1">Ahmedabad, Gujarat</span>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <!-- time -->
                                                            <i class="fe fe-clock"></i>
                                                            <span>2 Month ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->

                            <!-- button -->
                            <div class="mt-6 text-center">
                                <a href="#!" class="btn btn-outline-primary">Browse All Jobs Postings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- footer -->
@endsection
