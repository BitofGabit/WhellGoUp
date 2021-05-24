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
        $I->moveMouseOver('#center_column > ul > li > div > div.left-block > div');
        $I->click('//*[@id="center_column"]/ul/li/div/div[1]/div/a[2]');
        $I->wait(10);
        // $I->switchToIFrame(['name' => 'fancybox-frame1621860340005']);
        // $I->wait(10);
        $I->see('Blouse','h1');
    }
}
