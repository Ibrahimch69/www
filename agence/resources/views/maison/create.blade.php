@extends('maison.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('maison') }}" method="post">
        {!! csrf_field() !!}
        <label>titre</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>photos</label></br>
        <input type="text" name="photos" id="photos" class="form-control"></br>
        <label>discription</label></br>
        <input type="text" name="discription" id="discription" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="prix" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop