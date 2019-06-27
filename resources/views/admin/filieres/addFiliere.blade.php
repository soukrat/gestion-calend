@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Filiére</h1>
@endsection

@section('content')
<div class="addFiliere">
        <form action="{{ url('admin/filieres') }}" method="post">
        	{{ csrf_field() }}
            <div class="form-group">
                <label for="nomFiliere">Nom Filiére</label>
                <input type="text" class="form-control" id="nomFiliere" name="libelle" placeholder="Filiére">
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


