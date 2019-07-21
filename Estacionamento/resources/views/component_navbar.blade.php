<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button">

        <ul class="navbar-nav mr-auto">
            <li @if($current="home") class="nav-item active"
            @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>

    </button>
            <button class="navbar-toggler" type="button">
                <ul class="navbar-nav mr-auto">
            <li @if($current="vagas") class="nav-item active"
                @else class="nav-item" @endif>
                <a class="nav-link" href="/vagas">Vagas utilizadas</a>
            </li>
        </ul>
            </button>
    </div>
</nav>
