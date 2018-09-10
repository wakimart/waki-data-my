@extends('layouts.template')
@section('navmenu')
    @if(Gate::check('dashboard'))
    <li class="list-selected">Dashboard</li>
    @endif

    @if(Gate::check('master-data'))
    <li> <a href="{{route('data')}}">Master Data</a></li>
    @endif

    @if(Gate::check('master-data-type'))
    <li> <a href="">Master Data Type</a></li>
    @endif

    @if(Gate::check('master-branch'))
    <li> <a href="">Master Branch</a></li>
    @endif

    @if(Gate::check('master-cso'))
    <li> <a href="">Master CSO</a></li>
    @endif

    @if(Gate::check('master-user'))
    <li> <a href="">Master User</a></li>
    @endif

    @if(Gate::check('report'))
    <li> <a href="">Report</a></li>
    @endif
@endsection
@section('content')
@endsection