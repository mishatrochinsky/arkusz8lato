<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Smoki</title>
    <script src="script.js"></script>
</head>
<body>
    <header><h2>Poznaj smoki!</h2></header>
    <nav>
        <div class="blok" onclick="show('olo')" id="a">Baza</div>
        <div class="blok" onclick="show('wow')" id="b">Opisy</div>
        <div class="blok" onclick="show('ala')" id="c">Galeria</div>
    </nav>
    <main>
        <section id="one">
            <h3>Baza Smoków</h3>
            <form action="smoki.php" method="POST">
                    <select name="pochodzenie">
                        <?php
                        $db = mysqli_connect("localhost", "root", "", "smoki");
                        $zapytanie = "SELECT DISTINCT pochodzenie FROM smok ORDER BY pochodzenie ASC;";
                        $wynik = mysqli_query($db, $zapytanie);
                        while ($w = mysqli_fetch_array($wynik)) {
                            echo "<option  ='{$w['pochodzenie']}'>{$w['pochodzenie']}</option>";
                        }
                        ?>
                    </select>
                    <button name="submit">Szukaj</button>
                </form>

            <table>
                <tr>
                    <th>Nazwa</th><th>Długość</th><th>Szerpkpść</th>
                </tr>
                <?php
                if(isset($_POST["submit"]))
                        {
                            $pochodzenie=$_POST['pochodzenie'];
                            $zapytanie2="SELECT nazwa, dlugosc,szerokosc FROM `smok` WHERE pochodzenie ='$pochodzenie' ;"      ;
                            $wynik2=mysqli_query($db,$zapytanie2);
                            while($w2=mysqli_fetch_array($wynik2)){
                                echo"<tr>";
                                echo "<td>".$w2['nazwa']."</td>";
                                echo"<td>".$w2['dlugosc']."</td>";
                                echo"<td>".$w2['szerokosc']."</td>";
                                echo"</tr>";
                            }
                    }


                      mysqli_close($db);

                ?>
            </table>
        </section>
        <section id="two">
            <h3>Opisy smoków</h3>
            <dl>
                <dt>Smok czerwony</dt>
                <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>
                <dt>Smok zielony</dt>
                <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.</dd>
                <dt>Smok niebieski</dt>
                <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>
            </dl>
        </section>
        <section id="three">
            <h3>Galeria</h3>
            <img src="smok1.JPG" alt="Smok czerwony">
            <img src="smok2.JPG" alt="Smok wielki">
            <img src="smok3.JPG" alt="Skrzłydlaty łaciaty">
        </section>
    </main>
    <footer>
        <p>Stronę opracował: Trochynskyi Mykhailo</p>
    </footer>
    
</body>
</html>