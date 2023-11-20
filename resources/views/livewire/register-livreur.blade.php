<div>
    <main>
        <section class="container d-flex flex-column vh-30">
            <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                        <!-- Card body -->
                        <div class="card-body p-6">

                            <div class="mb-4">
                                <h1 class="mb-1 fw-bold">Inscription livreur</h1>
                            </div>
                            <!-- Form -->
                            <form wire:submit.prevent="save">

                             @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                                <div class="row">
                                    <div class="col-md-6">
                                        <label  class="form-label">Nom</label>
                                        <input type="text" class="form-control" wire:model="nom" placeholder="Entrer votre nom" >
                                    </div>
                                    <div class="col-md-6">
                                        <label  class="form-label">Prénom</label>
                                        <input type="text"  class="form-control" wire:model="prenom" placeholder="Entrer votre prenom" >
                                    </div>

                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Télephone</label>
                                        <input type="text"  class="form-control" wire:model="telephone" placeholder="Entrer votre nom" >
                                    </div>

                                    <div class="col-md-6">
                                        <label  class="form-label">Whattsapp</label>
                                        <input type="text"  class="form-control" wire:model="whatsapp" placeholder="Entrer votre prenom" >
                                    </div>

                                </div>

                                <!-- Username -->
                                <div class="mb-3 mt-4">
                                    <label  class="form-label">Photo de profil (elle apparaitra sur votre profil) </label>
                                    <input type="file"  class="form-control" wire:model="photo">

                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Adresse</label>
                                    <input type="text"  class="form-control" wire:model="adresse" placeholder="Carrefour cocody" >

                                </div>
                                <div>

                                    <div class="col-12">
                                        <label for="">Selectionner les communes que vous decerver</label>
                                        <br><br>
                                        @foreach ($allCommunes as $commune)
                                        <input type="checkbox" wire:model="commune" value="{{$commune->id}}"> {{$commune->nom}}
                                        @endforeach

                                    </div>
                                    <!-- Button -->
                                    <div class="d-grid mt-2">
                                        <button type="submit" class="btn btn-warning">Inscription</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('ottPlatform', data);
        });
    });
</script>
@endpush
