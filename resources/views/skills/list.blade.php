

@extends ('layout.console')


@section ('content')


<section class="w3-padding">


    <h2>Manage Skill</h2>


    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Name</th>
            <th>URL</th>
            <th>Percent</th>
            {{-- <th>Logo</th> --}}
            <th></th>
            <th></th>
        </tr>
        <?php foreach($skills as $skill): ?>
            <tr>
                <td>{{$skill->name}}</td>
                <td>{{$skill->url}}</td>
                <td>{{$skill->percent}}</td>
                {{-- <td>{{$skill->logo}}</td> --}}
                {{-- <td>{{$skill->start_date}}</td> --}}
                {{-- <td>{{\Carbon\Carbon::parse($skill->start_date)->format('y/m/d ')}}</td>
                <td>{{\Carbon\Carbon::parse($skill->end_date)->format('y/m/d ')}}</td> --}}
                {{-- <td>{{$skill->end_date}}</td> --}}
                <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <a href="/console/skills/add" class="w3-button w3-green">New Skill</a>


</section>


@endsection
