
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
                                    SMS Sent Report
                                </h6>
									<div class="element-box">
										<div >
											<table id="dataTable1" width="100%" class="table table-striped table-lightfont">
												<thead>
												<tr>
													<th>S.No</th>
													<th>Sent At</th>
													<th>Message</th>
													<th>Status</th>
													<th>Response</th>
													<th>Response Time</th>
												</tr>
												</thead>
												
												<tbody>
												<?php 
												
												$sql = "SELECT * FROM `transaction_sms` order by  id desc"; 
												$qry = mysqli_query($conn,$sql);
												if(mysqli_num_rows($qry)>0) 
												{
													$i = 1;
													$arr =array();
													while($row = mysqli_fetch_array($qry))
													{
												?>
												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo date('d-m-Y H:m:s', strtotime($row ['sent_at']));?></td>
													<td><?php echo $row ['message']?></td>
													<td><?php echo $row ['sms_status']!=''?'<span style="color:green">'.$row ['sms_status'].'</span>':'<span style="color:green">Delivered</span>'?></td> 	
													<td><?php echo $row ['output_response']?></td>
													<td><?php echo $row ['received_date']!=''?date('d-m-Y H:m:s', strtotime($row ['sent_at'])):'';?></td>
												</tr>
												
													<?php 
													$i++;
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
