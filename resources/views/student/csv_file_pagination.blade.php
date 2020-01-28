<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">




@extends('student.csv_file')
@section('csv_data')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Middlename </th>
            <th>Lastname</th>
            <th>Email Address</th>
            <th>Batch</th>
            <th>Contact</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <td>{{$row->first_name}}</td>
                <td>{{$row->middle_name}}</td>
                <td>{{$row->last_name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->batch}}</td>
                <td>{{$row->contact_number}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{!! $data->links()!!}











@endsection