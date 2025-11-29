<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Maison Dolls</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <header class="header-section">
        <nav class="navabr">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.html">Início</a></li>
                <li class="nav-item"><a href="index.html#about-us">Sobre Nós</a></li>
                <li class="nav-item"><a href="index.html#collection-preview">Nossa Coleção</a></li>
                <li class="nav-item"><a href="index.html#contact-section">Nos Contate</a></li>
                <li class="nav-item login-item"><a href="login.html" class="nav-login">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="login-hero">
            <div class="login-container">
                <div class="login-content">
                    <h1 class="login-title">Bem-vindo de Volta</h1>
                    <p class="login-subtitle">Acesse sua conta Maison Dolls</p>

                    <div id="message-container"></div>
                    
                    <form method="POST" action="processos/processo_log.php" class="login-form">
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" 
                                   placeholder="Seu e-mail" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="senha" class="form-input" 
                                   placeholder="Sua senha" required>
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        
                        <button type="submit" class="login-button">
                            <i class="fas fa-sign-in-alt"></i>
                            Entrar
                        </button>
                    </form>

                    <div class="login-links">
                        <a href="cadastro.html" class="login-link">
                            <i class="fas fa-user-plus"></i>
                            Criar uma conta
                        </a>
                    </div>
                </div>
                
                <div class="login-image">
                    <img src="img/boneca-login.jpg" alt="Boneca Maison Dolls" class="login-img">
                </div>
            </div>
        </section>
    </main>


 <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-creators">
                <div class="creator-card">
                    <img src="images/criador1.jpg" alt="Ana Silva" class="creator-image">
                    <h3 class="creator-name">Ana Silva</h3>
                    <p class="creator-role">Desenvolvedora Front-end</p>
                </div>
                <div class="creator-card">
                    <img src="images/criador2.jpg" alt="Carlos Santos" class="creator-image">
                    <h3 class="creator-name">Carlos Santos</h3>
                    <p class="creator-role">Designer UI/UX</p>
                </div>
                <div class="creator-card">
                    <img src="images/criador3.jpg" alt="Marina Oliveira" class="creator-image">
                    <h3 class="creator-name">Marina Oliveira</h3>
                    <p class="creator-role">Desenvolvedora Back-end</p>
                </div>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2024 Maison Dolls. Todos os direitos reservados.</p>
                <p>Desenvolvido com ❤️ pela nossa equipe</p>
            </div>
        </div>
    </footer>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const error = urlParams.get('error');
            const messageContainer = document.getElementById('message-container');
            
            if (error) {
                messageContainer.innerHTML = `
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        ${decodeURIComponent(error)}
                    </div>
                `;
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        });
    </script>
</body>
</html>