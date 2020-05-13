@extends('layouts/master')
@section('content')
<table class="table table-striped">
        <h1>SHOW POST</h1>
    <thead>
    <tr>
        <th scope="col" class="text-center">titre</th>
        <th scope="col" class="text-center">texte</th>
    </tr>
</thead>
<tbody>
    <tr>
    <td class="text-center"  colspan="">{{$post->titre}}</td>
    <td class="text-center"  colspan="">{{$post->texte}}</td>
       
    </tr>
    <tbody>
        
</table>