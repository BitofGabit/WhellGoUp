<?php

use Page\Acceptance\LoginPage;

class DinaraTask1Cest
{
    // Incorrct login auth handler
    public function checkAuthFailure(AcceptanceTester $I)
    {
        $LoginPage = new LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $LoginPage->fillLockedUsernameField()->fillLockedUserPasswordField();
        $LoginPage->clickLoginSubmit();

        $I->wait(3);
        $LoginPage->exitFromErrorLoginBlock();
        $I->wait(3);

    }
}
