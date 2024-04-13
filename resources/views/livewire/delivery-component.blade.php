
@section('title', 'Créer une nouvelle livraison')
<div>
    <section class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4 class="mb-0">Rénseigner la livraison </h4>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12 col-md-4">
                                        <label class="form-label" for="fname">Nom du destinataire</label>
                                        <input type="text" wire:model="nom_destinataire" id="nom_destinataire" class="form-control" placeholder="Guy" required="">
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label class="form-label" for="lname">Prénom du destinataire</label>
                                        <input type="text" id="prenom_destinataire" wire:model="prenom_destinataire" class="form-control" placeholder="Stephane" required="">
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <label class="form-label" for="lname">Télephone destinataire</label>
                                        <input type="text" id="prenom_destinataire" wire:model="telephone" class="form-control" placeholder="+3300998898" required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="country_id">Selectionner le pays de destination </label>
                                        <select class="form-select" wire:model="country_id" id="country_id" required="">
                                            <option value="">Choisir </option>
                                            @foreach ($allCountries as $country)
                                           <option value="{{$country->id}}">{{$country->libelle}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="city_id">Selectionner la vile de destination </label>
                                        <select class="form-select" wire:model="city_id" id="city_id" required="">
                                           <option value="">Choisir </option>
                                            @foreach ($allCities as $city)
                                            <option value="{{$city->id}}">{{$city->libelle}}</option>
                                            @endforeach
                                         </select>
                                    </div>


                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="adresse"> Adresse du destinataire</label>
                                        <textarea name="" wire:model="adresse" id="adresse" cols="30" rows="1" class="form-control"></textarea>
                                    </div>


                                    <br>
                                    <div class="col-12">
                                            <h5>Renseigner les produits</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-3">
                                                    <label class="form-label" for="phone">
                                                       Désignation
                                                    </label>
                                                    <input type="text" wire:model.live="designation" class="form-control">
                                                </div>


                                                <div class="col-12 col-md-3">
                                                    <label class="form-label" for="courseState">Selectionner le poids </label>
                                                    <select  wire:model="poidscolis"  class="form-select"  wire:change="changeEvent($event.target.value)">
                                                        <option value="">Selectionner le poids du colis  </option>
                                                        @foreach ($alldeleveryprice as $pricedelivery)
                                                            <option value="{{$pricedelivery->id}}">{{$pricedelivery->poids}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-12 col-md-2">
                                                    <label class="form-label" for="phone">
                                                       Prix unitaire (€)
                                                    </label>
                                                    <input type="number" value="{{$pu}}" readonly class="form-control">
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <label class="form-label" for="courseCountry">Ajouter plusieurs Article </label>
                                                        <button class="btn btn-primary" type="button" wire:click="saveProducts()"> <i class="fe fe-plus"></i> Ajouter</button>
                                                </div>
                                                <br><br><br>
                                                <br><br>
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                      <tr>
                                                        <th scope="col">Désignation</th>
                                                        <th scope="col">Poids</th>
                                                        <th scope="col">Prix Unit</th>
                                                        <th>Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        @php $total = 0; @endphp

                                                        @foreach ($listeproducts as $index => $proct)
                                                        @php $total =+ (int)$proct['prix'];@endphp
                                                            <td>{{$proct['designation']}}</td>
                                                            <td>{{$proct['poids']}}</td>
                                                            <td>{{$proct['prix']}}</td>
                                                            <td><button class="btn btn-outline-danger" type="button" wire:click="remove({{$index}})">Retirer</button></td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                  </table>

                                                  <button class="btn btn-outline-dark" wire:click="saveLivraison()">Enregister la livraison </button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    {{-- <div class="card border-0 mb-3">
                        <!-- Card body -->
                        <div class="p-5 text-center">
                            <span class="badge bg-warning">Selected Plan</span>
                            <div class="mb-5 mt-3">
                                <h1 class="fw-bold">Individual</h1>
                                <p class="mb-0">
                                    Access all
                                    <span class="text-dark fw-medium">premium courses, workshops, and mobile apps.</span>
                                    Renewed monthly.
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <span class="h3 mb-0 fw-bold text-primary">$</span>
                                <div class="display-4 fw-bold text-primary">39</div>
                                <span class="align-self-end mb-1">/Monthly</span>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="p-5">
                            <h4 class="fw-bold mb-4">Everything in Starter, plus:</h4>
                            <!-- List -->
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <span class="me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                        </svg>
                                    </span>
                                    <span>Offline viewing</span>
                                </li>
                                <li class="mb-1">
                                    <span class="me-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="fw-bold text-dark">Offline</span>
                                            projects
                                        </span>
                                    </span>
                                </li>
                                <li class="mb-1">
                                    <span class="me-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            <span class="fw-bold text-dark">Unlimited</span>
                                            storage
                                        </span>
                                    </span>
                                </li>
                                <li class="mb-1">
                                    <span class="me-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                            </svg>
                                        </span>
                                        <span>Custom domain support</span>
                                    </span>
                                </li>
                                <li class="mb-1">
                                    <span class="me-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                            </svg>
                                        </span>
                                        <span>Bulk editing</span>
                                    </span>
                                </li>
                                <li class="mb-1">
                                    <span class="me-1">
                                        <span class="me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle text-success" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                            </svg>
                                        </span>
                                        <span>12 / 5 support</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <hr class="m-0">
                        <div class="p-4">
                            <a href="#" class="btn btn-outline-primary">Change the Plan</a>
                        </div>
                    </div> --}}
                    <div class="card border-0 mb-3 mb-lg-0">
                        <div class="card-body">
                            <h3 class="mb-2">Code de reduction de livraison</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Code coupon" aria-describedby="couponCode">
                                    <button class="btn btn-secondary" id="couponCode">Appliquer</button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</div>
