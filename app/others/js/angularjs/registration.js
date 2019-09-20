    World = function(){
        this.$countries = [];
        this.$states = [];
        this.$cities = [];
        this.$country = ""; 
        this.$state = ""; 
        this.$city = ""; 
        this.$auth = {}; 


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
                    if ($this.$auth != {}) {
                        $this.$city = $this.$auth.city;
                    }



                    angular.element($('#registration_form')).scope().$apply();                         
                       
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


                    if ($this.$auth != {}) {
                        $this.$state = $this.$auth.state;
                        $this.fetch_cities();
                    }



                    angular.element($('#registration_form')).scope().$apply();                         
                       
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

                    $this.$auth = data.auth;
                    $this.$countries = data.countries;

                    if ($this.$auth != {}) {
                        $this.$country = $this.$auth.country;
                        $this.fetch_states();
                    }


                    angular.element($('#registration_form')).scope().$apply();                         
                    console.log($this.$auth) ;
                 },
                 error: function (data) {
                 },
                 complete: function(){
                  

                 }
             });

        }

        this.init();
    }



    List = function($data = []){
        this.$active_list = [];
        this.$edit_list = [];
        this.$lists = $data;

        this.add_component = function ($hospital = {}) {
            this.$active_list.unshift($hospital);
        }


        this.add_to_edit_list = function ($hospital = {}) {
            this.$edit_list.unshift($hospital);
            $('#edit_data').modal('show');
        }



        this.delete_component = function($hospital) {

            for(x in this.$active_list){
                
                if ($hospital == this.$active_list[x]) {
                    this.$active_list.splice(x, 1);
                }
            }
        }


        this.delete_edit_list = function($hospital) {

            for(x in this.$edit_list){
                
                if ($hospital == this.$edit_list[x]) {
                    this.$edit_list.splice(x, 1);
                }
            }
        }

        this.edit_hospital = function($hospital){
            this.add_to_edit_list($hospital);
        }   


        this.remove_hospital_from_table = function($hospital) {

            for(x in this.$lists){
                
                if ($hospital == this.$lists[x]) {
                    this.$lists.splice(x, 1);
                }
            }
        }


        this.attempt_request_for_review = function(){
                window.$confirm_dialog = new DialogJS(this.request_for_review, [], 'Are you sure all forms are filled accuratedly');
        }

        this.request_for_review =  function(){

                $("#page_preloader").css('display', 'block');
                   $.ajax({
                        type: "POST",
                        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                        processData: false, // NEEDED, DON'T OMIT THIS
                        url: $base_url+"/user-profile/request_for_review",
                        cache: false,
                        success: function(data) {

                                angular.element($('#document_form')).scope().fetch_page_content();                         
                                
                                window.notify();
                              
                        },
                        error: function (data) {
                        },
                        complete: function(){
                         
                            $("#page_preloader").css('display', 'none');

                        }
                    });
        }





        this.attempt_delete = function($hospital, $key){
                window.$confirm_dialog = new DialogJS(this.delete, [$hospital,$key, this], 'Are you sure to delete <b>'+$hospital.label+'</b> ?' );
        }


        this.delete =  function($hospital,$key, $this){
            $hospital_id = $hospital.id;

                            console.log($hospital, $key);

                $("#page_preloader").css('display', 'block');
                   $.ajax({
                        type: "POST",
                        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                        processData: false, // NEEDED, DON'T OMIT THIS
                        url: $base_url+"/user-profile/delete_document/"+$key,
                        cache: false,
                        success: function(data) {

                            console.log($this);
                            console.log(data);
                         
                                window.notify();
                                if (data.response == true) {
                                    angular.element($('#document_form')).scope().fetch_page_content();                         
                                }
                              
                        },
                        error: function (data) {
                        },
                        complete: function(){
                         
                            $("#page_preloader").css('display', 'none');

                        }
                    });
        }
    }




    app.controller('RegisterationController', function($scope, $http) {

            $scope.$world = new World;

           
            $scope.fetch_page_content = function () {

                        $("#page_preloader").css('display', 'block');

                        $http.get($base_url+'/user-profile/fetch_user_documents')
                            .then(function(response) {
                                $data = response.data;
                                    
                                    $scope.$data = $data; 

                                    $scope.$list = new List($data.documents);  

                                    console.log($scope.$list);

                                    if ($data.disable_btn=='true') {
                                         $('button').hide();
                                         $("form :input").prop("disabled", true);                  
                                    }

                                    $("#page_preloader").css('display', 'none');
                        });

                }

            $scope.fetch_page_content();


    });           


