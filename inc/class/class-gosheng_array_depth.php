<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'GoSheng_array_depth' ) ) {
	class GoSheng_array_depth {
		public $array;

		public function __construct() {
			unset( $this->array );
		}

		public function foreach_array( $array ) {
			$this->array = $array;
			foreach ( $this->array as $number => $value ) {
				if ( is_array( $value ) ) {
					$this->foreach_array( $value );
				} else {
					$this->echo_array_value( $value );
				}
			}
		}

		public function foreach_array_base( $array ) {
			$this->array = $array;
			foreach ( $this->array as $number => $depth_1 ) {
				foreach ( $depth_1 as $depth_2 ) {
					foreach ( $depth_2 as $item => $value ) {
						if ( is_array( $value ) ) {
							foreach ( $value as $key ) {
								echo $number . $item . "===" . $key . "<br>";
							}
						} else {
							echo $number . $item . "===" . $value . "<br>";
						}
					}
				}
			}
		}

		public function echo_array_value( $val ) {
			echo $val . "<br>";
		}

	}
}