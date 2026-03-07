@extends('layouts.master')
@section('title', "List Employees")
@section('content')
    
    <header>
        <nav>
            <div class="flex bg-white justify-between font-bold px-3 py-2 items-center rounded text-secondary">
                <p>REPERTOIRE DES EMPLOYES</p>
                <p>SESSION : ADMIN OFPPT</p>
            </div>
        </nav>
    </header>
    
    <div class="mt-5">

        @session('success')
            <p class="alert alert-success">{{ session('success') }}</p>
        @endsession
        <form action="{{ route('employees.index') }}" method="GET">
                <div class="bg-white flex gap-4 p-4">
                <div class="flex flex-col  gap-2 mb-4 w-full">
                    <label for="" class="form-label font-bold text-secondary">RECHERCHE</label>
                    <input value="{{request('nom')}}" name="nom" type="text" class="form-control" placeholder="filter par nom...">
                </div>
                <div class="flex flex-col gap-2 mb-4 w-full">
                    <label for="" class="form-label font-bold text-secondary">FILTRER PAR ETAT</label>
                    <select  name="status" id="" class="form-select">
                        <option  value="">Tous les Employes</option>
                        <option {{request('status') === "active" ? "selected" : "" }} value="active">Active</option>
                        <option {{request('status') === "inactive" ? "selected" : "" }}  value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="flex items-center mt-3">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </div>
            </div>
        </form>
            
        
        
        
        
        <div class="mt-5">
            <table class="table rounded table-light table-hover table-borderless">
                <thead class="">
                    <tr class="">
                        <th class="text-secondary bg-secondary bg-opacity-10">IDENTITE</th>
                        <th class="text-secondary bg-secondary bg-opacity-10">POSTE</th>
                        <th class="text-secondary bg-secondary bg-opacity-10">SALAIRE</th>
                        <th class="text-secondary bg-secondary bg-opacity-10">STATUS</th>
                        <th class="text-secondary bg-secondary bg-opacity-10">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($employees) > 0)
                        @foreach ($employees as $employe)
                        <tr class="fw-bold">
                            <td class="">
                                <p class="font-bold">{{ $employe->nom }}</p>
                                <pre class="text-gray-400">{{ $employe->email }}</pre>
                            </td>
                            <td>{{ $employe->poste }}</td>
                            <td>{{ $employe->salaire }}</td>
                            <td><p class="{{ $employe->status === "active" ? "text-success bg-success bg-opacity-10 rounded text-center py-1 w-20" : "text-gray bg-secondary bg-opacity-10 rounded text-center py-1 w-20" }}">{{ $employe->status }}</p></td>
                            <td>
                                <div class="flex gap-4">
                                    <form action="{{ route('employees.update', ['employee' => $employe]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#999999"><path d="M482-160q-134 0-228-93t-94-227v-7l-64 64-56-56 160-160 160 160-56 56-64-64v7q0 100 70.5 170T482-240q26 0 51-6t49-18l60 60q-38 22-78 33t-82 11Zm278-161L600-481l56-56 64 64v-7q0-100-70.5-170T478-720q-26 0-51 6t-49 18l-60-60q38-22 78-33t82-11q134 0 228 93t94 227v7l64-64 56 56-160 160Z"/></svg></button>
                                    </form>
                                    <form action="{{ route('employees.destroy', ['employee' => $employe] )}}" method="POST" class="flex items-center">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure !')" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#999999"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <div class="flex flex-col shadow mx-50 p-4 justify-center items-center">
                                    <p class="font-bold">No employees found.</p>
                                    <button class="btn btn-sm btn-primary"><a href="{{ route('employees.index') }}" class="text-decoration-none text-white font-bold">Reset Filter</a></button>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>

            {{$employees->links()}}
        </div>
    </div>

@endsection