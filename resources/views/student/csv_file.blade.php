<link rel="stylesheet" href="{{url('css/form.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('student.layout')
<link rel="stylesheet" href="{{url('css/addform.css')}}">

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header"><b>Add Batch</b></div>
                <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload File Using CSV
                        </div>
                        <div class="panel-body">
                            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile01" accept=".csv"
                                        >
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group">
                                    <button class="btn btn-primary" type="submit">Import Batch Data</button>
                                </div>                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>