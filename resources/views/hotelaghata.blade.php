<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <title>HospedaAngola</title>
  <!-- ESTILO -->
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #000000;
      color: white;
      padding: 50px 20px;
      text-align: center;
    }

    header h1 {
      margin-bottom: 10px;
      font-size: 36px;
    }

    header p {
      font-size: 18px;
      margin-bottom: 25px;
    }

    button {
      background-color: #ffffff;
      color: #000205;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      font-weight: bold;
    }

    button:hover {
      background-color: #e6e6e6;
    }

    section {
      background-color: white;
      margin: 30px auto;
      padding: 30px;
      max-width: 1000px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    section h2 {
      color: hsl(0, 33%, 1%);
      margin-bottom: 15px;
      border-bottom: 2px solid #0b0808;
      display: inline-block;
      padding-bottom: 5px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      padding: 8px 0;
      font-size: 16px;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }

    .card {
      background-color: #f8f9fa;
      flex: 1;
      min-width: 220px;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      border-left: 5px solid #050404;
    }

    .card h3 {
      margin-bottom: 10px;
      color: #000000;
    }

    .faq h4 {
      margin-top: 20px;
      color: #333;
    }

    .cta {
      text-align: center;
      background-color: #080606;
      color: white;
    }

    .cta h2 {
      color: white;
      border: none;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #222;
      color: #ccc;
      font-size: 14px;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>

  <!-- CABEÇALHO -->
  <h1>Bem-Vindo ao Hotel Aghata</h1>
  <header>
    <h1>Bem-Vindo ao Hotel Aghata</h1>
    <h3>Saiba mais sobre o Hotel Aghata</h3>
  </header>
  <!-- FAQ -->
  <section class="informações">
    <h2>informações sobre o Hotel Aghata</h2>


    <h4> Agatha Hotel é um hotel localizado em Luanda, Angola, no Morro Bento II, com uma classificação média de 3,4
      estrelas com base em 369 avaliações.</h4>

    <!-- SOBRE O SISTEMA -->
    <section>
      <h2> Comodidades de Serviços</h2>
      <p> O hotel dispõe de uma variedade de acomodações para garantir uma estadia confortável e conveniente.</p>
    </section>
    <!-- FUNCIONALIDADES -->
    <section>
      <h2>Funcionalidades</h2>

      <div class="cards">
        <div class="card">
          <h3>Alojamento</h3>
          <p> As acomodações incluem quartos climatizados. Embora os tipos de quarto específicos não sejam detalhados
            para a localização de Luanda em todas as fontes,
            <br> menções gerais em fontes de hotelaria incluem quartos duplos, triplos e familiares.
            <br>Algumas avaliações mencionam a possibilidade de apartamentos T2 com cozinha.
          </p>
        </div>

        <div class="card">
          <h3>Restaurante e Bar</h3>
          <p>Restaurante no local: Serve pequeno-almoço (café da manhã), almoço e jantar. <br>
            As opiniões sobre a qualidade da comida são mistas.
            Bar: Um bar disponível no local. Note que um hóspede mencionou que os preços eram caros.</p>
        </div>

        <div class="card">
          <h3>Bem-estar e Lazer</h3>
          <p> Piscina: O hotel dispõe de uma piscina para os hóspedes.
            Restaurante: Um restaurante está disponível no local, oferecendo opções de refeições.
            Televisão com canais ao vivo: Os quartos possuem entretenimento televisivo para os hóspedes.
            Outras Comodidades: O hotel também oferece acesso Wi-Fi gratuito e quartos climatizados para garantir o
            conforto dos hóspedes.

          </p>
        </div>


        <div class="card">
          <h3>Acessibilidade</h3>
          <p>Acessibilidade para cadeira de rodas (elevador, entrada e estacionamento acessíveis).</p>
        </div>

        <div class="card">
          <h3> Avaliações</h3>
          <p>
            Com base em avaliações, o hotel é frequentemente elogiado pela sua localização,<br>
            limpeza e atendimento simpático dos funcionários, embora um hóspede tenha notado problemas com o ar
            condicionado
            num quarto específico.
          </p>
        </div>
        <!-- MELHORES Ilustrações-->
        <section>
          <h2>Imagens</h2>
          <div class="card">
            <img src="306006528_602567738114096_8304626756449172484_n.jpg" alt="400px" width="700px">
            <h3>Serviços Diferenciados</h3>
            <p>Recepção 24h por 24h com staff multilíngue.</p>
          </div>
        </section>
        <div class="card">
          <img src="306006528_602567738114096_8304626756449172484_n.jpg" alt="400px" width="700px">
          <img src="482087842_9342321312525895_4422932538872019609_n.jpg" alt="400px" width="700px">
          <h3>Instalações e Áreas de Lazer</h3>
          <p>Equipamentos luxuosos e de alta qualidade.</p>
        </div>
    </section>
    <!-- Video -->
    <section>
      <h2>Ilustração da parte interior</h2>
      <video src=""> </video>

      <!-- Mais informações -->
      <section class="cta">
        <h2> <button> <a href="Home.html">Voltar para página inicial</a></button></h2>
      </section>
      <!-- FAQ -->
      <section class="informações">
        <h2>O hotel está situado na Avenida 21 de Janeiro, Morro Bento II, Luanda.
          <br>
          Telefone principal: +244 917 011 245 <br>
          Telefone alternativo: +244 935 929 738</h4>
      </section>
      <!-- RODAPÉ -->
      <footer>
        <p>
          Plataforma web de comparação de serviços de Hospedagens <br>
          Projeto Académico (TCC) <br>
          Desenvolvido por: <strong>Gabriel Vicente,</strong>
          <strong>Franscisco Kavindenda,</strong>
          <strong>Joaquim Ambrósio,</strong>
          <strong>Moisés Quitanda e</strong>
          <strong>Paulo Sapalo</strong>


        </p>
      </footer>

</body>

</html>