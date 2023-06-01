<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Testing\petstore\Models\Operations;

use \Testing\petstore\Utils\SpeakeasyMetadata;
class UpdatePetJsonSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $petstoreAuth;
    
	public function __construct()
	{
		$this->petstoreAuth = "";
	}
}
