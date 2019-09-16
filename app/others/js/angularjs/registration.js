    World = function(){
        this.$countries = [];
        this.$states = [];
        this.$cities = [];
        this.$country = ""; 
        this.$state = ""; 
        this.$city = ""; 


        this.fetch_cities = function (){
            $this = this;


            $.ajax({
                 type: "POST",
                 contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                 processData: false, // NEEDED, DON'T OMIT THIS
                 url: $base_url+"/world/cities?state_id="+$this.$state,
                 cache: false,
                 success: function(data) {

                    $this.$cities = data.cities;
                    angular.element($('#registration_form')).scope().fetch_page_content();                         
                    console.log(data)
                       
                 },
                 error: function (data) {
                 },
                 complete: function(){
                  

                 }
             });

        }


        this.fetch_states = function (){
            $this = this;


            $.ajax({
                 type: "POST",
                 contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                 processData: false, // NEEDED, DON'T OMIT THIS
                 url: $base_url+"/world/states?country_id="+$this.$country,
                 cache: false,
                 success: function(data) {

                    $this.$states = data.states;
                    angular.element($('#registration_form')).scope().fetch_page_content();                         
                    console.log(data)
                       
                 },
                 error: function (data) {
                 },
                 complete: function(){
                  

                 }
             });

        }


        this.init = function(){
            $this = this;

            $.ajax({
                 type: "POST",
                 contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                 processData: false, // NEEDED, DON'T OMIT THIS
                 url: $base_url+"/world/countries",
                 cache: false,
                 success: function(data) {

                    $this.$countries = data.countries;
                    angular.element($('#registration_form')).scope().fetch_page_content();                         
                    console.log(data.countries)
                       
                 },
                 error: function (data) {
                 },
                 complete: function(){
                  

                 }
             });

        }

        this.init();
    }



    app.controller('RegisterationController', function($scope, $http) {

            $scope.$world = new World;

            $scope.fetch_page_content = function () {


                        $http.get($base_url+'/world/countries')
                            .then(function(response) {
                                // $data = response.data;

                                    

                        });

                }

            // $scope.fetch_page_content();



    });           


