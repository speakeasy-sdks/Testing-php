<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Testing\petstore\Models\Operations;


class GetOrderByIdResponse
{
	
    public ?string $body = null;
    
	
    public string $contentType;
    
    /**
     * successful operation
     * 
     * @var ?\Testing\petstore\Models\Shared\Order $order
     */
	
    public ?\Testing\petstore\Models\Shared\Order $order = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->body = null;
		$this->contentType = "";
		$this->order = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
