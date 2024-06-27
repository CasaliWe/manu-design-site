@extends('layouts.site')
@section('title', 'Manu Design Criativo | Sobre')


@section('content') 

    <x-site.wpp-float/>
    <x-site.navegacao :sobre="true"/>
    <x-site.banner-sobre/>
    <x-site.content-sobre/>
    <x-site.meus-servicos/>
    <x-site.projetos/>
    <x-site.contato/>
    <x-site.footer :sobre="true"/>

@endsection 