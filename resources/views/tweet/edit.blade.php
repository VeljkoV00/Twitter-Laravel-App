<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>
<body>
   
<form id="edit-form" action="{{ route('update_tweet',[$tweet->user, $tweet]) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="bio">Bio:</label><br>
    <textarea id="bio" name="body">{{ $tweet->body }}</textarea><br>
    <br>
    <button type="submit">Save</button>
    <a href="{{ route('show_profile', $tweet->user) }}" class="go-back">Go back</a>
  </form> 
  <form action="{{ route('tweet_delete',[$tweet->user, $tweet]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="delete-button">Delete</button>
  </form>
  @if (session('message'))
      <div class="flash-message">
          {{ session('message') }}
      </div>
  @endif
 
  
    
</body>
</html>