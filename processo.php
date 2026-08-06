<?php
  // Título e variáveis declaradas ANTES do HTML para evitar erros
  $pageTitle = "Portal de Receitas - Progresso do Projeto";
  $siteTitle = $pageTitle; 
  $currentYear = date("Y");

  // Estrutura de dados para o progresso do projeto
  $etapas = [
    [
      "titulo" => "Front-End",
      "porcentagem" => 85,
      "descricao" => "..."
    ],
    [
      "titulo" => "Back-End",
      "porcentagem" => 20,
      "descricao" => "..."
    ],
    [
      "titulo" => "Banco de Dados",
      "porcentagem" => 25,
      "descricao" => "..."
    ],
    [
      "titulo" => "Design UI/UX",
      "porcentagem" => 80,
      "descricao" => "Paleta de cores e tipografia definidas. Layout responsivo em testes"
    ]
  ];

  // Estrutura de dados para a galeria / prévias
  $previas = [
    [
      "titulo" => "Home page",
      "descricao" => "A página inicial foi pensada para simplificar a navegação, especialmente para usuários com pouca familiaridade com tecnologia.",
      "imagem" => "Imagens/Portal Receitas/Home.png",
      "alt" => "Home"
    ],
    [
      "titulo" => "Área de cadastro",
      "descricao" => "Na área de cadastro de receitas, a ideia é reduzir o esforço do usuário com atalhos que permitam registrar tudo em poucos cliques.",
      "imagem" => "Imagens/Portal Receitas/Cadastro.png",
      "alt" => "Cadastro"
    ],
    [
      "titulo" => "Home/Culinarista",
      "descricao" => "Página voltada para facilitar o trabalho diário, focada em fluxos rápidos e fichas otimizadas.",
      "imagem" => "Imagens/Portal Receitas/Homepage_Culinarista.png",
      "alt" => "Culinarista"
    ]
  ];

  // Estrutura de dados da equipe
  $equipe = [
    ["nome" => "Eduardo Martino", "link" => "#"],
    ["nome" => "Andre Nonaka", "link" => "#"],
    ["nome" => "Guilherme Hinori", "link" => "#"],
    ["nome" => "Maria Julia", "link" => "#"]
  ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>

  <!-- CSS Único com versão para forçar atualização do navegador -->
  <link rel="stylesheet" href="Css/style.css?v=99" />
</head>
<body>

  <!-- Barra superior -->
  <div class="topbar"></div>

  <!-- HERO -->
  <header class="hero">
    <h1>Portal de Receitas</h1>
    <p>Conectando clientes e fornecedores de forma rápida e prática.</p>
  </header>

  <!-- PROGRESSO -->
  <section class="progress-section">
    <h2>Andamento do Projeto</h2>

    <?php foreach ($etapas as $etapa): ?>
      <div class="progress-card">
        <h3><?php echo $etapa['titulo']; ?> <span class="percent"><?php echo $etapa['porcentagem']; ?>%</span></h3>
        <div class="progress-bar">
          <div class="progress-fill" style="width: <?php echo $etapa['porcentagem']; ?>%;"></div>
        </div>
        <p><?php echo $etapa['descricao']; ?></p>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- GALLERY -->
  <section class="gallery">
    <h2>Prévia do Projeto</h2>

    <?php foreach ($previas as $previa): ?>
      <div class="preview-card">
        <div class="text">
          <h3><?php echo $previa['titulo']; ?></h3>
          <p><?php echo $previa['descricao']; ?></p>
          <button class="view-btn" data-img="<?php echo $previa['imagem']; ?>">Visualizar imagem</button>
        </div>
        <img src="<?php echo $previa['imagem']; ?>" alt="<?php echo $previa['alt']; ?>">
      </div>
    <?php endforeach; ?>
  </section>

  <!-- MODAL -->
  <div id="imgModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImg">
  </div>

  <!-- TEAM -->
  <section class="team">
    <h2>Equipe de Desenvolvimento</h2>

    <div class="team-members">
      <?php foreach ($equipe as $membro): ?>
        <a href="<?php echo $membro['link']; ?>" class="member" target="_blank">
          <div class="icon"></div>
          <span class="name"><?php echo $membro['nome']; ?></span>
          <span class="link">Ver Portfólio →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© <?php echo $currentYear; ?> Portal de Receitas | Em desenvolvimento</p>
  </footer>

  <script src="JavaScript/script.js"></script>

</body>
</html>