<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Testing\petstore\Models\Operations;

use \Testing\petstore\Utils\SpeakeasyMetadata;
class UpdatePetWithFormRequest
{
    /**
     * Name of pet that needs to be updated
     * 
     * @var ?string $name
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=name')]
    public ?string $name = null;
    
    /**
     * ID of pet that needs to be updated
     * 
     * @var int $petId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=petId')]
    public int $petId;
    
    /**
     * Status of pet that needs to be updated
     * 
     * @var ?string $status
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=status')]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->name = null;
		$this->petId = 0;
		$this->status = null;
	}
}
