<?php

/**
 * Title: Fortis Bank - iDEAL Integrated integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealIntegrated_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvanced_AbstractIntegration {
	public function __construct() {
		$this->id         = 'fortis-bank-ideal-integrated';
		$this->name       = 'Fortis Bank - iDEAL Integrated';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_FortisBank_IDealIntegrated_ConfigFactory';
	}
}
