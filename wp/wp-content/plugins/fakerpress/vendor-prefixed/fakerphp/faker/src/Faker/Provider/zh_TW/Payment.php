<?php

namespace FakerPress\ThirdParty\Faker\Provider\zh_TW;

/**
 * @deprecated Use {@link \Faker\Provider\Payment} instead
 * @see \FakerPress\ThirdParty\Faker\Provider\Payment
 */
class Payment extends \FakerPress\ThirdParty\Faker\Provider\Payment
{
    /**
     * @return array
     *
     * @deprecated Use {@link \Faker\Provider\Payment::creditCardDetails()} instead
     * @see \FakerPress\ThirdParty\Faker\Provider\Payment::creditCardDetails()
     */
    public function creditCardDetails($valid = true)
    {
        return parent::creditCardDetails($valid);
    }
}
