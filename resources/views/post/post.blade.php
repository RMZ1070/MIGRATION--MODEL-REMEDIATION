@extends('layouts/master')
@section('content')
<form action="{{route('postsave')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group text-darka ">
        <label class="h3  " for="img">titre :</label> <br>
        <input class="form-control" value=""
        type="text" name="titre" class=" @error('titre') is-invalid @enderror" id="titre" >
        @error('titre')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">description :</label> <br>
        <input class="form-control" value=""
        type="text" name="texte" class=" @error('description') is-invalid @enderror" id="texte" >
        @error('description')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>

    <div class="text-center">

        <button type="submit" class="btn btn-outline-dark">Ajouter</button>
    </div>
    <table class="table table-striped">
        
        <thead>
        <tr>
            <th scope="col" class="text-center">titre</th>
            <th scope="col" class="text-center">texte</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $item)
        <tr>
        <td class="text-center"  colspan="">{{$item->titre}}</td>
        <td class="text-center"  colspan="">{{$item->texte}}</td>
           
        </tr>
        @endforeach
       
        <tbody>
            
    </table>
</form>
</div>
@endsection