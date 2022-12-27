<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div id="twitter-home">
        <header>
          <div id="header-left">
            <img src="twitter-logo.png" alt="Twitter logo" id="logo">
            <input type="text" placeholder="Search Twitter" id="search-input">
          </div>
          <div id="header-right">
            <button id="home-button">Home</button>
            <button id="explore-button">Explore</button>
            <button id="notifications-button">
              <i class="fa fa-bell" aria-hidden="true"></i>
            </button>
            <button id="messages-button">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </button>
            <button id="profile-button">
              <img src="profile-picture.jpg" alt="Profile picture" id="profile-picture">
            </button>
          </div>
        </header>
      <main>
        @yield('content')
        
      </main>
        <footer>
          <p>&copy; Twitter Inc.</p>
        </footer>
      </div>
      
      
</body>
</html>