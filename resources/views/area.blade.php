<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
            <div class="subclass-division">
                <h3 class="text-center">System - Inputs and Processes</h3>
                <div class="mini-container ">
                    @if(count($systemsObjects) != 0)
                        @foreach ($systemsObjects as $object)
                        <div class="contents border border-round p-4">
                            <p>Title: {{$object->title}}</p>
                            <p>Description: {{$object->description}}</p>
                            <p>Files: {{$object->files}}</p>
                        </div>
                        @endforeach
                    @else
                        <p class="text-center">No data Available</p>
                    @endif
                </div>
            </div>
            <div class="subclass-division">
                <h3 class="text-center">Implementations</h3>
                <div class="mini-container">
                    @if(count($implementationsObjects) != 0)
                    @foreach ($implementationsObjects as $object)
                        <div class="contents border border-round p-4">
                            <p>Title: {{$object->title}}</p>
                            <p>Description: {{$object->description}}</p>
                            <p>Files: {{$object->files}}</p>
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
                                <p>Title: {{$object->title}}</p>
                                <p>Description: {{$object->description}}</p>
                                <p>Files: {{$object->files}}</p>
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