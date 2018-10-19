<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'gosheng_widget_text' ) ) {
	class gosheng_widget_text extends WP_Widget {

		public function __construct() {
			$widget_ops = array(
				'classname'   => 'widget_text',
				'description' => __( '狗剩文本', 'GoSheng-framework' ),
//				'customize_selective_refresh' => true,
			);
			parent::__construct( 'gosheng_text', __( '文本 - 狗剩', 'GoSheng-framework' ), $widget_ops );
		}

		function widget( $args, $instance ) {
			extract( $args );
			$aurl          = $instance['aurl'] ? $instance['aurl'] : '';
			$title         = $instance['title'] ? $instance['title'] : '';
			$imgurl        = $instance['imgurl'] ? $instance['imgurl'] : '';
			$before_widget = '';
			$after_widget  = '';
			echo $before_widget;
			?>
			<?php if ( ! empty( $title ) ) { ?>
				<h4 class="widget-title"><?php echo $title; ?></h4>
			<?php } ?>
			<?php if ( ! empty( $imgurl ) ) { ?>
				<a href="<?php echo $aurl; ?>" target="_blank">
					<img class="carousel-inner img-responsive img-rounded" src="<?php echo $imgurl; ?>"/>
				</a>
			<?php } ?>
			<?php
			echo $after_widget;
		}

		function update( $new_instance, $old_instance ) {
			return $new_instance;
		}

		function form( $instance ) {
			@$title = esc_attr( $instance['title'] );
			@$aurl = esc_attr( $instance['aurl'] );
			@$imgurl = esc_attr( $instance['imgurl'] );
			?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>">
					标题：
					<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
					       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
					       value="<?php echo $title; ?>"/>
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'aurl' ); ?>">
					链接：
					<input class="widefat" id="<?php echo $this->get_field_id( 'aurl' ); ?>"
					       name="<?php echo $this->get_field_name( 'aurl' ); ?>" type="text"
					       value="<?php echo $aurl; ?>"/>
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'imgurl' ); ?>">
					图片：
					<input class="widefat" id="<?php echo $this->get_field_id( 'imgurl' ); ?>"
					       name="<?php echo $this->get_field_name( 'imgurl' ); ?>" type="text"
					       value="<?php echo $imgurl; ?>"/>
				</label>
			</p>
			<?php
		}

	}
}

