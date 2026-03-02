<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CustomerAccessStorage\Storage;

use Generated\Shared\Transfer\CustomerAccessTransfer;

interface CustomerAccessStorageReaderInterface
{
    public function getUnauthenticatedCustomerAccess(): CustomerAccessTransfer;

    public function getAuthenticatedCustomerAccess(): CustomerAccessTransfer;
}
