<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Ramada WebSite</title>
</head>

<body>
    <main>
        <section class="home" id="home">
            <div class="content">
                <div class="presentation-content">
                    <p class="welcome-text">BEM VINDO AO MEU MUNDO!</p>
                    <h1>Olá, eu sou <span class="colorful-text">Kauê Ramada</span> um <div class="animate-text animation" id="container-text">
                            <p class="visible" id="animated-text">Designer.</p>
                            <p id="animated-text">Programador.</p>
                        </div>
                    </h1>
                    <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>

                <div class="social-share">
                    <span class="title">Me siga:</span>
                    <div class="social-icons">
                        <a href="https://instagram.com/kaueramada?igshid=YTQwZjQ0NmI0OA==">
                            <div><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="https://github.com/KaueRamada/">
                            <div><i class="fab fa-github"></i></i></div>
                        </a>
                        <a href="https://www.linkedin.com/in/kauê-ramada-1692872a4/">
                            <div><i class="fab fa-linkedin-in"></i></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <h1 class="title">Perfil</h1>
            <div class="content">
                <div class="details">
                    <h2>Detalhes </h2>
                    <h3>Nome:</h3>
                    <p>Kauê Ramada</p>
                    <h3>Idade:</h3>
                    <p>17 Anos</p>
                    <h3>Local:</h3>
                    <p>SP - São Paulo</p>
                </div>

                <div class="about-me">
                    <h2>Sobre mim </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing.</p>
                    <a href="contact"><div>Contate-me</div></a>
                </div>

                <div class="container">
                    <img class="profile-img" src="<?php echo INCLUDE_PATH; ?>assets/img/profile.png">
                    <h1>Olá! Eu sou Kauê Ramada!</h1>
                    <img class="stats" height= 180em src="https://github-readme-stats.vercel.app/api/top-langs/?username=KaueAnjos&layout=compact&locale=pt-br&theme=radical&bg_color=00000000&title_color=ed1b2aff&border_color=292929ff"/>
                </div>
            </div>
        </section>
    </main>
</body>

</html>