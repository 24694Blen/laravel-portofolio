@extends('layouts.master')

@section('content')

{{-- @include('bloks') --}}
@include('project.sections.bloks')
@include('project.sections.aboutme')
@include('project.sections.projects')
@include('project.sections.collaborated')
@include('project.sections.startup')
@include('project.sections.investing')
@include('project.sections.testimonials')
@include('project.sections.banner')


@endsection