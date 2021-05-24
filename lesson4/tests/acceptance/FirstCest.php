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
        $I->waitForElementVisible('#center_column > ul > li > div > div.left-block > div', 20);
        $I->click('#center_column > ul > li > div > div.left-block > div > a.quick-view > span');
        $I->wait(10);
        $I->see('Blouse','#product > div:nth-child(2) > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}
