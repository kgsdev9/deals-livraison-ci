@extends('master.master')
@section('title', 'Nos Contacts')
@section('master')

<section class="py-8 bg-light">
    <div class="container my-lg-8">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-12">
                <!-- caption-->
                <h1 class="fw-bold mb-1 display-3">Avez vous des questions ?</h1>
                <!-- para -->
                <p class="mb-5 text-dark">Si vous rencontrez des difficultés ou des problèmes techniques, veuillez contacter notre équipe technique VTP pour obtenir de l'aide et plus d'informations. Nous sommes là pour vous assister et résoudre tout problème que vous pourriez rencontrer. Vous pouvez nous joindre par e-mail à [adresse e-mail de l'équipe] ou par téléphone au [numéro de téléphone de l'équipe]. Notre équipe se fera un plaisir de vous aider dans les plus brefs délais.</p>


            </div>
            <div class="col-md-6 col-12">
                <div class="d-flex align-items-center justify-content-end">
                    <!-- img  -->
                    <img src="{{asset('okay.png')}}" alt="girlsetting" class="text-center img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-n8">
    <!-- container  -->
    <div class="container">
        <div class="card rounded-3 shadow-sm">
            <div class="row">

                <div class="col-md-6 col-6 border-end-md">
                    <!-- features  -->
                    <div class="border-bottom border-bottom-md-0 mb-3 mb-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book text-primary">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                            </div>
                            <!-- heading  -->
                            <h3 class="fw-semibold"><a href="help-center-guide.html" class="text-inherit">Nos Contacts</a></h3>
                            <!-- para  -->
                            <p>Contactez-nous via notre email vtp.sas.france@gmail.com </p>
                            <!-- button  -->
                            <a href="mailto:vtp.sas.france@gmail.com" class="link-primary fw-semibold">
                                Ecrire un mail
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-6 border-end-md">
                    <!-- features  -->
                    <div class="border-bottom border-bottom-md-0 mb-3 mb-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book text-primary">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                            </div>
                            <!-- heading  -->
                            <h3 class="fw-semibold"><a href="help-center-guide.html" class="text-inherit">Via WhatsApp </a></h3>
                            <!-- para  -->
                            <p>Lancer la conversion et expliquer nous votre besoin  </p>
                            <!-- button  -->
                            <a href="https://wa.me/+33666379467?text=Je vous contace pour....." class="link-primary fw-semibold">
                                Lancer la conversion
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
