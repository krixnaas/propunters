<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
a:link {
  color: black !important;
  text-decoration: none;
}
/* mouse over link */
a:hover {
  color: black;
  text-decoration: none;
}

</style>
<body class="container-fluid" style="background-color:rgba(59,130,246,0.5);">
<div class="container mt-5">
    <div class="card p-2">
      <div class="card-header">
        <div class="card-title">
          <h3>MEETINGS</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="row">   
      </div>
    </div>
  </div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  $.ajax({
    url:"http://dev.api.grs.bet/api/v3/combined/meetings/races",
    method:"GET"
  }).done(function(response){
    console.log(response.data);
    for(var i=0; i<=response.data.length; i++)
    {
      console.log(response.data[i]);
      $(".row").append('<div class="col-4 mb-2 mt-2 p-2"><a href="" target="_blank"><b>'+response.data[i].name+'</b> ('+response.data[i].max_race_count+')</a></div>');
    }
  });
</script>
</html>