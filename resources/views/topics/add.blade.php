@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Topic</h2>

    <form method="post" action="/console/topics/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        {{-- <div class="w3-margin-bottom">
            <label for="content">Content:</label>
            <input type="text" name="content" id="content" value="{{old('content')}}" required>
            
            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div> --}}

    

        {{-- <div class="w3-margin-bottom">
            <label for="learned_at">Date:</label>
            <input type="date" name="learned_at" id="learned_at" value="{{old('learned_at')}}" required>

            @if ($errors->first('learned_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('learned_at')}}</span>
            @endif
        </div> --}}
        {{-- <div class="w3-margin-bottom">
            <label for="topic_id">Topic:</label>
            
                @foreach ($topics as $topic)
                   <br>
                    <input type="checkbox" value="{{$topic->id}}" name="topics[]"
                        {{$topic->id == old('topic_id') ? 'checked' : ''}}>
                        {{$topic->title}}
                    
                @endforeach
            
          
        </div> --}}
       

        <button type="submit" class="w3-button w3-green">Add Topic</button>

    </form>

    <a href="/console/topics/list">Back to Topic List</a>

</section>

@endsection
