<table class="table table-striped">
        <h1>SHOW POST</h1>
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