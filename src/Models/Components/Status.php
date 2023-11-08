<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace ding\sdk\Models\Components;


/** The status of the authentication. */
enum Status: string
{
    case Pending = 'pending';
    case RateLimited = 'rate_limited';
    case SpamDetected = 'spam_detected';
}
