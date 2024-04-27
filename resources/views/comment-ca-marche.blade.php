@extends('master.master')
@section('title', 'Nos Contacts')
@section('master')

<main>
    <div class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <!-- caption-->
                    <h1 class="fw-bold mb-1 display-4">Questions fréquemment posées</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="py-8">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="mb-4">
                        <h2 class="mb-0 fw-semibold">Les plus demandés</h2>
                    </div>
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="border p-3 rounded-3 mb-2" id="headingOne">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="me-auto">Quels sont les délais de livraison standard avec VTP ?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="pt-2">
                                    VTP s'efforce de livrer vos commandes dans les délais les plus courts possibles. Les délais de livraison peuvent varier en fonction de votre emplacement et du produit commandé. Veuillez consulter notre site web ou contacter notre service clientèle pour des estimations précises.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="me-auto">Puis-je suivre ma commande en ligne avec VTP ??</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="pt-3">
                                    Oui, dès que votre commande est expédiée, vous recevrez un numéro de suivi par e-mail ou par SMS. Vous pourrez ainsi suivre l'avancement de votre livraison en temps réel sur notre site web ou en utilisant l'application VTP.
                                    <br>

                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingThree">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="me-auto">Que dois-je faire si je ne suis pas disponible pour recevoir ma livraison ??</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="pt-3">
                                    Si vous n'êtes pas disponible lors de la livraison, le transporteur laissera généralement un avis de passage avec des instructions sur la manière de récupérer votre colis ou de reprogrammer la livraison. Assurez-vous de suivre ces instructions pour éviter tout retard.
                                </div>
                            </div>
                        </div>
                        <!-- Card  -->
                        <!-- Card header  -->
                        <div class="border p-3 rounded-3 mb-2" id="headingFour">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="me-auto">Que faire si ma livraison est en retard ou si j'ai des problèmes avec ma commande ?</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="pt-3">
                                    Si vous rencontrez des retards ou des problèmes avec votre livraison, veuillez contacter notre service clientèle dès que possible. Nous ferons tout notre possible pour résoudre le problème et vous assurer une expérience de livraison satisfaisante.
                                </div>
                            </div>
                        </div>
                        <div class="border p-3 rounded-3 mb-2" id="headingFive">
                            <h3 class="mb-0 fs-4">
                                <a href="#" class="d-flex align-items-center text-inherit active" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="me-auto">Proposez-vous la livraison internationale avec VTP ??</span>
                                    <span class="collapse-toggle ms-4">
                                        <i class="fe fe-chevron-down"></i>
                                    </span>
                                </a>
                            </h3>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="pt-3">
                                    Oui, nous proposons la livraison internationale dans de nombreux pays. Les délais et les frais de livraison peuvent varier en fonction de la destination. Veuillez consulter notre site web ou contacter notre service clientèle pour plus d'informations sur la livraison internationale.
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
           
        </div>
    </section>
</main>

@endsection
