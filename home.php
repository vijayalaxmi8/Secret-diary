
  
<!DOCTYPE html>



<html>
    <head>
        <title>HomePage</title>
  
<link rel="stylesheet" type="text/css"  href="style.css">
<link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  </head>
   
 <body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h3>Secrete Dairy</h3></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php" button type="submit" class="btn btn-primary">LOGOUT</button> </a></li>
    </ul>
  </div>
</nav>
  
 <div class="container">
    <div class="row">
        <div col-mv-4>

</div>
 <div col-mv-4>

 </div>
<form>
                <div class="form-group">
                    
                    <textarea class="form-control" name="notes" style="height: 400px;"  id="notes_desc"></textarea>
                </div>
            </form>
            <div id="autoSaveText"></div>

   
</div>
</div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function autoSave()
    {
        var notes_desc = document.getElementById('notes_desc').value;
        //var notes_id = document.getElementById('notes_id').value;
        if(notes_desc!='')
        {
           // alert("not null");
            $.ajax({
                url:'save.php',
                method:"post",
                data:{notes_desc : notes_desc},
                success:function(response)
                {
                    if(response!='')
                    {
                    document.getElementById('notes_desc').value=response; 
                    }
                    document.getElementById('autoSaveText').innerHTML="Notes  Saved.";
                    document.getElementById('notes_desc').value =" ";
                }
            });
        }
    }
    setInterval(function(){
        autoSave();
    },10000);

        setInterval(function(){
                       document.getElementById('autoSaveText').innerHTML ="";
                   },8000);
</script>
</body>
</html>

