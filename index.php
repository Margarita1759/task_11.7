<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика 11.7</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table border="1">
     <caption>Таблица истинности PHP</caption>
     <tr>
      <th> A </th>
      <th>B</th>
      <th>!A</th>
      <th>A || B</th>
      <th>A && B</th>
      <th>A xor B</th>
     </tr>
     
     <tr><td><?php echo $A=0 ?></td><td><?php echo $B=0 ?></td><td>  <?php echo !$A ?> </td><td> <?php echo $A | $B ?></td><td><?php echo $A & $B ?> </td><td> <?php echo $A ^ $B ?></td></tr>
     <tr><td><?php echo $A=0 ?></td><td><?php echo $B=1 ?></td><td><?php echo !$A ?></td><td><?php echo $A | $B ?></td><td><?php echo $A & $B ?></td><td><?php echo $A ^ $B ?></td></tr>
     <tr><td><?php echo $A=1 ?></td><td><?php echo $B=0 ?></td><td>  <?php echo (($A) ? '0' : '1') ?> </td><td> <?php echo $A | $B ?></td><td><?php echo $A & $B ?> </td><td> <?php echo $A ^ $B ?></td></tr>
     <tr><td><?php echo $A=1 ?></td><td><?php echo $B=1 ?></td><td> <?php echo (($A) ? '0' : '1')?></td><td><?php echo $A | $B ?></td><td><?php echo $A & $B ?></td><td><?php echo $A ^ $B ?></td></tr>
    </table>

    <table border="1">
     <caption>Гибкое сравнение в PHP</caption>
     <tr>
     <th></th>
      <th> <?php $a=true; echo 'true'?></th>
      <th> <?php $b=false; echo 'false'?></th>
      <th><?php echo $c=1 ?></th>
      <th><?php echo $d=0 ?></th>
      <th><?php echo $e=-1 ?></th>
      <th><?php echo $f='"1"'?></th>
      <th><?php $g=null; echo 'null' ?> </th>
      <th><?php echo $h ='"php"'?></th>
     </tr>
     
     <tr><td>true</td><td><?php echo ($a==$a)? 'true': 'false' ?></td><td> <?php echo ($a==$b) ? 'true': 'false' ?> </td><td> <?php echo ($a==$c) ? 'true': 'false' ?></td><td> <?php echo ($a==$d) ? 'true': 'false'?></td><td><?php echo ($a==$e) ? 'true': 'false'?> </td><td><?php echo ($a==$f)?'true': 'false'?></td><td><?php echo ($a==$g)?'true': 'false'?> </td><td><?php echo ($a==$h)?'true': 'false'?> </td></tr>
     <tr><td>false</td><td><?php echo ($b==$a)? 'true': 'false' ?></td><td> <?php echo ($b==$b) ? 'true': 'false' ?> </td><td> <?php echo ($b==$c) ? 'true': 'false' ?></td><td> <?php echo ($b==$d) ? 'true': 'false'?></td><td><?php echo ($b==$e) ? 'true': 'false'?> </td><td><?php echo ($b==$f)?'true': 'false'?></td><td><?php echo ($b==$g)?'true': 'false'?> </td><td><?php echo ($b==$h)?'true': 'false'?> </td></tr>
     <tr><td>1 </td><td><?php echo ($c==$a)? 'true': 'false' ?></td><td> <?php echo ($c==$b) ? 'true': 'false' ?> </td><td> <?php echo ($c==$c) ? 'true': 'false' ?></td><td> <?php echo ($c==$d) ? 'true': 'false'?></td><td><?php echo ($c==$e) ? 'true': 'false'?> </td><td><?php echo ($c==$f)?'true': 'false'?></td><td><?php echo ($c==$g)?'true': 'false'?> </td><td><?php echo ($c==$h)?'true': 'false'?> </td></tr>
     <tr><td>0</td><td><?php echo ($d==$a)? 'true': 'false' ?></td><td> <?php echo ($d==$b) ? 'true': 'false' ?> </td><td> <?php echo ($d==$c) ? 'true': 'false' ?></td><td> <?php echo ($d==$d) ? 'true': 'false'?></td><td><?php echo ($d==$e) ? 'true': 'false'?> </td><td><?php echo ($d==$f)?'true': 'false'?></td><td><?php echo ($d==$g)?'true': 'false'?> </td><td><?php echo ($d==$h)?'true': 'false'?> </td></tr>
     <tr><td>-1</td><td><?php echo ($e==$a)? 'true': 'false' ?></td><td> <?php echo ($e==$b) ? 'true': 'false' ?> </td><td> <?php echo ($e==$c) ? 'true': 'false' ?></td><td> <?php echo ($e==$d) ? 'true': 'false'?></td><td><?php echo ($e==$e) ? 'true': 'false'?> </td><td><?php echo ($e==$f)?'true': 'false'?></td><td><?php echo ($e==$g)?'true': 'false'?> </td><td><?php echo ($e==$h)?'true': 'false'?> </td></tr>
     <tr><td>"1"</td><td><?php echo ($f==$a)? 'true': 'false' ?></td><td> <?php echo ($f==$b) ? 'true': 'false' ?> </td><td> <?php echo ($f==$c) ? 'true': 'false' ?></td><td> <?php echo ($f==$d) ? 'true': 'false'?></td><td><?php echo ($f==$e) ? 'true': 'false'?> </td><td><?php echo ($f==$f)?'true': 'false'?></td><td><?php echo ($f==$g)?'true': 'false'?> </td><td><?php echo ($f==$h)?'true': 'false'?> </td></tr>
     <tr><td>null</td><td><?php echo ($g==$a)? 'true': 'false' ?></td><td> <?php echo ($g==$b) ? 'true': 'false' ?> </td><td> <?php echo ($g==$c) ? 'true': 'false' ?></td><td> <?php echo ($g==$d) ? 'true': 'false'?></td><td><?php echo ($g==$e) ? 'true': 'false'?> </td><td><?php echo ($g==$f)?'true': 'false'?></td><td><?php echo ($g==$g)?'true': 'false'?> </td><td><?php echo ($g==$h)?'true': 'false'?> </td></tr>
     <tr><td>"php"</td><td><?php echo ($h==$a)? 'true': 'false' ?></td><td> <?php echo ($h==$b) ? 'true': 'false' ?> </td><td> <?php echo ($h==$c) ? 'true': 'false' ?></td><td> <?php echo ($h==$d) ? 'true': 'false'?></td><td><?php echo ($h==$e) ? 'true': 'false'?> </td><td><?php echo ($h==$f)?'true': 'false'?></td><td><?php echo ($h==$g)?'true': 'false'?> </td><td><?php echo ($h==$h)?'true': 'false'?> </td></tr>
    </table>
    <table border="1">
     <caption>Жёсткое сравнение в PHP</caption>
     <tr>
     <th></th>
      <th> <?php $a=true; echo 'true'?></th>
      <th> <?php $b=false; echo 'false'?></th>
      <th><?php echo $c=1 ?></th>
      <th><?php echo $d=0 ?></th>
      <th><?php echo $e=-1 ?></th>
      <th><?php echo $f='"1"'?></th>
      <th><?php $g=null; echo 'null' ?> </th>
      <th><?php echo $h ='"php"'?></th>
     </tr>
     
     <tr><td>true</td><td><?php echo ($a===$a)? 'true': 'false' ?></td><td> <?php echo ($a===$b) ? 'true': 'false' ?> </td><td> <?php echo ($a===$c) ? 'true': 'false' ?></td><td> <?php echo ($a===$d) ? 'true': 'false'?></td><td><?php echo ($a===$e) ? 'true': 'false'?> </td><td><?php echo ($a===$f)?'true': 'false'?></td><td><?php echo ($a===$g)?'true': 'false'?> </td><td><?php echo ($a===$h)?'true': 'false'?> </td></tr>
     <tr><td>false</td><td><?php echo ($b===$a)? 'true': 'false' ?></td><td> <?php echo ($b===$b) ? 'true': 'false' ?> </td><td> <?php echo ($b===$c) ? 'true': 'false' ?></td><td> <?php echo ($b===$d) ? 'true': 'false'?></td><td><?php echo ($b===$e) ? 'true': 'false'?> </td><td><?php echo ($b===$f)?'true': 'false'?></td><td><?php echo ($b===$g)?'true': 'false'?> </td><td><?php echo ($b===$h)?'true': 'false'?> </td></tr>
     <tr><td>1 </td><td><?php echo ($c===$a)? 'true': 'false' ?></td><td> <?php echo ($c===$b) ? 'true': 'false' ?> </td><td> <?php echo ($c===$c) ? 'true': 'false' ?></td><td> <?php echo ($c===$d) ? 'true': 'false'?></td><td><?php echo ($c===$e) ? 'true': 'false'?> </td><td><?php echo ($c===$f)?'true': 'false'?></td><td><?php echo ($c===$g)?'true': 'false'?> </td><td><?php echo ($c===$h)?'true': 'false'?> </td></tr>
     <tr><td>0</td><td><?php echo ($d===$a)? 'true': 'false' ?></td><td> <?php echo ($d===$b) ? 'true': 'false' ?> </td><td> <?php echo ($d===$c) ? 'true': 'false' ?></td><td> <?php echo ($d===$d) ? 'true': 'false'?></td><td><?php echo ($d===$e) ? 'true': 'false'?> </td><td><?php echo ($d===$f)?'true': 'false'?></td><td><?php echo ($d===$g)?'true': 'false'?> </td><td><?php echo ($d===$h)?'true': 'false'?> </td></tr>
     <tr><td>-1</td><td><?php echo ($e===$a)? 'true': 'false' ?></td><td> <?php echo ($e===$b) ? 'true': 'false' ?> </td><td> <?php echo ($e===$c) ? 'true': 'false' ?></td><td> <?php echo ($e===$d) ? 'true': 'false'?></td><td><?php echo ($e===$e) ? 'true': 'false'?> </td><td><?php echo ($e===$f)?'true': 'false'?></td><td><?php echo ($e===$g)?'true': 'false'?> </td><td><?php echo ($e===$h)?'true': 'false'?> </td></tr>
     <tr><td>"1"</td><td><?php echo ($f===$a)? 'true': 'false' ?></td><td> <?php echo ($f===$b) ? 'true': 'false' ?> </td><td> <?php echo ($f===$c) ? 'true': 'false' ?></td><td> <?php echo ($f===$d) ? 'true': 'false'?></td><td><?php echo ($f===$e) ? 'true': 'false'?> </td><td><?php echo ($f===$f)?'true': 'false'?></td><td><?php echo ($f===$g)?'true': 'false'?> </td><td><?php echo ($f===$h)?'true': 'false'?> </td></tr>
     <tr><td>null</td><td><?php echo ($g===$a)? 'true': 'false' ?></td><td> <?php echo ($g===$b) ? 'true': 'false' ?> </td><td> <?php echo ($g===$c) ? 'true': 'false' ?></td><td> <?php echo ($g===$d) ? 'true': 'false'?></td><td><?php echo ($g===$e) ? 'true': 'false'?> </td><td><?php echo ($g===$f)?'true': 'false'?></td><td><?php echo ($g===$g)?'true': 'false'?> </td><td><?php echo ($g===$h)?'true': 'false'?> </td></tr>
     <tr><td>"php"</td><td><?php echo ($h===$a)? 'true': 'false' ?></td><td> <?php echo ($h===$b) ? 'true': 'false' ?> </td><td> <?php echo ($h===$c) ? 'true': 'false' ?></td><td> <?php echo ($h===$d) ? 'true': 'false'?></td><td><?php echo ($h===$e) ? 'true': 'false'?> </td><td><?php echo ($h===$f)?'true': 'false'?></td><td><?php echo ($h===$g)?'true': 'false'?> </td><td><?php echo ($h===$h)?'true': 'false'?> </td></tr>
    </table>
   </body>


 


  </html>