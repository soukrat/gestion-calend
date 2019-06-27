@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Etudiants</h1>
<a href="etudiants/create" type="button" class="btn btn-primary pull-right">+ New Etudiant</a>
@endsection

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($etudiants as $etudiant)
      <tr>
        <th scope="row">{{$etudiant->id}}</th>
        <td>{{$etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->email}}</td>
        <td>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#up{{$etudiant->id}}">Edit</button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$etudiant->id}}">Delete</button>
        </td>
      </tr>
      <!-- modal delete -->

                    <div class="modal fade" id="{{$etudiant->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Deleted</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this etudiant ?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="{{ url('admin/etudiants/'.$etudiant->id) }}" method="post">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
      
       <!--model update -->

                <div class="modal fade" id="up{{$etudiant->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update etudiant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('admin/etudiants/'.$etudiant->id) }}" method="post">

                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" class="form-control" name="nom" value="{{ $etudiant->nom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Prenom</label>
                                        <input type="text" class="form-control" name="prenom" value="{{ $etudiant->prenom }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $etudiant->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control" name="password" value="" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
      @endforeach
    </tbody>
  </table>



@endsection


