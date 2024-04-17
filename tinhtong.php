<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            width: 300px;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        div.container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color:lightcoral;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        div.container div {
            margin-bottom: 10px;
        }
        div.container input[type="text"]{
            width: 220px;
            height: 40px;
            font-size: 20px;
            font-weight: bold;
        }
        
        div.container input[type="submit"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        div.container input[type="button"] {
            background-color: #007bff;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 55px;
            height: 28px;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            background: linear-gradient(-135deg, #f2f2f2, #cccccc);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-weight: bold;
        }
        div.container input[type="button"]:hover {
            background-color: #0056b3;
        }
        div.container label {
            display: block;
            text-align: left;
        }
        #maytinh{
            font-weight: bold;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id=maytinh>Calculator</div>
        <div>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <label for="textfield">Fx 570 VN<br>
                 <br>
               </label>
               <input type="text" name="textfield" id="textfield" readonly>
               <br>
               <br>
               <p>
                 <input type="button" name="submit5" id="submit5" value="1" onclick="appendToTextField('1')">
                 <input type="button" name="submit6" id="submit6" value="2" onclick="appendToTextField('2')">
                 <input type="button" name="submit7" id="submit7" value="3" onclick="appendToTextField('3')">
                 <input type="button" name="submit" id="submit" value="+" onclick="calculate('+')">
               </p>
               <p>
                 <input type="button" name="submit8" id="submit8" value="4" onclick="appendToTextField('4')">
                 <input type="button" name="submit9" id="submit9" value="5" onclick="appendToTextField('5')">
                 <input type="button" name="submit10" id="submit10" value="6" onclick="appendToTextField('6')">
                 <input type="button" name="submit2" id="submit2" value="-" onclick="calculate('-')">
               </p>
            <p>
              <input type="button" name="submit11" id="submit11" value="7" onclick="appendToTextField('7')">
              <input type="button" name="submit12" id="submit12" value="8" onclick="appendToTextField('8')">
              <input type="button" name="submit13" id="submit13" value="9" onclick="appendToTextField('9')">
              <input type="button" name="submit3" id="submit3" value="*" onclick="calculate('*')">
               </p>
               <p>
                   <input type="button" name="submit14" id="submit14" value="0" onclick="appendToTextField('0')">
                   <input type="button" name="submit15" id="submit15" value="." onclick="appendToTextField('.')">
                   <input type="button" name="submit16" id="submit16" value="=" onclick="calculateResult()">
                   <input type="button" name="submit4" id="submit4" value="/" onclick="calculate('/')">
               </p>
               <p>
                 <input type="button" name="submit17" id="submit17" value="Del" onClick="deleteLastChar()">
                   <input type="button" name="submit17" id="submit17" value="Clear" onClick="clearTextField()">            
               </p>
           </form>
       </div>
   </div>
   <script>
        var textField = document.getElementById('textfield');

        function appendToTextField(value) {
            textField.value += value;
        }

        function calculate(operation) {
            textField.value += ' ' + operation + ' ';
        }

        function calculateResult() {
            var expression = textField.value;
            var result = eval(expression);
            textField.value = result;
        }

        function deleteLastChar() {
            var currentValue = textField.value;
            textField.value = currentValue.substring(0, currentValue.length - 1);
        }
   </script>
</body>
</html>
