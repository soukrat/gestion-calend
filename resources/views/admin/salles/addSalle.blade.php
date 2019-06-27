@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Salle</h1>
@endsection

@section('content')
<div class="addSalle">
        <form action="{{ url('admin/salles') }}" method="post">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="nomSalle">Nom Salle</label>
                <input type="text" class="form-control" id="nomSalle" type="submit" name="libelle" placeholder="Salle">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


