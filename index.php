<!DOCTYPE html>
	<html lang="en-US">
	<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"  >
    <title>Sent Data to DB</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    </head>
    <body>
        <div class="container">
        <h1 align="center">Data Inserting</h1>
        <div ng-app="insert" ng-controller="controller">
        <center>
        <label>Name</label><input type="text" name="name" ng-model = "name" class="form-control"><br/>
        <label>Email</label><input type="email" name="email" ng-model = "email" class="form-control"><br/>
        <label>Age</label><input type="age" name="age" ng-model = "age" class="form-control"><br/>
        <input type="submit" name ="insert" class ="btn btn-success" ng-click = "insert()" value="insert">
        </center>
        <script src="app/controllers/newController.js"></script>
        
        
        </div>
        
        </div>
    </body>
    <script>
    
    
    