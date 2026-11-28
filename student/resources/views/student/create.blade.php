<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
</head>
<body>
    <h1>Create Student</h1>
    <form action="/students" method="post">
        @csrf
        <div>
            <label for="name">Name</label>

            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <br>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        </div>
        <br>
        <div>
            <label for="address">Address</label>
            <input id="address" name="address" value="{{ old('address') }}">
        </div>
        <br>
        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
        </div>
        <br>
        <button type="submit">Create Student</button>
        @if($errors->any())
            <div>
                <h3>Please fix the following error:</h3>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    <br>
    <a href="/students">Back to students</a>
</body>
</html>
