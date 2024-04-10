<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Total de mes livraisons</span>
                    </div>

                </div>
                <h2 class="fw-bold mb-1">{{$livraison}}</h2>

                <a href=" {{route('delivery.price')}}" class="btn btn-outline-secondary">Consulter</a>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Total de toutes les livraisons</span>
                    </div>
                    <div>
                        <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{$alllivraisons}}</h2>

                <a href="#" class="btn btn-outline-secondary">Consulter</a>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Total des utilisateurs</span>
                    </div>

                </div>
                <h2 class="fw-bold mb-1">{{$countusers}}</h2>

                <a href="#" class="btn btn-outline-secondary">Consulter</a>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                    <div>
                        <span class="fs-6 text-uppercase fw-semibold ls-md">Liste des prix de livraisons</span>
                    </div>
                </div>
                <h2 class="fw-bold mb-1">{{$listepricelivraisons}}</h2>
                <span class="text-success fw-semibold">
                 <a href=" {{route('delivery.price')}}" class="btn btn-outline-secondary">Consulter</a>
                </span>

            </div>
        </div>
    </div>
</div>
