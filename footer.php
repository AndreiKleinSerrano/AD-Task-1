<h2>All Weather Conditions</h2>
        <ul>
            <?php
            $weatherConditions = ['Sunny', 'Rainy', 'Cloudy', 'Snowy'];
            foreach ($weatherConditions as $condition) {
                echo "<li>$condition</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>