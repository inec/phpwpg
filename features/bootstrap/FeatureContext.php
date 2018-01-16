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
     */
    public function iSearchForBehat()
    {
        //throw new PendingException();
        $client = new GuzzleHttp\Client(['base_uri'=>'https://api.github.com']);
        $this->response = 
        $client->get('https://api.github.com'.'/search/repositories?q=behat');

    }

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
     * @Then I get a result
     */
    public function iGetAResult()
    {
        $response_code= $this->response->getStatusCode();
        if ($response_code <>200){
            throw new Exception("it doesn't work, we need 200 but a- ".$response_code);
        }

      //  throw new PendingException();
      $data=json_decode($this->response->getBody(),true);
      if ($data['total_count']==0){
         throw new Exception("we goet wrong");
      }
    }
}
