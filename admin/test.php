  <div class="row mb-3">
                  <label for="District" class="col-md-4 col-lg-3 col-form-label">District</label>
                  <div class="col-md-8 col-lg-9">
                    <select class="form-control" name="district">
                      <option value="null" selected="">Select</option>
                      <?php

                      while($row=mysqli_fetch_assoc($dist))
                      {
                        ?>
                        <option value="<?php echo $row['districtid'];?>"><?php echo $row['district'];?></option>

                        <?php
                      }
                      ?>


                    </select>
                  </div>
                </div>
                