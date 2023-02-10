@extends('layout')
@section('content')
<div class ="relative py-4 px-6">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                    <h1>Computer</h1>
                </div>
                    <div class="flex items-top justify-center sm:items-center py-4 sm:pt-0">
                        <div class="mt-8">
                            <h3>{{ $computer['name'] }} (<strong>{{$computer['origin']}}</strong>) price = {{$computer['price']}} $ </h3>
                        </div>
                    </div>
                    
                    <form action="{{route('computers.destroy',$computer->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('computers.edit',$computer->id)}}">
                            <div class ="edit-btn" align="center">
                                Edit
                            </div>
                        </a>
                        <input  class="del-btn" type="submit" value="delete">
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection

@section('title','Computer Show')