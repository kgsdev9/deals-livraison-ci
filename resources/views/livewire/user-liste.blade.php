<div>
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Liste utilisateurs </h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Accueil</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Gestion des Utilisateurs</a>
                                </li>

                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary" wire:click="displayform()">Ajouter un nouveau prix </a>
                    </div>
                </div>
            </div>
        </div>
        @if($dispkayform == true)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Header -->
                    <div class="card-header border-bottom-0">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" wire:model.live="search" class="form-control ps-6" placeholder="Rechercher">
                        </form>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Nom</th>
                                    <th>email</th>
                                    <th>telephone</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gestionlivraisons as $price)
                                <tr>
                                    <td>
                                      {{ $price->poids}}
                                    </td>
                                    <td>
                                        {{ $price->prix}} €
                                     </td>

                                     <td>
                                       <button class="btn btn-light" wire:click="edit({{$price->id}})">Editer </button>
                                       <button class="btn btn-danger">Supprimer </button>
                                     </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div>
                <input type="text" wire:model="poids" class="form-control">
                <input type="text" wire:model="prix" class="form-control">
                @if($pricelivraisonId)
                <button wire:click="update()" class="btn btn-outline-dark">Modifier</button>
                @else
                <button wire:click="store()" class="btn btn-outline-dark">Enregistrer</button>
                @endif
                <button wire:click="cancel()" class="btn btn-outline-dark">Retourner</button>
            </div>
        @endif
    </section>
</div>
