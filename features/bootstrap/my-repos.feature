Feature: Get my repositories
  Scenario: I want to get a list of my repositories
    Given I am an anonymous user
    When I search for "symfonys"
    Then I expect a 200 response code
    And I expect at least 1  result