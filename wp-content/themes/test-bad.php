<?php
/**
 * A sample file containing WordPress-compliant code.
 *
 * @package WP_Guardrail
 */

/**
 * Calculates the sum of two numbers and securely outputs the result.
 *
 * @param int $first_number  The first number.
 * @param int $second_number The second number.
 * @return void
 */
function wp_guardrail_calculate_and_output_sum( $first_number, $second_number ) {
	$sum = $first_number + $second_number;

	// Yoda condition for demonstration.
	if ( 10 === $sum ) {
		echo esc_html__( 'The sum is exactly ten!', 'wp-guardrail' );
	} else {
		printf(
			/* translators: %d: The calculated sum. */
			esc_html__( 'The sum is: %d', 'wp-guardrail' ),
			(int) $sum
		);
	}
}

wp_guardrail_calculate_and_output_sum( 5, 5 )
