@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content  wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="col-md-12">
      <h2 style="text-align:center">WELCOME TO IT CONTEST 2017</h2><br>
      <p style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
        containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
        including versions of Lorem Ipsum.</p>
    </div>
    <div class="col-md-4 col-md-offset-4" style="margin-top:100px">
        <a href="{{route('tahap1.index')}}" class="btn btn-block btn-primary">I'M READY</a>
    </div>
  </div>
</div>
@endsection
