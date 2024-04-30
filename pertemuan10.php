<!-- Mikacinta Gustina Amalan Toyibah
     RPL - 4A
    2204646 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            width: 300px;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
        }
        input[type="text"], input[type="submit"], input[type="button"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 10px;
            text-align: center;
        }
        .operation-buttons {
            display: flex;
            justify-content: space-between;
        }
        .operation-buttons input[type="submit"] {
            flex-grow: 1;
            margin-right: 5px;
        }
        .operation-buttons input[type="submit"]:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Kalkulator Sederhana</h2>
        <form id="calculatorForm" action="" method="post">
            <input type="text" id="num1" name="num1" placeholder="Masukkan angka pertama" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>" required><br>
            <input type="text" id="num2" name="num2" placeholder="Masukkan angka kedua" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>" required><br>
            <div class="operation-buttons">
                <input type="submit" name="add" value="+">
                <input type="submit" name="subtract" value="-">
                <input type="submit" name="multiply" value="×">
                <input type="submit" name="divide" value="÷">
            </div>
            <input type="button" value="Clear" onclick="clearForm()">
        </form>
        <div class="result" id="result">
            Hasil: 
            <?php
                if(isset($_POST['num1']) && isset($_POST['num2'])) {
                    if(isset($_POST['add'])) {
                        $result = $_POST['num1'] + $_POST['num2'];
                        echo $result;
                    } elseif(isset($_POST['subtract'])) {
                        $result = $_POST['num1'] - $_POST['num2'];
                        echo $result;
                    } elseif(isset($_POST['multiply'])) {
                        $result = $_POST['num1'] * $_POST['num2'];
                        echo $result;
                    } elseif(isset($_POST['divide'])) {
                        if($_POST['num2'] == 0) {
                            echo "Tidak terdefinisi.";
                        } else {
                            $result = $_POST['num1'] / $_POST['num2'];
                            echo $result;
                        }
                    }
                }
            ?>
        </div>
    </div>
    <script>
        function clearForm() {
            document.getElementById("num1").value = "";
            document.getElementById("num2").value = "";
            document.getElementById("result").innerHTML = "Hasil: ";
        }
    </script>
</body>
</html>

