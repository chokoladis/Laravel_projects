<header class="header">
    <nav class="uk-navbar-container uk-flex-between" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="@if(Request::is('posts')) current @endif"><a href="/posts" title="posts"><img src="/img/posts.svg" alt="Посты"></a></li>
                <li class="@if(Request::is('todolist')) current @endif"><a href="{{ route('todolist.index') }}" title="todolist"><img src="/img/todolist.png" alt="todolist"></a></li>
            </ul>
        </div>
        <div class="logo">
            <a href="/">
                <img src="/img/logo.png" alt="">
            </a>            
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="@if(Request::is('posts')) current @endif"><a href="#">no real</a></li>
                <li class="@if(Request::is('registration') || Request::is('login')) current @endif">
                    <a href="#" title="profile"><img src="/img/user-icon.png" alt="Пользователь"></a>
                    <ul>
                        <li class="@if(Request::is('registration')) current @endif">
                            <a href="/registration">Registrate</a></li>
                        <li class="@if(Request::is('login')) current @endif">
                            <a href="/login">Login</a></li>
                        <li class=""><a href=""></a></li>
                    </ul>    
                </li>
            </ul>
        </div>
    </nav>
</header>