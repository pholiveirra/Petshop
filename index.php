<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PetShop</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PetShop🦴</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" 
        id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=entrar">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar"> Lista de registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=agendar-criar">Agendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=lista-agenda">Agendamentos</a>
                </li>
            </ul>
            <form class="d-flex ms-auto" action="https://blog.tudodebicho.com.br/" target=”_blank” method="GET">
                <button class="btn btn-outline-success" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "entrar":
                        include("login.php");
                        break;
                    case "novo":
                        include("novo-usuario.php");
                        break;
                        case "listar":
                            include("listar-usuario.php");
                            break;
                        case "salvar":
                            include("crud-controle-usuario.php");
                            break;
                        case "editar":
                            include("editar-usuario.php");
                            break;
                    case "excluir":
                        include("crud-controle-usuario.php");
                        break;
                    case "agendar-salvar":
                        include("crud-agenda.php");
                        break;
                    case "agendar-criar":
                        include("agendar.php");
                        break;
                    case "editar-agenda":
                        include("editar-agenda.php");
                        break;
                    case "lista-agenda":
                        include("lista-agenda.php");
                        break;
                    case "excluir-agenda":
                        include("crud-agenda.php");
                        break;
                    default:  
                    echo "<h2>Bem-vindo ao PetShop PataAmiga</h2>
                            <p>Nós oferecemos uma variedade de serviços e produtos para cuidar do seu amado animal de estimação:</p>
                            <ul>
                                <li>Venda de alimentos, brinquedos, acessórios e produtos de higiene para animais de estimação.</li>
                                <li>Serviços de banho e tosa para manter seu animal de estimação limpo e saudável.</li>
                                <li>Consultas veterinárias e serviços de saúde básicos, incluindo vacinação e desparasitação.</li>
                                <li>Aconselhamento e orientação sobre cuidados com animais de estimação, alimentação e treinamento.</li>
                                <li>Programa de adoção de animais resgatados, ajudando-os a encontrar lares amorosos.</li>
                            </ul>
                            <p>Visite-nos hoje mesmo e descubra como podemos ajudar você e seu pet!</p>
                        </div>";}
                ?>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js" ></script>
    
</body>

</html>