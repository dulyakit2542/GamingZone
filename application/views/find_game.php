<title> ค้นหาเกม </title>
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
	<div class="container">
		<form action="" method="POST">
			<section class="view intro-2">
				<div class="col-md-12 search-box"><br>
					<div class="row" style="margin:auto">
						<div class="form-group col-md-5">
							<select name=group id="group" class="custom-select d-block w-100">
								<option value="">กรุณาเลือก</option>
								<option value="name">ค้นหาด้วยชื่อเกม</option>
								<option value="age">ค้นหาด้วยอายุขั้นต่ำของผู้เล่น</option>
							</select>
						</div>
						<div class="form-group col-md-5">
							<input style="height: 40px;" name="name" type="text" class="form-control" id="name" placeholder="กรุณาป้อนคำที่ต้องการค้นหา" value="">
						</div>
						<div class="form-group col-md-2">
							<button type="submit" name="search" class="btn btn-primary">
								Search
							</button>
						</div>
					</div>
				</div>
			</section>
		</form><br><br>
		<?php

		if (isset($_POST['search'])) {
			$n = $_POST['name'];
			$g = $_POST['group'];
			if ($n == "" || $g == "") {
				echo '<br><center>';
				echo 'กรุณากรอกข้อมูลให้ครบก่อนกด Search';
				echo '</center>';
			} else {
				$sql = "SELECT * FROM game
                        WHERE `$g` LIKE '%$n%'; ";
				$q = $con->query($sql);
				$r = $q->fetch_all();
				if (count($r) > 0) {
					$c = count($r);
				} else if (count($r) < 1) {
					$c = '0';
				}
				echo '<br><center>';
				if ($g == 'name') {
					$gg = 'ชื่อเกม';
				} else if ($g == 'age') {
					$gg = 'อายุขั้นต่ำของผู้เล่น';
				}
				echo 'ผลลัพธ์การค้นหา' . '&nbsp;' . $c . '&nbsp;' . 'รายการ จาก' . '&nbsp;' . $n . '&nbsp;' . 'ในหมวด' . '&nbsp;' . $gg;
				echo '</center>';
			?>
				<div class="row" style="margin-top:50px ;">
					<div class="col-md-12">
						<div class="row">
							<?php foreach ($r as $result) { ?>
								<div class="col-md-4">
									<div class="card card1">
										<img class="card-img-top" src="<?php echo base_url() . 'files/images/' . $result[10] ?>" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title"><a><?php echo $result[2]; ?></a></h4>
											<p class="card-text"><?php echo $result[9]; ?>...</p>
											<a href="<?php echo base_url() . 'main/game_view/' . $result[0] ?>" class="btn btn-primary">ดูรายละเอียด</a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<br>
											<br>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
				<?php

			}
		}
				?>
				<hr>
				<h5 align="center">เกมทั้งหมดในระบบ</h5>
				<section class="mt-5 wow fadeIn">
					<div class="row">
						<div class="col-md-12">
							<?php
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
									<li class="page-link waves-effect waves-effect"> <a href="find_game?page=1">First</a></li>
									<?php for ($i = 1; $i <= $total_page; $i++) { ?>
										<li class=" waves-effect waves-effect"> <a class="page-link" href="find_game?page=<?php echo $i; ?>">
												<?php echo $i; ?></a></li>
									<?php } ?>
									<li class="page-link waves-effect waves-effect"><a href="find_game?page=<?php echo $total_page; ?>">Last</a></li>
							</nav>
							</ul>
							</nav>
						</div>
					</div>

					</div>
					</body>
				</div>
	</div>
	</div>
</main>
