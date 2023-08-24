<?php
include_once("header.php");

$query = "select * from room order by type";
$data=mysqli_query($conn,$query);


?>

<section >
    <div class="container pt-3">
        <marquee>Book your paying guest room today and experience the difference!</marquee>
        </div>
    
    
    </section>

  <!-- Carousel -->

  <section>
    <div class="container pt-4">
      <div id="demo" class="carousel slide" data-ride="carousel" data-intervel="1000">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="Images/home1.png" width="1500" height="400" class="img-fluid">
              </div>

              <div class="carousel-item ">
                  <img src="Images/Home2.png" width="1500" height="400" class="img-fluid">
              </div>

              <div class="carousel-item">
                  <img src="Images/Home3.png" width="1500" height="400" class="img-fluid">
              </div>
          </div>

          <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>               
           </ul>


          
           <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
           </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
          </a>
      </div>
  </div>


  </section>

  <section id="ourservices">
        <div class="container pt-5 pb-5">
            <h2 class="text-center">Guest Rooms</h2>
            <hr width="40%" color="black">
            
            
        
            <div class="row">   
        <?php    
        while ( $record = mysqli_fetch_array($data))
        {
        ?>
            <div class="col-4 pt-3">
            <div class="card">
                <div class="card-body text-center">
                     <div class="card-header"><img src="<?php echo $record['image'];?>" class="img-thumbnail" height="250px"  width="185px">
                    </div>
                     
                    <p class="card-text"><h5><?php echo $record['type'];?></h5>
                    <p><?php echo $record['detail'];?></p>

                    <P><?php echo "Price - " . $record['price'];?></p>

                    <button type="button" class="btn-info"> Know More</button></p>

                
                </div>
            </div>
        </div>

    <?php
        }
    ?>
    </div>
    </div>

  </section>


  
<?php
include_once("footer.php");
?>
