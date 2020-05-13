<form action="{{route('update',$post->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>EDITER POST</h1>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">titre :</label> <br>
        <input class="form-control" value="{{$post->titre}}"
        type="text" name="titre" class=" @error('titre') is-invalid @enderror" id="titre" >
        @error('titre')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>
    <div class="form-group text-darka ">
        <label class="h3  " for="img">description :</label> <br>
    <input class="form-control" value="{{$post->texte}}"
        type="text" name="texte" class=" @error('description') is-invalid @enderror" id="texte" >
        @error('description')
            <div  class="alert alert-danger">{{  $message  }}</div>
        @enderror
    </div>

    <div class="text-center">

        <button type="submit" class="btn btn-outline-dark">editer</button>
    </div>
</form>