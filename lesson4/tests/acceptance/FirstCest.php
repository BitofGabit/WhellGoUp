<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    //**test */
    public function CheckGoodsOnModalWindow(AcceptanceTester $I)
    {
        //first page actions
        $I->amOnPage('');
        $I->waitForElementClickable('#search_query_top', 10);
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Blouse');
        $I->click('#searchbox > button');

        //second page actions   
        $I->wait(10);
        $I->click(['class' => 'quick-view']);
        $I->switchToIFrame('fancybox-frame1621854109526', 
        'fancybox-frame1621854109526',  
        'http://automationpractice.com/index.php?id_product=2&amp;controller=product&amp;search_query=Blouse&amp;results=1&amp;content_only=1');
        $I->wait(10);
        $I->see('Blouse','#product > div:nth-child(2) > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
