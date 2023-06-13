<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("/assets/web/reset.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/login.css");?>">
    
    <title>Cadastrar/Entrar</title>
</head>
<body>
    <header><a href="home.html"><button>&#8678;</button></a></header>
    <main>
       

            <div class="container">
                <div class="abas">
                    <button data-aba="entrar" data-open>Entrar</button>
                    <button data-aba="cadastrar">Cadastre-se</button>
                </div>

                <div class="conteudos">
                    <div data-conteudo="entrar" id="entrar">
                        <form class="form">
                            <input type="text" name="email" placeholder="Seu e-mail">
                            <input type="password" name="senha" placeholder="Sua senha">
                            <button>Entrar</button>
                        </form>
                    </div>
                
                    <div data-conteudo="cadastrar" id="cadastrar">
                        <form class="form">
                            <input type="text" name="email" placeholder="Seu e-mail">
                            <input type="password" name="senha" placeholder="Sua Senha">
                        <input type="password" name="senha" placeholder="Sua Senha">
                        <button>Cadastrar</button>
                    </form>
                    </div>
                </div>
            </div>
    </main>
    <script src="<?= url("/assets/web/scripts.js");?>"></script>
</body>
</html>
