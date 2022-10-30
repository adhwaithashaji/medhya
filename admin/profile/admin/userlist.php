<?php
require("header.php");
?>

<style type="text/css">
  .t-cap
  {
    text-transform: capitalize;
  }
</style>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">User List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


     <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customers</h5>
              

              <?php
              $res=select("select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=1)");
              // echo "select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=1)";
              ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                   <!--  <th scope="col">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php  

                $n=1;
                while($row=mysqli_fetch_assoc($res))
                {

                  ?>
                  <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td class="t-cap"><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td class="t-cap"><?php echo $row['gender'];?></td>
                    <td><?php echo $row['dateofbirth'];?></td>
                    <td class="t-cap"><?php echo $row['city'];?></td>
                    <?php
                    $did= $row['distid'];
                    // echo $did;
                    // echo "select * from district where distid='$did'";
                    $dist=select("select * from district where distid='$did'");
                    $d=mysqli_fetch_assoc($dist);
                    ?>
                    <td class="t-cap "><?php echo $d['district'];?></td>


                    
                  
                  </tr>
                  <?php
                }
                ?>

                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tailors</h5>
              

              <?php
              $res1=select("select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=2)");
              // echo "select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=1)";
              ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php  

                $n=1;
                while($row1=mysqli_fetch_assoc($res1))
                {

                  ?>
                  <tr>
                    <th scope="row1"><?php echo $n++;?></th>
                    <td class="t-cap"><?php echo $row1['name'];?></td>
                    <td><?php echo $row1['phone'];?></td>
                    <td><?php echo $row1['email'];?></td>
                    <td class="t-cap"><?php echo $row1['gender'];?></td>
                    <td><?php echo $row1['dateofbirth'];?></td>
                    <td class="t-cap"><?php echo $row1['city'];?></td>
                    <?php
                    $did1= $row1['distid'];
                    // echo $did;
                    // echo "select * from district where distid='$did'";
                    $dist1=select("select * from district where distid='$did'");
                    $d1=mysqli_fetch_assoc($dist1);
                    ?>
                    <td class="t-cap "><?php echo $d1['district'];?></td>


                    
                   
                  </tr>
                  <?php
                }
                ?>

                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Textiles</h5>
              

              <?php
              $res2=select("select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=3)");
              // echo "select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=1)";
              ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php  

                $n=1;
                while($row2=mysqli_fetch_assoc($res2))
                {

                  ?>
                  <tr>
                    <th scope="row2"><?php echo $n++;?></th>
                    <td class="t-cap"><?php echo $row2['name'];?></td>
                    <td><?php echo $row2['phone'];?></td>
                    <td><?php echo $row2['email'];?></td>
                    <td class="t-cap"><?php echo $row2['gender'];?></td>
                    <td><?php echo $row2['dateofbirth'];?></td>
                    <td class="t-cap"><?php echo $row2['city'];?></td>
                    <?php
                    $did2= $row2['distid'];
                    // echo $did;
                    // echo "select * from district where distid='$did'";
                    $dist2=select("select * from district where distid='$did'");
                    $d2=mysqli_fetch_assoc($dist2);
                    ?>
                    <td class="t-cap "><?php echo $d2['district'];?></td>


                   
                  </tr>
                  <?php
                }
                ?>

                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

       <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Organistaion</h5>
              

              <?php
              $res3=select("select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=4)");
              // echo "select * from registration where email in (SELECT email from login WHERE STATUS=1 and usertype=1)";
              ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php  

                $n=1;
                while($row3=mysqli_fetch_assoc($res3))
                {

                  ?>
                  <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td class="t-cap"><?php echo $row3['name'];?></td>
                    <td><?php echo $row3['phone'];?></td>
                    <td><?php echo $row3['email'];?></td>
                    <td class="t-cap"><?php echo $row3['gender'];?></td>
                    <td><?php echo $row3['dateofbirth'];?></td>
                    <td class="t-cap"><?php echo $row3['city'];?></td>
                    <?php
                    $did3= $row3['distid'];
                    // echo $did;
                    // echo "select * from district where distid='$did'";
                    $dist3=select("select * from district where distid='$did'");
                    $d3=mysqli_fetch_assoc($dist3);
                    ?>
                    <td class="t-cap "><?php echo $d3['district'];?></td>


                    
                 
                  </tr>
                  <?php
                }
                ?>

                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

    

  </main><!-- End #main -->


  <?php
require("footer.php");
?>