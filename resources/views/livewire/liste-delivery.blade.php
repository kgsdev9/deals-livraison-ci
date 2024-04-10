<div>
    <div class="row justify-content-md-between mb-4 mb-xl-0">
        <!-- col -->
        <div class="col-xl-12 col-lg-4 col-md-6 col-12">
            <!-- search -->
            <div class="mb-2 mb-lg-4">
                <input type="search" wire:model.live="search" class="form-control" placeholder="Rechercher une livraison">
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($listedelivery as $liste)
        <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
            <!-- card -->
            <div class="card h-100">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- text-->
                        <div>
                            <h4 class="mb-0"><a href="#" class="text-inherit">Code de livraison {{$liste->code_livraison}}</a></h4>
                            <span class="fs-6">Pays : {{$liste->country->libelle}} ;   Ville : {{$liste->city->libelle}}</span>
                        </div>
                        <!-- dropdown-->
                        <div class="d-flex align-items-center">
                            <div class="dropdown dropstart">
                                <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle" id="dropdownProjectOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                    <span class="dropdown-header">Action</span>


                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-printer dropdown-item-icon"></i>
                                       Imprimer
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-eye"></i>
                                        Visualiser
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                       Supprimer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- para-->
                    <div class="mt-3 mb-4">
                        <p class="mb-0">{{$liste->adresse}}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar-group">
                                <!-- avatar -->
                                <span class="avatar avatar-md">
                                    <!-- img -->
                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle imgtooltip" data-template="one ">
                                    <span id="one" class="d-none">
                                        <small class="fw-semibold">Paul Haney</small>
                                    </span>
                                </span>
                                <!-- avatar -->
                            </div>
                        </div>
                        <!-- text -->
                        <div>
                            @if($liste->status == "encours")
                            <span class="badge bg-info-soft">En cours</span>
                            @elseif($liste->status == "echec")
                            <span class="badge bg-danger-soft">Echec</span>
                            @elseif($liste->status == "livree")
                            <span class="badge bg-success-soft">Effectuée</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <!-- progress bar -->
                        <div class="progress progress-tooltip" style="height: 6px">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                <span>45%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card footer -->
                <div class="card-footer p-0">
                    <div class="d-flex justify-content-between">
                        <div class="w-50 py-3 px-4">
                            <h6 class="mb-0">Date  : {{$liste->created_at}} </h6>
                            <p class="text-dark fs-6 fw-semibold mb-0"></p>
                        </div>
                        <div class="border-start w-50 py-3 px-4">
                            <a class="btn btn-outline-danger" href="{{route('show.delivery', $liste->id)}}"> Visualiser</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach




        <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
            <a href="{{route('create.delivery')}}" >
                <div class="card h-100 border border-2 shadow-none card-dashed-hover p-12">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <i class="fe fe-plus text-secondary mb-3 fs-2" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
