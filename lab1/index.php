<!DOCTYPE html>
<html>
<head>
<title>Главная</title>
<meta charset="Utf-8"/>
<script type = "text/javascript" src ="/Scripts/Script.js"></script>
</head>
<body>
    
<form>
    <table>
        <tr>
            <td>Первый массив</td>
            <td><input type = "text" id = "mass1"/></td> 
        </tr>
        <tr>
            <td>Второй массив</td> 
            <td><input type = "text" id = "mass2"/></td>
        </tr>
        <tr colspan ="2"><td><input type="button" value = "Объединение" onclick="unity();"/></td></tr>
        <tr colspan ="2"><td><input type="button" value = "Пересечение" onclick="denity();"/></td></tr>
        <tr colspan ="2"><td><input type="button" value = "Дополнение A\B" onclick="plusityAB();"/></td></tr>
        <tr colspan ="2"><td><input type="button" value = "Дополнение B\A" onclick="plusityBA();"/></td></tr>
        <tr colspan ="2"><td><input type="button" value = "Симметр. разность" onclick="symMinus();"/></td></tr>
        <tr colspan ="2"><td><output id = "Out"></output></td></tr>
    </table>
</form>

</body>
</html>    