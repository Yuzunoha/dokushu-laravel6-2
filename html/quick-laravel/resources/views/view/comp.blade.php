@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    @component('components.alert', ['type' => 'success'])
        @slot('alert_title')
            はじめてのコンポーネント
        @endslot
        コンポーネントは普通のビューと同じように.blade.phpファイルに定義できます！
    @endcomponent
@endsection
