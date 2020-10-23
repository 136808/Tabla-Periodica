<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="assets\css\estilos.css" type="text/css">
</head>
<body>

<?php

  $elementos = array(

    array(['nombre'=>'H', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'He', 'tipo'=>'Gases Nobles']),

    array(['nombre'=>'Li', 'tipo'=>'Alcalinos'],
    ['nombre'=>'Be', 'tipo'=>'Alcalinosterreos'],
    ['nombre'=>'B', 'tipo'=>'Metaloides'],
    ['nombre'=>'C', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'N', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'O', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'F', 'tipo'=>'Halogenos'],
    ['nombre'=>'Ne', 'tipo'=>'Gases Nobles']),
    
  array(['nombre'=>'Na', 'tipo'=>'Alcalinos'],
    ['nombre'=>'Mg', 'tipo'=>'Alcalinosterreos'],
    ['nombre'=>'Al', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'Si', 'tipo'=>'Metaloides'],
    ['nombre'=>'P', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'S', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'Cl', 'tipo'=>'Halogenos'],
    ['nombre'=>'Ar', 'tipo'=>'Gases Nobles']),
    

  array(['nombre'=>'K', 'tipo'=>'Alcalinos'],
    ['nombre'=>'Ca', 'tipo'=>'Alcalinosterreos'],
    ['nombre'=>'Sc', 'tipo'=>''],
    ['nombre'=>'Ti', 'tipo'=>''],
    ['nombre'=>'V', 'tipo'=>''],
    ['nombre'=>'Cr', 'tipo'=>''],
    ['nombre'=>'Mn', 'tipo'=>''],
    ['nombre'=>'Fe', 'tipo'=>''],
    ['nombre'=>'Co', 'tipo'=>''],
    ['nombre'=>'Ni', 'tipo'=>''],
    ['nombre'=>'Cu', 'tipo'=>''],
    ['nombre'=>'Zn', 'tipo'=>''],
    ['nombre'=>'Ga', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Ge', 'tipo'=>'Metaloides'],
    ['nombre'=>'As', 'tipo'=>'Metaloides'],
    ['nombre'=>'Se', 'tipo'=>'Otros No Metales'],
    ['nombre'=>'Br', 'tipo'=>'Halogenos'],
    ['nombre'=>'Kr', 'tipo'=>'Gases Nobles']),

  array(['nombre'=>'Rb', 'tipo'=>'Alcalinos'],
    ['nombre'=>'Sr', 'tipo'=>'Alcalinosterreos'],
    ['nombre'=>'Y', 'tipo'=>''],
    ['nombre'=>'Zr', 'tipo'=>''],
    ['nombre'=>'Nb', 'tipo'=>''],
    ['nombre'=>'Mo', 'tipo'=>''],
    ['nombre'=>'Tc', 'tipo'=>''],
    ['nombre'=>'Ru', 'tipo'=>''],
    ['nombre'=>'Rh', 'tipo'=>''],
    ['nombre'=>'Pd', 'tipo'=>''],
    ['nombre'=>'Ag', 'tipo'=>''],
    ['nombre'=>'Cd', 'tipo'=>''],
    ['nombre'=>'In', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Sn', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Sb', 'tipo'=>'Metaloides'],
    ['nombre'=>'Te', 'tipo'=>'Metaloides'],
    ['nombre'=>'I', 'tipo'=>'Halogenos'],
    ['nombre'=>'Xe', 'tipo'=>'Gases Nobles']),

  array(['nombre'=>'Cs', 'tipo'=>'Alcalinos'],
    ['nombre'=>'Ba', 'tipo'=>'Alcalinosterreos'],
    ['nombre'=>'La-Lu', 'tipo'=>'Lantanidos'],
    ['nombre'=>'Hf', 'tipo'=>''],
    ['nombre'=>'Ta', 'tipo'=>''],
    ['nombre'=>'W', 'tipo'=>''],
    ['nombre'=>'Re', 'tipo'=>''],
    ['nombre'=>'Os', 'tipo'=>''],
    ['nombre'=>'Ir', 'tipo'=>''],
    ['nombre'=>'Pt', 'tipo'=>''],
    ['nombre'=>'Au', 'tipo'=>''],
    ['nombre'=>'Hg', 'tipo'=>''],
    ['nombre'=>'Tl', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Pb', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Bi', 'tipo'=>'Otros Metales'],
    ['nombre'=>'Po', 'tipo'=>'Metaloides'],
    ['nombre'=>'At', 'tipo'=>'Halogenos'],
    ['nombre'=>'Rn', 'tipo'=>'Gases Nobles']),

  array(['nombre'=>'Fr', 'tipo'=>'Alcalinos'],
  ['nombre'=>'Ra', 'tipo'=>'Alcalinosterreos'],
  ['nombre'=>'Ac-Lr', 'tipo'=>'Actinidos'],
  ['nombre'=>'Rf', 'tipo'=>''],
  ['nombre'=>'Db', 'tipo'=>''],
  ['nombre'=>'Sg', 'tipo'=>''],
  ['nombre'=>'Bh', 'tipo'=>''],
  ['nombre'=>'Hs', 'tipo'=>''],
  ['nombre'=>'Mt', 'tipo'=>''],
  ['nombre'=>'Ds', 'tipo'=>''],
  ['nombre'=>'Rg', 'tipo'=>''],
  ['nombre'=>'Cn', 'tipo'=>''],
  ['nombre'=>'Nh', 'tipo'=>'Otros Metales'],
  ['nombre'=>'Fl', 'tipo'=>'Otros Metales'],
  ['nombre'=>'Mc', 'tipo'=>'Otros Metales'],
  ['nombre'=>'Lv', 'tipo'=>'Otros Metales'],
  ['nombre'=>'Ts', 'tipo'=>'Halogenos'],
  ['nombre'=>'Og', 'tipo'=>'Gases Nobles'])

  );

  $elementos2 = array(

  array(['nombre'=>'La', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Ce', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Pr', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Nd', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Pm', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Sm', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Eu', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Gd', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Tb', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Dy', 'tipo'=>'Lantanidos'],
  ['nombre'=>'ho', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Er', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Tm', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Yb', 'tipo'=>'Lantanidos'],
  ['nombre'=>'Lu', 'tipo'=>'Lantanidos']),

  array(['nombre'=>'Ac', 'tipo'=>'Alcalinos'],
  ['nombre'=>'Th', 'tipo'=>'Alcalinosterreos'],
  ['nombre'=>'Pa', 'tipo'=>''],
  ['nombre'=>'PU', 'tipo'=>''],
  ['nombre'=>'Np', 'tipo'=>''],
  ['nombre'=>'Pu', 'tipo'=>''],
  ['nombre'=>'Am', 'tipo'=>''],
  ['nombre'=>'Cm', 'tipo'=>''],
  ['nombre'=>'Bk', 'tipo'=>''],
  ['nombre'=>'Cf', 'tipo'=>''],
  ['nombre'=>'Es', 'tipo'=>''],
  ['nombre'=>'Fm', 'tipo'=>''],
  ['nombre'=>'Md', 'tipo'=>'Otros Metales'],
  ['nombre'=>'No', 'tipo'=>'Otros Metales'],
  ['nombre'=>'Lr', 'tipo'=>'Otros Metales'])
  );
?>

<div>
  <table border="1">
    <tbody>
      <?php

        foreach ($elementos as $arra){

          echo "<tr>";

          foreach ($arra as $arr){
            
            if($arr['nombre'] == "He"){
              
              echo "<td colspan='16'></td>";
              echo "<td bgcolor='#aacae8'>".$arr['nombre']."</td>";
            }
            elseif($arr['nombre'] == "B"){
              
              echo "<td colspan='10'></td>";
              echo "<td bgcolor='#d3db65'>".$arr['nombre']."</td>";
            }
            elseif($arr['nombre'] == "Al"){
              
              echo "<td colspan='10'></td>";
              echo "<td bgcolor='#f3db41'>".$arr['nombre']."</td>";
            }
            else{

              if($arr['tipo'] == "Alcalinos"){
                echo "<td bgcolor='#bfa6c7'>".$arr['nombre']."</td>";  
              }
              elseif($arr['tipo'] == "Otros Metales"){
                echo "<td bgcolor='#f3db41'>".$arr['nombre']."</td>";  
              }
              elseif($arr['tipo'] == "Alcalinosterreos"){
                echo "<td bgcolor='#d3a3c3'>".$arr['nombre']."</td>";  
              }
              elseif($arr['tipo'] == "Metaloides"){
                echo "<td bgcolor='#d3db65'>".$arr['nombre']."</td>";  
              }
              elseif($arr['tipo'] == "Otros No Metales"){
                echo "<td bgcolor='#7FAC8C'>".$arr['nombre']."</td>";
              }
              elseif($arr['tipo'] == "Halogenos"){
                echo "<td bgcolor='#a3caca'>".$arr['nombre']."</td>";
              }
              elseif($arr['tipo'] == "Gases Nobles"){
                echo "<td bgcolor='#aacae8'>".$arr['nombre']."</td>";
              }
              elseif($arr['tipo'] == "Lantanidos"){
                echo "<td bgcolor='#d89b64'>".$arr['nombre']."</td>";
              }
              elseif($arr['tipo'] == "Actinidos"){
                echo "<td bgcolor='#d79483'>".$arr['nombre']."</td>";
              }
              else{
                echo "<td bgcolor='#e6bb57'>".$arr['nombre']."</td>";
              }
            }
          }
          echo "</tr>";
        }  
      ?>

    </tbody>
  </table>
</div>

<div>
  <table border="1">
    <tbody>
      
      <?php 
        foreach ($elementos2 as $array){

          echo "<tr>";
          foreach ($array as $arr){
            
            if($arr['tipo'] == "Lantanidos"){
              echo "<td bgcolor='#d89b64'>".$arr['nombre']."</td>";
            }
            else{
              echo "<td bgcolor='#d79483'>".$arr['nombre']."</td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </tbody>     
  </table>
</div>

<br><br><br>

<div>
  <table border="1">
    <tbody>
      <tr>
        <td colspan="5" bgcolor='#d4d4d4'>Metales</td>
        <td rowspan="4" bgcolor='#d3db65'>Metaloides</td>
        <td colspan="3" bgcolor='#d4d4d4'>No Metales</td>
      </tr>
      <tr>
        <tr><!--de transicion / Bloque D -->
        <td rowspan="2" bgcolor='#bfa6c7'>Acalinos</td>
        <td rowspan="2" bgcolor='#d3a3c3'>Acalinosterreos</td>
        <td rowspan="2" td bgcolor='#e6bb57'>Metales de transicion / Bloque D</td>
        <td rowspan="1" bgcolor='#d89b64'>Lactanidos</td>
        
        <td rowspan="2" bgcolor='#f3db41'>Otro Metales</td>
        
        <td rowspan="2" bgcolor='#7FAC8C'>Otros No Metales</td>
        <td rowspan="2" bgcolor='#a3caca'>Halogenos</td>
        
        <td rowspan="2" bgcolor='#aacae8'>Gases Nobles</td>
      </tr>    
      <tr>    
        <td rowspan="1" bgcolor='#d79483'>Actinidos</td>
        
      </tr>    
      
    </tbody>     
  </table>
</div>