<?php

class SecondCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    //**test   */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementClickable('#search_query_top', 10);
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        //$I->click('#searchbox > button');
        $I->pressKey('#search_query_top', \Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->seeNumberOfElements('product_list grid row', 5);
    }
}
