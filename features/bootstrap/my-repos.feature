Feature: Get my repositories
  Scenario: I want to get a list of my repositories
    Given I am an authenticated user
    When I request a list of my repositories
    Then The results should include a repository name "phpwpg"