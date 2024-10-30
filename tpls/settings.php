<?php
$wssopt = get_option('ll_opt');

if (false == $wssopt) {
    $wssopt = array(
        'image1_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'image2_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'image3_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'image4_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'image5_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'image6_url' => 'http://www.smartcatdesign.net/wp-content/uploads/demo_banner.png',
        'background_color' => '#3b94e3',
        'text_color' => '#ffffff',
		'background_color' => '#ffffff',
		'disable' => 1
    );
    update_option('ll_opt', $wssopt);
    extract($wssopt);
} else {
    extract($wssopt);
}
?>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<style type="text/css">
    a{
        text-decoration: none;
    }
    .wrap{
        background: #D9F0E4;
        border: 1px solid #d0d0d0;
        box-shadow: 0 0 5px #333333; 
        -moz-box-shadow: 0 0 5px #333333; 
        -webkit-box-shadow: 0 0 5px #333333;
        padding: 10px;
        font-family: calibri;
		overflow:hidden;
    }
    #wrapper{
        float: left;
        width: 500px;"
    }

    .button-primary{
        display: inline-block;
        text-decoration: none;
        font-size: 12px;
        line-height: 23px;
        height: 24px;
        margin: 0;
        padding: 0 10px 1px;
        cursor: pointer;
        border-width: 1px;
        border-style: solid;
        -webkit-border-radius: 3px;
        -webkit-appearance: none;
        border-radius: 3px;
        white-space: nowrap;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;

        box-sizing: border-box;
        text-shadow: none !important;
        background: #B0CB1F !important;
        color: #393F42 !important;
        border: none !important;
    }
    .button-primary:hover{
        background: #393F42 !important;
        color: #B0CB1F !important;
    }
    input[type='text']{
        padding: 5px;
        font-size: 16px;
        border: 1px solid #d0d0d0;
        transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
    }
    input[type='text']:hover{
        box-shadow: 0 0 2px #B0CB1F;

    }
    input[type='text']:focus{
        border: 1px solid #B0CB1F;
        box-shadow: 0 0 5px #B0CB1F;
    }
    .settings-sidebar{
        width: 100%;
        background: #393F42;
        color: #ffffff;
        padding: 10px 5px 10px 10px;
        margin-right: 10px;
        border-bottom: 2px solid #f0f0f0;
        border-left: 5px solid #D9F0E4;
        transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
    }
    .settings-sidebar:hover{
        border-left: 5px solid #B0CB1F;
    }
    .settings-sidebar .title{
        color: #B0CB1F;
    }
    #plugin-title{
        line-height: 50px;
    }
    .font{
        font-family: 'Playball', cursive;
        color: #fff;
        border-bottom: 2px solid #B0CB1F;
        font-size: 35px;
    }
	label{
		font-size: 14px;
	}

</style>

<div class="wrap">
    <h2 id="plugin-title" style="font-family: calibri"><div id="icon-tools" class="icon32"><br></div>Lightbox Photo Gallery</h2> <br>
    <div style="clear: both;"></div>
    <div  style="float: right;width: 350px;margin-right:10px;">
        <div class="settings-sidebar">
            <h1 class="title">Request/Suggest Changes</h1>
            <p>
				Do you have a suggestion to make the plugin better? Go to the <a href="http://smartcatdesign.net/lightbox-photo-gallery/" target="_blank">Plugin Page</a> and leave a comment. You can also hire me to do custom changes for you or for any WordPress customization
			</p>
        </div>		
        <div class="settings-sidebar">
            <h1 class="title">Support This Plugin</h1>
            <p>
                Support this plugin by making a donation of any amount!  
            </p>
            <p>
                This is a free plugin, please <a target="_blank" href="">write a review here</a>
            </p>
            <p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="business" value="sales@ottawapc.ca"> 
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="Donation">
                <label>Enter any Donation Amount:</label>
                <input type="text" name="amount" placeholder="Enter donation amount in $">    
                <input class="button-primary" type="submit" border="0" name="submit" value="Donate">
            </form>
            </p>

        </div>
        <div class="settings-sidebar">
            <h1 class="title" style="text-align:center"><span class="font">SmartCat</span></h1>
            <div class="social">
                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSmartcatDesign&amp;width=300&amp;height=35&amp;colorscheme=dark&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=233286813420319" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>
            </div>
            <p>
                <a href="http://smartcatdesign.net/lightbox-photo-gallery/" target="_blank" class="-primary" style="color:#ffffff">Plugin Page</a>
            </p>
            <p>
                How to use: 1. Enter the URL's or the paths to the images and save. 2. Add the shortcode <b>[ll-gallery]</b> to the page or post where you want the gallery to show.
            </p>
        </div>
    </div>
    <div id="wrapper">
        <form action="" method="post" id="wptb">
            <input type="hidden" name="action" value="ll_save_settings">
            <div class="inside">
                <div class="boxdiv">

                   <script type="text/javascript">
   
                        jQuery(document).ready(function(){
						
							jQuery("#ssi-shortcode").focusout(function(){
								var shortcode = jQuery(this).val();
								shortcode = shortcode.replace(/"/g,"").replace(/'/g,"");
								jQuery(this).val(shortcode);
							});
						
						
                            jQuery('#bg_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            }); 
                
                            jQuery('#label_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            });
        
                            jQuery('#text_colorbox').miniColors({
                    
                                change: function(hex, rgb) {
                                    jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                                }
                    
                            });
        
                        }); 
                    </script>
                    <div class="sbox" id="box1">

                        <div class="sbcont" id="sbcont-box1" >
                            <table cellpadding="5" cellspacing="0" border="0" class="box_tbl">
								
								<tr>
									<td colspan="2">
										<label>Add the shortcode <b>[ll-gallery]</b> where you want the gallery to show.</label>
									</td>
								</tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Image 1 url</label><br>
                                        <input type="text" name="ll__opt[image1_url]" value="<?php echo $image1_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Image 2 url</label><br>
                                        <input type="text" name="ll__opt[image2_url]" value="<?php echo $image2_url; ?>" size="62" />
                                    </td>
                                </tr>                          
                                <tr>
                                    <td colspan="2">
                                        <label>Image 3 url</label><br>
                                        <input type="text" name="ll__opt[image3_url]" value="<?php echo $image3_url; ?>" size="62" />
                                    </td>
                                </tr>			
                                <tr>
                                    <td colspan="2">
                                        <label>Image 4 url</label><br>
                                        <input type="text" name="ll__opt[image4_url]" value="<?php echo $image4_url; ?>" size="62" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Image 5 url</label><br>
                                        <input type="text" name="ll__opt[image5_url]" value="<?php echo $image5_url; ?>" size="62" />
                                    </td>
                                </tr>                          
                                <tr>
                                    <td colspan="2">
                                        <label>Image 6 url</label><br>
                                        <input type="text" name="ll__opt[image6_url]" value="<?php echo $image6_url; ?>" size="62" />
                                    </td>
                                </tr>
								<tr>
                                    <td>

                                        <label>Background color</label><br>
                                        <input type="text" id="bg_colorbox" name="ll__opt[background_color]" value="<?php echo $background_color ?>" size="10" /><br />
                                    </td>
								</tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="checkbox" name="ll__opt[disable]" value="1" <?php if ($disable == 1) echo 'checked="checked"'; else echo ''; ?>> Disable Lightbox
                                    </td></tr>
                            </table>

                            <div style="clear: both;">&nbsp;</div>
                        </div>     
                   
                </div>

                </div>
                <br>
                <input type="submit" id="btn" class="button-primary" value="Save Settings"> 
                <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> saving...</span><br /><br />

            </div>
            <br clear="all" />
            <br clear="all" />
        </form>  
    </div> 
    <br>
    <br>
</div>
<br clear="all" />
<br clear="all" />

<script language="JavaScript">
    <!--

    
    jQuery('#wptb').submit(function(){
        jQuery(this).ajaxSubmit({
            'url': ajaxurl,
            'beforeSubmit':function(){
                jQuery('#loading').fadeIn();
            },
            'success':function(res){
                jQuery('#loading').fadeOut();
            }
        });
        return false;
    });
    //-->
</script>