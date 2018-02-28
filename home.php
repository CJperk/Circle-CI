    <?php
	//print_r($_SESSION);
    include("header.php")

    ?>


    <?php include("side_menu.php")?>

    

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
                                    Test Command
                                </h6>
                                <div class="element-box">

                                    <form method="post" action="test.php">
                                        <h5 class="form-header">
                                            Test Commands
                                        </h5>
                                        <div class="form-desc">
                                            Enter Mobile No and Commands
                                            <div style='visibility:hidden' class="msg" ></div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""> CRI Unit - GSM Number</label>
                                            <input class="form-control" placeholder="Mobile No" type="text" name="mobile" id="mobile"/>
                                        </div>

                                        <div class="form-group">
                                            <label for=""> Commands</label>
                                            <input class="form-control" name="desc" id="desc" placeholder="Command" type="text" />
                                        </div>

                                        <div class="form-buttons-w">
                                            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit" />
                                            <input type="submit" class="btn btn-primary" id="clear" name="clear" value="Reset" />
                                        </div>

                                    </form>



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
