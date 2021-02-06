<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dataset Site</title>
</head>

<body class="bginfo">
    <?php
    include_once 'navbar_data.html';
    ?>

    <div class="container-fluid col-md-10 offset-md-1">
        <div class="row">
            <div class="card mt-3 px-2 py-2">
                <?php
                //$lines = file("resources_26904f63-e13a-450c-85c7-954b66229871_summary-of-all-offences-2003-2015.csv");
                //$row = $lines[]

                print <<< HERE
    <style>
    table, th {
    border: 1px solid black;
    border-collapse: collapse;
    }
    td {
    border: 1px solid black;
    border-collapse: collapse;
    padding:0 15px;
    }
    </style>

    <table id="crimeTable" style="width:100%">
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

                $data = file("entity/resources_26904f63-e13a-450c-85c7-954b66229871_summary-of-all-offences-2003-2015.csv");
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

                <?php // content="text/plain; charset=utf-8"
                //require_once $_SERVER['DOCUMENT_ROOT'].'resource/jpgraph/jpgraph.php';
                //require_once $_SERVER['DOCUMENT_ROOT'].'resource/jpgraph/jpgraph_bar.php';

                //$data1y=array(30273,28060,29451,28705,28209,26037,24037,21515,20539,21127,18713,18980,18763);


                //// Create the graph. These two calls are always required
                //$graph = new Graph(350,200,'auto');
                //$graph->SetScale("textlin");

                //$theme_class=new UniversalTheme;
                //$graph->SetTheme($theme_class);

                //$graph->yaxis->SetTickPositions(array(0,5000,10000,15000,20000,25000,30000,35000), array(2500,7500,12500,17500,22500,27500,32500));
                //$graph->SetBox(false);

                //$graph->ygrid->SetFill(false);
                //$graph->xaxis->SetTickLabels(array('2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013'));
                //$graph->yaxis->HideLine(false);
                //$graph->yaxis->HideTicks(false,false);

                //// Create the bar plots
                //$b1plot = new BarPlot($data1y);
                //$b2plot = new BarPlot($data2y);
                //$b3plot = new BarPlot($data3y);

                //// Create the grouped bar plot
                //$gbplot = new GroupBarPlot(array($b1plot,$b2plot,$b3plot));
                //// ...and add it to the graPH
                //$graph->Add($gbplot);


                //$b1plot->SetColor("white");
                //$b1plot->SetFillColor("#cc1111");

                //$b2plot->SetColor("white");
                //$b2plot->SetFillColor("#11cccc");

                //$b3plot->SetColor("white");
                //$b3plot->SetFillColor("#1111cc");

                //$graph->title->Set("Crime statistics ");

                //// Display the graph
                //$graph->Stroke();
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once 'footer.html';
    ?>
</body>
</html>