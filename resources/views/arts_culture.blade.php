@extends('frontend.app')

@section('content')

<div id="pagetop">
  <div class="container">
    <h1> Arts and Culture </h1>
  </div>
  <!-- end .container -->
</div>
<!-- end #pagetop -->
<div id="breadcrumbs">
  <div class="container"><a href="index-2.html">Home</a> &raquo; Arts and Culture </div>
  <!-- end .container -->
</div>
<!-- end #breadcrumbs -->
<div id="content" class="clearfix">
  <div class="container">
    <div id="content-area" class="clearfix">
      <div class="entry page">

<div class="aRzPageContent">
{!! $arts->description !!}
<div class="clear"></div></div>      </div>
      <!-- end .entry -->
    </div>
    <!-- end #content-area -->
  </div>
  <!-- end .container -->
</div>
<!-- end #content -->

@endsection