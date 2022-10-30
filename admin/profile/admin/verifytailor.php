  <?php
require("header.php");
?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tailors Verification</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="login.html">Home</a></li>
          <li class="breadcrumb-item active">Verify Tailors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


     <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tailors Verification</h5>
              

              <?php
              $res=select("select * from registration where email in (SELECT email from login WHERE usertype=2 and STATUS=1)");
              ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Dateofbirth</th>
                    <th scope="col">City</th>
                    <th scope="col">District</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php  

                $n=1;
                while($row=mysqli_fetch_assoc($res))
                {
                  $id=$row['email'];
                  ?>
                  <tr>
                    <th scope="row"><?php echo $n++;?></th>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['dateofbirth'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <?php
                    $did= $row['distid'];
                    // echo $did;
                    // echo "select * from district where distid='$did'";
                    $dist=select("select * from district where distid='$did'");
                    $d=mysqli_fetch_assoc($dist);
                    ?>
                     <td><?php echo $d['district'];?></td>
                    <td class="btn-group "><a class="btn btn-success btn-sm" href="php/phpcverify.php?id=<?php echo $id;?>">Approve</a><a class="btn btn-danger btn-sm">Reject</a></td>
                  </tr>
                  <?php
                }
                ?>

                 
                </tbody>
              </table>
              

            </div>
          </div>

        </div>
      </div>
    </section>

    

  </main><!-- End #main -->


  <?php
require("footer.php");
?>