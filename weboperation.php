<!doctype html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.72.0">
      <title>Bisection website</title>
    
      <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    
    
    
      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


        <style>
            main{
                padding:30px;
                text-align: center;
            }
        </style>
    </head>
    
    <body  class="mb-2 bg-info bg-opacity-10 text-dark">
    
      <header>
        <div class="collapse bg-dark" id="navbarHeader">      
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">             
              <strong>Bisection Method</strong>
            </a>          
          </div>
        </div>
      </header>
      <main class="container	">
        <h3>Calculates the root of the given equation f(x)=0 using Bisection method.</h3>
        <p class="container">The bisection method in mathematics is a root-finding method that repeatedly bisects an interval and then selects a subinterval in which a root must lie for further processing. The method is also called the interval halving method.

This is a calculator that finds a function root using the bisection method, or interval halving method. A brief method description can be found below the calculator.

</p>
          
        <form class="p-3 bg-info bg-opacity-10 border-1 border-info rounded-end" novalidate method="" >
          
            <div class="input-group col mb-3">
              <span class="input-group-text border-primary " id="inputGroupPrepend">f(x)=</span>
              <input type="text"name="fx" class="form-control border-primary " id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
             </div>
              
         
            <div class="input-group col  ">
              <span class="input-group-text border-primary" id="inputGroupPrepend">Error</span>
              <input type="text"name="error" class="form-control border-primary" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            
          
         
            <div class="input-group col ">
              <span class="input-group-text border-primary" id="inputGroupPrepend">A</span>
              <input type="text"name="a" class="form-control border-primary" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            
          
         
            <div class="input-group col ">
              <span class="input-group-text border-primary" id="inputGroupPrepend">B</span>
              <input type="text"name="b" class="form-control border-primary" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            </div></div></div> <br>
        
          


          <div class="col-12 mb-3">
            <button class="btn btn-info text-light " type="submit" name="submit">Calculate </button>
          </div>

        </form>
         <?php
         
         if(isset($_GET["submit"])){
          $fx = $_GET["fx"];
           $fx = str_replace('x', '$x', $fx);
          $epsilon = $_GET["error"];
          $a=$_GET["a"];
          $b = $_GET["b"];
          $y_m;
          $y_a;
          $i = 1;//count n
          $m = ($a + $b) / 2;
          $e = (abs (($b - $a) / $a));
          $fxx=str_replace('$x', 'x', $fx);


          function func($fx, $x)
          {
            eval('($r = ' . $fx . ');');
             return $r;
          }
          $y_m = func($fx, $m);
           echo ('<div class = "container m-3 "><strong>A = ' . $a . ' , B = ' . $b . ' ,<br> f(x) = ' . $fxx.', Error = '.$epsilon.'</strong></div>');

          print('<div class="table-responsive">
        <table class="table table-info table-bordered border-primary mt-5">
          <thead >
            <tr >
              <th scope="col">N</th>
              <th scope="col">A</th>
              <th scope="col">B</th>
              <th scope="col">M</th>
              <th scope="col">f(M)</th>
              <th scope="col">Error</th>
            </tr>
          </thead>');
     
      while ($e > $epsilon) {

          $m = ($a + $b) / 2;     

          $y_m = func($fx, $m);   
          $y_a = func($fx, $a);  
          $e = (abs($b - $a)) / $a;

          print('<tr>'.'<td>'.$i.'</td>'.'<td>'.$a.'</td>'.'<td>'.$b.'</td>'.'<td>'.$m.'</td>'.'<td>'.$y_m.'</td>'.'<td>'.$e.'</td>'.'</tr>');
          if (($y_m > 0 && $y_a < 0) || ($y_m < 0 && $y_a > 0))
          { 
              $b = $m;
          } else { 
              $a = $m;
          }
          $i++;
      }
           echo("<strong class='blockquote alert alert-success' role='alert'> Approximate solution = " . $m ."</strong>");
    }
  ?>
  
      </main>
      <?php  ?>
    
    </body>
    
    </html>
