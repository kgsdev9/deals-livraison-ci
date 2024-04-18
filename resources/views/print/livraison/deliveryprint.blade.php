<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FACTURE DE LIVRAISON </title>
</head>
<body>

<section class="container d-flex flex-column vh-50">

    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
      <!-- Docs -->
      <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 text-center text-lg-start">
        <h1 class="display-3 mb-2 fw-bold">Facture de Livraison .</h1>


        <hr class="my-4">
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
                    <td>{{$article->poids}}</td>
                    <td>{{$article->pu}} €</td>
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

                </tr>
            </tfoot>
        </table>

        <div class="container mt-4">
            <div class="row">
                @foreach ($listeimagedelivery as $vliste)
              <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{public_path('cloudinary/'.$vliste->image)}}" alt="Card image cap">

                  </div>
              </div>
              @endforeach
            </div>
          </div>

      </div>
    </div>
</form>

  </section>



</body>
</html>
