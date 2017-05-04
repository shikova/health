@extends('layouts.app')
@section('content')

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Page Heading
          <small>Secondary Text</small>
        </h1>
      </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    @foreach($posts as $post)
      <div class="row">
        <div class="col-md-7">

          <a href="#">
            <img class="img-responsive" src={{asset('storage/'.$post->image)}} alt="">
          </a>
        </div>

        <div class="col-md-5">
          <h3><{{$post->title}}</h3>
          <h4>Subheading</h4>
          <p style="font-size: 13px;">{{trim(str_limit(strip_tags($post->body,200)))}}</p>
          <a class="btn btn-primary" href="#">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
    @endforeach

  </div>

    <!-- /.row -->

    <hr>

    <hr>

    <!-- Pagination -->
    <div class="row text-center">
      <div class="col-lg-12">

         {{$posts->links()}}

      </div>
    </div>
    <!-- /.row -->

    <hr>

  @endsection
