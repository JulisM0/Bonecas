<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <header class="header-section">
        <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-link"><a href="" class="nav-item">Início</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="form-section">
            <div class="form-content">
                <form action="processos/processo_cad.php" method="post">
                    <label for="name">Nome</label>
                    <input type="text" class="input-box" placeholder="Digite seu nome" id="nome" name="nome">
                    <label for="email">Email</label>
                    <input type="email" class="input-box" placeholder="Digite seu email" id="email" name="email">
                    <label for="senha">Senha</label>
                    <input type="password" class="input-box" placeholder="Digite sua senha" id="senha" name="senha">

                    <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option value="">Selecione...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Digite o nome da sua cidade">

                    <label for="rua">Rua</label>
                    <input type="text" name="rua" id="rua" placeholder="Digite o nome da sua rua">

                    <label for="numero_casa">Número da casa</label>
                    <input type="number" name="numero_casa" id="numero_casa" placeholder="Digite o número da sua casa">

                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Digite o nome do seu bairro">

                    <button type="submit" class="submit-btn">Cadastrar</button>
                    
                </form>
            </div>
        </section>
    </main>
    
</body>
</html>