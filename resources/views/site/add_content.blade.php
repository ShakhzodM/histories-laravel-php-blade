@extends('layouts.site')
@section('title', $title)

@section('header')
	@include('site.header')
@endsection

@section('content')
	@include('site.add_content_page')
@endsection