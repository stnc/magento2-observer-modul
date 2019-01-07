<?php


namespace Stnc\ZohoInventory\Observer;

use Magento\Framework\ObjectManager\ObjectManager;

class ZohooInventory implements \Magento\Framework\Event\ObserverInterface
{

    /** @var \Magento\Framework\Logger\Monolog */
    protected $_logger;

    /**
     * @var \Magento\Framework\ObjectManager\ObjectManager
     */
    protected $_objectManager;

    protected $_orderFactory;
    protected $_checkoutSession;

    public function __construct(
        \Psr\Log\LoggerInterface $loggerInterface,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        \Magento\Framework\ObjectManager\ObjectManager $objectManager
    )
    {
        $this->_logger = $loggerInterface;
        $this->_objectManager = $objectManager;
        $this->_orderFactory = $orderFactory;
        $this->_checkoutSession = $checkoutSession;
    }

    /**
     * This is the method that fires when the event runs.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @see http://www.codextblog.com/code-snippet/get-order-information-from-order-id-in-magento-2/
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {


        $orderIds = $observer->getEvent()->getOrderIds();
        if (count($orderIds)) {
            $orderId = $orderIds[0];
            // $order = $this->_orderFactory->create()->load($orderId);
            //   $shippingAddress = $order->getShippingAddress();
            //  $this->_logger->debug('Logging HelloWorld Observer');
        }


        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $order = $objectManager->create('Magento\Sales\Api\Data\OrderInterface')->load($orderId);

//Loop through each item and fetch data

        foreach ($order->getAllItems() as $item)
        {
            //fetch whole item information
            print_r($item->getData());

            //Or fetch specific item information
            echo $item->getId();
            echo $item->getProductType();
            echo $item->getQtyOrdered();
            echo $item->getPrice();
            $logger->info('Your text message ' . 'last ' . $item->getId());

        }

//        $logger->info('Your text message',$order_id);
        $logger->info('Your text message ' . 'last ' . $item->getId());


    }
}