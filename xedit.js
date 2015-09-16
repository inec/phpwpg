var app = angular.module("app",["xeditable","firebase"]);

app.run(function(editableOptions) {
  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});

app.controller('Ctrl', function($scope, $firebaseObject) {

var ref = new Firebase("https://inec.firebaseio.com/xedituser");
  // download the data into a local objectcon
  console.log($firebaseObject(ref));
  //$scope.user= $firebaseObject(ref);
  ref.on("value", function(snapshot) {
  // This isn't going to show up in the DOM immediately, because
  // Angular does not know we have changed this in memory.
  // $scope.data = snapshot.val();
  // To fix this, we can use $scope.$apply() to notify Angular that a change occurred.
  $scope.$apply(function() {
    $scope.user= snapshot.val();
  });
});

  var syncObject = $firebaseObject(ref);//$scope.user;
 // $scope.user=syncObject;
  // synchronize the object with a three-way data binding
  // click on `index.html` above to see it used in the DOM!
  syncObject.$bindTo($scope, "user");
  /*$scope.user = $firebaseObject(ref);

  
    $scope.addUser = function() {
    $scope.user.$add({
      text: $scope.user.name
    });
  };*/
  /*$scope.user = {
    name: 'awesome user'
  };*/  
});