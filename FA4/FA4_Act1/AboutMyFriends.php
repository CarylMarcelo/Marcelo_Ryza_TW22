<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Friends Blog</title>
    <link rel="stylesheet" href="MyFriends.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
                <h1>Ryza's Friendship Journal</h1>
                <p>A personal space for my closest circle.</p>
            </div>
            <nav>
                <ul>
                    <li><a href="AboutMyFriends.php?page=home">Home</a></li>
                    <li><a href="AboutMyFriends.php?page=friend1">Friend 1</a></li>
                    <li><a href="AboutMyFriends.php?page=friend2">Friend 2</a></li>
                    <li><a href="AboutMyFriends.php?page=friend3">Friend 3</a></li>
                    <li><a href="AboutMyFriends.php?page=friend4">Friend 4</a></li>
                    <li><a href="AboutMyFriends.php?page=friend5">Friend 5</a></li>
                </ul>
            </nav>
        </header>

        <?php 
            // Determine current page state
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        ?>

        <main class="main <?php echo ($page !== 'home') ? 'full-width' : ''; ?>">
            
            <?php if ($page == 'home'): ?>
                <div class="side-gallery left-gallery">
                    <img src="images/Amoment1.jpg" alt="Memory 1">
                    <img src="images/JMoment1.jpg" alt="Memory 2">
                    <img src="images/Smoment1.jpg" alt="Memory 3">
                </div>
            <?php endif; ?>

            <div class="content-area">
                <?php 
                    if ($page == 'home') {
                        ?>
                        <article class="blog-post">
                            <h2>The True Gift of Friendship</h2>
                            <p>Friendship is one of life's most invaluable treasures. 
                                It provides a safe space where we can be entirely ourselves, 
                                offering a beautiful blend of shared joy, mutual support, and quiet understanding. 
                                True friends act as anchors during turbulent times and cheerleaders during moments of success.</p>
                        </article>

                        <article class="blog-post">
                            <h2>How I Found My Circle</h2>
                            <p>I found my circle of friends across different chapters of my academic and personal life. 
                                Some came into my world through late-night study sessions, others completely by chance during complex group 
                                projects, and a few through shared quiet spaces. 
                                <h3>Click the navigation links above to know how I meet my lifetime friendss!!!</h3></p>
                        </article>
                        <?php
                    } 
                    else if ($page == 'friend1') { include("friend1.php"); } 
                    else if ($page == 'friend2') { include("friend2.php"); } 
                    else if ($page == 'friend3') { include("friend3.php"); } 
                    else if ($page == 'friend4') { include("friend4.php"); } 
                    else if ($page == 'friend5') { include("friend5.php"); } 
                    else {
                        echo "<h2>Page Not Found</h2>";
                    }
                ?>
            </div>

            <?php if ($page == 'home'): ?>
                <div class="side-gallery right-gallery">
                    <img src="images/Amoment2.jpg" alt="Memory 4">
                    <img src="images/Jmoment2.jpg" alt="Memory 5">
                    <img src="images/Vmoment2.jpg" alt="Memory 6">
                </div>
            <?php endif; ?>
            
        </main>

        <footer>
            <p>My Personal Friendship Blog &copy; <?php echo date("Y"); ?></p>
        </footer>
    </div>
</body>
</html>