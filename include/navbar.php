<header>
    <nav>
        <img src='<?php echo INCLUDE_PATH ?>assets/img/logo/kr.png' onclick="resetPage()">
        <ul>
            <li><a href="#" onclick="scrollspy('home');">Início</a></li>
            <li><a href="#" onclick="scrollspy('about');">Sobre mim</a></li>
            <li><a href="#" onclick="scrollspy('portfolio');">Portfólio</a></li>
            <li><a href="#" onclick="scrollspy('contact');">Contato</a></li>
            <li class="gear"><a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fas fa-cog"></i></a></li>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Ramada WebSite</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        Idioma:
                    </div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                            Selecione o idioma
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Português Brasil</a></li>
                            <li><a class="dropdown-item" href="#">Inglês</a></li>
                            <li><a class="dropdown-item" href="#">Espanhol</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </ul>
    </nav>
</header>