
  @extends('layouts.layout')
  @section('content')
  <main>
    <form action="{{ route('tweet_store') }}" method="POST">
      @csrf
      <div id="tweet-compose">
        <img src="profile-picture.jpg" alt="Profile picture" id="profile-picture">
        <textarea placeholder="What's happening?" id="body" name="body"></textarea>
        @error('body')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
        <div id="tweet-controls">
       
          <button id="tweet-button" type="submit">Tweet</button>
        </div>
      </div>
    </form>
    <div id="tweet-list">
        
    @foreach ($tweets as $tweet )
      
      <div class="tweet">
        <img src="{{ Storage::url($tweet->user->image) }}" alt="Profile picture" class="profile-image">
        <div class="tweet-content">
          <h3 class="name">{{ $tweet->user->name }}</h3>
          <a class="username" href="{{ route('show_profile', $tweet->user) }}">{{ $tweet->user->username }}</a>
          <p class="text">{{ $tweet->body }}</p>
        </div>
      </div>
      @endforeach

      <!-- More tweets go here -->
    </div>
  </main>
  @endsection