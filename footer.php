<ul>
            <?php
            function displayBooks($books) {
                foreach ($books as $book) {
                    echo "<li>{$book['title']} by {$book['author']}</li>";
                }
            }

            $books = [
                ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
                ['title' => 'Don Quixote', 'author' => 'Miguel de Cervantes'],
                ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee'],
                ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen']
            ];

            displayBooks($books);
            ?>
        </ul>
    </div>
</body>
</html>