
    <?php include('config.php');?>
    <?php include("header.php");?>
    <?php include("side_menu.php");?>
    
        <div class="content-w">
<!--
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="index.html">Products</a>
                </li>
                <li class="breadcrumb-item">
                    <span>Laptop with retina screen</span>
                </li>
            </ul>
            <div class="content-panel-toggler">
                <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
            </div>
-->
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Response Received Reports
                                </h6>
									<div class="element-box">
										<div >
											<table id="dataTable1" width="100%" class="table table-striped table-lightfont">
												<thead>
												<tr>
													<th>Mob No</th>
													<th>Response Received</th>
													<th>Received At</th>
												</tr>
												</thead>
												
												<tbody>
												<?php 
												
												$sql = "SELECT * FROM `sms_read` "; 
												$qry = mysqli_query($conn,$sql);
												if(mysqli_num_rows($qry)>0) 
												{
													$arr =array();
													while($row = mysqli_fetch_assoc($qry))
													{
												?>
												<tr>
													<td><?php echo $row ['mob_no']?></td>
													<td><?php echo $row ['received_data']?></td>
													<td><?php echo $row ['date']?></td>
												</tr>
												
													<?php 
													}
												}
													?>
												</tbody>
											</table>
										</div>
									</div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    
    include("footer.php");
    
    ?> 
