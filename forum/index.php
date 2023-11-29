
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Page</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="index.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="about.html">about</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>


</header>

<!-- header section ends -->

<!-- forum starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Technical Online</span> Discussion Forum </h1>

    <div class="row">

        <form name= forum method="post" action="process_form.php"> 
        
        <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="name" placeholder="name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-comment-alt"></span>
                <input name="message" placeholder="type your message" required>
            </div>
            <input type="submit" value="Send" class="btn">
        </form>

    </div>

</section>

<!-- forum ends -->


<!-- display section starts -->
<section class="display" id="display">

<h2 class="heading"> Display Data </h2>

<div class="row">

    <?php
    // Include the database connection file
    include 'dbConfig.php';

    // Select data from the database
    $sql = "SELECT * FROM forumMessage";
    $result = $db->query($sql);

    if (!$result) {
        die("Error retrieving data: " . $db->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>Email: " . htmlspecialchars($row['email']) . "</p>";
            echo "<p>Message: " . htmlspecialchars($row['message']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "No data found";
    }

    // Close the database connection
    $db->close();
    ?>

</div>

</section>
<!-- display section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="credit">created by <span>Luiziane Branta</span> | all rights reserved</div>

</section>

<!-- footer section ends -->


</body>
</html>