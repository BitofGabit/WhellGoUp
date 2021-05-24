<?php

class PostsCheckerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    //**test   */
    public function CheckGoodsOnModalWindow(FunctionalTester $I)
    {
        //first page actions
        $I->amOnPage('');
        $I->expect('#search_query_top');
        $I->click('#search_query_top');        
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->expect('#center_column > ul > li');

        //second page
        $I->seeNumberOfElements('#center_column > ul > li', 5);
    }
}
