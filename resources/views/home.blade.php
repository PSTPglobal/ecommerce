@extends('layouts.app')
<style>
    /*.ad {
        text-decoration: none !important;
        color: #000;
    }
    #navegacion{ padding:10px; font-size:12px;font-variant:small-caps;}

    #navegacion>a:link, #navegacion>a:visited  {text-decoration:none; color: #0e0707; }
    #navegacion>a:hover, #navegacion>a:active {text-decoration:underline; color:#9F4542; }*/
</style>
<link href="{{asset('/assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
@section('breadcrumb')
    <div class="row" style="padding-top: 20px; padding-left: 7px">
        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="navegacion">
            <!-- TemplateBeginEditable name="navegacion" -->
            <a href="#">Catálogo</a> <span id="mayorQ">&gt;</span> <strong>Temas para Desarrollo</strong>
            <!-- TemplateEndEditable -->
        </div>
    </div>
    <hr>
@endsection
@section('content')
    <div class="container">

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-7 rounded mx-auto d-block" >
                            <img src="{{ asset('/img/c.png')}}"  class="d-block w-100" alt="..." style="padding-bottom: 20px">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black">First slide label</h5>
                            <p style="color: black">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-7 rounded mx-auto d-block" >
                            <img src="{{ asset('/images/Brother-2.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black">Second slide label</h5>
                            <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/iPad2.png')}}"  style="height: 50%; width: 50%" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black">Third slide label</h5>
                            <p style="color: black">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">e-commerce</h1>
                    <div class="list-group">
                        @foreach($cat as $cate)
                            <a href="#" class="list-group-item ad">{{$cate->category}}</a>
                        @endforeach
                    </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                @foreach($pro as $product)
                    <div class="card mt-4">
                        <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
                        <div class="card-body">
                            <div class=" ">
                                <h3 class="card-title">{{ $product->name }}</h3>

                                <button class="btn btn-primary btn-sm float-right">
                                    <a href=" " class="">Add ToCart<i class="fa fa-shopping-cart"></i></a>
                                </button>
                            </div>
                            <h4>${{ $product->price }}</h4>
                            <p class="card-text">{{ $product->description }}</p>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                            4.0 stars
                        </div>
                        <div class="container">
                            <div class="card card-outline-secondary my-4">
                                <div class="card-header">
                                    Product Reviews
                                </div>
                                <div class="card-body">
                                    @foreach($opinion as $op)
                                        <p>{{ $op->opinion }}</p>
                                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                                        <hr>
                                    @endforeach
                                    <section id="allProduct">
                                        <div class="form-group">
                                            <input name="idpro" id="idpro" type="text" value="{{ $product->idProduct }}" hidden>
                                            <textarea name="opinion" id="opinion" cols="70" rows="5" class="form-control m-3"></textarea>
                                        </div>
                                    </section>
                                    <button id="asdf" name="asdf" class="btn btn-outline-success">Leave a Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /.card -->


                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>


    <!--<link href="{{asset('dist/js/slick.js')}}">
        <br>
        <br>
        <br>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src=" " alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src=" " alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src=" " alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="color: black">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black"></span>
                <span class="sr-only" style="color: black">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>






        <section>
            <div class="album text-muted">
                <div class="container">

                    <div class="row">

                            <div class="card" style="width:30rem height: 20rem">
                                <img src=" " class="card-img-top">

                                <div class="card-body">
                                    <div class="pricetext">
                                        <del> </del>
                                        <span class="price text-muted float-right"> </span>
                                    </div>
                                    <button class="btn btn-primary btn-sm">
                                        <a href=" " class="">View Product</a>
                                    </button>

                                </div>
                            </div>


                    </div>

                </div>
            </div>
        </section>-->

    </div>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        $(document).ready(function () {
            var BtnComment = $('#asdf');
            BtnComment.on('click', function () {
                var route = "{{ route("addComment") }}";
                $.ajax({
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#allProduct').serialize(),
                    type: 'POST',
                    dataType: 'json',
                    success: function (data) {
                        swal({
                            title: "Add comment correctly!",
                            text: "your comment has been added",
                            icon: "success"
                        });

                        console.log(data + 'que pedooooooooooooo');
                    },
                    error: function (data) {
                        swal("¡Error!", "Something was wrong!!!", "error");
                        console.log(data + 'errrrooooooooooooooooooor');
                    }
                });
            });
        });
    </script>
@endsection

