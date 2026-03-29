<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARSERS | Soluções Digitais</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#top">
                <img src="img/logo.png" alt="Logo Parsers" class="brand-logo me-2">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#equipe">Equipe</a></li>
                    <li class="nav-item"><a class="nav-link" href="#swot">SWOT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a class="btn btn-nav" href="#contato">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <span class="hero-badge">Startup acadêmica de inovação tecnológica</span>
                    <h1 class="hero-title mt-3">
                        Modernização digital com <span>segurança</span>, <span>dados</span> e <span>impacto
                            social</span>
                    </h1>
                    <p class="hero-text mt-4">
                        A PARSERS desenvolve sistemas digitais de gestão operacional para instituições públicas e
                        organizações
                        que buscam substituir processos manuais por soluções seguras, auditáveis e eficientes.
                    </p>

                    <div
                        class="hero-buttons mt-4 d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="#servicos" class="btn btn-primary-custom">Conheça nossos serviços</a>
                        <a href="#sobre" class="btn btn-outline-custom">Saiba mais</a>
                    </div>

                    <div class="hero-metrics row mt-5 g-3">
                        <div class="col-4">
                            <div class="metric-box">
                                <h3>100%</h3>
                                <p>Foco em eficiência</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="metric-box">
                                <h3>LGPD</h3>
                                <p>Conformidade</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="metric-box">
                                <h3>Dados</h3>
                                <p>Decisão orientada</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                    <div class="hero-image-wrapper">
                        <div class="glow-circle glow-1"></div>
                        <div class="glow-circle glow-2"></div>
                        <img src="img/membros.jpeg" alt="Logo Parsers" class="hero-logo img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- SOBRE / MISSÃO VISÃO VALORES -->
    <section id="sobre" class="section-padding bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="section-tag">Quem somos</span>
                <h2 class="section-title">Tecnologia aplicada à transformação institucional</h2>
                <p class="section-subtitle">
                    Unimos base científica, engenharia e inovação para desenvolver soluções digitais confiáveis para o
                    setor público e institucional.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <div class="icon-circle">
                            <i class="bi-flag"></i>
                        </div>
                        <h3>Missão</h3>
                        <p>
                            Desenvolver e implementar sistemas digitais de gestão operacional para organizações públicas
                            e institucionais, substituindo processos manuais por soluções seguras, auditáveis e orientadas
                            por dados, com foco em eficiência, transparência e governança.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <div class="icon-circle">
                            <i class="bi bi-eye"></i>
                        </div>
                        <h3>Visão</h3>
                        <p>
                            Ser reconhecida como uma startup acadêmica de referência na modernização digital de
                            instituições públicas, transformando conhecimento científico em soluções tecnológicas
                            com impacto social relevante.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <div class="icon-circle">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h3>Valores</h3>
                        <ul class="values-list">
                            <li>Rigor técnico e base científica</li>
                            <li>Inovação com propósito</li>
                            <li>Segurança e conformidade</li>
                            <li>Impacto social</li>
                            <li>Colaboração e transparência</li>
                            <li>Aprendizado contínuo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESTAQUES -->
    <section class="section-padding section-highlight">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-tag">Diferenciais</span>
                    <h2 class="section-title text-white mt-2">
                        Soluções confiáveis para problemas reais
                    </h2>
                    <p class="section-subtitle text-light mt-3">
                        Nossa proposta combina engenharia, organização, segurança da informação e compromisso
                        institucional
                        para entregar sistemas digitais modernos e sustentáveis.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="feature-card">
                                <h4>Base científica</h4>
                                <p>Projetos estruturados com método, análise e boas práticas de engenharia.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="feature-card">
                                <h4>Segurança</h4>
                                <p>Proteção de dados, rastreabilidade e conformidade com legislações vigentes.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="feature-card">
                                <h4>Impacto social</h4>
                                <p>Soluções voltadas à melhoria de serviços essenciais e da gestão pública.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="feature-card">
                                <h4>Inovação aplicada</h4>
                                <p>Tecnologia desenvolvida para resolver desafios concretos com eficiência.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





  <!-- SERVIÇOS -->
<section id="servicos" class="section-padding bg-light-custom">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="section-tag">Ações de Extensão</span>
            <h2 class="section-title">Como podemos atuar</h2>
            <p class="section-subtitle">
                Atuamos com soluções tecnológicas voltadas à gestão, automação e apoio à tomada de decisão.
            </p>
        </div>

        <div class="row g-4">

            <!-- CONSULTORIA -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-bar-chart"></i>
                    </div>
                    <h3>Consultoria</h3>
                    <p>
                        Diagnóstico de processos, identificação de gargalos operacionais e proposição de melhorias
                        para digitalização e governança.
                    </p>
                </div>
            </div>

            <!-- CAPACITAÇÃO -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h3>Capacitação</h3>
                    <p>
                        Treinamentos e oficinas para desenvolvimento de habilidades tecnológicas e uso de sistemas.
                    </p>
                </div>
            </div>

            <!-- PRESTAÇÃO DE SERVIÇOS -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h3>Prestação de Serviços</h3>
                    <p>
                        Desenvolvimento de sistemas personalizados, formulários, painéis de controle e soluções para
                        gestão de informações.
                    </p>
                </div>
            </div>

            <!-- PROJETOS DE ENGENHARIA -->
            <div class="col-md-6 col-lg-3">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h3>Projetos de Engenharia</h3>
                    <p>
                        Projetos de software, dados e sistemas computacionais com foco em desempenho,
                        rastreabilidade e confiabilidade.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- EQUIPE -->
    <section id="equipe" class="section-padding bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="section-tag">Nossa equipe</span>
                <h2 class="section-title">Conheça os integrantes da PARSERS</h2>
                <p class="section-subtitle">
                    Uma equipe com perfil técnico, visão analítica e compromisso com soluções digitais de impacto.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- INTEGRANTE 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card text-center h-100">
                        <img src="img/membros/carol.jpg" alt="Foto da Carol" class="team-photo">
                        <h4 class="team-name">Carolina Siroma</h4>
                        <p class="team-role">Scrum Master</p>
                        <button class="btn btn-primary-custom team-btn" data-bs-toggle="modal"
                            data-bs-target="#membro1Modal">
                            Ver perfil profissional
                        </button>
                    </div>
                </div>

                <!-- INTEGRANTE 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card text-center h-100">
                        <img src="img/membros/celine.jpg" alt="Foto da Celine" class="team-photo">
                        <h4 class="team-name">Celine Galdino</h4>
                        <p class="team-role">Desenvolvedora Front-End</p>
                        <button class="btn btn-primary-custom team-btn" data-bs-toggle="modal"
                            data-bs-target="#membro2Modal">
                            Ver perfil profissional
                        </button>
                    </div>
                </div>

                <!-- INTEGRANTE 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="team-card text-center h-100">
                        <img src="img/membros/diogo.jpg" alt="Foto do Diogo" class="team-photo">
                        <h4 class="team-name">Diogo Almeida</h4>
                        <p class="team-role">Desenvolvedor Back-End</p>
                        <button class="btn btn-primary-custom team-btn" data-bs-toggle="modal"
                            data-bs-target="#membro3Modal">
                            Ver perfil profissional
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SWOT -->
    <section id="swot" class="section-padding bg-light-custom">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="section-tag">Estratégia</span>
                <h2 class="section-title">Análise SWOT</h2>
                <p class="section-subtitle">
                    A seguir será apresentada a análise estratégica da PARSERS, considerando fatores internos e
                    externos que influenciam sua atuação.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="swot-card swot-strength h-100">
                        <div class="swot-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Forças</h4>
                        <ul>
                            <li>Base científica e formação em Engenharia da Computação.</li>
                            <li>Equipe com competências em programação, IA e sistemas embarcados.</li>
                            <li>Experiência em pesquisa e projetos tecnológicos.</li>
                            <li>Integração entre desenvolvimento web, dados e automação.</li>
                            <li>Perfil colaborativo, proativo e multidisciplinar da equipe.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="swot-card swot-weakness h-100">
                        <div class="swot-icon"><i class="bi bi-exclamation-triangle"></i></div>
                        <h4>Fraquezas</h4>
                        <ul>
                            <li>Equipe pequena em fase inicial de desenvolvimento.</li>
                            <li>Experiência limitada em gestão empresarial e mercado.</li>
                            <li>Recursos financeiros e infraestrutura ainda reduzidos.</li>
                            <li>Dependência de apoio institucional e ambiente acadêmico.</li>
                            <li>Processos organizacionais e modelo de negócio em consolidação.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="swot-card swot-opportunity h-100">
                        <div class="swot-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4>Oportunidades</h4>
                        <ul>
                            <li>Crescimento da transformação digital no setor público.</li>
                            <li>Demanda por sistemas que aumentem transparência e governança.</li>
                            <li>Editais e programas de incentivo à inovação tecnológica.</li>
                            <li>Parcerias com universidades e centros de pesquisa.</li>
                            <li>Avanço de tecnologias como IA, análise de dados e cloud.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="swot-card swot-threat h-100">
                        <div class="swot-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h4>Ameaças</h4>
                        <ul>
                            <li>Concorrência com empresas consolidadas de tecnologia.</li>
                            <li>Burocracia e lentidão na adoção de soluções no setor público.</li>
                            <li>Limitações orçamentárias em instituições públicas.</li>
                            <li>Rápida evolução tecnológica exigindo atualização constante.</li>
                            <li>Dependência de editais ou financiamentos externos.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- LOCALIZAÇÃO -->
<section class="section-padding bg-light-custom">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- LADO ESQUERDO -->
            <div class="col-lg-5">

                <span class="section-tag">Localização</span>
                <h2 class="section-title mt-2">Onde estamos</h2>
                <p class="section-subtitle">
                    Estamos localizados no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos, um ambiente com foco em inovação e desenvolvimento tecnológico.
                </p>

                <div class="info-card mt-4">
                    <h4>Endereço</h4>
                    <p>
                  <p>
                 Av. Salgado Filho, 3501 – Centro, Guarulhos – SP, 07115-000
                </p>
                    </p>
                </div>

            </div>

            <!-- MAPA -->
            <div class="col-lg-7">
                <div class="map-responsive">
                    <iframe 
                        src="https://www.google.com/maps?q=Av+Salgado+Filho,+3501,+Guarulhos&output=embed"
                        width="100%" 
                        height="380" 
                        style="border:0; border-radius:20px;" 
                        allowfullscreen="" 
                        loading="lazy"> 
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>
    

    <!-- CONTATO -->
    <section id="contato" class="section-padding contact-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="section-tag">Contato</span>
                    <h2 class="section-title text-white mt-2">Fale conosco</h2>
                    <p class="text-light mt-3">
                        Entre em contato para conhecer nossos projetos, solicitar consultoria ou discutir soluções para
                        modernização digital.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="contact-card">
                        <form action="contato.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Assunto</label>
                                    <input type="text" class="form-control" name="assunto" placeholder="Digite o assunto"required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mensagem</label>
                                    <textarea class="form-control" name="mensagem" rows="5" placeholder="Escreva sua mensagem" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-custom w-100">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RODAPÉ -->
    <footer class="footer-custom">
        <div class="container text-center">
            <p class="mb-0">© 2026 PARSERS - Soluções Digitais para Gestão Operacional</p>
        </div>
    </footer>

    <!-- MODAL MEMBRO 1 -->
    <div class="modal fade" id="membro1Modal" tabindex="-1" aria-labelledby="membro1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="membro1ModalLabel">Carolina Siroma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="profile-top d-flex flex-column flex-md-row align-items-center align-items-md-start gap-4">
                        <img src="img/membros/carol.jpg" alt="Foto da Carol" class="profile-photo">
                        <div>
                            <h4 class="mb-2">Carolina Yumi Siroma</h4>
                            <p class="profile-function mb-3">Scrum Master</p>

                            <div class="profile-links d-flex flex-column gap-2">
                                <a href="https://www.linkedin.com/in/carolina-yumi-siroma-637320265/" target="_blank" class="profile-link">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://github.com/carolyumiS" target="_blank" class="profile-link">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="profile-section">
                        <h6><i class="bi bi-person-badge"></i> Apresentação profissional</h6>
                        <p>
                            Estudante de Engenharia da Computação com atuação em pesquisa, desenvolvimento tecnológico e
                            aplicações voltadas à automação, inteligência artificial e sistemas embarcados. Possui
                            experiência prática em laboratórios de pesquisa e forte capacidade de integrar conhecimentos de
                            hardware, software e análise de dados em soluções inovadoras.
                        </p>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-cpu"></i> Competências técnicas</h6>
                        <ul>
                            <li>Domínio das linguagens de programação Python, C, Java, PHP e JavaScript.</li>
                            <li>Experiência em desenvolvimento de aplicações Web e manipulação de banco de dados MySQL.</li>
                            <li>Conhecimento em sistemas embarcados e microcontroladores, incluindo Arduino, ESP32 e Bluepill.</li>
                            <li>Atuação com Inteligência Artificial, Aprendizado de Máquina e análise de dados.</li>
                            <li>Conhecimentos em eletrônica e estatística aplicada.</li>
                            <li>Proficiência eficaz em Inglês, nível C1.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-people"></i> Competências comportamentais</h6>
                        <ul>
                            <li>Utilização de escuta ativa para antecipar demandas e agir de forma proativa na implementação de soluções.</li>
                            <li>Forte capacidade de aprendizado e adaptabilidade a novas metodologias e cenários de mudança.</li>
                            <li>Habilidade em resolução de problemas e desenvolvimento de soluções tecnológicas.</li>
                            <li>Experiência em liderança e gestão, atuando na chefia de departamento em trabalho voluntário e na organização de eventos acadêmicos.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-briefcase"></i> Experiências relevantes</h6>
                        <ul>
                            <li>Bolsista de Iniciação Científica, FAPESP e CNPq, com foco em detecção de falhas utilizando Redes Neurais Convolucionais.</li>
                            <li>Participação no laboratório de pesquisa LADECAM, com foco em análise de falhas e automação.</li>
                            <li>Membro do Grupo de Estudos em Robótica e Sistemas Embarcados, GERSE, desenvolvendo robôs e ministrando cursos.</li>
                            <li>Colaboração no projeto de extensão IFGames para democratização de tecnologias.</li>
                            <li>Certificação em Design de Experiência do Usuário, UX, pela USP.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-lightbulb"></i> Contribuição para a startup</h6>
                        <p>
                            Dada sua formação em Engenharia da Computação e experiência prática em laboratórios de pesquisa,
                            Carolina contribui diretamente no desenvolvimento do core tecnológico, integrando hardware e
                            software, apoiando a estruturação da inteligência de dados do negócio e fortalecendo a gestão
                            organizacional do projeto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL MEMBRO 2 -->
    <div class="modal fade" id="membro2Modal" tabindex="-1" aria-labelledby="membro2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="membro2ModalLabel">Celine Galdino</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="profile-top d-flex flex-column flex-md-row align-items-center align-items-md-start gap-4">
                        <img src="img/membros/celine.jpg" alt="Foto da Celine" class="profile-photo">
                        <div>
                            <h4 class="mb-2">Celine Galdino da Silva</h4>
                            <p class="profile-function mb-3">Desenvolvedora Front-End</p>

                            <div class="profile-links d-flex flex-column gap-2">
                                <a href="https://www.linkedin.com/in/celine-galdino-ba363238a/" target="_blank" class="profile-link">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://github.com/Celineah" target="_blank" class="profile-link">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="profile-section">
                        <h6><i class="bi bi-person-badge"></i> Apresentação profissional</h6>
                        <p>
                            Estudante com interesse em programação, desenvolvimento web e construção de soluções
                            tecnológicas voltadas ao aprendizado contínuo e à colaboração em equipe. Possui perfil
                            proativo, comunicativo e analítico, contribuindo com criatividade e organização no
                            desenvolvimento de interfaces e aplicações.
                        </p>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-cpu"></i> Competências técnicas</h6>
                        <ul>
                            <li>Conhecimentos em programação e desenvolvimento web.</li>
                            <li>Experiência com as linguagens C, Java, JavaScript, HTML e CSS.</li>
                            <li>Noções básicas de Python.</li>
                            <li>Familiaridade com lógica de programação, desenvolvimento de aplicações e estruturação de interfaces web.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-people"></i> Competências comportamentais</h6>
                        <ul>
                            <li>Resiliência e persistência diante de desafios técnicos e acadêmicos.</li>
                            <li>Interesse contínuo em aprender e compartilhar conhecimento, contribuindo para ambientes colaborativos.</li>
                            <li>Boa comunicação e facilidade para trabalho em equipe.</li>
                            <li>Criatividade e pensamento analítico para resolução de problemas.</li>
                            <li>Proatividade e organização no desenvolvimento de atividades e projetos.</li>
                            <li>Empatia e colaboração, favorecendo a construção de relações profissionais positivas.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-briefcase"></i> Experiências relevantes</h6>
                        <ul>
                            <li>Participação no projeto de extensão IFGames do IFSP Guarulhos, voltado à disseminação de tecnologia e desenvolvimento de projetos na área de computação.</li>
                            <li>Colaboração na organização de palestras e atividades durante a Semana do Conhecimento do IFSP, contribuindo para a promoção de eventos acadêmicos e troca de conhecimento.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-lightbulb"></i> Contribuição para a startup</h6>
                        <p>
                            Com conhecimentos em programação e desenvolvimento web, aliados a uma postura proativa,
                            curiosidade intelectual e forte interesse em aprender e ensinar, Celine contribui no
                            desenvolvimento de soluções tecnológicas, no trabalho colaborativo em equipe e no aprimoramento
                            contínuo dos projetos desenvolvidos pelo grupo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL MEMBRO 3 -->
    <div class="modal fade" id="membro3Modal" tabindex="-1" aria-labelledby="membro3ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="membro3ModalLabel">Diogo Almeida</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <div class="profile-top d-flex flex-column flex-md-row align-items-center align-items-md-start gap-4">
                        <img src="img/membros/diogo.jpg" alt="Foto de Diogo da Silva Almeida" class="profile-photo">
                        <div>
                            <h4 class="mb-2">Diogo da Silva Almeida</h4>
                            <p class="profile-function mb-3">Desenvolvedor Back-End</p>

                            <div class="profile-links d-flex flex-column gap-2">
                                <a href="https://br.linkedin.com/in/diogo-da-silva-almeida" target="_blank" class="profile-link">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://github.com/diogoalmeida34" target="_blank" class="profile-link">
                                    <i class="bi bi-github"></i> GitHub
                                </a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="profile-section">
                        <h6><i class="bi bi-person-badge"></i> Apresentação profissional</h6>
                        <p>
                            Estudante de Engenharia da Computação com atuação em pesquisa, desenvolvimento tecnológico
                            e aplicações voltadas à automação, inteligência artificial e sistemas embarcados. Possui
                            experiência prática em laboratórios de pesquisa e forte capacidade de integrar conhecimentos
                            de hardware, software e análise de dados no desenvolvimento de soluções tecnológicas
                            inovadoras.
                        </p>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-cpu"></i> Competências técnicas</h6>
                        <ul>
                            <li>Domínio das linguagens de programação Python, C, Java, PHP e C#.</li>
                            <li>Experiência em desenvolvimento de aplicações Web e manipulação de banco de dados MySQL.</li>
                            <li>Conhecimento em sistemas embarcados e microcontroladores, incluindo Arduino, ESP32 e Bluepill.</li>
                            <li>Atuação com Inteligência Artificial, Aprendizado de Máquina e análise de dados.</li>
                            <li>Conhecimentos em eletrônica e estatística aplicada.</li>
                            <li>Experiência com computação em nuvem e serviços de dados.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-people"></i> Competências comportamentais</h6>
                        <ul>
                            <li>Utilização de escuta ativa para antecipar demandas e agir de forma proativa na implementação de soluções.</li>
                            <li>Forte capacidade de aprendizado e adaptabilidade a novas metodologias e cenários de mudança.</li>
                            <li>Habilidade em resolução de problemas e desenvolvimento de soluções tecnológicas.</li>
                            <li>Capacidade de liderança e organização de atividades em projetos acadêmicos e tecnológicos.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-briefcase"></i> Experiências relevantes</h6>
                        <ul>
                            <li>Bolsista de Iniciação Científica com foco em detecção de falhas em rolamentos utilizando Redes Neurais e análise de sinais de vibração.</li>
                            <li>Participação em laboratório de pesquisa voltado à análise de falhas e automação industrial.</li>
                            <li>Desenvolvimento de projetos acadêmicos envolvendo Inteligência Artificial, IoT e sistemas embarcados.</li>
                            <li>Publicação de artigo científico e participação em eventos acadêmicos de tecnologia e inovação.</li>
                        </ul>
                    </div>

                    <div class="profile-section">
                        <h6><i class="bi bi-lightbulb"></i> Contribuição para a startup</h6>
                        <p>
                            Com formação em Engenharia da Computação e experiência em projetos de pesquisa e inovação,
                            Diogo contribui diretamente para o desenvolvimento do núcleo tecnológico da PARSERS,
                            integrando hardware e software, apoiando a arquitetura das soluções tecnológicas e
                            participando da implementação de sistemas inteligentes baseados em dados. Sua atuação
                            fortalece o desenvolvimento técnico dos projetos e a evolução das soluções propostas
                            pela startup.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'enviado'): ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Mensagem enviada!',
        text: 'Recebemos sua mensagem com sucesso.',
        timer: 2500,
        showConfirmButton: false
    });

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.pathname);
    }
    </script>
    <?php endif; ?>


    <?php if (isset($_GET['status']) && $_GET['status'] === 'erro'): ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Erro ao enviar',
        text: 'Ocorreu um problema ao enviar sua mensagem. Tente novamente.',
        confirmButtonText: 'OK'
    });

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.pathname);
    }
    </script>
    <?php endif; ?>
</body>
</html>