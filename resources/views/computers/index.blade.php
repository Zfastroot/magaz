@extends('layout')
@section('content')
<div class ="relative py-4 px-6">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center ">
                    <h1>Computer</h1>
                </div>
                @if(count($computers)>0)
                <ul><div class="flex items-top justify-center sm:items-center py-4 sm:pt-0">
                        <div >
                            @foreach($computers as $computer)
                                <a href="{{route('computers.show',[$computer['id']])}}">
                                    <li>
                                        <h3>{{ $computer['name'] }} (<strong>{{$computer['origin']}}</strong>){{$computer['price']}} $ </h3>
                                    </li> 
                                </a>
                            @endforeach 
                        </div>
                    </div>
                </ul>
                @else
                    <p align ='center'>There are no Computers to display</p>
                @endif
        </div>
    </div>
</div>
@endsection

@section('title','Computer')





