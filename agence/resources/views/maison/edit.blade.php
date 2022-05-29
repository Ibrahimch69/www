@extends('maison.layout')
@section('content')
 
<div class="card">
  <div class="card-header">les maison Page</div>
  <div class="card-body">
      
      <form action="{{ url('maison/' .$maisons->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$maisons->id}}" id="id" />
        <label>titre</label></br>
        <input type="text" name="titre" id="titre" value="{{$maisons->titre}}" class="form-control"></br>
        <label>photos</label></br>
        <input type="text" name="photos" id="photos" value="{{$maisons->photos}}" class="form-control"></br>
        <label>discription</label></br>
        <input type="text" name="discription" id="discription" value="{{$maisons->discription}}" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="prix" value="{{$maisons->prix}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop