<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
    <form method="POST" action="{{route('initialise.payment')}}">
        @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Choissisez votre moyen de paiement </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if($livraison>0)
            <div class="mb-3 col-12 col-md-12 mb-4">
                <h5 class="mb-3">Choissisez un moyen de debit </h5>

                <div class="d-inline-flex">

                    <input type="hidden" value="{{$total+0.5}}" name="amount" id="amount">
                    <input type="hidden" value="{{$livraison?->nom}}" name="nom" id="nom">
                    <input type="hidden" value="{{$livraison->prenom}}" name="prenom" id="prenom">
                    <input type="hidden" value="{{$livraison->telephone}}" name="telephone" id="telephone">
                    <input type="hidden" value="{{$livraison->code_livraison}}" name="code" id="code">

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
            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Proceder au paiement </button>
        </div>
    </form>
      </div>
    </div>
  </div>
