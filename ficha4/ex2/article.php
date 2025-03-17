<?php

    $db = new PDO('sqlite:news.db');

    $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
                        FROM news JOIN
                        users USING (username) LEFT JOIN
                        comments ON comments.news_id = news.id
                        GROUP BY news.id, users.username
                        ORDER BY published DESC');
    $stmt->execute();
    $articles = $stmt->fetchAll();

    $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $article = $stmt->fetch();
?>