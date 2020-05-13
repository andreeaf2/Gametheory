<?php



function init_doors( &$doors, $n ) {

	for ( $i = 0; $i < $n; $i++ ) {

		$doors[ $i ] = array( 0, 0 ); 

	}

	$rand_door = rand( 0, $n - 1 ); 

	$doors[ $rand_door ][1] = 1; 

}



function strategy_1( $doors, $n, &$S1_pass ) {

	$rand = rand( 0, $n - 1 ); 

	if ( 1 == $doors[ $rand ][1] ) { 

		$S1_pass++; 

	}

}



function strategy_2( $doors, $n, &$S2_pass ) {

	$rand = rand( 0, $n - 1 ); 

	if ( 1 == $doors[ $rand ][1] ) { 

		$S2_pass++; 

		$doors[ $rand ][0] = 1; 

	} else {

		$rand = rand( 0, $n - 1 );

		while ( 1 == $doors[ $rand ][0] ) { 

			$rand = rand( 0, $n - 1);	

		}

		if ( 0 == $doors[ $rand ][0] && 1 == $doors[ $rand ][1] ) {

			

			$S2_pass++; 

		}

	}

}



function probability( $S, $k, $pass ) {

	if ( 'S1' == $S ) {

		$fail = $k - $pass;

		$S1_P_pass = ( $pass / $k ) * 100;

		$S1_P_fail = ( $fail / $k ) * 100;

		return array( $S1_P_pass, $S1_P_fail );

	} else if ( 'S2' == $S ) {

		$fail = $k - $pass;

		$S2_P_pass = ( $pass / $k ) * 100;

		$S2_P_fail = ( $fail / $k ) * 100;

		return array( $S2_P_pass, $S2_P_fail );

	} else return 'N/A';

}
