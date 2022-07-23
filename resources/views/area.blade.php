<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                        @php
                                            $explodedFilename = explode('.',$file);
                                            $explodedFilename = $explodedFilename[1];
                                        @endphp   
                                        @if ($explodedFilename == 'pdf')
                                            <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                <div class="svg-container d-flex justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16"><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/><path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/></svg>
                                                </div>
                                                <p>{{$file}}</p>
                                            </a>
                                        @else
                                            <div class="raw-image-container">
                                                <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                    <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt={{$file}} title={{$file}} />
                                                <a>  
                                            </div>
                                        @endif  
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
                                @php
                                    $explodedFilename = explode('.',$file);
                                    $explodedFilename = $explodedFilename[1];
                                @endphp   
                                @if ($explodedFilename == 'pdf')
                                    <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                        <div class="svg-container d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16"><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/><path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/></svg>
                                        </div>
                                        <p>{{$file}}</p>
                                    </a>
                                @else
                                    <div class="raw-image-container">
                                        <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                            <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt={{$file}} title={{$file}} />
                                        <a>  
                                    </div>
                                @endif  
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
                                        @php
                                            $explodedFilename = explode('.',$file);
                                            $explodedFilename = $explodedFilename[1];
                                        @endphp   
                                        @if ($explodedFilename == 'pdf')
                                            <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                <div class="svg-container d-flex justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16"><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/><path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/></svg>
                                                </div>
                                                <p>{{$file}}</p>
                                            </a>
                                        @else
                                            <div class="raw-image-container">
                                                <a href="{{url('storage/files/'.$file)}}" target="_blank" >
                                                    <img src="{{ url('storage/files/'.$file) }}"class="raw-image" alt={{$file}} title={{$file}} />
                                                <a>  
                                            </div>
                                        @endif  
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