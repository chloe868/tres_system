<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/form.css')}}">
</head>

<body>

    <h3>Add Payee's Name</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <!-- <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </!-->
    </div><br />
    @endif
    <div class="container">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="first_name" placeholder="" value="{{ old('first_name') }}">
                <span class="error">
                    @if($errors->has('first_name'))
                    {{ $errors->first('first_name') }}
                    @endif
                </span>
            </div>


            <div class="form-group">
                <label for="lname">Middle Name</label>
                <input type="text" id="lname" name="middle_name" placeholder="" value="{{ old('middle_name') }}">
                <span class="error">
                    @if($errors->has('middle_name'))
                    {{ $errors->first('middle_name') }}
                    @endif
                </span>
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="last_name" placeholder="" value="{{ old('last_name') }}">
                <span class="error">
                    @if($errors->has('last_name'))
                    {{ $errors->first('last_name') }}
                    @endif
                </span>
            </div>

            <div class="form-group">
                <label for="lname">Batch</label>
                <input type="text" id="lname" name="batch" placeholder="" value="{{ old('batch') }}">
                <span class="error">
                    @if($errors->has('batch'))
                    {{ $errors->first('batch') }}
                    @endif
                </span>
            </div>

            <div class="form-group">
                <label for="lname">Phone Number</label>
                <input type="text" id="lname" name="phone_number" placeholder="" value="{{ old('phone_number') }}">
                <span class="error">
                    @if($errors->has('phone_number'))
                    {{ $errors->first('phone_number') }}
                    @endif
                </span>
            </div>

              <div class="form-group">
                <label for="lname">Email</label>
                <input type="text" id="lname" name="email" placeholder="" value="{{ old('email') }}">
                <span class="error">
                    @if($errors->has('email'))
                    {{ $errors->first('email') }}
                    @endif
                </span>
            </div>


            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>