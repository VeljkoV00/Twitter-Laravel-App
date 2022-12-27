<!DOCTYPE html>
<html>

<head>
    <title>Twitter Profile</title>
    <style>
        /* Add some style to the page */
        body {
            font-family: sans-serif;
        }

        .profile {
            display: flex;
            align-items: center;
            margin: 20px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }

        .profile-image img {
            width: 100%;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-info h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .go-back {
            background-color: #1da1f2;
            color: #ffffff;
            font-size: 16px;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none
        }

        .profile-info p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .tweet {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .tweet p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .tweet .date {
            font-size: 14px;
            color: #999;
        }
        .edit-tweet{
            background-color: #1da1f2;
            color: #ffffff;
            font-size: 16px;
            border-radius: 5px;
            padding: 4px ;
            margin: 2px;
            text-decoration: none
        }

        .edit-button {
            /* Add some basic styling to the button */
            background-color: #1da1f2;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 14px;
            cursor: pointer;

            /* Add a hover effect to the button */
            &:hover {
                background-color: #0c77bd;
            }

            /* Add a disabled state to the button */
            &:disabled {
                background-color: #e6ecf0;
                color: #657786;
                cursor: not-allowed;
            }

        }
    </style>
</head>

<body>
    <div class="profile">
        <!-- Profile image -->
        <div class="profile-image">
            <img src="{{ Storage::url($user->image) }}" alt="Profile image">
        </div>
        <!-- Profile info -->
        <div class="profile-info">
            <!-- Name -->
            <h1>{{ $user->name }}</h1>
            <!-- Bio -->
            <p>{{ $user->description }}</p>
            <!-- Location -->
            <p>San Francisco, CA</p>
            @if (Auth::user()->id == $user->id)
                <a class="edit-button" href="{{ route('edit_profile', $user) }}">Edit</a>
        </div>
        @endif
    </div>
    <!-- Tweets -->
    @foreach ($tweets as $tweet)
        <div class="tweet">
            <!-- Tweet text -->
            <p>{{ $tweet->body }}</p>
            <!-- Tweet date -->
            <p class="date">{{ $tweet->created_at }}</p>
            @if (Auth::user()->id == $tweet->user_id)
                
            <a href="{{ route('edit_tweet',[$tweet->user ,$tweet] ) }}" class="edit-tweet">Edit</a>
            @endif

        </div>
       
    @endforeach
    <a class="go-back" href="{{ route('home') }}">Return to the main page</a>

</body>

</html>
