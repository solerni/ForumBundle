Feature: Forum

  @javascript
  Scenario: Create a forum
    Given the admin account "root" is created
      And I log in with "root"/"root"
      And I am on "desktop/tool/open/resource_manager"
      And I wait 1 second
      And I open resource "Personal workspace"
    When I create a resource of type "Forum"
      And I fill in "Name" with "My forum"
      And I press "Ok"
      And I wait 1 second
    Then I should see "My forum"
