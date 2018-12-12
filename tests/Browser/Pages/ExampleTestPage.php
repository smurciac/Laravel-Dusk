<?php

namespace Tests\Browser\Pages;

class ExampleTestPage
{
    public static $URL = 'https://ebay.com/';

    public static $WAIT_TIME = 3000;

    public static $SEARCH_BAR = '#gh-ac';

    public static $SEARCH_STRING = 'PUMA';

    public static $SEARCH_BUTTON = '#gh-btn';

    public static $RESULTS = 'h1';
    
    public static $SORT_BUTTON = '#w4-w1_btn';
    #DashSortByContainer > ul.sel > li > div

    public static $LOWEST_PRICE = '#w4-w1 > div > div > ul > li:nth-child(4) > a';

    public static $ITEM_1 = '#srp-river-results-listing1';

    public static $ITEM_2 = '#srp-river-results-listing2';

    public static $ITEM_3 = '#srp-river-results-listing3';

    public static $ITEM_4 = '#srp-river-results-listing4';

    public static $ITEM_5 = '#srp-river-results-listing5';
}