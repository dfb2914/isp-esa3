<?php

/**
 * Routing to suitable Controller
 */
class Dispatcher
{
    private $homeView;
    private $billingView;
    private $summaryView;
    
    public function __construct()
    {
        $this->homeView = new HomeView();
        $this->billingView = new BillingView();
        $this->summaryView = new SummaryView();
    }
    
    /**
     * calls requested view
     * @param string request
     * @return void
     */
    public function dispatch($request)
    {
        switch($request) {
            case 'home':
                $this->homeView->display();
            break;
            case 'billing':
                $this->billingView->display();
            break;
            case 'summary':
                $this->summaryView->display();
            break;
        }
    }
    
}