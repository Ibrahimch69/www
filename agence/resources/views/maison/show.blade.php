@extends('maison.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $maisons->titre }}</h5>
        <h5 class="card-title">Photo : {{ $maisons->photo }}</h5>
        <h5 class="card-title">Discription : {{ $maisons->discription }}</h5>
        <h5 class="card-title">Prix : {{ $maisons->prix }}</h5>
  
  </div>
      
    </hr>
  
  </div>
</div>