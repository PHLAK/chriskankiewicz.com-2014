<div class="primary-navigation">
    <div class="container">

        <a href="{{ route('root') }}" class="site-title clearfix">

            <span class="title-img">
                <img src="{{ Gravatar::get('Chris@ChrisKankiewicz.com', ['size' => 120, 'secure' => true]) }}" class="img-circle img-responsive">
            </span>

            <span class="title-text">
                <h1>Chris Kankiewicz</h1>
            </span>

        </a>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav-links">

            <li>
                <a href="{{ route('root') }}">Home</a>
            </li>

            <li>
                <a href="{{ route('blog') }}">Blog</a>
            </li>

        </ul>

    </div>
</div>
