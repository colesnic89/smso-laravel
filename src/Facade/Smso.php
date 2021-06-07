<?php

namespace SmsoLaravel\Facade;

use Illuminate\Support\Facades\Facade;
use SMSO\Model\CheckRemainingCreditResponse;
use SMSO\Model\MessageStatusResponse;
use SMSO\Model\Sender;
use SMSO\Model\SendMessageResponse;
use SMSO\SmsoApiClientInterface;

/**
 * Class Smso
 * @package SmsoLaravel\Facade
 *
 * @method static Sender[] getSenders()
 * @method static SendMessageResponse sendMessage(string $to, string $body, ?int $senderId = null, string $type = null)
 * @method static MessageStatusResponse checkMessageStatus(string $responseToken)
 * @method static CheckRemainingCreditResponse checkRemainingCredit()
 */
class Smso extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SmsoApiClientInterface::class;
    }

}
