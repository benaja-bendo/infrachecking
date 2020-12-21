@extends('layouts.baseEdit')
@section('title')
    Edit:
@endsection

@section('contenue')
    <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../assets/img/illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../assets/img/illustrations/shape-1.png" alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7">
                                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../assets/img/illustrations/half-circle.png);"></div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block font-weight-bolder" href="/">InfraCkeck</a>
                                        <p class="opacity-75 text-white">Modification des inforamtions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <h3>{{ $entreprise->nom }}</h3>
                                    <form action="{{ route('entreprise.update',['id'=>$entreprise->id]) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label class="form-label" for="card-name">Name</label>
                                            <input class="form-control" type="text" id="card-name" name="nom" value="{{$entreprise->nom}}" /></div>
                                        <div class="mb-3">
                                            <label class="form-label" for="card-name">Téléphone</label>
                                            <input class="form-control" type="text" id="card-phone" name="telephone" value="{{ $entreprise->telephone }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="card-name">Adresse</label>
                                            <input class="form-control" type="text" id="card-adresse" name="adresse" value="{{ $entreprise->adresse }}"/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="card-email">Email</label>
                                            <input class="form-control" type="email" id="card-email" name="email" value="{{ $entreprise->email }}"/>
                                        </div>
                                        <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option>Taille de l'entreprise</option>
                                            <option value="200" selected="">{{ $entreprise->taille }}</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <div class="form-file">
                                            <input class="form-file-input" id="customFile" type="file" name="logo" />
                                            <label class="form-file-label" for="customFile">
                                                <span class="form-file-text">Entre votre logo...</span>
                                                <span class="form-file-button">Browse</span>
                                            </label>
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
