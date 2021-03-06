<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $response= null;
    protected $username= null;
    protected $password= null;
    protected $client  = null;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct($github_username,$github_password)
    {
        
        $this -> username = $github_username;
        $this -> password = $github_password;
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
     * @Then I expect a :arg1 response code
     */
    public function iExpectAResponseCode($arg1)

    {
        $response_code= $this->response->getStatusCode();
        if ($response_code <>$arg1){
            throw new Exception("it doesn't work, we need $arg1 but a- ".$response_code);
        }

    }

   /**
     * @Then I expect at least :arg1  result
     */
    public function iExpectAtLeastResult($arg1)
    {
        $data=json_decode($this->response->getBody(),true);
        if ($data['total_count'] < $arg1){
           throw new Exception("we expecta tat leeast $arg1 wrong but found ".$data['total_count']);
        }
    }

     /**
     * @Given I am an authenticated user
     */
    public function iAmAnAuthenticatedUser()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri'=>'https://api.github.com',
            'auth'=> [$this->username,$this->password]
            ]);
        $response =  $this->client->get('/');
        if (200 != $response->getStatusCode()){
            throw new Exception("auth failed");
        }
     //   throw new PendingException();
    }

    /**
     * @When I request a list of my repositories
     */
    public function iRequestAListOfMyRepositories()
    {
        $this->response =  $this->client->get('/user/repos');

        if ($this->response->getStatusCode() != 200){
            throw new Exception("L-113 failed");
        }
    }

    /**
     * @Then The results should include a repository name :arg1
     */
    public function theResultsShouldIncludeARepositoryName($arg1)
    {
        $repositories= json_decode($this->response->getBody(),true);
        $temp="";
        foreach($repositories as $repository){
            if ($repository['name'] === $arg1 ){
                return true;
            }else{$temp=$temp.'--'.$repository['name'];}
        }
        throw new Exception("expe find repo name  ".$arg1.$temp);
    }

}
