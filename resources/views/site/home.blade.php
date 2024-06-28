@extends('layouts.site')
@section('title', 'Manu Design Criativo | Início')


@section('content')

    <x-site.loading/>
    <x-site.modal-aviso/>
    <x-site.wpp-float/>
    <x-site.navegacao :home="true"/>
    <x-site.banner-home/>
    <x-site.sobre-pag-home/>
    <x-site.meus-servicos/>
    <x-site.projetos/>
    <x-site.contato/>
    <x-site.footer :home="true"/>

@endsection
