<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BeeFlix</title>
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
</head>

<body>
  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">BeeFlix</a>
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
          <a class="nav-link" href="{{url('/all')}}">LIHAT SEMUA FILM</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- data-panel -->
  <div class="container mt-5 mb-5">

    <!-- search bar -->
    {{-- <div class="row" id="search-bar">
      <form class="form-inline">
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2" id="search" placeholder="search name ...">
        <button type="submit" class="btn btn-primary mb-2" id="submit-search">Search</button>
      </form>
    </div>

    <!--veiw-->
    <div class="viewbox">
      <div class="view"><i class="fa fa-th hover-color-change" id="btn-cardModel"  aria-hidden="true"></i></div>
      <div class="view" ><i class="fa fa-bars " id="btn-listModel" aria-hidden="true"></i></div>
    </div>

    <div class="clearfix"></div> --}}

    <h1>Drama</h1>
    <div class="row">
        {{-- Drama --}}
        @foreach($data['movies']['drama'] as $d)
        <div class="col-sm-3">
            <div class="card mb-2 size">
                <img class="card-img-top " src="images/{{$d->photo}}" width="400" height="400">
                <div class="card-body movie-item-body ">
                    <h5 class="card-title">{{$d->title}}</h5>
                </div>
                <div class="card-footer">
                    <a href="{{url('/'.$d->id.'/show')}}">LIHAT FILM</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h1>Kids</h1>
    <div class="row">
        {{-- Drama --}}
        @foreach($data['movies']['kids'] as $k)
        <div class="col-sm-3">
            <div class="card mb-2 size">
                <img class="card-img-top " src="images/{{$k->photo}}" width="400" height="400">
                <div class="card-body movie-item-body ">
                    <h5 class="card-title">{{$k->title}}</h5>
                </div>
                <div class="card-footer">
                    <a href="{{url('/'.$k->id.'/show')}}">LIHAT FILM</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h1>TV Show</h1>
    <div class="row">
        {{-- Drama --}}
        @foreach($data['movies']['tvShow'] as $t)
        <div class="col-sm-3">
            <div class="card mb-2 size">
                <img class="card-img-top " src="images/{{$t->photo}}" width="400" height="400">
                <div class="card-body movie-item-body ">
                    <h5 class="card-title">{{$t->title}}</h5>
                </div>
                <div class="card-footer">
                    <a href="{{url('/'.$t->id.'/show')}}">LIHAT FILM</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
  </div>


  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
  {{-- <script src="js/script.js"></script> --}}
</body>

</html>