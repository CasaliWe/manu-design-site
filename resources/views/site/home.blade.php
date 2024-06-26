@extends('layouts.site')
@section('title', 'Manu Design Criativo | Início')


@section('content')

    <x-site.navegacao :home="true"/>
    <x-site.banner-home/>
    <x-site.sobre-pag-home/>

@endsection
