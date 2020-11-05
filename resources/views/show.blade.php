<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BeeFlix</title>
  <link rel="stylesheet" href="../fonts/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/index.html">BeeFlix</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}"><i class="fa fa-arrow-left"></i> KEMBALI
            <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="favorite.html">LIHAT SEMUA FILM</a>
        </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row" >
        <div class="col-sm-4">
            <img src="../images/{{$data['movies']->photo}}" width="400" height="400" class="img-fluid" alt="Responsive image">
        </div> 
        <div class="col-sm-4">
            <h3>{{$data['movies']->title}}</h3>
            <br>
            @for($i=1;$i<=$data['movies']->rating;$i++)
            <i class="fa fa-star fa-2x" style="color:gold" aria-hidden="true"></i>
            @endfor 
            <p style="margin-top:20px">{{$data['movies']->description}}</p>
            <p>Kategori: <a href="{{url('/'.$data['genres'][0]->id.'/category')}}">{{$data['genres'][0]->name}}</a></p>
        </div> 
        <div class="col-sm-4">
            <h3>EPISODE</h3>
            <hr>
            <table class="tbl" border="1">
                <tr>
                    <th>Episode</th>
                    <th>Title</th>
                </tr>
                @foreach($data['episodes'] as $e)
                <tr>
                    <td>{{ $e->title }}</td>
                    <td>{{ $e->episode }}</td>
                </tr>
                @endforeach
            </table>
        
            {{ $data['episodes']->links() }}
        </div>
    </div>
</div>

</body>