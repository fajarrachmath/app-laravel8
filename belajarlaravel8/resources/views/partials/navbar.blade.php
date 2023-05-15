<nav
    class="navbar navbar-expand navbar-light bg-white fixed-top topbar static-top shadow"
>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                <a class="navbar-link" href="https://rsj.jabarprov.go.id/">
                    <img
                        src="img/rsjjabar.png"
                        alt=""
                        height="50"
                        class="d-inline-block align-text-top"
                    />
                </a>
                <div class="vr m-2"></div>
                <a class="navbar-link" href="/">
                    <img
                        src="img/WBS.png"
                        alt=""
                        height="50"
                        class="d-inline-block align-text-top"
                    />
                </a>
                <div class="vr m-2"></div>
                <a class="navbar-link" href="https://lapor.go.id/">
                    <img
                        src="img/lapor.png"
                        alt=""
                        height="50"
                        class="d-inline-block align-text-top"
                    />
                </a>
                <div class="vr m-2"></div>
                <a
                    class="nav-link {{ $title === 'ARRAY' ? 'active' : '' }}"
                    href="/_array"
                >
                    ARRAY
                </a>
                <a
                    class="nav-link {{ $title === 'TEST' ? 'active' : '' }}"
                    href="/_test"
                    >TEST</a
                >
            </div>
        </div>
    </div>
</nav>
