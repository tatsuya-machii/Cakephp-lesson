<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->Html->css('base.css'); ?>
    <!-- <link rel="stylesheet" href="../css/base.css?v=2"> -->
    <?php echo $this->Html->css('views.css?v=2'); ?>
    <!-- <link rel="stylesheet" href="../css/views.css?v=2"> -->
    <title>JOBPOP</title>
    <script type="text/javascript" src="../js/jquery.js"></script>
  </head>
  <body>
  <header>
    <img src="../img/logo.png" alt="企業ロゴ">
    <ul id="nav">
      <li><a href="index">Home</a></li>
      <li><a href="about">What's</a></li>
      <li><a href="company">Company</a></li>
      <li><a href="recruit">Recruit</a></li>
      <li><a href="qa_index">Q&A</a></li>
      <li><a href="access">Access</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="contact">Contact</a></li>
    </ul>
  </header>

  <?= $this->fetch('content') ?>

  </body>
  <footer>
    <div id="footer_link">
      <a href="#">Powerd SIGNAL Co.Ltd</a>
    </div>
  </footer>
</html>
