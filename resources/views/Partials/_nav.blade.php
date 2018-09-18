<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Laravel Project 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  {{ Request::is('/myaccount') ? "active" : "" }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profile">Profile</a>
          <a class="dropdown-item" href="/parameters">Parameters</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout">Log out</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
