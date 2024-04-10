@extends('master.master')
@section('title', 'Gestion des prix de livraison')
@section('master')
<section class="container  p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Mon Profile </h1>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                        <div>
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Liste de mes livraison</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">0</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                       20 €
                    </span>
                    <span class="ms-1 fw-medium">Total Paiement  </span>
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
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Liste de mes livraison</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">0</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                       20 €
                    </span>
                    <span class="ms-1 fw-medium">Total Paiement  </span>
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
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Liste de mes livraison</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">0</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                       20 €
                    </span>
                    <span class="ms-1 fw-medium">Total Paiement  </span>
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
                            <span class="fs-6 text-uppercase fw-semibold ls-md">Liste de mes livraison</span>
                        </div>
                        <div>
                            <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                        </div>
                    </div>
                    <h2 class="fw-bold mb-1">0</h2>
                    <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                       20 €
                    </span>
                    <span class="ms-1 fw-medium">Total Paiement  </span>
                </div>
            </div>
        </div>



    </div>

    @livewire('delivery-price')

</section>
@endsection
