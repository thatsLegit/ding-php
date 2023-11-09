<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace ding\sdk;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public string $server = '';
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.0';
	public string $sdkVersion = '0.1.3';
	public string $genVersion = '2.187.4';
	public string $userAgent = 'speakeasy-sdk/php 0.1.3 2.187.4 1.0.0 ding/sdk';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		}
		if ($this->server === '') {
			$this->server = Ding::SERVER_PRODUCTION;
		}

		return Ding::SERVERS[$this->server];
	}
	
}