@extends('layouts.layout')

@section('body')

    <script src="app/app.js"></script>
    <script src="app/profile/profileController.js"></script>

    <style>
        .col-centered {
            float: none;
            margin: 0 auto;
        }

        .profile-attr {
            float: right;
        }

        .vertical-center {
            display: flex;
            align-items: center;
        }
    </style>
    <div ng-app="profileApp">

        <!--

        To use Angular's form validation, you must provide a controller property
        to bind to, you must name the form (this one is called profileForm),
        you must define the errors (Docs: https://docs.angularjs.org/api/ng/input/input%5Burl%5D),
        you must name the input elements and reference them when specifying how angular should perform
        the checks (i.e. use profileForm.myInputElementName.$touched
        && profileForm.myInputElementName.$invalid to 'ng-show' the error to the user).

        -->

        <div ng-controller="ProfileController">

            <!-- Member Info -->

            <div>
                <div style="" class="panel-heading"><h3 class="panel-heading"><strong>@{{ profile.name }}'s
                            Profile</strong></h3></div>
                <img style="float: left;" class="img-thumbnail"
                     src="https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/571e020b27d4bd683be083f8/1461584400006/?format=300w"
                     alt="">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-body" style="float: left; display: table-cell">
                        <!-- List group -->
                        <div class="list-group">
                            <p class="list-group-item">Name <span
                                        class="profile-attr">@{{ profile.name }}</span>
                            </p>
                            <p class="list-group-item">Email <span
                                        class="profile-attr">@{{ profile.email }}</span>
                            </p>
                            <p class="list-group-item">GitHub Profile <span
                                        class="profile-attr">@{{ profile.githubProfileLink }}</span>
                            </p>
                            <p class="list-group-item">LinkedIn Profile <span
                                        class="profile-attr">@{{ profile.linkedInLink }}</span>
                            </p>
                            <p class="list-group-item">Biography <span
                                        class="profile-attr">@{{ profile.biography }}</span>
                            </p>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary">Change Password</a>
                            <a href="#" class="btn btn-default" ng-click="showCredentialForm()">Edit Profile</a>
                            <a href="#" class="btn btn-default" ng-click="showProjectForm()">Add or Create Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Show users projects if they have any -->
            <div ng-if="profile.hasProjects()">
                @{{ profile.projects }}
            </div>
            <div ng-if="!profile.hasProjects()">
                <h1>You haven't built or added projects! Go make something!</h1>
            </div>

            <!-- End of member info -->


            <!-- Modal Form

            TODO: Assert a max length for the profile links
            TODO: Add biography text area to the modal form
            -->

            <div class="modal fade" id="modal-credential" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                        </div>
                        <div class="modal-body">


                            <form name="profileForm" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name"
                                               placeholder="Full Name" value="@{{profile.name}}"
                                               ng-model="profile.name" ng-required="true">
                                        <span class="error"
                                              ng-show="profileForm.name.$invalid && profileForm.name.$touched">
                                                    Name field is required
                                            </span>
                                    </div>
                                </div>
                                <!--

                                $table->increments('id');
                                $table->string('password');
                                $table->string('biography', 3000)
                                $table->string('picture_path')


                                TODO: Add the other properties listed above to the form

                                -->

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Email Address" value="@{{profile.email}}"
                                               ng-model="profile.email" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="profileForm.email.$invalid
                                              && profileForm.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">GitHub Profile</label>
                                    <div class="col-sm-9">
                                        <input type="url" class="form-control" id="githubProfileLink"
                                               name="githubProfileLink" placeholder="GitHub Profile Link"
                                               value="@{{profile.githubProfileLink}}"
                                               ng-model="profile.githubProfileLink" ng-required="true">
                                        <span class="error" ng-show="profileForm.githubProfileLink.$error.required
                                        && profileForm.githubProfileLink.$touched">Please provide your GitHub Portfolio link</span>
                                        <span class="error" ng-show="profileForm.githubProfileLink.$error.url">Please enter a valid url</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">LinkedIn Profile</label>
                                    <div class="col-sm-9">
                                        <input type="url" class="form-control" id="linkedInLink" name="linkedInLink"
                                               placeholder="LinkedIn Profile Link"
                                               value="@{{profiles.linkedInLink}}"
                                               ng-model="profile.linkedInLink">
                                        <span class="error" ng-show="profileForm.linkedInLink.$error.url">Please enter a valid url</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save"
                                    ng-click="save(profile.id)"
                                    ng-disabled="profileForm.$invalid">Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal Credential Form -->

            <!-- Modal Project Form -->

            <div class="modal fade" id="modal-project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add or Post New Project</h4>
                        </div>
                        <div class="modal-body">

                            <form name="profileForm" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name"
                                               placeholder="Full Name" value="@{{profile.name}}"
                                               ng-model="profile.name" ng-required="true">
                                        <span class="error"
                                              ng-show="profileForm.name.$invalid && profileForm.name.$touched">
                                                    Name field is required
                                            </span>
                                    </div>
                                </div>
                                <!--


                                TODO: Add the other properties listed above to the form

                                -->

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Email Address" value="@{{profile.email}}"
                                               ng-model="profile.email" ng-required="true">
                                        <span class="help-inline"
                                              ng-show="profileForm.email.$invalid
                                              && profileForm.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">GitHub Profile</label>
                                    <div class="col-sm-9">
                                        <input type="url" class="form-control" id="githubProfileLink"
                                               name="githubProfileLink" placeholder=""
                                               value="@{{profile.githubProfileLink}}"
                                               ng-model="profile.githubProfileLink" ng-required="true">
                                        {{--<span class="error" ng-show="profileForm.githubProfileLink.$error.required
                                        && profileForm.githubProfileLink.$touched">Please provide your GitHub Portfolio link</span>
                                        <span class="error" ng-show="profileForm.githubProfileLink.$error.url">Please enter a valid url</span>--}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">LinkedIn Profile</label>
                                    <div class="col-sm-9">
                                        <input type="url" class="form-control" id="linkedInLink" name="linkedInLink"
                                               placeholder="LinkedIn Profile Link"
                                               value="@{{profiles.linkedInLink}}"
                                               ng-model="profile.linkedInLink">
                                        <span class="error" ng-show="profileForm.linkedInLink.$error.url">Please enter a valid url</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save"
                                    ng-click="save(profile.id)"
                                    ng-disabled="profileForm.$invalid">Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Modal Project Form -->
        </div>
    </div>
@stop
