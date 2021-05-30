<?php

use Page\Acceptance\LoginPage;

/**
 * class for auth check
 */
class LoginCest
{
    /**
     * sucsess login
     */
    public function checkSucsessAuth(AcceptanceTester $I){
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$userNameInput, LoginPage::USERNAME);
        $I->fillField(LoginPage::$userPasswordInput,LoginPage::PASSWORD);
        $I->click(LoginPage::$loginSubmitBtn);
        $I->seeInCurrentUrl('inventory.html');

        $I->waitForText('PRODUCTS', null, '//span[@class="title"]');
    }
}