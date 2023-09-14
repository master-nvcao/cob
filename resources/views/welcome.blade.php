<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    @auth

        @if(auth('agent')->check()) {{-- Check if the user is authenticated as an agent --}}
        <h1> Hello Agent </h1>

        @if(auth('agent')->user()->profile_picture)
            <img src="{{ asset('storage/uploads/profile_pictures/' . auth('agent')->user()->profile_picture) }}" alt="Profile Picture">
        @else
            <img src="{{ asset('uploads/default-profile-picture.jpg') }}" alt="Default Profile Picture">
        @endif
        @endif

    @endauth

    @auth('admin')
        <h1> Hello Admin </h1>
    @endauth
</body>
</html>





