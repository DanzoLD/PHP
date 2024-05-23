<body>

      <?php
      if (!isset ($WebsiteLanguage))
      {
         $WebsiteLanguage = "English";
      }

      if ($WebsiteLanguage = "English")
      {
        $HomeButton ="Home";
        $NewsButton ="News";
        $SignButton ="Sign";
        $MoreButton ="More";
        $LeagueButton ="League";
        $TanksButton ="Tanks";
        


      }
      if (($WebsiteLanguage = "French"))
      {
        $HomeButton = "Accueil";
        $NewsButton ="Actualité";
        $SignButton ="Connexion";
        $MoreButton ="Contenue";
        $LeagueButton ="ESport";
        $TanksButton ="Chars";
        
      }
      ?>
         <header id="myHeader">
         
         <h1><b>World Of Tank</b></h1>
         <nav>
            <a href='index.html'><?php echo $HomeButton; ?></a>
            <a href='fr/news.html'><?php echo $NewsButton; ?></a>
            <a href='fr/sign.html'><?php echo $SignButton; ?></a>
            <a href='fr/more.html'><?php echo $MoreButton; ?></a>
            <a href='fr/league.html'><?php echo $LeagueButton; ?></a>
            <a href='fr/tanks.html'><?php echo $TanksButton; ?></a>
         </nav>
         </header>
</body>