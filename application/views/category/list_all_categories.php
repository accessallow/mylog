<div class="row">
    <div class="col-md-5" ng-controller="CategoryController">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Category name</td>
                    <td>Created by</td>
                    <td>Tag</td>
                </tr>
            </thead>
            <tbody>

                <tr ng-repeat="category in categories">
                    <td>{{category.id}}</td>
                    <td>{{category.category_name}}</td>
                    <td>{{category.user}}</td>
                    <td>{{category.tag}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<script>
    var app = angular.module('myapp', []);
    app.controller('CategoryController', ['$scope', '$http', function ($scope, $http) {
            $http.get('<?php echo $json_fetch_link; ?>').success(function (data) {
                $scope.categories = data;
                console.log(data);
            });

        }]);
</script>