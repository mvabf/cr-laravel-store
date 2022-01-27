@extends('layouts.app')

@section('content')
    <product-component v-bind:products="{{ json_encode($products) }}"></product-component>
@endsection

