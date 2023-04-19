

@extends ('layout.console')


@section ('content')


<section class="w3-padding">


    <h2>Manage Education</h2>


    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>School</th>
            <th>Program</th>
            <th>Country</th>
            <th>Start date</th>
            <th>End date</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($educations as $education): ?>
            <tr>
                <td>{{$education->school}}</td>
                <td>{{$education->program}}</td>
                <td>{{$education->country}}</td>
                {{-- <td>{{$education->start_date}}</td> --}}
                <td>{{\Carbon\Carbon::parse($education->start_date)->format('y/m/d ')}}</td>
                <td>{{\Carbon\Carbon::parse($education->end_date)->format('y/m/d ')}}</td>
                {{-- <td>{{$education->end_date}}</td> --}}
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>


</section>


@endsection
