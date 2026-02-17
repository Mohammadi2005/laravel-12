@extends('layout.main')

@push('script')
    @vite('resources/js/global.js')
@endpush
@section('content')
    <h1>show post {{$postId}}</h1>
@endsection
