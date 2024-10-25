@extends('admin.fixe')
@section('titre', 'Configurations')

@section('body')
    <!--start main content-->
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{ $infos->app_name }}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Configurations
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
            </div>
        </div>
        <!--end breadcrumb-->

        <form action="{{ route('configurations.update',$infos->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Nom du site web</h6>
                                        <input type="text" class="form-control" required placeholder="Nom du projet"
                                            value="{{ $infos->app_name }}" name="app_name" />
                                        @error('app_name')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Email 1</h6>
                                        <input type="email" class="form-control" value="{{ $infos->email1 }}"
                                            name="email1" />
                                        @error('email1')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Email 2</h6>
                                        <input type="email" class="form-control" value="{{ $infos->email2 }}"
                                            name="email2" />
                                        @error('email2')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Téléphone 1</h6>
                                        <input type="tel" class="form-control" value="{{ $infos->tel1 }}"
                                            name="tel1" />
                                        @error('tel1')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Téléphone 2</h6>
                                        <input type="tel" class="form-control" value="{{ $infos->tel2 }}"
                                            name="tel2" />
                                        @error('tel2')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Adresse 1</h6>
                                        <input type="text" class="form-control" value="{{ $infos->adresse1 }}"
                                            name="adresse1" />
                                        @error('adresse1')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Adresse 2</h6>
                                        <input type="text" class="form-control" value="{{ $infos->adresse2 }}"
                                            name="adresse2" />
                                        @error('adresse2')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Texte dans le footer du site</h6>
                                        <textarea name="text_footer" id="text_footer" class="form-control"  rows="5">{{ $infos->text_footer }}</textarea>
                                        @error('text_footer')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-4">
                                        <h6 class="mb-1">Adresse url de la carte map</h6>
                                        <textarea name="map" id="map" class="form-control"  rows="2">{{ $infos->map }}</textarea>
                                        @error('map')
                                            <span class="small text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-sm btn-danger px-4">
                                    annuller
                                </button>
                                <button type="submit" class="btn btn-dark px-4">
                                    Mettre a jour
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <label for="Tags" class="form-label fw-bold">Logo du site</label>
                                <input type="file" class="form-control" name="logo" />
                                @error('logo')
                                    <span class="small text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mt-3">
                                <img src="{{ $infos->GetLogo() }}" alt="{{ $infos->app_name }}" height="40" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <label for="Tags" class="form-label fw-bold">Icon du site</label>
                                <input type="file" class="form-control" name="icon" />
                                @error('icon')
                                    <span class="small text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center mt-3">
                                <img src="{{ $infos->GetIcon() }}" alt="{{ $infos->app_name }}" height="40" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end row-->
    </main>
    <!--end main content-->


@endsection
