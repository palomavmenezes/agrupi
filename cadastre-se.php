<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Agrupi | Gestão de Relacionamento - Cadastre sua Instituição</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Data Cartês
    Theme URL: datacartes.com.br
    Author: Paloma Menezes
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">INÍCIO</a></li>
          <li class="btn btn-secondary active" style="background: #3B9CEA; border-radius: 10px; padding: 0; border: 0;"><a href="cadastre-sua-instituicao.php" style="color: #fff;">CADASTRE SUA INSTITUIÇÃO</a></li>
          <li><a href="solucoes.php">SOLUÇÕES</a></li>
          <li><a href="como-funciona.php">COMO FUNCIONA</a></li>
          <li><a href="quanto-custa.php">QUANTO CUSTA</a></li>
          <li><a href="login.php" style="color: #449CB7;"> <ion-icon name="person" style="size: 30px;"></ion-icon> FAÇA SEU LOGIN</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
<section id="login" class="clearfix">
    <div class="container">
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Formulário de Cadastro
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
        <div id="cadastrar-se" class="col-md-12 col-md-auto form-cadastrar form-cadastro">
          <div class="col-md-12 col-md-auto title-cadastre-se">
            <h3>Cadastrar-se</h3>
          </div>

          <div class="col-md-6 col-md-auto form-cadastre-se">
            <form>
              <div class="form-row">
                <div class="col-md-7">
                  <input type="text" class="form-control" placeholder="Nome da Instituição" required="true">
                </div>
                <div class="col-md-5">
                  <input type="text" class="form-control" placeholder="Sigla" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="E-mail" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Razão Social" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-7">
                  <input type="tel" class="form-control phone-ddd-mask" placeholder="Telefone" required="true">
                </div>
                <div class="col-md-5">
                  <input type="number" class="form-control" placeholder="CNPJ" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Nome do Responsável" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <select id="inputEstado" class="form-control">
                    <option selected>Área de Atuação</option>
                    <option>Publicidade e Propaganda</option>
                    <option>Administração</option>
                    <option>Contabilidade</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12">
                  <h3 class="descreva-associacao">Descreva sua associação</h3>
                    <textarea class="form-control" placeholder="Escreva aqui..." required style="min-height: 130px;"></textarea>
                </div>
              </div>

              </form>
          </div>

          <div class="col-md-6 col-md-auto form-cadastre-se">
            <form>
              <div class="form-row">
                <div class="col-md-12">
                  <input type="text" class="form-control" id="addressLine1" placeholder="Logradouro" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="addressLine2" placeholder="Número" required="true">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Complemento" required="true">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Bairro" required="true">
                </div>
                <div class="col-md-6">
                  <select id="inputEstado" class="form-control">
                    <option selected>UF</option>
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
                    <option value="EX">Estrangeiro</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="inputCity" required="true" placeholder="Cidade">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="inputCEP" placeholder="CEP">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="inputEmail4" required="true" placeholder="E-mail do Responsável">
                </div>
                <div class="col-md-6">
                  <input type="text" minlength="11" maxlength="11" class="form-control" onkeypress="$(this).mask('000.000.000-00');" placeholder="CPF do Responsável">
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6">
                  <input type="text" maxlength="14" class="form-control phone-ddd-mask" id="example-input-7" required="true" placeholder="Telefone do Responsável">
                </div>
                <div class="col-md-6">
                  <select id="inputEstado" class="form-control">
                    <option selected>Área de Atuação</option>
                    <option>Publicidade e Propaganda</option>
                    <option>Administração</option>
                    <option>Contabilidade</option>
                  </select>
                </div>
              </div>

              <div class="form-row enviar-fotos">
                <div class="col-md-4 col-md-auto logo-file">
                  <label for="exampleFormControlFile1" class="title-enviar">Logo</label>
                  <img src="img/foto-logo.png" height="150px" align="center">
                  <div class="fileUpload btn btn-primary">
                    <span class="enviar-capa">Escolher logo</span>
                  <input type="file" class="upload">
                  </div>
                </div>
                <div class="col-md-8 col-md-auto capa-file">
                  <label for="exampleFormControlFile1" class="title-enviar">Foto de Capa</label>
                  <img src="img/foto-capa.png" height="150px">
                  <div class="fileUpload btn btn-primary">
                    <span class="enviar-capa">Escolher capa</span>
                  <input type="file" class="upload">
                  </div>
                </div>
              </div>

              </form>
          </div>

          <form class="botao-cadastrar">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>

      </div>
    </div>
  </div>
</section>
</main>
  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Agrupi</strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        Desenvolvido por <a href="https://datacartes.com.br/">Data Cartês</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <script type="text/javascript">
    
    /**
 * Função para validar CNPJ usando bootstrapvalidator
 * Baseado na função para validação de CPF encontrada em:
 * https://github.com/nghuuphuoc/bootstrapvalidator/issues/187
 * usando a implementação da validação para CNPJ encontrada em:
 * http://www.fernandowobeto.com/blog/plugin-jquery-validacao-cnpj/
 * 
 */
(function(e) {
    e.fn.bootstrapValidator.validators.cnpjVal = {
        html5Attributes: {
            message: "message"
        },
        validate: function(e, t, n) {
            var r = t.val();
            if (r == "") {
                return true
            }
            r = r.replace(".", "");
            r = r.replace(".", "");
            cnpj = r.replace("-", "");
            cnpj = r.replace("/", "");
            
            while (cnpj.length < 14)
              cnpj = "0" + cnpj;
            
            var z = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
            var s = [6,5,4,3,2,9,8,7,6,5,4,3,2];
            var o = [];
            var u = new Number;

            for (i = 0; i < 12; i++) {
                o[i] = cnpj.charAt(i);
                u += o[i] * s[i+1];
            }
            
            if ((x = u % 11) < 2) {
                o[12] = 0
            } else {
                o[12] = 11 - x
            }
            u = 0;
            
            for (y = 0; y < 13; y++)
                u += o[y] * s[y];
            
            if ((x = u % 11) < 2) {
                o[13] = 0
            } else {
                o[13] = 11 - x
            }
            
            if (cnpj.charAt(12) != o[12] || cnpj.charAt(13) != o[13] || cnpj.match(z))
                return false;
            return true
        }
    }
})(window.jQuery);

  </script>

</body>
</html>
