<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $response=null;
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

    public function iSearchForBehat()
    {
        //throw new PendingException();
        $client = new GuzzleHttp\Client(['base_uri'=>'https://api.github.com']);
        $this->response = 
        $client->get('https://api.github.com'.'/search/repositories?q=behat');

    }     */

/**
     * @When I search for :arg1
     */
    public function iSearchFor($arg1)
    {
        $client = new GuzzleHttp\Client(['base_uri'=>'https://api.github.com']);
        $this->response = 
        $client->get('https://api.github.com'.'/search/repositories?q='.$arg1);
       // throw new PendingException();
    }



  /**
     * @Then I get a :arg1 response code
     */
    public function iGetAResponseCode($arg1)
    {
        $response_code= $this->response->getStatusCode();
        if ($response_code <>$arg1){
            throw new Exception("it doesn't work, we need $arg1 but a- ".$response_code);
        }

    }

    /**
     * @Then I get at least :arg1  result
     */
    public function iGetAtLeastResult($arg1)
    {
        $data=json_decode($this->response->getBody(),true);
        if ($data['total_count'] < $arg1){
           throw new Exception("we expecta tat leeast $arg1 wrong but found ".$data['total_count']);
        }
    }

}
