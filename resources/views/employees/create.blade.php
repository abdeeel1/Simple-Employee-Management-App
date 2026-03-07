@extends('layouts.master')
@section('title', "List Employees")
@section('content')
    
    <header>
        <nav>
            <div class="flex bg-white justify-between px-3 py-2 items-center font-bold rounded text-secondary">
                <p>FORMULAIRE DE CREATION DE FICHE</p>
                <p>SESSION : AD</p>
            </div>
        </nav>
    </header>
    
    
    <div class="mt-5">
        <div class="card">
            <div class="card-header bg-secondary bg-opacity-10">
                <p class="font-bold text-secondary py-2">FORMULAIRE DE CREATION DE FICHE</p>
                <div class="card-body bg-white">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="flex gap-4">
                            <div class="w-full">
                                <label for="" class="form-label font-bold text-secondary">NOM COMPLET</label>
                                <input value="{{old('nom')}}"  type="text" class="form-control @error('nom') is-invalid  @enderror"  name="nom">
                                @error('nom')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="" class="form-label font-bold text-secondary">EMAIL PERSSONNEL</label>
                                <input value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid  @enderror" name="email">
                                @error('email')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="w-full">
                                <label for="" class="form-label font-bold text-secondary">POSTE OCCUPA</label>
                                <input value="{{old('poste')}}" type="text" class="form-control @error('poste') is-invalid  @enderror" name="poste">
                                @error('poste')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4 flex gap-4">
                            <div class="w-full">
                                <label for="" class="form-label font-bold text-secondary">SALAIRE DE BASE (DHS)</label>
                                <input value="{{old('salaire')}}" type="number" class="form-control @error('salaire') is-invalid  @enderror" name="salaire">
                                @error('salaire')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="w-full">
                                <label for="" class="form-label font-bold text-secondary">STATUS CONTRACTUEL</label>
                                <select  name="status" id="" class="form-select @error('status') is-invalid  @enderror">
                                    <option {{ old('status') === 'active' ? 'selected' : '' }} value="active">Active</option>
                                    <option {{ old('status') === 'inactive' ? 'selected' : '' }} value="inactive">inActive</option>
                                </select>
                                @error('status')
                                    <p class="text-danger fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end gap-3">
                            <button class="btn text-secondary btn-secondary btn-warning"><a href="{{route('employees.index')}}" class="text-decoration-none text-secondary">Retour a la liste</a></button>
                            <button type="submit" class="btn btn-dark text-center">Enregistrer l'employe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection