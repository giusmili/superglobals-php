
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP : Create navigation by get</title>
    <link rel="shortcut icon" href="./asset/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./font/stylesheet.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset.css">
</head>
<body>
    <header>
        <h1>PHP : Create navigation by get</h1>
    </header>
    <main>
      
    <section class="content-logo">
        

            <h2>Langages web</h2>
            <ul>
                <li>
                    <figure>
                        <img src="./asset/css_original_wordmark_logo_icon_146576.png" alt="css">
                        <figcaption>
                            <h3>
                               <a href="index.php?page=1">Css</a>
                            </h3>
                            <!--link for page-->
                          
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/logo.png" alt="html logo">
                        <figcaption>
                            <h3><a href="index.php?page=2">Html</a></h3>
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/java_original_wordmark_logo_icon_146459.png" alt="Java">
                        <figcaption>
                            <h3>
                                <a href="index.php?page=3">Java</a>
                            </h3>
                       
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/python_original_wordmark_logo_icon_146382.png" alt="Python logo">
                        <figcaption>
                            <h3>Python</h3>
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/git_original_wordmark_logo_icon_146510.png" alt="Git logo">
                        <figcaption>
                            <h3>Git</h3>
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/mongodb_original_wordmark_logo_icon_146425.png" alt="Mongo DB">
                        <figcaption>
                            <h3>Mongo DB</h3>
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="./asset/file_type_vue_icon_130078.png" alt="Vue js">
                        <figcaption>
                            <h3>Vue js</h3>
                            <!--link for page-->
                        </figcaption>
                    </figure>
                </li>
            </ul>

        </section>
        <section>
            <h2>Les infos</h2>
           
                  <!-- gestion du get -->
                <?php
                    include_once "./src/page.inc.php";
                ?>
                  <!-- gestion du get end -->           
        </section>
    </main>
</body>
</html>