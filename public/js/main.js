/**
 * Created by travia on 4/18/2015.
 */
function TodosController($scope,$http){



    $http({
        method: 'GET',
        url: 'test'

    }).success(function(response){
        // With the data succesfully returned, call our callback
        $scope.todos=[
            {body:response.errorCodem,completed:true},
            {body:response.Protocolm,completed:false},
            {body:response.StatusCode,completed:true},
            {body:response.errorTitle,completed:true},

        ]
    }).error(function(){
        alert("error");
    });



/*   $http.get("test")
        .success(function(response) {$scope.todos = response.nd;});*/
/*    $scope.todos=[
        {body:'tehran',completed:true},

    {body:'ite',completed:false},
        {body:'london',completed:false}
    ];*/
    $scope.remaining =function(){
        var count=0;
        angular.forEach($scope.todos,function(todo){
            count += todo.completed ? 0 : 1;
        });
        return count;
    }
    $scope.global = {
        search: ''
    };
}