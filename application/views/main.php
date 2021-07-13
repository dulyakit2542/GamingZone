<title>หน้าหลัก</title>
<main style="background-color: #F7F7F7;">

  <?php
  
  $con = mysqli_connect('localhost', 'root', '', 'GamingZone');
  $perpage = 9;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  $start = ($page - 1) * $perpage;
  $sql1 = "select * from game limit {$start} , {$perpage} ";
  $query = mysqli_query($con, $sql1);
  ?>
  <br>
  <div class="container">
    <section class="mt-5 wow fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <?php
							// echo "<pre>";
							// $result = mysqli_fetch_assoc($query);
              // var_dump($result);
							// echo "</pre>";

              ?>
              <div class="row">
                <?php while ($result = mysqli_fetch_assoc($query)) { ?>

                  <div class="col-md-4">
                    <div class="card card1">
                      <img class="card-img-top" src="<?php echo base_url() . 'files/images/' . $result['image'] ?>" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title"><a><?php echo $result['name']; ?></a></h4>
                        <p class="card-text"><?php echo $result['detail_index']; ?>...</p>
                        <a href="<?php echo base_url() . 'main/game_view/' . $result['id'] ?>" class="btn btn-primary">ดูรายละเอียด</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <br>
                        <br>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
                <?php
                $sql2 = "select * from game ";
                $query2 = mysqli_query($con, $sql2);
                $total_record = mysqli_num_rows($query2);
                $total_page = ceil($total_record / $perpage);
                ?>
              </div>
              <nav class="my-4">
                <ul class="pagination pg-blue">
                  <li class="page-link waves-effect waves-effect"> <a href="main?page=1">First</a></li>
                  <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <li class=" waves-effect waves-effect"> <a class="page-link" href="main?page=<?php echo $i; ?>">
                        <?php echo $i; ?></a></li>
                  <?php } ?>
                  <li class="page-link waves-effect waves-effect"><a href="main?page=<?php echo $total_page; ?>">Last</a></li>
              </nav>
              </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  </body>
  </div>
</main>
