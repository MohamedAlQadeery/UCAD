@extends('front-end.page_master_layout')
@section('header')
    @push('css')
        <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
              type="text/css">
        <style>
            .map {
                height: 400px;
                width: 100%;
            }
        </style>
    @endpush
    @component('front-end.header.pageHeader',['page_header'=>'Map'])
        <span class="b-active">@lang('front.map')</span>
    @endcomponent
@endsection

@section('content')
    <h2>My Map</h2>
    <div id="map" class="map"></div>
@endsection
@push('js')
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([37.41, 8.82]),
                zoom: 4
            })
        });
    </script>
@endpush