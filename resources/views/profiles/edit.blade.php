
<form id="edit-form" action="{{ route('update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{ $user->name }}"><br>
  <br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" value="{{ $user->username }}"><br>
  <br>
  <label for="bio">Bio:</label><br>
  <textarea id="bio" name="description">{{ $user->description }}</textarea><br>
  <br>
  <label for="profile-image">Profile image:</label><br>
  <input type="file" id="profile-image" name="image"><br>
  <br>
  <button type="submit">Save</button>
  <a href="{{ route('show_profile', $user) }}" class="go-back">Go back</a>
</form> 
@if (session('message'))
    <div class="flash-message">
        {{ session('message') }}
    </div>
@endif
<style>

  /* Add some basic styling to the form */
form {
font-size: 16px;
width: 500px;
margin: 0 auto;
}

/* Style the form labels */
label {
display: block;
margin-bottom: 8px;
font-weight: bold;
}

/* Style the form inputs and textarea */
input, textarea {
width: 100%;
padding: 12px 20px;
margin-bottom: 16px;
box-sizing: border-box;
border: 1px solid #ccc;
border-radius: 4px;
}

/* Style the submit button */
button{
background-color: #1da1f2;
color: #ffffff;
border: none;
border-radius: 4px;
padding: 12px 20px;
font-size: 16px;
cursor: pointer;
}
/* Add a hover effect to the submit button */
.flash-message {
    background-color: #dff0d8;
    border-color: #d0e9c6;
    color: #3c763d;
}
.go-back{

  background-color: #1da1f2;
  color: #ffffff;
    font-size: 16px;
    border-radius: 5px;
    padding: 10px 20px;
    text-decoration: none
}
</style>

  