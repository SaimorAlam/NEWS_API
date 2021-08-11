<!-- Navigation menu -->
<section class=" bg-red-400" id="navbar">
    <div class="container">
        <nav class="flex items-center p-5">
            <div class="logo">
                <a href="{{ route('home') }}" class="font-limelight font-extrabold text-xl text-gray-800">News API</a>
            </div>
            <div class="nav-menu flex-1 text-right ">
                <div class="nav-items">
                    <ul>
                        <li class="inline-block mr-5"><a href="{{ route('home') }}">News</a></li>
                        <li class="inline-block mr-5"><a href="{{ route('list') }}">Profiles</a></li>
                        <li class="inline-block mr-5"><a href="">Contuct Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>