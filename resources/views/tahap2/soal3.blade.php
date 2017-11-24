@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 3</h2>
      <div class="soal">
        <p style="text-align:justify">
          Yang terdiri dari sekumpulan record-record yang saling berhubungan merupakan istilah dari...</p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap2.store3')}}" method="post">
            {!! csrf_field() !!}
            <div class="col-md-4">
              <label>Your Score : </label><br>
              <input type="text" name="score" value="{{$score->score}}" disabled><br>
              <label style="margin-top:20px">Point yang di Pertaruhkan : </label><br>
              <input type="text" name="point" value="">
            </div>
          <div class="col-md-8">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	File<br><br>
            <input type="radio" name="answer" value="b"> B.	Folder
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap2.soal4')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 4 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
