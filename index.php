<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Selector</title>  
    <style>
        body { font-family: Arial, sans-serif; background-color: #e0f7fa; color: #006064; }
        .container { max-width: 600px; margin: auto; padding: 20px; text-align: center; }
        h1 { font-size: 30px; } 
        h2 { font-size: 30px; }  
        p { font-size: 30px; }  
        ul { list-style-type: none; padding: 0; }
        li { font-size: 30px; } 
        button { font-size: 25px; padding: 10px 20px; } 
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather Selector</h1>
        <form method="POST">
            <select name="weather" style="font-size: 1.5em; padding: 10px;">
                <option value="sunny">Sunny</option>
                <option value="rainy">Rainy</option>
                <option value="cloudy">Cloudy</option>
                <option value="snowy">Snowy</option>
            </select>
            <button type="submit">Check Weather</button>
        </form>
        <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $condition = $_POST['weather'];
                switch ($condition) {
                    case 'sunny':
                        echo "It's a bright and beautiful day!";
                        break;
                    case 'rainy':
                        echo "Don't forget your umbrella!";
                        break;
                    case 'cloudy':
                        echo "It might rain later, stay prepared!";
                        break;
                    case 'snowy':
                        echo "Time for snowball fights!";
                        break;
                    default:
                        echo "Unknown weather condition.";
                }
            }
            ?>
        </p>
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