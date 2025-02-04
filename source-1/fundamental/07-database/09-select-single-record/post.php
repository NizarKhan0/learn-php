<?php

require'database.php';

$id = $_GET['id'] ?? null;

// echo $id;

// If id is null, redirect to index.php benda function dia dari request URL tu kalau ubah manual dia akan jadikan id yg kat URL tu null (lebih kurang macam session)
if (!$id) {
  header('Location: index.php');
  exit;
}

//bahaya sebab dapat sql injection jadi macam ni (SELECT * FROM posts WHERE id = 2;DROP TABLE posts;) kalau user buat kat URL (http://localhost:8000/post.php?id=2;DROP%20TABLE%20posts;)
// $sql = 'SELECT * FROM posts WHERE id = ' . $id;
// echo $sql;

$sql = 'SELECT * FROM posts WHERE id = :id';

$stmt = $pdo->prepare($sql);

$params = ['id' => $id];

$stmt->execute($params);

//single record
$post = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $post['title']; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">My Blog</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="md my-4">
            <div class="rounded-lg shadow-md">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?php echo $post['title']; ?></h2>
                    <p class="text-gray-700 text-lg mt-2 mb-5"><?php echo $post['body']; ?></p>
                    <a href="index.php">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>