@extends('wolf.base')
@section('title', 'Welcome, to Doc!')
@section('content')
    <h1 class="component-header">Documentation</h1>

    <div class="list-group">
        <a href="{{ route('doc.navbar') }}" class="list-group-item list-group-item-action">Navbars</a>
        <a href="{{ route('doc.button') }}" class="list-group-item list-group-item-action">Buttons</a>
        <a href="{{ route('doc.typography') }}" class="list-group-item list-group-item-action">Typography</a>
        <a href="{{ route('doc.table') }}" class="list-group-item list-group-item-action">Tables</a>
        <a href="{{ route('doc.form') }}" class="list-group-item list-group-item-action">Forms</a>
        <a href="{{ route('doc.nav') }}" class="list-group-item list-group-item-action">Navs</a>
        <a href="{{ route('doc.indicator') }}" class="list-group-item list-group-item-action">Indicators</a>
        <a href="{{ route('doc.progress') }}" class="list-group-item list-group-item-action">Progress</a>
        <a href="{{ route('doc.container') }}" class="list-group-item list-group-item-action">Containers</a>
        <a href="{{ route('doc.dialog') }}" class="list-group-item list-group-item-action">Dialogs</a>
    </div>
@endsection