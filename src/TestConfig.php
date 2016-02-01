<?php

/**
 * Title: Fortis Bank - iDEAL Integrated config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealIntegrated_TestConfig extends Pronamic_WP_Pay_Gateways_IDealAdvanced_Config {
	public function get_payment_server_url() {
		return 'https://acquirer-ideal.test.nl.fortis.com/ideal/iDeal';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/fortisbank-0.cer',
		);
	}
}
