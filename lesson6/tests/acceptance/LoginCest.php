<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;

/**
 * class for auth check
 */
class LoginCest
{
    /**
     * sucsess login
     */
    public function checkSucsessAuth(AcceptanceTester $I){

        $LoginPage = new LoginPage($I);
        // $I->fillField(LoginPage::$userNameInput, LoginPage::USERNAME);        
        // $I->fillField(LoginPage::$userPasswordInput,LoginPage::PASSWORD);
        // $I->click(LoginPage::$loginSubmitBtn);

        $I->amOnPage(LoginPage::$URL);
        $LoginPage->fillUsernameField()->fillUserPasswordField();
        $LoginPage->clickLoginSubmit();
        
        $I->seeInCurrentUrl(MainPage::$URL);
        $I->waitForText('PRODUCTS', null, MainPage::$titleBlock);
    }
}