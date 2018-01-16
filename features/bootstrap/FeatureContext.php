<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


     /**
     * @Given I am an anonymous user
     */
    public function iAmAnAnonymousUser()
    {
        return true;
        //throw new PendingException();
       // throw new Exception();
    }

   /**
     * @When I search for behat
     */
    public function iSearchForBehat()
    {
        throw new PendingException();
    }

   /**
     * @Then I get a result
     */
    public function iGetAResult()
    {
        throw new PendingException();
    }
}
