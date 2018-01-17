Feature: Search repositories
  Scenario: I want to get a list of repositories that reference Behat
    Given I am an anonymous user
    When I search for "symfonys"
    Then I get a 200 OK
    And I get at least one search result