@extends('master.master')
@section('title', 'Mon profile')
@section('master')
<section class="container  p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                    <h1 class="mb-0 h2 fw-bold">Mon Profile </h1>
                </div>

            </div>
        </div>
    </div>
    @include('dashboard.statistique')
    @livewire('liste-delivery')

</section>
@endsection
