<?php
declare(strict_types= 1);

namespace Harsh\BlogExtra\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
// use Magento\Framework\App\RequestInterface;
// use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\Page as ResultPage;
use Magento\Framework\View\Result\PageFactory as ResultPageFactory;

class Sidebar implements HttpGetActionInterface{
    public function __construct(
        private ResultPageFactory $pageFactory,
        // private EventManager $eventManager,
        // private RequestInterface $request,
    ){} 

    public function execute(): ResultPage
    {   
        return $this->pageFactory->create();
    }
}