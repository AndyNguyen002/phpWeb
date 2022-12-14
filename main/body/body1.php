<style>
    <?php include 'main.css'; ?>
</style>
</style>
<section class="_1khoi sachmoi bg-lightgray" style="background-color:#f3f3f3;">
        <div class="container" >
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-left pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">Các sản phẩm nổi bật</h1>
                        <a href="tongsp.php" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>

                <div class="luckyWheel">
                    <div class="lwTop">
                    <img src="https://cdn.tgdd.vn/2022/10/banner/TGDD---Tagline-hotsale-1200x120.png" alt="">
                    </div>
                    <div class="lwBot">
                        <div class="khoisanpham" style="padding-bottom: 2rem; ">
                        <?php
                                        $sql = "SELECT * FROM product WHERE menu_id=1 LIMIT 8 ";
                                        $result = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                    ?>
                            
                                        <div class="product">
                                            <a href="chitietsp.php?id= <?php echo $row['id'] ?>">
                                                <div class="item">
                                                <img src="<?php echo $row['image'];?>" alt="">
                                                <h4><?php echo $row['name']; ?></h4>
                                                <h3><?php  echo number_format ($row['price_new'])  ?></h3>
                                                </div>
                                            </a>
                                            
                                        </div> 
                                    <?php
                                        }
                                    ?>
                        </div>
                    </div>
                </div>
        </div>


        <div class="container">
        <div class="luckyWheel" style="margin-top:20px; background-color:#a71428">
                    <div class="lwTop">
                    <img src="https://cdn.tgdd.vn/2022/04/banner/DESKTOPTagline11-1200x100-6.png" alt="">
                    </div>
            <div class="lwBot">
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                <?php
                                $sql = "SELECT * FROM product WHERE menu_id=2 LIMIT 8";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                    <div class="product">
                      <a href="chitietsp.php?id= <?php echo $row['id'] ?>">
                        <div class="item">
                        <img src="<?php echo $row['image'];?>" alt="">
                        <h4><?php echo $row['name']; ?></h4>
                        <h3><?php  echo number_format ($row['price_new'])  ?></h3>
                      </div>
                      </a>
                      
                    </div>
                            <?php
                                }
                            ?>
                </div>
            </div>
                            </div>  
        </div>


        <div class="container">
        <div class="luckyWheel" style="margin-top:20px; background-color:#f6efef">
                    <div class="lwTop">
                    <img src="https://cdn.tgdd.vn/2022/08/banner/Banner-moi-ra-mat-desk-1200x90.png" alt="">
                    </div>
            <div class="lwBot">
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                <?php
                                $sql = "SELECT * FROM product WHERE menu_id=2 LIMIT 8";
                                $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                            ?>
                    <div class="product">
                      <a href="chitietsp.php?id= <?php echo $row['id'] ?>">
                        <div class="item">
                        <img src="<?php echo $row['image'];?>" alt="">
                        <h4><?php echo $row['name']; ?></h4>
                        <h3><?php  echo number_format ($row['price_new'])  ?></h3>
                      </div>
                      </a>
                      
                    </div>
                            <?php
                                }
                            ?>
                </div>
            </div>
                            </div>  
        </div>


    </section>
   