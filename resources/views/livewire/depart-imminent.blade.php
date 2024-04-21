<div>
    <section class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <!-- text -->
                    <div>
                        <div class="mb-4 text-center">
                            <h1 class="fw-bold mb-4">
                                Liste des
                                <span class="text-primary">Départs </span>
                               Imminents
                            </h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-8">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card border mb-6 mb-md-0 shadow-none">
                        <div class="card-header">
                            <h4 class="mb-0 fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter me-2" viewBox="0 0 16 16">
                                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                                </path></svg>
                                Filtrer par
                            </h4>
                        </div>
                        <div class="card-body py-3">
                            <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Locations
                                <span class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path></svg>
                                </span>
                            </a>
                            <div class="collapse show" id="collapseExample">
                                <div class="mt-3">
                                    @foreach ($listecountry as $country)
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationOne">
                                        <label class="form-check-label" for="flexCheckLocationOne">
                                           {{$country->libelle}}
                                            <span>({{count($country->countries)}})</span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                        <div class="card-body border-top py-3">
                            <a class="fs-5 text-dark fw-semibold" data-bs-toggle="collapse" href="#collapseExampleFourth" role="button" aria-expanded="false" aria-controls="collapseExampleFourth">
                                Par ville
                                <span class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path></svg>
                                </span>
                            </a>
                            <div class="collapse show" id="collapseExampleFourth">
                                @foreach ($listecity as $city)
                                <div class="mt-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckEduFive">
                                        <label class="form-check-label" for="flexCheckEduFive">{{$city->libelle}}</label>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="card-body pb-3 pt-0 d-grid">
                            <a href="#" class="btn btn-outline-secondary">Rafraichir la page </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 mb-6 mb-md-0">
                    <div class="row">
                        @foreach ($listedeparts as $liste)
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="card card-bordered card-hover cursor-pointer h-100">
                                <div class="card-body">
                                    <div class="w-100 mt-3">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div>
                                                <h3 class="mb-1 fs-4">
                                                    <a href="job-single.html" class="text-inherit">Départs de  {{$liste->country->libelle}} vers  {{$liste->city->libelle}}</a>
                                                    <span class="badge bg-danger-soft">Urgent</span>
                                                </h3>
                                                <div>
                                                    <span>Nombre de personne ayant sosucris pour cette destination </span>
                                                     <span>{{$liste->countLivraisonForCountryCity($liste->country->id, $liste->city->id)}}</span>

                                                    <h5>Nous vous attentons pour commencer le départs</h5>

                                                    <div class="mt-4">
                                                        <!-- progress bar -->
                                                        <div class="progress progress-tooltip" style="height: 6px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: {{$liste->countLivraisonForCountryCity($liste->country->id, $liste->city->id)}}%" aria-valuenow={{$liste->countLivraisonForCountryCity($liste->country->id, $liste->city->id)}} aria-valuemin="0" aria-valuemax="10">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="mt-4 d-grid">
                                                    <button class="btn btn-outline-warning">sss</button>
                                                </div> --}}

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @endforeach
                        <nav>
                            <ul class="pagination mt-4 mb-2">
                                {{$listedeparts->links()}}
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
