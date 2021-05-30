<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * shop main page
     */
    public static $URL = '';

    public const DRESSES_BUTTON = '//div[@id="block_top_menu"]/ul/li/a[contains(text(), "Dresses")]'; 
    public const SUMMER_DRESSES_BUTTON = '//div[@class="block_content"]/ul/li[3]';
    public const GRID_BUTTON = '#grid > a > i';
    public const LIST_BUTTON = '#list > a > i';
    public const LIST_STATE = '//ul[@class="product_list row list"]';
    public const GRID_STATE = '//ul[@class="product_list row grid"]';



    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Dresses btn
     */
    public function dressClick()
    {
        $this->acceptanceTester->click(self::DRESSES_BUTTON);
        return $this;
    }

     /**
     * Summer dresses btn
     */
    public function summerDressesClick()
    {
        $this->acceptanceTester->click(self::SUMMER_DRESSES_BUTTON);
        return $this;
    }

    /**
     * Grid btn
     */
    public function gridClick()
    {
        $this->acceptanceTester->click(self::GRID_BUTTON);
        return $this;
    }

    /**
     * List btn
     */
    public function listClick()
    {
        $this->acceptanceTester->click(self::LIST_BUTTON);
        return $this;
    }

    /**
     * Check block change after pushing grid to list 
     */
    public function checkDressesBlock()
    {
        $this->acceptanceTester->seeElement(self::LIST_STATE);
    }
}
