Feature: Example Test Feature for DiezEquis

   Test pickle functionalities
   As an user interacting with the system
   So I can review the first test created with Dusk

   Scenario: Navigate to eBay website and perform some searches
    Given I visit eBay website
        When I click the search bar and search for PUMA brand
            And I Click Search
            And I print the number of results
            And I sort by lowest first
        Then I expect to see the first 5 elements with lowest price