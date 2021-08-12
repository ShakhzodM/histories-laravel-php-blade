@extends('layouts.admin')

@section('title', $title)
@section('header')
	@include('admin.header')
@endsection

@section('content')
	@include('admin.check_histories_page')
@endsection
