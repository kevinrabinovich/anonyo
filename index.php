<html>
    <head>
        <title>AnonYo | Anonymously Yo anyone</title>
        <style>
            @font-face {
    font-family: 'montserratregular';
    src: url('Montserrat-Regular-webfont.eot');
    src: url('Montserrat-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('Montserrat-Regular-webfont.woff') format('woff'),
         url('Montserrat-Regular-webfont.ttf') format('truetype'),
         url('Montserrat-Regular-webfont.svg#montserratregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
            * {
                font-family: "montserratregular", Helvetica, "Helvetica Neue", Arial, sans-serif;
                margin: 0 auto;
                text-align: center;
                color: white;
                background: #333;
            }
            input {
                margin-top: 3rem;
                font-size: 5rem;
                background: #9B59B6;
                border: none;
                border-radius: none;
                
                padding: 3rem;
                color: white;
            }
            input[type='submit'] {
                border-radius: 0;
                margin-left: 3rem;
            }
            html, body{
                font-size:10px;
            }
            h1 {
                font-size: 20rem;
                display:block;
                margin: 0 auto;
                text-align: center;
            }
            h2 {
                font-size: 5rem;
                text-align: center;
            }
            h3 {
                font-size: 3rem;
                line-height: 5rem;
                color: inherit;
                background: inherit;
            }
            
            .alert{
                margin-top: 3rem;
                margin-bottom: 3rem;
                padding: 3rem;
                background: white;
                color: #333;
            }
            .container {
                margin: 20rem 5rem 0 5rem;
                height: 100%;
                width: 80%;
                margin: 0 auto;
            }
            .username {
                text-transform: lowercase;
                font-variant: small-caps;
                background: inherit;
                color: inherit;
                font-size: 5rem;
                line-height: inherit;
            }
            footer {
                margin-top: 5rem;
                font-size: 3rem;
            }
            @media (max-width:100rem) {
                html, body{
                    font-size:8px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
        <h1>AnonYo</h1>
        <h2>Ever wanted to anonymously<br>Yo something off your chest?</h2>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo'<div class="alert"><h3><span class="username">ANONYO</span> just Yo\'d <span class="username">';
            echo $_SESSION['username'];
            echo '</span>.</h3></div>';
            unset($_SESSION['username']);
        }
        ?>
        <form action="processyoyo.php" method="post">
            <input type="text" name="username" placeholder="Username" autofocus required>
            <input type="submit" value="Yo">
        </form>
        <footer>Made by <a href="http://kevinrabinovich.me">Kevin Rabinovich</a>.</footer>
        </div>
    </body>
</html>