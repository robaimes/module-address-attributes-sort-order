<?php declare(strict_types=1);
/**
 * Copyright © Rob Aimes - https://aimes.dev/
 * https://github.com/robaimes
 */

namespace Aimes\AddressAttributesSortOrder\Observer;

use Magento\Customer\Api\Data\AttributeMetadataInterface;
use Magento\Framework\Data\Form;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class EnableSortOrderField implements ObserverInterface
{
    /**
     * Re-enable the sort order field for customer address attributes
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        /** @var Form $form */
        $form = $observer->getForm();

        $form->getElement(AttributeMetadataInterface::SORT_ORDER)
            ->setDisabled(false);
    }
}
