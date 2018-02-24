<?php
namespace Page;

class Main
{
    // include url of current page
    public static $URL = '';

    public static $searchField = 'body > div > nav > div.nettebar-line > div.nettebar-container > div > form > input.ac_input';

    public static $searchButton = 'body > div > nav > div.nettebar-line > div.nettebar-container > div > form > button';
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


}
