var app = angular.module('photothequeApp', []);

app.controller('mainController', function($scope, $http) {

  var url_server = "http://localhost/formation-php/phototheque/admin/photos-json.php";
  var promise = $http.get(url_server); // traitement asynchrone

  promise.then(function(res) {
    $scope.photos = res.data; // on met données reçues dans le scope (exploitable par la vue)
  }, function() {});

  $scope.key = 'author'; // clé de tri par défaut
  $scope.reverse = false; // ordre ascendant par défaut

  // fonction modifiant l'ordre d'affichage selon la clé fournie en entrée
  $scope.changeOrder = function(key) {
    $scope.key = key;
    $scope.reverse = !$scope.reverse;
  };

});
