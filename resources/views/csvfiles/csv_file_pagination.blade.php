<table>
    <thead>
    <tr>
    
    <th>Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Batch</th>
    </tr></thead>
    <tbody>
    @for($students as $student )
    <tr>
    <td>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->contact_number}}</td>
    <td>{{$student->batch}}</td></tr>
    </tbody>
</table>