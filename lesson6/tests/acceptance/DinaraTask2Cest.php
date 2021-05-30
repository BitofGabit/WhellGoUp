<?php

use Page\Acceptance\SearchPage;

class DinaraTask2Cest
{
    // Incorrct login auth handler
    public function checkShopList(AcceptanceTester $I)
    {
        $SearchPage = new SearchPage($I);

        $I->amOnPage(SearchPage::$URL);
        $I->wait(4);
        $SearchPage->dressClick()->summerDressesClick()->listClick();
        $SearchPage->checkDressesBlock();
        $I->wait(4);
    }
}
