<?php
//echo '<pre>';
//print_r($template_data[0]['ListingTemplate']['template']);
//echo '</pre>';
//exit;

$template_html = trim(htmlentities($template_data[0]['ListingTemplate']['template']));


?>

<?php
/* */
$title = "Rubbermaid Easy Find Lids Food Storage Container, 42-Piece Set, Red (1880801)";
$imagepath = "https://images-na.ssl-images-amazon.com/images/I/917dBseIiwL.jpg";
$product_description = "
                                                Size:42-piece Find the right lid, right now! Rubbermaid Easy Find Lids food
                                                storage containers feature lids that snap to the container base and to other
                                                lids, which means the right lid is always at your fingertips. The square-shape
                                                food containers give you more space in the fridge and graduated sizes nest for
                                                cupboard storage. Organizing your kitchen just got easier with Rubbermaid Easy
                                                Find Lids. 42-piece set includes 5 (0.5 Cup), 5 (1.25 Cup), 5 (2 Cup), 2 (3
                                                Cup), 2 (5 Cup), 2 (7 Cup), and all lids.
                                              ";
$post_description = '';

$dimension = array('Size', 'Brand', 'UPC', 'MPN');
$dimension_val = array('42-piece', 'Rubbermaid', '701799110078', 'NA');

$variant_specifics = '';
for ($i = 0; $i < count($dimension); $i++) {
    $variant_specifics .= $dimension[$i] . ': ' . $dimension_val[$i] . '<br>';
}
//echo $variant_specifics;

$product_details =  "
<li>Product Dimensions: 8 x 16 x 10 inches</li>
<li>Item Weight: 3.9 pounds</li>
<li>Shipping Weight: 3.9 pounds</li>
<li>Manufacturer: Rubbermaid</li>
<li>Domestic Shipping: Item can be shipped within U.S.</li>
<li>Origin: USA</li>
<li>Item model number: 1880801</li>
";

$feature_bullets =  "
<li>Lids snap together and to container bases so you can always find the right lid</li>
<li>Graduated sized containers nest for compact storage</li>
<li>One lid fits multiple bases;
Thick, durable container walls for everyday use</li>
<li>Microwave, freezer and dishwasher-safe, BPA-free, Made in the USA</li>
<li>Set includes: 5 (0.5 Cup), 5 (1.25 Cup), 5 (2 Cup), 2 (3 Cup), 2 (5 Cup), 2 (7 Cup);
Lids included</li>
";

/* */
?>

<?php //echo "{{{$title}}}"; ?>
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
                    <section class="panel  border-o">
                        <header class="panel-heading btn-primary"> Edit Lister Template</header>
                        <div class="panel-body">
                            <div class="position-center">
                                <p>Please create a Mustache template for your listing descriptions. You can use the following variables:</p>
                                <ul style="padding: 5px 17px;">
                                    <li><code>{{title}}</code> -- string title of the product</li>
                                    <li><code>{{product_specification}}</code> -- a list of product details</li>
                                    <li><code>{{product_description}}</code> -- raw HTML of the product description</li>
                                    <li><code>{{feature_bullets}}</code> -- a list of product features</li>
                                    <li><code>(img src={{main_image}})</code> -- the main image for the product</li>
                                    <li><code>{{#images}}(img src={{.}}){{/images}}</code> -- show all product pictures</li>
                                </ul>
                                <p>We have a few precreated templates to choose from. We don't provide support for template building,
                                    but here's how to do it yourself!</p>
                                <p>You can also buy fully PriceYak compatible templates from CrazyLister (use coupon code CLPY100).</p>


                                <form  role="form" action="" method="post">
                                    <span class="export-b">
                                        <input type="submit" class="btn btn-info" value="Precreated Templates" data-toggle="dropdown" aria-expanded="false">
                                        <span class="caret" data-toggle="dropdown" aria-expanded="false"></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)" onclick="change_template(1);">Default Template</a></li>
                                            <li><a href="javascript:void(0)" onclick="change_template(2);">Alternative Template</a></li>
                                            <li><a href="javascript:void(0)" onclick="change_template(3);">Modern Template</a></li>
                                        </ul>
                                        <input type="hidden" name="data[save_template]" id="save_template" value="<?php echo $template_data[0]['ListingTemplate']['id'];?>">
                                    </span>
                                    <script type="text/javascript">
                                        function change_template(passid)
                                        {
                                            $.ajax({
                                                type: 'POST',
                                                url:   '<?php echo DEFAULT_URL;?>listings/ajax_list_template',
                                                data: 'passid=' + passid,
                                                success: function(data)
                                                {
                                                    $('#ajax-temdata').html(data);
                                                    $('#save_template').val(passid);

                                                }
                                            });
                                        }
                                    </script>
                                    <span class="export-b">
                                        <input type="submit" class="btn btn-info" name="btn_reset" value="Reset Changes">
                                    </span>
                                    <input type="submit" class="btn btn-info" name="btn_save_changes" value="Save Changes">
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                        <?php
                        /*                         *
                          $html = '<h1>Rubbermaid Easy Find Lids Food Storage Container, 42-Piece Set, Red (1880801)</h1>

                          <hr>
                          <br>

                          <div class="two_col minwidth">

                          <!-- Zinc EPID: B00COK3FD8 -->
                          <!-- PyN -->

                          <div class="col col_left">
                          <div class="images">
                          <img src="https://images-na.ssl-images-amazon.com/images/I/917dBseIiwL.jpg">
                          </div>
                          </div>

                          <div class="col col_right">
                          <div class="description">
                          <h2>Product Details</h2>
                          <h3>
                          Size: 42-piece<br>
                          Brand: Rubbermaid<br>
                          UPC: 701799110078<br>
                          MPN: NA<br>
                          </h3>
                          <ul>
                          <li>Product Dimensions: 8 x 16 x 10 inches</li>
                          <li>Item Weight: 3.9 pounds</li>
                          <li>Shipping Weight: 3.9 pounds</li>
                          <li>Manufacturer: Rubbermaid</li>
                          <li>Domestic Shipping: Item can be shipped within U.S.</li>
                          <li>Origin: USA</li>
                          <li>Item model number: 1880801</li>
                          </ul>
                          <ul>
                          <li>Lids snap together and to container bases so you can always find the right lid</li>
                          <li>Graduated sized containers nest for compact storage</li>
                          <li>One lid fits multiple bases; Thick, durable container walls for everyday use</li>
                          <li>Microwave, freezer and dishwasher-safe, BPA-free, Made in the USA</li>
                          <li>Set includes: 5 (0.5 Cup), 5 (1.25 Cup), 5 (2 Cup), 2 (3 Cup), 2 (5 Cup), 2 (7 Cup); Lids included</li>
                          </ul>
                          <p>

                          </p>
                          <p>
                          Size:42-piece Find the right lid, right now! Rubbermaid Easy Find Lids food
                          storage containers feature lids that snap to the container base and to other
                          lids, which means the right lid is always at your fingertips. The square-shape
                          food containers give you more space in the fridge and graduated sizes nest for
                          cupboard storage. Organizing your kitchen just got easier with Rubbermaid Easy
                          Find Lids. 42-piece set includes 5 (0.5 Cup), 5 (1.25 Cup), 5 (2 Cup), 2 (3
                          Cup), 2 (5 Cup), 2 (7 Cup), and all lids.
                          </p>
                          </div>
                          </div>
                          </div>';
                          /* */
                        ?>
                        <div id="ajax-temdata">
                        <div class="col-md-6">
                            <h3>Code Editor</h3>
                            <div class="code-editor-box">
                                <pre id="editor">
                                    <?php echo $template_html; ?>
                                </pre>
                            </div>
                        </div>

                        <div class="col-md-6 return-e">
                            <h3>Live Preview</h3>
                            <div class="code-editor-box" style="border:1px solid #ccc;">
                                <div id="return">
                                    <?php
                                    $set_val = array('{{title}}', '{{main_image}}', '{{{product_description}}}', '{{post_description}}','{{variant_specifics}}','{{product_details}}','{{feature_bullets}}');
                                    $replace = array($title, $imagepath, $product_description, $post_description,$variant_specifics,$product_details,$feature_bullets);
                                    echo str_replace($set_val,$replace,$template_data[0]['ListingTemplate']['template']);
                                    ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <?php echo $this->Html->script(array('ace'), true); ?>
                    <script>
                        var editor = ace.edit("editor");
                        editor.setTheme("ace/theme/twilight");
                        editor.session.setMode("ace/mode/html");

                        function showHTML() {
                            $('#return').html(editor.getValue());
                        }
                        // or use data: url to handle things like doctype
                        function showHTMLInIFrame() {
                            $('#return').html("<iframe src=" +
                                    "data:text/html," + encodeURIComponent(editor.getValue()) +
                                    "></iframe>");
                        }
                        editor.on("input", showHTMLInIFrame)
                    </script>
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
    <?php echo $this->element('footer'); ?>
</section>