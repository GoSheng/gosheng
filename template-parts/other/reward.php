<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $GoSheng;
?>
<?php
if ( $GoSheng['reward_all'] ) {
	?>
    <!--    <div class="reward text-center mb-2 mb-lg-3">-->
    <!--		--><?php
//		if ( $GoSheng['reward_alipay'] ) {
//			?>
    <!--            <a class="btn btn-light btn-lg" id="reward_btn_alipay" href="#" data-toggle="modal"-->
    <!--               data-target="#reward_modal" data-modaltab="alipay">-->
    <!--                <i class="fab fa-alipay" aria-hidden="true">支付宝</i>-->
    <!--            </a>-->
    <!--		--><?php //} ?>
    <!--		--><?php
//		if ( $GoSheng['reward_weixin'] ) {
//			?>
    <!--            <a class="btn btn-light btn-lg" id="reward_btn_weixin" href="#" data-toggle="modal"-->
    <!--               data-target="#reward_modal" data-modaltab="weixin">-->
    <!--                <i class="fab fa-weixin" aria-hidden="true">微信</i>-->
    <!--            </a>-->
    <!--		--><?php //} ?>
    <!--		--><?php
//		if ( $GoSheng['reward_qpay'] ) {
//			?>
    <!--            <a class="btn btn-light btn-lg" id="reward_btn_qpay" href="#" data-toggle="modal"-->
    <!--               data-target="#reward_modal" data-modaltab="qpay">-->
    <!--                <i class="fab fa-qq" aria-hidden="true">QQ钱包</i>-->
    <!--            </a>-->
    <!--		--><?php //} ?>
    <!--		--><?php
//		if ( $GoSheng['reward_baifubao'] ) {
//			?>
    <!--            <a class="btn btn-light btn-lg" id="reward_btn_baifubao" href="#" data-toggle="modal"-->
    <!--               data-target="#reward_modal" data-modaltab="baifubao">-->
    <!--                <i class="fab" aria-hidden="true">百度钱包</i>-->
    <!--            </a>-->
    <!--		--><?php //} ?>
    <!--		--><?php
//		if ( $GoSheng['reward_paypal'] ) {
//			?>
    <!--            <a class="btn btn-light btn-lg" id="reward_btn_paypal" href="#" data-toggle="modal"-->
    <!--               data-target="#reward_modal" data-modaltab="paypal">-->
    <!--                <i class="fab fa-paypal" aria-hidden="true">PayPal</i>-->
    <!--            </a>-->
    <!--		--><?php //} ?>
    <!--    </div>-->
    <div class="modal" id="reward_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <div class="container">
                        <nav class="nav nav-pills justify-content-around" id="modalTabReward">
							<?php if ( $GoSheng['reward_alipay'] ) { ?>
                                <a class="btn btn-sm bg-dark text-light" id="modalTab_alipay" href="#reward_alipay"
                                   data-toggle="tab" role="tab"><i class="fab fa-alipay"></i>支付宝</a>
							<?php } ?>
							<?php if ( $GoSheng['reward_weixin'] ) { ?>
                                <a class="btn btn-sm bg-dark text-light" id="modalTab_weixin" href="#reward_weixin"
                                   data-toggle="tab" role="tab"><i class="fab fa-weixin"></i>微信</a>
							<?php } ?>
							<?php if ( $GoSheng['reward_qpay'] ) { ?>
                                <a class="btn btn-sm bg-dark text-light" id="modalTab_qpay" href="#reward_qpay"
                                   data-toggle="tab" role="tab"><i class="fab fa-qq"></i>QQ钱包</a>
							<?php } ?>
							<?php if ( $GoSheng['reward_baifubao'] ) { ?>
                                <a class="btn btn-sm bg-dark text-light" id="modalTab_baifubao" href="#reward_baifubao"
                                   data-toggle="tab" role="tab"><i class=""></i>百度钱包</a>
							<?php } ?>
							<?php if ( $GoSheng['reward_paypal'] ) { ?>
                                <a class="btn btn-sm bg-dark text-light" id="modalTab_paypal" href="#reward_paypal"
                                   data-toggle="tab" role="tab"><i class="fab fa-paypal"></i>PayPal</a>
							<?php } ?>

                        </nav>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
						<?php if ( $GoSheng['reward_alipay'] ) { ?>
                            <div role="tabpanel" class="tab-pane fade zoomIn animated" id="reward_alipay">
                                <img class="img-fluid d-block mx-auto"
                                     src="<?php echo $GoSheng['reward_alipay_image']['url']; ?>" alt="" title="">
                                <span class="d-block text-center"><?php echo $GoSheng['reward_alipay_text']; ?></span>
                            </div>
						<?php } ?>
						<?php if ( $GoSheng['reward_weixin'] ) { ?>
                            <div role="tabpanel" class="tab-pane fade zoomIn animated" id="reward_weixin">
                                <img class="img-fluid d-block mx-auto"
                                     src="<?php echo $GoSheng['reward_weixin_image']['url']; ?>" alt="" title="">
                                <span class="d-block text-center"><?php echo $GoSheng['reward_weixin_text']; ?></span>
                            </div>
						<?php } ?>

						<?php if ( $GoSheng['reward_qpay'] ) { ?>
                            <div role="tabpanel" class="tab-pane fade zoomIn animated" id="reward_qpay">
                                <img class="img-fluid d-block mx-auto"
                                     src="<?php echo $GoSheng['reward_qpay_image']['url']; ?>" alt="" title="">
                                <span class="d-block text-center"><?php echo $GoSheng['reward_qpay_text']; ?></span>
                            </div>
						<?php } ?>
						<?php if ( $GoSheng['reward_baifubao'] ) { ?>
                            <div role="tabpanel" class="tab-pane fade zoomIn animated" id="reward_baifubao">
                                <img class="img-fluid d-block mx-auto"
                                     src="<?php echo $GoSheng['reward_baifubao_image']['url']; ?>" alt="" title="">
                                <span class="d-block text-center"><?php echo $GoSheng['reward_baifubao_text']; ?></span>
                            </div>
						<?php } ?>
						<?php if ( $GoSheng['reward_paypal'] ) { ?>
                            <div role="tabpanel" class="tab-pane fade zoomIn animated" id="reward_paypal">
                                <!--                                <img class="img-fluid d-block mx-auto" src="-->
								<?php //echo $GoSheng['reward_paypal_image']['url']; ?><!--" alt="" title="">-->
                                <a class="d-block text-center" href="https://paypal.me/<?php echo $GoSheng['reward_paypal_url']; ?>"
                                   title="<?php esc_attr_e( 'PayPal.Me链接地址', 'GoSheng-framework' ) ?>"
                                   target="_blank"><?php esc_html_e( '给我PayPal转账', 'GoSheng-framework' ) ?></a>
                                <span class="d-block text-center"><?php echo $GoSheng['reward_paypal_text']; ?></span>
                            </div>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}
?>
