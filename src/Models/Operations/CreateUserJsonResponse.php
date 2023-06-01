<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Testing\petstore\Models\Operations;


class CreateUserJsonResponse
{
	
    public ?string $body = null;
    
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * successful operation
     * 
     * @var ?\Testing\petstore\Models\Shared\User $user
     */
	
    public ?\Testing\petstore\Models\Shared\User $user = null;
    
	public function __construct()
	{
		$this->body = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->user = null;
	}
}
