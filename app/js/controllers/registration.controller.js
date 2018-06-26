app.controller('registrationCtrl', function ($scope, $http, $window) {
    $window.scrollTo(0, angular.element(document.getElementsByTagName('body')).offsetTop);
    $scope.reg = function () {

        if($scope.name == undefined || $scope.lastname == undefined || $scope.email == undefined || $scope.password == undefined){
            alert("Ви не заповнили усі поля або не вірно ввели дані. Перевірте будь ласка!");
        }else {
            window.location = "http://localhost:3000/?#!/login";
            alert("Ви успішно зареєстровані, увійдіть у систему");
            $http.get('http://192.168.33.10/index.php/registration?name='+$scope.name+'&lastname='+
                $scope.lastname+'&email='+$scope.email+'&password='+$scope.password)
                .then(function(response) {

                });
        }
    }
})