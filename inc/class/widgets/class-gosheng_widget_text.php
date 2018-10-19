<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'gosheng_widget_text' ) ) {
	class gosheng_widget_text extends WP_Widget {

		public function __construct() {
			$widget_ops = array(
				'classname'   => 'widget_text',
				'description' => __( '纯文本', 'GoSheng-framework' ),
//				'customize_selective_refresh' => true,
			);
			parent::__construct( 'gosheng_text', __( '纯文本 - 狗剩', 'GoSheng-framework' ), $widget_ops );
		}

		function widget( $args, $instance ) {
			extract( $args );

			$title       = ! empty( $instance['title'] ) ? $instance['title'] : '';
			$text        = ! empty( $instance['text'] ) ? $instance['text'] : '';
			$footer_text = ! empty( $instance['footer_text'] ) ? $instance['footer_text'] : '';

			$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
			$text  = apply_filters( 'widget_text', $text, $instance, $this );
			$text  = apply_filters( 'widget_text_content', $text, $instance, $this );

			echo $args['before_widget'];
			if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title . $args['after_title'];
			}
			if ( ! empty( $text ) ) {
				echo $args['before_text'];
			}
			?>
            <div class="card-text"><?php echo $text; ?></div>
			<?php
			if ( ! empty( $text ) ) {
				echo $args['after_text'];
			}
			if ( ! empty( $footer_text ) ) {
				echo $args['before_footer'] . $footer_text . $args['after_footer'];
			}
			echo $args['after_widget'];
		}

		function update( $new_instance, $old_instance ) {
			return $new_instance;
		}

		function form( $instance ) {
			@$title = esc_attr( $instance['title'] );
			@$text = esc_attr( $instance['text'] );
			@$footer_text = esc_attr( $instance['footer_text'] );

			?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">
					<?php esc_html_e( '标题：', 'GoSheng-framework' ) ?>
                </label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
                       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
                       value="<?php echo $title; ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'text' ); ?>">
					<?php esc_html_e( '文本内容：', 'GoSheng-framework' ) ?>
                </label>
                <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id( 'text' ); ?>"
                          name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'footer_text' ); ?>">
					<?php esc_html_e( '页脚文本：', 'GoSheng-framework' ) ?>
                </label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'footer_text' ); ?>"
                       name="<?php echo $this->get_field_name( 'footer_text' ); ?>" type="text"
                       value="<?php echo $footer_text; ?>">
            </p>
			<?php
		}

	}
}

