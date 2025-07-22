<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspadinha.online | E aí, já deu sua raspadinha hoje?</title>
    
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Sora:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <style>
        :root {
            --primary: #FFD700;
            --secondary: #FF6B00;
            --dark: #1A1A2E;
            --light: #F8F9FA;
            --success: #28A745;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header */
        header {
            background-color: var(--dark);
            color: white;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: 'Sora', sans-serif;
            font-weight: 800;
            font-size: 28px;
            color: var(--primary);
            text-decoration: none;
        }
        
        .logo span {
            color: white;
        }
        
        .main-nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        .main-nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .main-nav a:hover {
            color: var(--primary);
        }
        
        .user-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .balance {
            background-color: rgba(255,255,255,0.1);
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: var(--dark);
        }
        
        .btn-primary:hover {
            background-color: #e6c200;
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--dark) 0%, #16213E 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-family: 'Sora', sans-serif;
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .cta-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        /* Slogans */
        .slogan {
            font-style: italic;
            font-weight: 300;
            margin: 15px 0;
            color: var(--primary);
        }
        
        /* Cards de Raspadinhas */
        .games-section {
            padding: 60px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-family: 'Sora', sans-serif;
            font-size: 2.5rem;
        }
        
        .games-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .game-card {
            background: linear-gradient(135deg, #fffbe6 0%, #fff 100%);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.10), 0 1.5px 4px rgba(255,215,0,0.10);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid #ffe066;
        }
        .game-card:hover {
            transform: scale(1.03) translateY(-8px);
            box-shadow: 0 16px 32px rgba(0,0,0,0.15), 0 2px 8px rgba(255,215,0,0.15);
            border-color: var(--primary);
        }
        .game-image {
            height: 180px;
            background: linear-gradient(135deg, #ffe066 0%, #fffbe6 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .game-image img {
            width: auto;
            max-width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 2px 8px rgba(0,0,0,0.10));
        }
        .game-price {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: linear-gradient(90deg, var(--primary) 60%, #fffbe6 100%);
            color: var(--dark);
            padding: 7px 16px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 2px 8px rgba(255,215,0,0.10);
        }
        .game-info {
            padding: 24px 20px 20px 20px;
        }
        .game-title {
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 1.25rem;
            color: var(--secondary);
        }
        .game-prize {
            color: var(--success);
            font-weight: 600;
            margin-bottom: 18px;
            font-size: 1.1rem;
        }
        @media (max-width: 600px) {
            .games-grid {
                grid-template-columns: 1fr;
            }
            .game-image {
                height: 120px;
            }
            .game-info {
                padding: 16px 10px 14px 10px;
            }
        }
        
        /* Ganhadores */
        .winners-section {
            background-color: var(--dark);
            color: white;
            padding: 60px 0;
        }
        
        .winners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .winner-card {
            background-color: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .winner-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--dark);
        }
        
        .winner-info {
            flex: 1;
        }
        
        .winner-name {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .winner-prize {
            color: var(--primary);
            font-weight: 500;
        }
        
        /* Footer */
        footer {
            background-color: #111;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-family: 'Sora', sans-serif;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        
        .footer-column ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-column li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: var(--primary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
            color: #777;
        }
        
        /* Responsivo */
        .main-nav {
            position: relative;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            width: 36px;
            height: 36px;
            cursor: pointer;
            z-index: 200;
        }
        .hamburger span {
            height: 4px;
            width: 100%;
            background: var(--primary);
            margin: 5px 0;
            border-radius: 2px;
            transition: 0.4s;
        }
        @media (max-width: 900px) {
            .main-nav ul {
                position: absolute;
                top: 60px;
                right: 0;
                background: var(--dark);
                flex-direction: column;
                width: 200px;
                gap: 0;
                box-shadow: 0 8px 24px rgba(0,0,0,0.15);
                border-radius: 0 0 12px 12px;
                overflow: hidden;
                max-height: 0;
                transition: max-height 0.4s cubic-bezier(.4,0,.2,1);
                z-index: 150;
            }
            .main-nav ul.open {
                max-height: 400px;
                transition: max-height 0.4s cubic-bezier(.4,0,.2,1);
            }
            .main-nav ul li {
                border-bottom: 1px solid #222;
                text-align: right;
                padding: 0 20px;
            }
            .main-nav ul li:last-child {
                border-bottom: none;
            }
            .main-nav {
                margin-left: auto;
            }
            .hamburger {
                display: flex;
            }
            .user-actions {
                flex-direction: column;
                align-items: flex-end;
                gap: 8px;
                margin-left: 0;
                margin-top: 10px;
            }
        }
        @media (max-width: 600px) {
            .header-content {
                flex-direction: column;
                align-items: stretch;
                gap: 8px;
            }
            .user-actions {
                flex-direction: column;
                align-items: center;
                width: 100%;
                margin: 0;
            }
            .btn.btn-primary {
                width: 100%;
                box-sizing: border-box;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-content">
            <a href="/" class="logo">RASPA<span>DINHA</span>.ONLINE</a>
            <nav class="main-nav">
                <div class="hamburger" id="hamburger-menu" aria-label="Abrir menu" tabindex="0">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul id="main-menu">
                    <li><a href="index.php?pagina=home" class="active">Início</a></li>
                    <li><a href="index.php?pagina=raspadinhas">Raspadinhas</a></li>
                    <li><a href="index.php?pagina=ganhadores">Ganhadores</a></li>
                    <li><a href="index.php?pagina=premios">Prêmios</a></li>
                    <li><a href="index.php?pagina=afiliados">Afiliados</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <div class="balance">
                    <i class="fas fa-wallet"></i> R$ 0,00
                </div>
                <a href="index.php?pagina=depositar" class="btn btn-primary">Depositar</a>
                <div class="user-dropdown">
                    <i class="fas fa-user-circle" style="font-size: 24px;"></i>
                </div>
            </div>
        </div>
    </header>
    
    <?php
    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
    $permitidas = [
        'home',
        'raspadinhas',
        'ganhadores',
        'premios',
        'afiliados',
        'perguntas',
        'contato',
        'termos',
        'privacidade'
    ];
    if (!in_array($pagina, $permitidas)) {
        $pagina = 'home';
    }
    if ($pagina === 'home') {
        // Conteúdo da home (pode manter o conteúdo atual da home aqui)
        ?>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <p class="slogan">E aí, já deu sua raspadinha hoje?</p>
                <h1>Raspe e Ganhe Prêmios Incríveis!</h1>
                <p>Milhares de pessoas já ganharam com nossas raspadinhas digitais. Sua vez pode ser agora!</p>
                <div class="cta-container">
                    <a href="index.php?pagina=raspadinhas" class="btn btn-primary">Jogar Agora</a>
                    <a href="index.php?pagina=perguntas" class="btn" style="background: white; color: var(--dark);">Como Funciona</a>
                </div>
            </div>
        </section>
        <!-- Banner Pix -->
        <section style="background: linear-gradient(90deg, #FFD700 60%, #FF6B00 100%); color: #1A1A2E; padding: 32px 0; text-align: center;">
            <div class="container">
                <h2 style="font-family: 'Sora', sans-serif; font-size: 2rem; margin-bottom: 10px;">Pague com Pix e Receba Prêmios Instantaneamente!</h2>
                <p style="font-size: 1.2rem; margin-bottom: 18px;">Compre suas raspadinhas pelo Pix e, se ganhar, receba seu prêmio direto no Pix, rápido e seguro!</p>
                <span style="display: inline-block; background: #fff; color: #FF6B00; font-weight: 700; padding: 10px 28px; border-radius: 30px; font-size: 1.1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">Promoção exclusiva: Pagou no Pix, prêmio no Pix!</span>
            </div>
        </section>
        <!-- Raspadinhas em Destaque -->
        <section class="games-section">
            <div class="container">
                <h2 class="section-title">Raspadinhas Disponíveis</h2>
                <p class="slogan" style="text-align: center; color: var(--secondary);">Raspe, ganhe e repita - a sorte está a um clique!</p>
                <div class="games-grid">
                    <!-- Card 1 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_milhao.png" alt="Raspadinha do Milhão">
                            <div class="game-price">R$ 5,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha do Milhão</h3>
                            <div class="game-prize">Prêmio máximo: R$ 1.000.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_dourada.png" alt="Raspadinha Dourada">
                            <div class="game-price">R$ 2,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Dourada</h3>
                            <div class="game-prize">Prêmio máximo: R$ 50.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_relampago.png" alt="Raspadinha Relâmpago">
                            <div class="game-price">R$ 1,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Relâmpago</h3>
                            <div class="game-prize">Prêmio máximo: R$ 10.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_milionaria.png" alt="Raspadinha Milionária">
                            <div class="game-price">R$ 10,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Milionária</h3>
                            <div class="game-prize">Prêmio máximo: R$ 2.000.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_profissional.png" alt="Raspadinha Profissional">
                            <div class="game-price">R$ 3,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Profissional</h3>
                            <div class="game-prize">Prêmio máximo: R$ 100.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    
                    <!-- Card 6 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_trevo.png" alt="Raspadinha Trevo">
                            <div class="game-price">R$ 4,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Trevo</h3>
                            <div class="game-prize">Prêmio máximo: R$ 200.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    <!-- Card 7 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_sorte_grande.png" alt="Raspadinha Sorte Grande">
                            <div class="game-price">R$ 7,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Sorte Grande</h3>
                            <div class="game-prize">Prêmio máximo: R$ 500.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="game-card">
                        <div class="game-image">
                            <img src="imagens/raspadinha_fortuna.png" alt="Raspadinha Fortuna">
                            <div class="game-price">R$ 8,00</div>
                        </div>
                        <div class="game-info">
                            <h3 class="game-title">Raspadinha Fortuna</h3>
                            <div class="game-prize">Prêmio máximo: R$ 800.000</div>
                            <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="display: block; text-align: center;">Jogar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Últimos Ganhadores -->
        <section class="winners-section">
            <div class="container">
                <h2 class="section-title">Últimos Ganhadores</h2>
                <p class="slogan" style="text-align: center;">Só hoje, já raspamos a sorte de <strong>127 pessoas</strong>!</p>
                <div class="winners-grid">
                    <!-- Ganhador 1 -->
                    <div class="winner-card">
                        <div class="winner-avatar">JP</div>
                        <div class="winner-info">
                            <div class="winner-name">João P.</div>
                            <div class="winner-prize">Ganhou R$ 5.000,00</div>
                            <small>Hoje às 14:30</small>
                        </div>
                    </div>
                    
                    <!-- Ganhador 2 -->
                    <div class="winner-card">
                        <div class="winner-avatar">MA</div>
                        <div class="winner-info">
                            <div class="winner-name">Maria A.</div>
                            <div class="winner-prize">Ganhou R$ 1.200,00</div>
                            <small>Hoje às 11:45</small>
                        </div>
                    </div>
                    
                    <!-- Ganhador 3 -->
                    <div class="winner-card">
                        <div class="winner-avatar">CS</div>
                        <div class="winner-info">
                            <div class="winner-name">Carlos S.</div>
                            <div class="winner-prize">Ganhou R$ 500,00</div>
                            <small>Hoje às 09:15</small>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 30px;">
                    <a href="index.php?pagina=ganhadores" class="btn" style="background: var(--primary); color: var(--dark);">Ver Todos os Ganhadores</a>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section style="padding: 60px 0; background: white; text-align: center;">
            <div class="container">
                <h2 style="font-family: 'Sora', sans-serif; font-size: 2rem; margin-bottom: 20px;">Pronto para raspar sua sorte?</h2>
                <p class="slogan" style="color: var(--secondary); font-size: 1.2rem;">Não deixe para depois - a próxima raspadinha premiada pode ser a sua!</p>
                <a href="index.php?pagina=raspadinhas" class="btn btn-primary" style="margin-top: 20px; display: inline-block;">Começar a Jogar</a>
            </div>
        </section>
        <?php
    } else {
        include "$pagina.php";
    }
    ?>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Sobre Nós</h3>
                    <p style="color: #ccc; line-height: 1.6;">Raspadinha.online é a plataforma mais divertida e segura para jogar raspadinhas digitais e ganhar prêmios incríveis.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="index.php?pagina=home">Início</a></li>
                        <li><a href="index.php?pagina=raspadinhas">Raspadinhas</a></li>
                        <li><a href="index.php?pagina=ganhadores">Ganhadores</a></li>
                        <li><a href="index.php?pagina=premios">Prêmios</a></li>
                        <li><a href="index.php?pagina=afiliados">Afiliados</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Ajuda</h3>
                    <ul>
                        <li><a href="index.php?pagina=perguntas">Perguntas Frequentes</a></li>
                        <li><a href="index.php?pagina=contato">Contato</a></li>
                        <li><a href="index.php?pagina=termos">Termos de Uso</a></li>
                        <li><a href="index.php?pagina=privacidade">Política de Privacidade</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contato</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> contato@raspadinha.online</li>
                        <li><i class="fas fa-phone"></i> (11) 1234-5678</li>
                        <li><i class="fas fa-clock"></i> Atendimento 24h</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Raspadinha.online - Todos os direitos reservados</p>
                <p style="font-size: 0.8rem; margin-top: 10px;">Jogo proibido para menores de 18 anos. Jogue com responsabilidade.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        // Aqui você pode adicionar interações JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Site carregado!');
            // Menu hamburguer responsivo
            const hamburger = document.getElementById('hamburger-menu');
            const menu = document.getElementById('main-menu');
            hamburger.addEventListener('click', function() {
                menu.classList.toggle('open');
            });
            // Fecha o menu ao clicar em um item
            menu.querySelectorAll('a').forEach(function(link) {
                link.addEventListener('click', function() {
                    menu.classList.remove('open');
                });
            });
            // Fecha o menu ao clicar fora
            document.addEventListener('click', function(e) {
                if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
                    menu.classList.remove('open');
                }
            });
            // Exemplo: Atualizar o saldo do usuário
            // fetch('/api/saldo')
            //     .then(response => response.json())
            //     .then(data => {
            //         document.querySelector('.balance').innerHTML = `<i class="fas fa-wallet"></i> R$ ${data.saldo.toFixed(2)}`;
            //     });
        });
    </script>
</body>
</html>