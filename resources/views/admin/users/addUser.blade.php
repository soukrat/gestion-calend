@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add User</h1>
@endsection

@section('content')
<div class="addUser">
        <form action="{{ url('admin/users') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Entrer Nom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Entrer Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Entrer Password">
            </div>
            <div class="form-group">
                <label for="typeUser">Type User</label>
                <input type="text" class="form-control" name="typeUser" placeholder="Entrer Type">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


