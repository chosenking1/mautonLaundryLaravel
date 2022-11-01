@extends('layouts.app')

@section('content')


    <div class="flex justify-end m-4  " >

        <form action="{{route('login')}}" method="post" class="w-96"

        @csrf

        <div class="w-12/12 bg-white p-6 rounded-lg font-bold text-2xl">
        <h2 class=" py-44 flex justify-center  "> Login </h2>
    </div>
        <div class="mt-2 mb-2 bg-gray-100 border-2 w-full p-8 rounded-lg">


            <div>
                <div class="olabel">
                    <label> Email </label>
                </div>
                <input type="email" id="email" name="email" value="{{old('email')}}" required/>
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <div>
                    <label> Password </label>
                </div>
                <input type="password" id="password" name="password" value="" required/>
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

        </div>

        <div>
            <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full " value="Submit">Login</button>

        </div>
        </form>
    </div>


@endsection
