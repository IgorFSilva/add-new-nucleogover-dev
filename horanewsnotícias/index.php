<!DOCTYPE html>
<html>

<head>
  <title>Horas News Notícias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <script src="https://kit.fontawesome.com/68bc6374d5.js" crossorigin="anonymous"></script>
  <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <section>
    <div class="center1">
      <div class="topo">
        <header>
          <div class="container11">
            <ul class="my-desktop">
              <div class="left">
                <li class="text-align: left"><a href="">PÁGINA INICIAL</a></li>
              </div>
              <div class="rigth">
                <i class="fa-brands fa-accessible-icon"></i>
                <li><a href="">ACESSIBILIDADE</a></li>
              </div>
            </ul>
            <div class="my-mobile">
              <i class="fa-solid fa-align-right"></i>
              <ul>
                <div>
                  <li><a href="">PÁGINA INICIAL</a></li>
                </div>
                <div>
                  <li><a href="">ACESSIBILIDADE</a></li>
                </div>
              </ul>
            </div>
          </div>
        </header>
      </div>
      <div class="clear"></div>
        <div class="wpm">
          <h1>
            <span class="uppercase"><strong>Hora News</strong></span>
            <span class="uppercase not-bold">Notícias</span>
          </h1>
        </div>
      </div>
    </section>
    <section>
      <div class="glow">
        <div class="container">
          <div class="upt">
            <h2>Últimas Notícias</h2>
            <div class="bi">
              <button>Ver todas as notícias</button>
              <i class="fa-solid fa-layer-group"></i>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <img src="img/001.png" alt="Imagem do Card" />
              <div class="card-content">
                <p>21 AGO 2022</p>
                <h3>Lorem ipsum dolor sit amet, consectetur ohmat adipiscing elit, sed do eiusmod tempor</h3>
                <button>leia mais</button>
              </div>
            </div>
            <div class="card">
              <img src="img/002.png" alt="Imagem do Card" />
              <div class="card-content">
                <p>21 AGO 2022</p>
                <h3>Eta dolore magna aliqua. Ut enim ad minim veniam</h3>
                <button>leia mais</button>
              </div>
            </div>
            <div class="card">
              <img src="img/003.png" alt="Imagem do Card" />
              <div class="card-content">
                <p>21 AGO 2022</p>
                <h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</h3>
                <button>leia mais</button>
              </div>
            </div>
            <div class="card">
              <img src="img/004.png" alt="Imagem do Card" />
              <div class="card-content">
                <p>21 AGO 2022</p>
                <h3>Excepteur sint occaecat cupidatat non proident</h3>
                <button>leia mais</button>
              </div>
            </div>
            <!-- Adicione mais posts aqui -->
          </div>
        </div>
      </div>
      <!-- paginação dos Posts -->
      <div class="pagination">
        <div class="arrow ar-1" onclick="previousPage()">&laquo;</div>
        <div class="number" onclick="goToPage(1)">1</div>
        <div class="number">2</div>
        <div class="number">3</div>
        <div class="number">4</div>
        <div class="dots">...</div>
        <div class="number">28</div>
        <div class="arrow ar-2" onclick="nextPage()">&raquo;</div>
      </div>
      <script>
        var postsPerPage = 4; // Número de posts por página
        var totalPosts = document.getElementsByClassName("ntcards").length;
        var totalPages = Math.ceil(totalPosts / postsPerPage);
        var currentPage = 1;

        function showPage(pageNumber) {
          var cards = document.getElementsByClassName("ntcards");
          for (var i = 0; i < cards.length; i++) {
            if (i >= (pageNumber - 1) * postsPerPage && i < pageNumber * postsPerPage) {
              cards[i].style.display = "block";
            } else {
              cards[i].style.display = "none";
            }
          }
        }

        function generatePageNumbers() {
          var pageNumbersContainer = document.getElementById("pageNumbers");
          var pageNumbersHTML = "";

          if (totalPages > 0) {
            for (var i = 1; i <= totalPages; i++) {
              pageNumbersHTML += '<div class="number" onclick="goToPage(' + i + ')">' + i + '</div>';
            }
            pageNumbersContainer.style.display = "block";
          } else {
            pageNumbersContainer.style.display = "none";
          }

          pageNumbersContainer.innerHTML = pageNumbersHTML;

        }

        function previousPage() {
          if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updatePagination();
          }
        }

        function nextPage() {
          if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
            updatePagination();
          }
        }

        function updatePagination() {
          var numbers = document.getElementsByClassName("number");
            for (var i = 0; i < numbers.length; i++) {
            if (parseInt(numbers[i].textContent) === currentPage) {
            numbers[i].classList.add("current");
            } else {
              numbers[i].classList.remove("current");
            }
          }
        }

        function goToPage(pageNumber) {
          currentPage = pageNumber;
          showPage(currentPage);
          updatePagination();
        }
          // Inicialmente, mostrar a primeira página e gerar os números da página
        showPage(currentPage);
        generatePageNumbers();

      </script>
    </section>
    <footer>
      <div class="center2">
        <div class="text3">
          <p class="itensf">Copyright Hora News Notícias</p>
          <i class="fa-brands fa-accessible-icon"></i>
          <li class="itensf"><a href="">ACESSIBILIDADE</a></li>
        </div>
      </div>
    </footer>
    <!-- script com menu mobile hamburger -->
    <script src="js/jquery.js"></script>
    <script>
      $('.my-mobile i').click(function () {
      $('.my-mobile').find('ul').slideToggle();
      })

    </script>
  </body>
</html>