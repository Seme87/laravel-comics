<header>
    <section class="ms-top-header">
        {{-- sezione top header --}}
        <div class="container">
            {{-- Navbar top con dorpdown menu --}}
            <nav class="ms-nav-header-top">
                <li><a href="#">DC POWER VISA®</a></li>

                <li class="dropdown p-e-0">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADDICTIONAL DC SITES
                    </a>
                    <ul class="dropdown-menu p-e-0">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </nav>
            {{-- Navbar top con dorpdown menu --}}

        </div>
    </section>
    {{-- sezione top header --}}

    {{-- Sezione header bottom --}}
    <section>
        <div class="container ">
            
            <div class="header-bottom d-flex">
                {{-- logo --}}
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                {{-- logo --}}

                {{-- Navbar header bottom --}}
                <nav class="ms-nav-header-bottom ">
                    <ul class="">
                        <li><a href="">CHARACTERS</a></li>
                        <li><a href="">COMICS</a></li>
                        <li><a href="">MOVIES</a></li>
                        <li><a href="">TV</a></li>
                        <li><a href="">GAMES</a></li>
                        <li><a href="">COLLECTIBLES</a></li>
                        <li><a href="">VIDEOS</a></li>
                        <li><a href="">FANS</a></li>
                        <li><a href="">NEWS</a></li>
                        <li class="dropdown p-e-0">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ADDICTIONAL DC SITES
                            </a>
                            <ul class="dropdown-menu p-e-0">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li>
                            <form action="">
                                <input class="search-text " type="text" placeholder="Search">
                                <i class="fa-solid fa-magnifying-glass"></i>

                            </form>
                        </li>
                    
                    </ul>
                </nav>
                {{-- Navbar header bottom --}}

            </div>
            
        </div>
    </section>
    {{-- Sezione header bottom --}}

</header>