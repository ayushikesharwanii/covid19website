<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php';?>
	<?php include 'css/style.php';?>
</head>
<body onload="fetch()">
	

<nav class="navbar navbar-expand-lg navbar-light nav_style p-3 ">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coronaupdate.php">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contantid">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>

<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="images\together5.png" width="300px" height="250px">
      </div>
    </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Let's Stay Safe  & Fight Together Against Cor<span class="coron_rot">  
      <img src="images\virus4.png" width="50px" height="50px"></span> na Virus</h1>
    </div>
    </div>
  </div>
</div>

<!-- *************************corona latest updates***************** -->
<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">COVID-19 INDIA LIVE UPDATES</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <tr>
        <th class="text-capitalize">Date/time</th>
        <th class="text-capitalize">state</th>
        <th class="text-capitalize">confirmed</th>
        <th class="text-capitalize">active</th>
        <th class="text-capitalize">recovered</th>
        <th class="text-capitalize">deaths</th>
      </tr>

      <?php

$data=file_get_contents('https://api.covid19india.org/data.json');

$coronalive=json_decode($data, true);

$statescount = count($coronalive['statewise']);
$i=1;
while($i < $statescount){
?>

<tr>
  <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
</tr>


<?php

$i++;

}
?>

    </table>
  </div>
</section>

<!-- *****************About section************************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12  about_res">
        <img src="images/about2.png" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12 text-left">
      <h2>What is COVID-19(Corona-Virus)</h2> 
      <p>COVID-19 is a zoonotic virus. From phylogenetics analyses undertaken with available full genome sequences, bats appear to be the reservoir of COVID-19 virus, but the intermediate
host(s) has not yet been identified. However, three important areas of work are already
underway in China to inform our understanding of the zoonotic origin of this outbreak.
</p>
      <p>COVID-19 is transmitted via droplets and fomites during close unprotected contact between
an infector and infectee. Airborne spread has not been reported for COVID-19 and it is not
believed to be a major driver of transmission based on available evidence; however, it can
be envisaged if certain aerosol-generating procedures are conducted in health care facilities.
</p>
      </div>
    </div>
  </div>


<!-- /////////////////////////////corona symptoms///////////// -->
<div class="container-fluid  pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus symptoms-19</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cough2.png" class="img-fluid bg-info" width="150" height="150">
        <figcaption>cough</figcaption>
         </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/runnynose.png" class="img-fluid bg-info" width="150" height="150">
        <figcaption>runny nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/fever1.png" class="img-fluid bg-info" width="150" height="150">
        <figcaption>fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/cold.png" class="img-fluid bg-info" width="150" height="150">
        <figcaption>cold</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/tired1.png" class="img-fluid bg-info" width="250" height="250">
        <figcaption>tiredness</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="images/breath.png" class="img-fluid bg-info" width="250" height="250">
        <figcaption>difficulity breathing(severe cases)</figcaption>
        </figure>
      </div>
    </div>
  </div>
  </div>

  <!-- /////////////////////////////prevention Against corona/////////////////// -->

  <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>

  <div class="container">
    
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/handwash1.png" class="img-fluid bg-info" width="120" height="170">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your regularly for 20 second,with
         soap and water or alcohol-based hand rud</p>
       </div> 
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/cover.png" class="img-fluid bg-info" width="100" height="150">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Cover your nose and mouth with a disposable tissu or fiexed elbow when you cough or sneeze</p>
       </div> 
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/dista.png" class="img-fluid bg-info" width="300" height="300">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Avoid close contact(1 meter or 3 feet or 2 gaj ) people who are unwell </p>
       </div> 
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/home2.png" class="img-fluid bg-info" width="200" height="300">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Stay home and self isolate from other in the household if you feel unwell</p>
       </div> 
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/news1.png" class="img-fluid bg-info" width="100" height="150">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Stay informed by watching news & follow the recommended practices</p>
       </div> 
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12 mt-5"> 
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/diff.png" class="img-fluid bg-info" width="100" height="150">
        </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>If you have fever, cough and difficulty breathing. seek medical care early</p>
       </div> 
      </div>
    </div>
  </div>
  </div>
</div>
<!-- /////////////////////////////contact us ASAP/////////////////// -->

  <div class="container-fluid pt-5 pb-5" id="contantid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact us ASAP</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-2 col-12">

        <form action="" method="POST">
          <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" name="username" placeholder="enter your name" autocomplete="off" required>
  </div>


  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile number" autocomplete="off" required>
  </div>

  <div class="form-group">
    
    <label >Select Symptoms</label><br>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
      <label class="custom-control-label" for="customcheckbox1">cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
      <label class="custom-control-label" for="customcheckbox2">fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
      <label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
      <label class="custom-control-label" for="customcheckbox4">feeling weak</label>
    </div>


  </div>
  
  
  <div class="form-group">
    <label >Massage</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        


      </div>

     </div>
  </div>
</div>

<!-- //////////////////top cursur//////////////// -->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- /////////////////////////////footer/////////////////// -->

<footer class="mt-5"> 
<div class="footer_style text-white text-center container-fluid" >
  <p>copyright @ by Ayushi Kesharwani</p>
</div>
 </footer> 


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous">
</script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


 <script>
   $('.count').counterUp({
  delay:10,
  time:3000
})
 </script>
<script type="text/javascript">



  
  mybutton=document.getElementById("myBtn");

  window.onscroll = function() {
    scrollFunction()
  };
  function scrollFunction()
  {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
    {
      mybutton.style.display = "block";
    }
    else
    {
      mybutton.style.display = "none";
    }
  }
  function topFunction(){
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
  }

</script>




</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$symp=$_POST['coronasym'];
$msg=$_POST['msg'];

$chk ="";

foreach ($symp as  $chk1) {
  $chk .=$chk1.","; 
}
$insertquery="insert into tblcorona(username, email, mobile, symp, massage)
 values('$username', '$email', '$mobile', '$chk', '$msg')";
$query = mysqli_query($con, $insertquery);

if($query){
  ?>
  <script>
    alert("inserted successful");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("Not successful");
  </script>
  <?php
}
}

?>