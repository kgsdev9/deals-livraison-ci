@extends('master.master')
@section('master')
<section class="container d-flex flex-column vh-50">

    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
      <!-- Docs -->
      <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 text-center text-lg-start">
        <h1 class="display-3 mb-2 fw-bold">Livraison Enregistré avec sucess.</h1>
        <p class="mb-4 fs-4">Livraison ajoutée avec succès, procéder au paiement pour confirmer la commande.</p>

        <hr class="my-4">
        <div>

          <form class="row d-inline-flex justify-content-center justify-content-lg-start needs-validation g-3" method="POST" action="{{route('initialise.payment')}}">
            @csrf
            <div class="mb-3 col-12 col-md-12 mb-4">
                <h5 class="mb-3">Choissisez un moyen de debit </h5>
                <!-- Radio button -->
                <div class="d-inline-flex">

                    <div class="form-check me-2">
                        <input type="radio" id="paymentRadioTwo" name="paymentmethod" class="form-check-input" required="" value="OMCIV2">
                        <label class="form-check-label" for="paymentRadioTwo"><img src="{{asset('paymentmode/orangemoney.png')}}" alt="card" style="height:25px;"></label>
                    </div>

                    <div class="form-check me-2">
                        <input type="radio" id="paymentRadioTwo" name="paymentmethod" class="form-check-input" required="" value="WAVECI">
                        <label class="form-check-label" for="paymentRadioTwo"><img src="{{asset('paymentmode/wave.png')}}" alt="card" style="height:25px;"></label>
                    </div>

                    <div class="form-check me-2">
                        <input type="radio" id="paymentRadioTwo" name="paymentmethod" class="form-check-input" required="" value="MOMOCI">
                        <label class="form-check-label" for="paymentRadioTwo"><img src="{{asset('paymentmode/mtn.svg')}}" alt="card" style="height:25px;"></label>
                    </div>

                    <div class="form-check me-2">
                        <input type="radio" id="paymentRadioTwo" name="paymentmethod" class="form-check-input" required="" value="CARD">
                        <label class="form-check-label" for="paymentRadioTwo"><img src="{{asset('paymentmode/visa.svg')}}" alt="card" style="height:25px;"></label>
                    </div>

                    <!-- Radio button -->
                    <div class="form-check">
                        <input type="radio" id="paymentRadioFour" name="paymentmethod" class="form-check-input" required="" value="PAYPAL">
                        <label class="form-check-label" for="paymentRadioFour"><img src="{{asset('paymentmode/paypal.png')}}" alt="card" style="height:25px;"></label>
                    </div>


                </div>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-outline-warning mb-2">Proceder au paiement</button>
            </div>

        </div>
      </div>
      <!-- img -->
      <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 mt-lg-0">
        <table class="table mb-0 text-nowrap table-borderless">
            <thead class="table-light">
                <tr>
                    <th>Désignation</th>
                    <th>Poids</th>
                    <th>Prix Unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            @php
                $total = 0;
            @endphp
            <tbody>
                @foreach ($lisearticle as $article)
                @php
                    $total +=$article->pu;
                @endphp
                <tr class="text-dark">
                    <td>
                        {{$article->designation}}

                    </td>
                    <td>{{$article->pu}}</td>
                    <td>{{$article->poids}} €</td>
                    <td>{{$article->pu}}</td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>


                <tr class="text-dark">
                    <td colspan="2"></td>
                    <td colspan="1" class="pt-0">Taxe </td>
                    <td class="pt-0">0.5 €</td>
                </tr>
                <tr class="text-dark">
                    <td colspan="2"></td>
                    <td colspan="1" class="border-top py-1 fw-bold">Total</td>
                    <td class="border-top py-1 fw-bold">{{ $total + 0.5}}</td>
                    <input type="hidden" value="{{$total}}" name="amount" id="amount">
                </tr>
            </tfoot>
        </table>


      </div>
    </div>
</form>

  </section>


@endsection
