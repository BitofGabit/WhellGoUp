<?php
namespace Page\Acceptance;

class LoginPage
{
    // include url of current page
    public static $URL = 'https://www.saucedemo.com';

    /**
     * currect username 
     */
    public const USERNAME = 'standard_user';

    /**
     * currect password
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * incurrect username 
     */
    public const LOCKEDOUT_USERNAME = 'locked_out_user';

    /**
     * incurrect password
     */
    public const LOCKEDOUT_PASSWORD = 'secret_sauce';



    /**
     * Selector for username
     */
    public static $userNameInput = '//input[@id="user-name"]';

    /**
     * Selector for user password
     */
    public static $userPasswordInput = '//input[@id="password"]';

    /**
     * Selector for login submut
     */
    public static $loginSubmitBtn = '//input[@id="login-button"]';

    /**
     * exit error block btn
     */
    public static $errorBlockExitBtn = '//button[@class="error-button"]';

    /**
     * Объект Tester-a 
     * 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Constuctor class
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Exit from exit block window
     */
    public function exitFromErrorLoginBlock()
    {
        $this->acceptanceTester->click(self::$errorBlockExitBtn);        
    }

    /**
     * Fills login field by username 
     */
    public function fillUsernameField()
    {
        $this->acceptanceTester->fillField(self::$userNameInput, self::USERNAME);
        return $this;
    }

    /**
     * Fills User password field
     */
    public function fillUserPasswordField()
    {
        $this->acceptanceTester->fillField(self::$userPasswordInput, self::PASSWORD);
        return $this;
    }

        /**
     * Fills login field by username 
     */
    public function fillLockedUsernameField()
    {
        $this->acceptanceTester->fillField(self::$userNameInput, self::LOCKEDOUT_USERNAME);
        return $this;
    }

    /**
     * Fills User password field
     */
    public function fillLockedUserPasswordField()
    {
        $this->acceptanceTester->fillField(self::$userPasswordInput, self::LOCKEDOUT_PASSWORD);
        return $this;
    }

    /**
     * Click login page for submit
     */
    public function clickLoginSubmit()
    {
        $this->acceptanceTester->click(self::$loginSubmitBtn);
        return new MainPage($this->acceptanceTester);
    }
}
