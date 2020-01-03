<?php
   $command = escapeshellcmd('python3 code/Query.py ' . $_POST['t'] . ' ' . $_POST['s']);
   $output = shell_exec($command);
   $tes=json_decode($output,true);
   for($i=0; $i<count($tes); $i++):
      $syntax= shell_exec("cat data/clean/".$tes[$i]['doc']);
      $datas = explode("\n",$syntax);
      $tes[$i]['title']=$datas[0];
      $tes[$i]['content']='';
      for ($j=1; $j<count($datas); $j++) { 
         $tes[$i]['content'].=$datas[$j];
      }
   endfor;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Seuteet</title>
   <!-- CSS-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/style.css">
   <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
         <nav class="navbar navbar-light">
            <form class="form-inline" action="" method="post">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" name="s">
               <input class="form-control mr-sm-2" type="text" placeholder="Top Search" name="t">
               <button class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
         </nav>
   </div>

   <div class="container">
      <div>
         <?php foreach($tes as $data):?>
            <div class="pisah">
               <br>
                  <a href="<?=$data['url']?>"><?=$data['title']?></a>
               <br>
               <br>
                  <?=$data['content']?>
               <br>
               <br>
                  <?=$data['score']?>
               <br>
               <br>
            </div>
         <?php endforeach;?>
      </div>
   </div>
</body>
</html>