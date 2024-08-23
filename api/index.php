<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-light">Site Theme: Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
    <?php
    include("sideBar.php");
    ?>

    <div id="mainBox">
        <img src="./assets/images/hands.jpg" alt="">

        <div id="accountBar">
            <h3>My account >></h3> <br>
            <h3>UserName: Larry111</h3> <br>
            <h3>VIEW CERTIFICATE</h3> <br>
            <h3>MAKE A TOPIC</h3> <br>
            <h3>UPDATE PROFILE</h3> <br>
            <h3>CALL SITE MGR.</h3> <br>
            <h3>LOGOUT</h3>
        </div>
    </div>
    <div id="SearchBar">
        <div id="searchBox">
            <h1>
                Search:
            </h1>
            <select name="other" id="other">
                <option value="Other">Other</option>
                <option value="hello">Hello</option>
                <option value="hello2">Hello2</option>
            </select>
            <h1> OR </h1>
            <input type="text" placeholder="Domain">
            <button id="searchBtn" onclick="sound.play()"> Search </button>
        </div>
    </div>

    <div class="container">
        <main>
            <aside class="left-sidebar">
                <section class="top-stories">
                    <div class="top-stories-header">
                        <h2>Top Stories</h2>
                    </div>
                    <div class="story-content">
                        <p>Our 21st century objective is to glorify God at Romans 15:6 on a day named Preach1 Day</p>
                        <a href="#">About Us</a>
                        <p>The divine message for a Preach1 Foundation came in January 2000. The ministry went public January 1, 2010.</p>
                    </div>
                </section>


            </aside>

            <section class="results">
                <?php
                include("index.php");
                ?>
            </section>
        </main>
    </div>

</html>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>