<section id="container">
    <!--header start-->
    <?php echo $this->element('header'); ?>
    <!--header end-->

    <!--sidebar start-->
    <?php echo $this->element('sidebar'); ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                            <h4>Recent listing requests</h4>
                            <p>This page will automatically refresh. Listing requests usually take less than 45 minutes.</p>
                            <div class="adv-table">
                                <input type="submit" class="btn btn-info" value="Retry Failed Listings">

                                <span class="export-b">
                                    <input type="submit" class="btn btn-info" value="Export CSV">
                                    <span class="caret" data-toggle="dropdown" aria-expanded="false"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Export CSV</a></li>
                                        <li><a href="#">Export raw CSV</a></li>
                                        <li><a href="#">Bulk raw CSV</a></li>
                                    </ul>
                                </span>

                                <?php if(isset($this->params['named']['msg'])){echo '<div style="padding: 10px 0px;"><span class="error-message">'.$this->params['named']['msg'].'</span></div>';}?>

                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th width="15%">Time Requested</th>
                                            <th width="20%">Source Product</th>
                                            <th width="5%">Success?</th>
                                            <th width="60%">Listing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if(isset($product_data) && count($product_data)>0)
                                        {
                                            for($i=0;$i<count($product_data);$i++)
                                            {
                                            ?>
                                            <tr class="gradeA">
                                                <td class="align-center"><?php echo $product_data[$i]['Product']['created_date']?></td>
                                                <td>
                                                    <div class="btn-group zn-listing-link">
                                                        <a target="_blank" href="<?php echo $product_data[$i]['Product']['pageurl']?>" class="btn btn-default" style="width:120px;"><?php echo $product_data[$i]['Product']['asin_no']?></a>
                                                        <button type="button" class="btn btn-default" style="padding: 5px 25px 5px 5px;border-left:1px solid #eee;" data-toggle="dropdown" aria-expanded="false">
                                                            <img src="<?php echo IMAGE_URL.'amazon-logo.svg';?>" />
                                                            <img src="<?php echo IMAGE_URL;?><?php echo (isset($product_data[$i]['Product']['source_id']) && $product_data[$i]['Product']['source_id']==1)?'us.png':'gb.png' ?>" />
                                                        </button>
                                                        <ul class="dropdown-menu">
<!--                                                            <li><a href="#">Copy</a></li>-->
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
<!--                                                    <i class="fa fa-trash-o delete-center"></i>-->
<!--                                                    <i class="fa fa-times delete-center" ></i>-->
                                                    <?php
                                                    if($product_data[$i]['Product']['status']=='1' && !empty($product_data[$i]['Product']['ebay_id'])){
                                                        ?>
                                                        <a href="javascript:void(0);" title="Success"><i class="fa fa-check"></i></a>
                                                        <?php
                                                    } else {
                                                    ?>
                                                        <a href="javascript:void(0);" title="In Progress"><i class="fa fa-clock-o"></i></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($product_data[$i]['Product']['submit_status']=='List Now'){
                                                        echo "Fetching product data and offers.";
                                                    }
                                                    elseif($product_data[$i]['Product']['status']=='1' && !empty($product_data[$i]['Product']['ebay_id'])){
                                                        echo "Successfully submitted to Ebay | ";
                                                        ?>
                                                        <a href="<?php echo DEFAULT_URL.'listings/listing_review/'.$product_data[$i]['Product']['asin_no'];?>" class="btn btn-default">Review</a>
                                                        <?php
                                                    }
                                                    else
                                                    {?>
                                                    <a href="<?php echo DEFAULT_URL.'listings/listing_review/'.$product_data[$i]['Product']['asin_no'];?>" class="btn btn-default">Review</a>
                                                    <?php
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
    <?php echo $this->element('footer'); ?>
</section>