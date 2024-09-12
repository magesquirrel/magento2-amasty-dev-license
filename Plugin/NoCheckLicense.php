<?php

namespace MageSquirrel\AmastyDevLicense\Plugin;

use Amasty\Base\Model\SysInfo\Data\LicenseValidation;

class NoCheckLicense
{
    /**
     * @param LicenseValidation $subject
     * @param bool $result
     * @return bool
     */
    public function afterIsNeedCheckLicense(LicenseValidation $subject, bool $result): bool
    {
        return false;
    }
}
