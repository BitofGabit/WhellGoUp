<?php
namespace Page\Acceptance;

class LoginPage
{
    // include url of current page
    public static $URL = '';
        /**
     * username 
     */
    public const USERNAME = 'standard_user';

    /**
     * password
     */
    public const PASSWORD = 'secret_sauce';


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
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
