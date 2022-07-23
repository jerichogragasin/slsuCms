<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .raw-image {
            max-width: 200px;
            max-height: 100px;
            height: auto;
            width: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @php 
        $systemsObjects = $data['systems'];
        $implementationsObjects = $data['implementations'];
        $outputsObjects = $data['outputs'];
    @endphp
    <x-main-navbar />
    <main class="container">
        <h1 class="text-center">Area {{$areaNumber}} - {{$areaTitle}}</h1>
        <h3 class="text-center">A. Statement of Vison, Mission, Goals, Objectives</h3>
        <div class="contents border border-gray-500 p-5">
            <div class="subclass-division mb-4">
                <h3 class="text-center">System - Inputs and Processes</h3>
                <div class="mini-container ">
                    @if(count($systemsObjects) != 0)
                        @foreach ($systemsObjects as $object)
                            <div class="contents border border-round p-4">
                                <p class="fs-5">Title: {{$object->title}}</p>
                                <p class="fs-5">Description: {{$object->description}}</p>
                                <div class="pulled-images d-flex flex-wrap gap-2 mb-3">
                                    @php
                                        $files = unserialize($object->files);
                                    @endphp
                                    @foreach ($files as $file)
                                        <div class="raw-image-container">
                                            <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt="" title="" />
                                            <a>  
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">No data Available</p>
                    @endif
                </div>
            </div>
            <div class="subclass-division mb-4">
                <h3 class="text-center">Implementations</h3>
                <div class="mini-container">
                    @if(count($implementationsObjects) != 0)
                    @foreach ($implementationsObjects as $object)
                        <div class="contents border border-round p-4">
                            <p class="fs-5">Title: {{$object->title}}</p>
                            <p class="fs-5">Description: {{$object->description}}</p>
                            <div class="pulled-images d-flex flex-wrap gap-2 mb-3">
                                @php
                                    $files = unserialize($object->files);
                                @endphp
                                @foreach ($files as $file)
                                    <div class="raw-image-container">
                                        <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                            <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt="" title="" />
                                        <a>  
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    @else
                        <p class="text-center">No data Available</p>
                    @endif
                </div>
            </div>
            <div class="subclass-division">
                <h3 class="text-center">Outputs</h3>
                <div class="mini-container">
                    @if(count($outputsObjects) != 0)
                        @foreach ($outputsObjects as $object)
                            <div class="contents border border-round p-4">
                                <p class="fs-5">Title: {{$object->title}}</p>
                                <p class="fs-5">Description: {{$object->description}}</p>
                                <div class="pulled-images d-flex flex-wrap gap-2 mb-3">
                                    @php
                                        $files = unserialize($object->files);
                                    @endphp
                                    @foreach ($files as $file)
                                        <div class="raw-image-container">
                                            <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt="" title="" />
                                            <a>  
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">No data Available</p>
                    @endif
                </div>
            </div>
        </div>
        </main>
</body>
</html>