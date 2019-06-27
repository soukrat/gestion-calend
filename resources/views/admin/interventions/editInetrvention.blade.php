@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Edit Intervention</h1>
@endsection

@section('content')
<div class="editInetrvention">
        <form>
            <div class="form-group">
                <label for="dateDebut">Date Début</label>
                <input type="datetime" class="form-control" id="dateDebut" />
            </div>
            <div class="form-group">
                <label for="dateFin">Date Fin</label>
                <input type="datetime" class="form-control" id="dateFin" />
            </div>
            <button class="btn btn-success btn-block">Edit</button>
        </form>
</div>
@endsection


