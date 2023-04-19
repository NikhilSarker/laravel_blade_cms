@extends ('layout.console')


@section ('content')


<section class="w3-padding">


    <h2>Add Skill</h2>


    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">


        @csrf


        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
           
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>


        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="text" name="url" id="url" value="{{old('url')}}" required>
           
            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="percent">Percent:</label>
            <input type="number" name="percent" id="percent" value="{{old('percent')}}" required>
           
            @if ($errors->first('percent'))
                <br>
                <span class="w3-text-red">{{$errors->first('percent')}}</span>
            @endif
        </div>
        {{-- <div class="w3-margin-bottom">
            <label for="logo">Logo:</label>
            <input type="text" name="logo" id="logo" value="{{old('logo')}}" required>
           
            @if ($errors->first('logo'))
                <br>
                <span class="w3-text-red">{{$errors->first('logo')}}</span>
            @endif
        </div> --}}


   

        <button type="submit" class="w3-button w3-green">Add Skill</button>


    </form>


    <a href="/console/skills/list">Back to Skill List</a>


</section>


@endsection