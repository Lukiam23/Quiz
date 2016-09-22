<?php
include "valida_sessao.inc";
include "conecta_mysql.inc";
require_once 'phplot.php';

# Define the data array: Label, the 3 data sets.
# Year,  Features, Bugs, Happy Users:
$titulo = utf8_decode('Raking de Arrecadação');
$p = new PHPlot_truecolor(1200, 600);
$r = mysql_query("SELECT nome, star_coins FROM usuarios");
if (! $r ) exit();
$data = array();
$n_rows = mysql_num_rows ( $r );
for ( $i = 0 ; $i < $n_rows ; $i ++) $data [] = mysql_fetch_row ( $r );
$p -> SetDataValues ( $data );
$p->SetImageBorderType('plain');
$p->SetFontTTF('x_label', "AGENCYB.ttf", 14);


# Create a PHPlot object which will make an 800x400 pixel image:


# Set the main plot title:
$p->SetTitle($titulo);

# Select the data array representation and store the data:
$p->SetDataType('text-data');
$p->SetDataValues($data);

# Select the plot type - bar chart:
$p->SetPlotType('bars');

# Define the data range. PHPlot can do this automatically, but not as well.
$p->SetPlotAreaWorld(0); 
# Select an overall image background color and another color under the plot:
$p->SetBackgroundColor('#ffffff');
$p->SetDrawPlotAreaBackground(True);
$p->SetPlotBgColor('#ADD8E6');


# Draw lines on all 4 sides of the plot:
$p->SetPlotBorderType('full');
$p->SetDataColors('gold');
$p->SetPlotAreaBgImage('bck5.jpg', 'scale');
# Set a 3 line legend, and position it in the upper left corner:
$p->SetLegend(array('Coins'));
$p->SetLegendWorld(0.5, 8800);

# Turn data labels on, and all ticks and tick labels off:
$p->SetXDataLabelPos('plotdown');
$p->SetXTickPos('none');
$p->SetXTickLabelPos('none');
$p->SetYTickPos('none');
$p->SetYTickLabelPos('both');

# Generate and output the graph now:
$p->DrawGraph();

?>