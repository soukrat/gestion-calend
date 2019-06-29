@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Interventions</h1>
@endsection

@section('content')

<!-- <script type="text/javascript" src="{{ URL::asset('js/jsCalendare/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
  <script type="text/javascript" src="{{ URL::asset('js/jsCalendare/jqx-all.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jsCalendare/globalize.js') }}"></script> -->


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
  <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jsCalendare/app.js') }}"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/cssCalendare/app.css') }}" type="text/css" />

  <div id="scheduler">
        
  </div>  



@endsection


