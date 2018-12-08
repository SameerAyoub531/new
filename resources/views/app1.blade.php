<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">

    </head>
    <body>
        <div id="main">
           @include("includes/navbar")
           @include("includes/errors")
           <div class="row search-field">
                <div class="col-md-3">
                  <img src="{{asset('logo1.png')}}" alt="">
                    <button id="def-btn" type="button" name="button">DEFINITIONS</button>
                </div>
                <div class="col-md-9">
                  <form id="form" action="{{route('search')}}" method="POST" role="search">
                    <div class="input-group">
                      {{ csrf_field() }}
                         <input size="15" type="text" class="form-control" name="search" placeholder="Search definitions">
                         <div class="input-group-append">
                              <button class="btn btn-secondary" type="submit">
                                     <i class="fa fa-search"></i>
                              </button>
                        </div>
                   </div>
                  </form>
                </div>
           </div>
           <br/>
           <hr/>
           <div class="row">
             <div class="col-md-8">
                @if(isset($details))
                    @foreach($details as $data)
                         <p style="padding-left:5px;"><h3>{{$data->word}}</h3></p>
                         <p>
                            @if($data->wordtype === "n.")
                                Noun
                            @elseif($data->wordtype === "a.")
                                Adjective
                            @elseif($data->wordtype === "prep.")
                              Preposition
                            @elseif($data->wordtype === "v.t.")
                                Verb
                            @elseif($data->wordtype === "adv.")
                                  Adverb
                            @else
                               {{$data->wordtype}}
                           @endif
                         </p>
                         <ul>
                            <li>{{$data->definition}}</li>
                         </ul>
                     @endforeach
                @else
                   {{$message}}
               @endif
               <hr/>
             </div>
           </div>
           <div class="row">
             <div class="col-md-8">
               <div class="jumbotron">
                    <h6 class="display-6"><font size="8">Words near {{$query}} in the Dictionary</font></h6>
                    <ul>
                      @if(isset($related))
                             @foreach($related as $related)
                                   <li><a href="#">{{$related->word}}</a></li>
                              @endforeach
                      @else
                                 {{$message}}
                      @endif
                    </ul>
              </div>
             </div>
           </div>

           @include("includes/footer")
        </div>


        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
<script>
