<?php

namespace FakerPress\ThirdParty\Faker\Provider\lt_LT;

class Internet extends \FakerPress\ThirdParty\Faker\Provider\Internet
{
    protected static $userNameFormats = [
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
    ];

    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static $tld = ['com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt'];
}
