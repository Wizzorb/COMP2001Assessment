<!DOCTYPE html>
<html lang="en">
<head>
    Dataset Index
</head>
<body class="bginfo">
    <?php
    include_once 'navbar.html';
    ?>

    <div class="container-fluid col-md-10 offset-md-1">
        <div class="row">
            <div class="card mt-3 px-2 py-2">
                

                
                <?php
                //$lines = file("resources_26904f63-e13a-450c-85c7-954b66229871_summary-of-all-offences-2003-2015.csv");
                //$row = $lines[]

                print <<< HERE
    <table id="crimeTable" border = "1">
    <tr>
    <th>Offence</th>
    <th>2003</th>
    <th>2004</th>
    <th>2005</th>
    <th>2006</th>
    <th>2007</th>
    <th>2008</th>
    <th>2009</th>
    <th>2010</th>
    <th>2011</th>
    <th>2012</th>
    <th>2013</th>
    <th>2014</th>
    <th>2015</th>
    </tr>
HERE;

                $data = file("resources_26904f63-e13a-450c-85c7-954b66229871_summary-of-all-offences-2003-2015.csv");
                $count = 0;

                foreach ($data as $line)
                {
                    ++$count;
                    if ($count == 20)
                    {
                        $lineArray = explode(",", $line);
                        list($offence, $y03, $y04, $y05, $y06, $y07, $y08, $y09, $y10, $y11, $y12, $y13, $y14, $y15) = $lineArray;
                        print <<< HERE
    <tr>
    <td>$offence</td>
    <td>$y03</td>
    <td>$y04</td>
    <td>$y05</td>
    <td>$y06</td>
    <td>$y07</td>
    <td>$y08</td>
    <td>$y09</td>
    <td>$y10</td>
    <td>$y11</td>
    <td>$y12</td>
    <td>$y13</td>
    <td>$y14</td>
    <td>$y15</td>
    </tr>
HERE;
                    }
                }
                print "</table>";
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once 'public/footer.php';
    ?>
</body>
</html>