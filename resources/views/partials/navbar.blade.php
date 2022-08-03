<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "home" ? 'active' : '') }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "about" ? 'active' : '') }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "posts" ? 'active' : '') }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "categories" ? 'active' : '') }}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($active == "login" ? 'active' : '') }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
