@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Etudiant</h1>
@endsection

@section('content')
<div class="addEtudiant">
        <form action="{{ url('admin/etudiants') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prénom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Entrer Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer Password">
            </div>
            <div class="form-group">
              <label for="sel1">Select Classe:</label>
              <select class="form-control" name="classe" id="sel1">
                @foreach($classes as $classe)
                <option value="{{$classe->id}}">{{$classe->libelle}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


