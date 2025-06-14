

<!DOCTYPE html>
<html>
<head>
    <title>Add Blog Article</title>
    <style>
        body {
            background-color: #82E0AA;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color:red;
        }

        label {
            font-size: 1.1em;
            color:blue;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }

        button {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php 
    include("navbar.html");
    ?>

<div class="container">
    <h1>Add a Blog Post/Article</h1>

    <form method="POST">
        <label><B>Name Of the Article:</B><br>
            <input type="text" name="title" required>
        </label><br><br>

        <label><B>Image Of the Article(featured image):</B><br>
            <input type="file" name="image" accept="image/*">
    </label><br><br>

        <label><B>Name Of the Author:</B><br>
            <input type="text" name="title"required>
        </label><br><br>

    <label><B>Article Content:</B><br>
        <textarea name="content" rows="10" required></textarea>
    </label><br><br>

  <button type="submit">Add Article</button>
    </form>
</div>
<?php 
    include("footer.html");
    ?>
</body>
</html>
