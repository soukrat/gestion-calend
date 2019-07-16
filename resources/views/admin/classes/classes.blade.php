@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Classes</h1>
<a href="classes/create" type="button" class="btn btn-primary pull-right">+ New Classe</a>
@endsection

@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom Classe</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($classes as $classe)
      <tr>
        <td>{{$classe->id}}</td>
        <td>{{$classe->libelle}}</td>
        <td>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#up{{$classe->id}}">Edit</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$classe->id}}">Delete</button>
        </td>
      </tr>
      <!-- modal delete -->

                    <div class="modal fade" id="{{$classe->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Deleted</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this classe ?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="{{ url('admin/classes/'.$classe->id) }}" method="post">

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

                <div class="modal fade" id="up{{$classe->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update classe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('admin/classes/'.$classe->id) }}" method="post">

                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" class="form-control" name="libelle" value="{{ $classe->libelle }}" required>
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


