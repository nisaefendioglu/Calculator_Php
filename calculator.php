<html>

<head>

    <title>Hesap Makinesi</title>
</head>
<style>
input#sayi1 {
    width: 200px;
    height: 35px;
    font-family: Calibri;
    font-size: 16px;
    color: purple;
    font-weight: bold;
}

span {
    font-family: Calibri;
    font-size: 16px;
    font-weight: bold;
}

span.islem {
    font-family: Calibri;
    font-size: 20px;
    color: black;
}

span.sonuc {
    font-family: Calibri;
    font-size: 20px;
    color: white;
}

input#hesap {
    width: 100px;
    height: 35px;
    font-family: Arial;
    font-weight: bold;
}

select {
    width: 100px;
    height: 33px;
}
</style>

<body style="background:purple">
    <center>
        <form action="" method="post">
            <div align="center">
                <br>
                <h2 style="background:pink">HESAP MAKİNESİ</h2><br>
                <p style="color:white"><span>Sayı 1: </span><input id="sayi1" type="text" name="sayi1"
                        style="background:pink"></p>
                <p style="color:white"><span>Sayı 2: </span><input id="sayi1" type="text" name="sayi2"
                        style="background:pink"></p>
                <select name="islem" style="background:pink;width:250">
                    <option value="bos">--Seçiniz--</option>
                    <option value="toplama">Toplama</option>
                    <option value="cikarma">Çıkarma</option>
                    <option value="carpma">Çarpma</option>
                    <option value="bolme">Bölme</option>
                </select> <br><br>
                <input type="submit" id="hesap" value="HESAPLA" style="background:pink;width:150">
            </div>
        </form>
        <?php
$sayi1=@$_POST['sayi1'];
$sayi2=@$_POST['sayi2'];
$islem=@$_POST['islem'];
switch($islem){
    case "bos";
    echo "<font color=white>İşlem seçmediniz</font>";
    break;
    case "toplama";
    echo "$sayi1+$sayi2";
    echo "<br>";
    echo "<span class=sonuc>İşleminizin sonucu:  ",$sonuc=$sayi1+$sayi2,"</span>";
    break;
    case "cikarma";
    echo "$sayi1-$sayi2";
    echo "<br>";
    echo "<span class=sonuc>İşleminizin sonucu:  ",$sonuc=$sayi1-$sayi2,"</sonuc>";
    break;
    case "carpma";
    echo "$sayi1*$sayi2";
    echo "<br>";
    echo "<span class=sonuc>İşleminizin sonucu:  ",$sonuc=$sayi1*$sayi2,"</span>";
    break;
    case "bolme";
    echo "$sayi1/$sayi2";
    echo "<br>";
    echo "<span class=sonuc>İşleminizin sonucu:  ",$sonuc=$sayi1/$sayi2,"</span>";
    break;
    default:
}
?>
</body>

</html>