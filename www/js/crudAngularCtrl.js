angular.module('crudAngular').controller('crudAngularCtrl', function ($scope, $http) {

	$scope.adicionarUsuario = function (usuario){
		//console.log(usuario);
		$http.post('php/salvar.php', usuario).success(function (data){
			delete $scope.usuario;
			$scope.usuarioForm.$setPristine();
			carregaUsuario();
		});

		var carregaUsuario = function () {
			$http.get('php/busca.php').success(function (data){
				$scope.usuario = data;
			});
		};
	};

});