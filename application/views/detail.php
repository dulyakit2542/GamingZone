<title>รายละเอียดเกม</title>
<main>
    <br>
    <div class="container">
        <br>
        <section class="mt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-cascade wider reverse">
                                <div class="view view-cascade overlay">
                                    <?php
                                    // var_dump($game);
                                    ?>
                                    <img class="card-img-top" src="<?php echo base_url() . 'files/images/' . $game[0]->image; ?>" alt="Card image cap">

                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-left">
                                    <h4 class="card-title"><strong><?php echo $game[0]->name; ?></strong></h4>
                                    <h5 class="card-title"><strong>age : <?php echo $game[0]->age; ?></strong></h5>
                                    <h5 class="card-title"><strong>rating : <?php echo $game[0]->rating; ?>/10</strong></h5>
                                    <h5 class="card-title"><strong>ราคา : <?php echo $game[0]->price; ?> THB </strong></h5>
                                    <!-- Subtitle -->
                                    <p align="left">
                                        <strong>
                                            <h5>รายละเอียด</h5>
                                        </strong>
                                    </p>
                                    <p class="card-text">

                                    <h6><strong><?php echo $game[0]->detail; ?></strong></h6>
                                    </p>
                                    <h6 class="font-weight-bold indigo-text py-2">
                                        หมวดหมู่เกมส์
                                        <br>
                                        <?php echo $game[0]->name_group; ?>
                                        <br>
                                        --------------------------
                                        <br>
                                        ผู้พัฒนา
                                        <br>
                                        <?php echo $game[0]->company; ?>
                                        <br>
                                        --------------------------
                                        <br>
                                        สเปคคอมพิวเตอร์ขั้นต่ำ
                                        <br>
                                        <?php echo $game[0]->os; ?>
                                        <br>
                                        <?php echo $game[0]->cpu; ?>
                                        <br>
                                        <?php echo $game[0]->ram; ?>
                                        <br>
                                        <?php echo $game[0]->gpu; ?>
                                        <br>
                                        <br>
                                        <br>
                                    </h6>
                                    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                                    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
</div>
