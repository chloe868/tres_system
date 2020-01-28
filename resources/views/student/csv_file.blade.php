<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<body>
    <div class="container">
        <br>
        <h3>csv</h3>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">CSV</h3>
            </div>
            <div class="panel-body">
            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" accept=".csv">
                <br>
                <button class="btn btn-success" type="submit">Import User Data</button>
                <a  class="btn btn-warning " href="{{route('export')}}">Export User</a>
            
            </form>
                @yield('csv_data')
            </div>
        </div>
    </div>
</body>