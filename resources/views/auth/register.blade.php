@extends('layouts.app')

@section('content')


<div class="flex justify-end m-4  " >

    <form action="{{route('register')}}" method="post" class="w-96"
        @csrf
        <h2 class="w-12/12 bg-white p-6 rounded-lg "> Register </h2>

        <div class="mt-2 mb-2 bg-gray-100 border-2 w-full p-8 rounded-lg">
            <div class="">
            <div class="olabel">
                <label> Fullname </label>
            </div>
            <input class="" type="text" id="full_name" name="full_name" value="{{old('full_name')}}" required/>
                @error('full_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
            <div class="olabel">

                <label> Address </label>
            </div>
            <input type="text" id="address" name="address" value="{{old('address')}}" required/>
                @error('address')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>
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
            <div class="olabel">
                <label> Phone Number </label>
            </div>
            <input type="number" id="phone_number" name="phone_number" value="{{old('phone_number')}}" required/>
                @error('phone_number')
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

            <div>
            <div>
                <label> Password Again</label>
            </div>

            <input type="password" id="password_confirmation" name="password_confirmation" value="" required/>

            @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
            </div>
        </div>


<div>
    <button type="submit" class="bg-blue-400 text-white px-4 py-3 rounded font-medium w-full " value="Submit">Submit</button>

        </div>
    </form>
</div>


@endsection
