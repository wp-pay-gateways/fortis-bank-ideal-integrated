<?php

class Pronamic_WP_Pay_Gateways_FortisBank_IDealIntegrated_Integration {
	public function __construct() {
		$this->id         = 'fortis-bank-ideal-integrated';
		$this->name       = 'Fortis Bank - iDEAL Integrated';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}
}
