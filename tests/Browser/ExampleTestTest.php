<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\ExampleTestPage;

class ExampleTestTest extends DuskTestCase
{
    /**
     * @var Browser
     */
    protected $browser;

    public function testNavigateToeBayWebsiteAndPerformSomeSearches()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->givenIVisiteBayWebsite();
            $this->whenIClickTheSearchBarAndSearchForPUMABrand();
            $this->andIClickSearch();
            $this->andIPrintTheNumberOfResults();
            $this->andISortByLowestFirst();
            $this->thenIExpectToSeeTheFirst5ElementsWithLowestPrice();
        });
    }

    protected function givenIVisiteBayWebsite()
    {
        $this->browser->visit(ExampleTestPage::$URL);
    }

    protected function whenIClickTheSearchBarAndSearchForPUMABrand()
    {
        $this->browser->keys(ExampleTestPage::$SEARCH_BAR, ExampleTestPage::$SEARCH_STRING);
    }

    protected function andIClickSearch()
    {
        $this->browser->click(ExampleTestPage::$SEARCH_BUTTON)
                        ->pause(ExampleTestPage::$WAIT_TIME);
    }

    protected function andIPrintTheNumberOfResults()
    {
        $text = $this->browser->text(ExampleTestPage::$RESULTS);

        echo "The search threw " .$text;
        echo "\r\n";
    }

    protected function andISortByLowestFirst()
    {
        $this->browser->pause(5000)
                        ->mouseover(ExampleTestPage::$SORT_BUTTON)
                        ->pause(ExampleTestPage::$WAIT_TIME)
                        ->mouseover(ExampleTestPage::$LOWEST_PRICE)
                        ->click(ExampleTestPage::$LOWEST_PRICE)
                        ->pause(ExampleTestPage::$WAIT_TIME);
    }

    protected function thenIExpectToSeeTheFirst5ElementsWithLowestPrice()
    {
        $price_1 = $this->browser->text(ExampleTestPage::$ITEM_1);
        $price_2 = $this->browser->text(ExampleTestPage::$ITEM_2);
        $price_3 = $this->browser->text(ExampleTestPage::$ITEM_3);
        $price_4 = $this->browser->text(ExampleTestPage::$ITEM_4);
        $price_5 = $this->browser->text(ExampleTestPage::$ITEM_5);

        echo "Item 1: " .$price_1;
        echo "\r\n";
        echo "Item 2: " .$price_2;
        echo "\r\n";
        echo "Item 3: " .$price_3;
        echo "\r\n";
        echo "Item 4: " .$price_4;
        echo "\r\n";
        echo "Item 5: " .$price_5;
        echo "\r\n";

        $this->browser->assertSeeIn(ExampleTestPage::$COUNTER, '1');
    }
}
