@extends('layout')
@section('content')
<div class ="relative py-4 px-6">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 ">
                <h1>Edit old Computer</h1>
            </div>
            <div>
                <form action="{{route('computers.update',['computer'=>$computer->id])}}" method="POST" class= "form bg-white p-6 border-1">
                    @csrf <!--cross site requeste forgery -->
                    @method('PUT')
                    <div>
                        <label for="computer-name" >Computer Name</label>
                        <input id="computer-name" name="computer-name" value="{{$computer->name}}" type="text">
                        @error('computer-name')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="computer-origin" >Computer Origin</label>
                        <input id="computer-origin" name="computer-origin"value="{{$computer->origin}}"  type="text">
                        @error('computer-origin')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="computer-price" >Computer Price</label>
                        <input id="computer-price" name="computer-price"value="{{$computer->price}}"  type="text">
                        @error('computer-price')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit">submit</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>

</div>

@endsection

@section('title','Computer creat')