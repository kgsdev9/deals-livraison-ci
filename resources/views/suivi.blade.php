@extends('master.master')
@section('title', 'Statut de la livraison')
@section('master')
<div class="container mt-4">
    @if(!is_null($livraison) && !empty($livraison))
    <div class="row">
        <div class="col-xl-8 col-lg-7 col-12">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-1">Code de livraison : {{$livraison->code_livraison}}</h4>
                            <span>
                               Date de livraison  {{$livraison->created_at}}

                            </span>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @php
                        $total = 0;
                    @endphp
                    <table class="table mb-0 text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Désignation</th>
                                <th>Poids</th>
                                <th>Quantite</th>
                                <th>Prix unitaire</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listearticlelivraison as $article)
                            @php
                                $total += $article->pu * $article->quantite;
                            @endphp
                            <tr>
                                <td>
                                    <a href="#" class="text-inherit">
                                        <div class="d-lg-flex">
                                            <div class="ms-lg-4 mt-2 mt-lg-0">
                                                <h5 class="mb-0">{{$article->designation}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td>{{$article->poids}}</td>
                                <td>{{$article->quantite}}</td>
                                <td>{{$article->pu}} € </td>
                                <td>{{$article->pu * $article->quantite }} € </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td colspan="1" class="fw-semibold text-dark">
                                    Total
                                </td>
                                <td class="fw-semibold text-dark text-end">
                                  {{$total + 0.5}} €
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @if($livraison->paymentstatus == "effectue")
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center mb-5">
                        <div>
                            <h4 class="mb-3 mb-md-0">Evolution de(s) de la livraison  </h4>
                        </div>
                        <div>
                            <a href="#" class="btn btn-light-success btn-sm text-white">Paiement effctué avec succes</a>
                        </div>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush list-timeline-activity">
                            <li class="list-group-item px-0 pt-0 border-0 mb-4">
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-auto">
                                        <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                            <i class="fe fe-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col ms-n2 mt-1">
                                        <h4 class="mb-3">Date de la transaction </h4>
                                        <h5 class="mb-0">Code de suivi {{$livraison->code_livraison}} .</h5>
                                        <span class="fs-6">{{$livraison->created_at}}</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 pt-0 border-0">
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-auto">
                                        <div class="icon-shape icon-md rounded-circle bg-light-primary text-primary position-relative z-1">
                                            <i class="fe fe-gift"></i>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col ms-n2 mt-1">
                                        <h4 class="mb-3">Statut de la livraison </h4>
                                        <h5 class="mb-0">Votre livraison est en {{$livraison->status}} </h5>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <br>
            <span>Cette Action entrainera la suppression de la livraison </span>
            <a href="{{route('delivery.destroy', $livraison->id)}}" class="btn btn-outline-danger btn-sm">Annuler complementement  </a> &nbsp;
            @endif
            @if($livraison->paymentstatus == "encours")
                <button type="submit" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Proceder au réglement </button>
            @else
            <br>
            <a href="#" class="btn btn-primary btn-sm">Paiement effectuté avec succes</a>
            @endif
        </div>
        <div class="col-xl-4 col-lg-5 col-12">
            <div class="card mb-4 mt-4 mt-lg-0">
                <div class="card-body border-top">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Information sur le Destinataire</h4>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fe fe-user"></i>
                            <span class="ms-2"> {{$livraison->nom}} {{$livraison->prenom}} </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fe fe-phone fs-4"></i>
                            <span class="ms-2">{{$livraison->telephone}}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">Point de destination</h4>
                    </div>
                    <div>
                        <p class="mb-0">
                           Ville {{$livraison->city->libelle}}
                            <br>
                            Pays  {{$livraison->country->libelle}}
                            <br>
                           Adresse
                            <br>
                            {{$livraison->adresse}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-12">
        <div class="card">
          <div class="card-body p-10">
            <div class="mb-4 ">
              <h2 class="text-center">🎉  Aucune référence correspondant à ce numéro de commande!</h2>
              <p class="mb-0 px-lg-14">Nous regrettons de vous informer que nous n'avons pas pu trouver de référence correspondant au numéro de commande que vous avez fourni. Veuillez vérifier votre numéro de livraison et assurez-vous qu'il est correctement saisi. Si vous pensez qu'il s'agit d'une erreur, veuillez contacter notre équipe commerciale pour obtenir de l'aide.

                Vous pouvez également lancer une inférence via WhatsApp en expliquant votre problème. Veuillez fournir autant de détails que possible pour que nous puissions vous aider efficacement. </p>
                <br>
                <p>Merci pour votre compréhension et votre patience.</p>

                <p>Cordialement,</p>
                <p>VTP GROUP</p>
            </div>
            <div class="mt-6">
              <a href="https://wa.me/+33666379467?text=Je vous contace pour....." class="btn btn-outline-success" target="_blank">Lancer une infogérence</a>
            </div>
          </div>
        </div>
      </div>
    @endif
     @include('form.formpaymentmethode')
</div>

@endsection
