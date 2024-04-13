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
                                <th>Prix unitaire</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listearticlelivraison as $article)
                            @php
                                $total += $article->pu;
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
                                <td>{{$article->pu}} € </td>
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
            @if($livraison->status == "validee")
            <div class="card mt-4">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center mb-5">
                        <div>
                            <!-- text -->
                            <h4 class="mb-3 mb-md-0">Evolution de(s) colis </h4>
                        </div>
                        <div>
                            <!-- button -->
                            <a href="#" class="btn btn-light-primary btn-sm text-primary">Change Address</a>
                            <a href="#" class="btn btn-light-danger btn-sm text-danger ms-2">Cancel Order</a>
                        </div>
                    </div>
                    <div>
                        <!-- List group -->
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
                                        <h4 class="mb-3">Order Placed</h4>
                                        <h5 class="mb-0">An order has been placed.</h5>
                                        <span class="fs-6">Wed, 15 April 2022 at 4:30 pm</span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 pt-0 border-0 mb-4">
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-auto">
                                        <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                            <i class="fe fe-shopping-bag"></i>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col ms-n2 mt-1">
                                        <h4 class="mb-3">Packed Thu, 16 April 2022</h4>
                                        <h5 class="mb-0">Your Item has been picked up by courier patner</h5>
                                        <span class="fs-6">Wed, 15 April 2022 at 4:30 pm</span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 pt-0 border-0 mb-4">
                                <div class="row">
                                    <!-- col -->
                                    <div class="col-auto">
                                        <div class="icon-shape icon-md rounded-circle bg-primary text-white position-relative z-1">
                                            <i class="fe fe-box"></i>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col ms-n2 mt-1">
                                        <h4 class="mb-3">Shipping Thu, 16 April 2022</h4>
                                        <h5 class="mb-1">BlueDart Logistics GEEK3214566</h5>
                                        <h5 class="mb-1">Your item has been shipped.</h5>
                                        <span class="fs-6">Thu, 16 April 2022 at 5:00 pm</span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
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
                                        <h4 class="mb-0">Delivered</h4>
                                        <h5 class="mb-1">Order has been successfully delivered</h5>
                                        <span class="fs-6">Thu, 17 April 2022 at 9:50am</span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
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
            <form class="row d-inline-flex justify-content-center justify-content-lg-start needs-validation g-3" method="POST" action="{{route('initialise.payment')}}">
                @csrf
                <input type="hidden" value="{{$total+0.5}}" name="amount" id="amount">
                <input type="hidden" value="{{$livraison->nom}}" name="nom" id="nom">
                <input type="hidden" value="{{$livraison->prenom}}" name="prenom" id="prenom">
                <input type="hidden" value="{{$livraison->telephone}}" name="telephone" id="telephone">
                <input type="hidden" value="{{$livraison->code_livraison}}" name="code" id="code">
                <button type="submit" class="btn btn-outline-success btn-sm">Proceder au réglement </button>
            </form>
            @else
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
              <a href="#" class="btn btn-outline-success">Lancer une infogérence</a>
            </div>
          </div>
        </div>
      </div>
    @endif
</div>

@endsection
